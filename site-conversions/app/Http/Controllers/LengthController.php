<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LengthController extends Controller
{
public function inchesToCentimeters(Request $request)
{
    $inches = $request->input('inches');
    $centimeters = $inches * 2.54;

    return response()->json(['centimeters' => number_format($centimeters, 1)]);
}

public function centimetersToInches(Request $request)
{
    $centimeters = $request->input('centimeters');
    $inches = $centimeters / 2.54;

    return response()->json(['inches' => number_format($inches, 1)]);
}


    public function feetToMeters(Request $request)
    {
        $feet = $request->input('feet');
        $meters = $feet * 0.3048;

        return response()->json(['meters' => number_format($meters, 1)]);
    }

    public function metersToFeet(Request $request)
    {
        $meters = $request->input('meters');
        $feet = $meters / 0.3048;

        return response()->json(['feet' => number_format($feet, 1)]);
    }

    public function milesToKilometers(Request $request)
    {
        $miles = $request->input('miles');
        $kilometers = $miles * 1.60934;

        return response()->json(['kilometers' => number_format($kilometers, 1)]);
    }

    public function kilometersToMiles(Request $request)
    {
        $kilometers = $request->input('kilometers');
        $miles = $kilometers / 1.60934;

        return response()->json(['miles' => number_format($miles, 1)]);
    }
}