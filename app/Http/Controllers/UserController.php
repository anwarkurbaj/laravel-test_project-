<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // function to show the rout in controller

    public function anwar()
    {
        return view('services');
    }
     public function agefun()
    {
        return "the age is 23;";
    }

    public function login()
    {
        return view('login_view.login');
    }
}
