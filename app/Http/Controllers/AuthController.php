<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cookie;


class AuthController extends Controller
{

    // Get Authorized User / Endpoint - To Display the Authorized User presently Logged in
    public function user()
    {

        return Auth::user();
    }



    // Sign Up Function / Endpoint - To Register as a User
    public function signup(Request $request)
    {

        return User::create([

            'name' => $request->input(key: 'name'),
            'email' => $request->input(key: 'email'),
            'password' => Hash::make($request->input(key: 'password'))
        ]);
    }


    // Login Function / Endpoint - To Log Into the API

    public function login(Request $request)
    {


        if (!Auth::attempt($request->only('email', 'password'))) {
            return response([
                'message' => 'Invalid credentials!'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $user = Auth::user();

        $authtoken = $user->createToken('authtoken')->plainTextToken;
        $authcookie = cookie('weather_jwt', $authtoken, 60 * 12); // expires in 12 hours

        return response([
            'message' => $authtoken
        ])->withCookie($authcookie);
    }


    // Sign Out function / Endpoint - To log Out of the API


    public function signout()
    {
        $authcookie = Cookie::forget('weather_jwt');

        return response([
            'message' => 'You are Logged Out.'
        ])->withCookie($authcookie);
    }
}