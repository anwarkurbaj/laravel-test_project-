<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatContry;
use App\Models\contries;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=contries::all();
        return view('contry/contries',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contry/create-contries');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatContry $request)
    {
     $contries= new contries();
     $contries->name =$request->name;
     $contries->address = $request->address;
     $contries->save();
     return redirect()->route('countries.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $data=contries::find($id);
        // return view('contry.show_contries',['data' =>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=contries::find($id);
        return view('contry.edit_contries',['data' =>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $contries=contries::find($id);
       $contries->name=$request->name;
       $contries->address = $request->address;
       $contries->save();
       return redirect()->route('countries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=contries::find($id);
        $data->delete();
        return redirect()->route('countries.index');
    }
}
