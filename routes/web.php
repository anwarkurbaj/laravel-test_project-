<?php

use App\Http\Controllers\FlatController;
use App\Http\Controllers\FlightController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController1;
use App\Models\Flat;
use Laravel\Prompts\Concerns\Fallback;
use Symfony\Component\Routing\Loader\Configurator\Routes;
use App\Http\Controllers\CountryController;
Route::get('/', function()
    {
        return view('welcome');
    });

    // Route::get('/',function() {
    // return view('welcome');
    // });

    // Route::get('/services',function(){
    // return view('services');
    // });

    // // required rout
    // Route::get('/{id} / {name}',function($id,$name){
    // return "id is " . $id . "the name is" . $name;
    // });

    // // optinal route

    // Route:: get('/{id?}/{name?}',function($id = null, $name = null){
    // return "id is " . $id . "the name is " . $name;
    // });

    //exp for name

    // Route::get('/{name}/{age?}',function($name,$age = null){
    // return "the name is " . $name . " and the age is " . $age;
    // })->where('name', '[A-Za-z]+');

    // exp for name and age

    // Route::get('/{name}/{age?}', function($name, $age = null) {
    // return "the name is " . $name . " and the age is " . $age;
    // })->where([
    // 'name' = > '[A-Za-z]+',
    // 'age' = > '[0-9]+'
    // ]);

    //why using prefix group

    // Route::get('/country/name/{name}',function($name)
    // {
    // return "the name is " . $name;
    // });

    // Route::get('/country/age/{$age}',function($age)
    // {
    // return "the age is "
    // . $age;
    // }
    // );

    // Route:: prefix('country')-> group(function()
    // {
    // Route::get('/name/{name}',function($name)
    // {
    // return "the name is " . $name;
    // })->where('name', '[A-Za-z]+');

    // Route::get('/age/{age}',function($age)
    // {
    // return "the age is "
    // . $age;
    // }
    // )->where('age', '[0-9]+');

    // });

    // // name rout this rout name is name
    // Route :: get('/name/{name}',function($name){
    // return "the name is " . $name;
    // })->name('name');

    // // this use if rout not found

    // Route:: fallback(function() {
    // return "the page is not found";
    // });

    // rout yo connect with controller usercontroller

    // هوني ال route = name the fun in controller = anwar

    // Route:: get('name', [UserController::class, 'anwar']);

    // Route:: get('age', [UserController::class, 'agefun']);

    // Route:: get('/login',function(){
    // return view('login_view . login');
    // });

    // Route:: get('/login',[UserController::class,'login']);

    // send parameter from rout to view the parameter name is name and assign parameter to view

    // Route::get('/login', function() {
    // return view('login_view . login', ['name' = > 'Samantha']);
    // });

    Route::get('/artical',function()
        {
            return view('artical_view . artical');
        });

        Route :: get('/main',function()
            {
                return view('master');
            });

            Route::get('/hi',function()
                {
                    return env('APP_NAME');
                });

                Route::get('/yourname/{name}',function($name)
                    {
                        return "welcom" . " " . $name;
                    });

                    // Route ::get('/services1',function()
                    // {
                    // return view('service-view . services',['name' = >'ali']);
                    // });

                    // NOW RETURN VIEW from controller

                    Route ::get('/sss',[UserController1::class ,'anwar']);

                    Route::fallback(function()
                        {
                            return "this page is not found ";});

                            Route::get('/flat',[FlatController::class,'flatdata']);

                            Route::get('/flights',[FlightController::class,'flights'])->name('flight');

                            Route::get('/creat_flight',[FlightController::class ,'creatflight'])->name('creat_flight');

                            Route::post('/store_flight',[FlightController::class ,'store'])->name('store_flight');

                            Route::get('/edit_flight/{id}',[FlightController::class , 'editflight'])->name('edit_flight');

                            Route::post('/update_flight/{id}',[FlightController::class , 'updateflight'])->name('updateflight');

                            Route::get('/delete_flight/{id}',[FlightController::class , 'delet_flight'])->name('delet_flight');

                            Route::resource('/countries',CountryController::class);
