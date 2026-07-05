<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flat;
class FlatController extends Controller
{
    public function flatdata()
    {
        $data=Flat::all();
       return view('flats',['data'=>$data]);
    }
}
