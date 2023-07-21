<?php

//use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//Route::get('/', function ($location) {

// $weather_location = $location;
//$weather_location = 'London';
// $weather_apikey = config('services.weatherapi.key');


// $weather_today = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$weather_location}&appid={$weather_apikey}&units=metric");

//dump($westher_today->json());

//return view('welcome', ['weatherReport' =>  $weather_today->json()]);
// return view('welcome', [GoogleController::class, 'weatherapi']);
//});


Route::get('welcome', [GoogleController::class, 'weatherapi']);

Route::get('auto-complete', [GoogleController::class, 'index']);