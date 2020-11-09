<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function showcatalog(){
        return view('catalog');
    }
    public function listbooks(){
        //работает
//        $users=DB::table('users')->get();
//        $users=json_encode($users);
//        return $users;
        //--------------------------------------------------работает
        $books=DB::table('books')->get();
        return $books;

//------------- работает ------------------------------
//        return response()->json($users=DB::table('users')->get());

    }
}
