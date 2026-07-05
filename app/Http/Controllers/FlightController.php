<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use App\Http\Requests\CreatFlightrequest;
use Illuminate\Support\Facades\DB;
class FlightController extends Controller
{
    public function flights()
    {
        // $data = Flight::latest()->get();

        // query builder
        $data =DB::table('table_flights')->latest()->get();
        return view('flights',['data' =>$data]);
    }

    public function creatflight()
    {
        return view('creat_flight');
    }

    public function store(CreatFlightrequest $request)
    {
        $datatoinsert = [
            'name' => $request->name,
            // 'created_at' => now()->format('Y-m-d H:i:s'),
        ];

        Flight::create($datatoinsert);
        return redirect()->route('flight');
    }

    public function editflight($id)
    {
        $data = Flight::find($id);
        return view('edit_flight',['data' =>$data]);
    }

    public function updateflight($id , Request $request)
    {
        $data = Flight::find($id);

        $data->name = $request->name;
        $data->save();
        return redirect()->route('flight');
    }

   public function  delet_flight($id ){
$data =Flight::find($id);
$data->delete();
return redirect()->route('flight');
   }

}
