<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController1 extends Controller
{

    public function anwar()
    {
        return view('service-view.services',['name'=>'ali']);
    }
}
