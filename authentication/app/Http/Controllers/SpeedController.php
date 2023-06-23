<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpeedController extends Controller
{
    public function milesToKilometers(Request $request)
    {
        $miles = $request->input('miles');
        $kilometers = $miles * 1.60934;

        return response()->json(['kilometers' => $kilometers]);
    }

     public function kilometerstoMiles(Request $request)
    {
        $kilometers = $request->input('kilometers');
        $miles = $kilometers * 0.621371;

        return response()->json(['miles' => $miles]);
    }
}
