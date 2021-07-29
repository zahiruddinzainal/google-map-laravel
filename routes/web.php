<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile-barber', function () {
    return view('profile_barber');
});


Route::get('/profile-client', function () {
    return view('profile_client');
});


Route::get('/barber/{latitude}/{longitude}', [ RegController::class, "registerasbarber" ]);
Route::get('/client/{latitude}/{longitude}', [ RegController::class, "registerasclient" ]);

Route::get('/client', function () {
    return view('client');
});