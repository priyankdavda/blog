<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    // function show($id)
    // {
    //     //return "Hello from Controller";
    //     return $id;
    // }
        function loadView($name)
        {
            return view('user',['name'=>$name]);
        }
}
