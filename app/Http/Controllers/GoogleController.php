<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GoogleController extends Controller
{
    //
    public function index(Request $request)
    {
        return view("auto-complete");
    }


    public function weatherapi($location)
    {
        if ($location->isEmpty()) {

            $weather_location = 'London';
        } else {

            $weather_location = $location;
        };


        $weather_apikey = config('services.weatherapi.key');


        $weather_today = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$weather_location}&appid={$weather_apikey}&units=metric");

        return response()->json([$weather_today]);
    }
}