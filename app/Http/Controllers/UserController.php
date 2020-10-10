<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index(){
    //     $firstname = "nur";
    //     $lastname = "reni";
    //     $age = "26";

    //     $user = array(
    //         "name" => "slamet",
    //         "email" => "slam@yahoo.com",
    //         "phone" => "089030030"
    //     );

        
    //     return view('users', compact('firstname', 'lastname', 'age', 'user'));
       
    // }

    public function index(Request $request){
        // return $request->method();
         // return $request->path();
        //  return $request->url();
        return $request->fullurl();

    }
}
