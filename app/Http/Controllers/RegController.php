<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    public function registerasbarber( $latitude, $longitude )
    {
        return view('barber')->with('latitude', $latitude)->with('longitude', $longitude);
    }

    public function registerasclient( $latitude, $longitude )
    {
        return view('client')->with('latitude', $latitude)->with('longitude', $longitude);
    }
}