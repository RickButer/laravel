<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class page_controller extends Controller
{
    Public Function index(){
        return view('auth.login', ['title' => 'Welcome to the gorilla fun planner... Please login or make an account']);
    }
}
