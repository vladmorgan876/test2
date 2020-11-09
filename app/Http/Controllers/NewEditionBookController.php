<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewEditionBookController extends Controller
{
    public function NewEdition($id,Request $request)
    {

        $this->name = $_POST['name'];
        $this->author = $_POST['author'];
        $this->category = $_POST['category'];
        $this->discription = $_POST['discription'];
        $newimage = $request->file('image')->store('newimage', 'public');
        $this->newimage = $newimage;

       $newEdition= DB::table('books')->find($id);
        $newEdition->name=$this->name;
        $newEdition->author=$this->author;
        $newEdition->category=$this->category;
        $newEdition->discription=$this->discription;
        $newEdition->newimage=$this->newimage;

       DB::table('books')->where('id',$id)->update(['name'=>$newEdition->name,'author'=>$newEdition->author,'category'=>$newEdition->category,'description'=>$newEdition->discription,'picture'=>$newEdition->newimage]);

//        return view('welcome')->with(['name'=>$newEdition->name,'author'=>$newEdition->author,'category'=>$newEdition->category,
//            'discription'=>$newEdition->discription,'newimage'=>$newEdition->newimage]);
return redirect()->route('BookController');
//        return view('FormControlData')->with(['newimage' => $newimage]);
    }
}
