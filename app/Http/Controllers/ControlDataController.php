<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControlDataController extends Controller
{
    public function control(Request $request){

        $this->name=$_POST['name'];
        $this->author=$_POST['author'];
        $this->category=$_POST['category'];
        $this->discription=$_POST['discription'];
        $newimage=$request->file('image')->store('newimage','public');
        $this->newimage=$newimage;

        DB::table('books')->insert(['name'=>$this->name,'author'=>$this->author,
            'category'=>$this->category,'description'=>$this->discription,'picture'=>$this->newimage]);

//        return view('testpage')->with(['name'=>$this->name,'author'=>$this->author,'category'=>$this->category,
//            'discription'=>$this->discription,'newimage'=>$this->newimage]);

        return view('FormControlData')->with(['newimage'=>$newimage]);

    }
}
