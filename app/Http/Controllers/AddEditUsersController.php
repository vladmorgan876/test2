<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddNewUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddEditUsersController extends Controller
{
    public function showusers(){

        $users=DB::table('users')->get();
        return view('ListUsers')->with(['users'=>$users]);
    }
    public function deleteuser($id){
        DB::table('users')->delete($id);
        $users=DB::table('users')->get();
        return view('ListUsers')->with(['users'=>$users]);
    }
    public function edituser($id)
    {
        $editUser = DB::table('users')->where('id', $id)->get();
//        dd($editUser);
        return view('EditUser')->with(['editUser' => $editUser]);
    }
    public function neweditionuser($id,Request $request){
        $this->name = $_POST['name'];
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];

        $newEdition= DB::table('users')->find($id);
        $newEdition->name=$this->name;
        $newEdition->email=$this->email;
        $newEdition->password=$this->password;


        DB::table('users')->where('id',$id)->update(['name'=>$newEdition->name,'email'=>$newEdition->email,'password'=>$newEdition->password]);
        return redirect()->route('AddEditUsers');
    }
    public function showformadduser(){
        return view('EditUser');
    }
    public function addnewuser(AddNewUserRequest $request){
        $this->name=$request->name;
        $this->email=$request->email;
        $this->password=$request->password;
        DB::table('users')->insert(['name'=>$this->name,'email'=>$this->email,'password'=>$this->password]);
        return redirect()->route('AddEditUsers');
    }
}
