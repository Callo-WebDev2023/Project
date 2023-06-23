<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    public function celsiusToFahrenheit(Request $request)
    {
        $celsius = $request->input('celsius');
        $fahrenheit = ($celsius * 9/5) + 32;

        return response()->json(['fahrenheit' => $fahrenheit]);
    }

     public function fahrenheitToCelsius(Request $request)
    {
        $fahrenheit = $request->input('fahrenheit');
        $celsius = 5/9 * ($fahrenheit - 32);

        return response()->json(['celsius' => $celsius]);
    }
}
