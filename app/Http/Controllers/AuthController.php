<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
// session_start();

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = md5($request->password);

        $login = DB::table('users')
                        ->where('email', $email)
                        ->where('password', $password)
                        ->first();

        if($login)
        {
            return Redirect::to('/dashboard');
        }
        return Redirect::to('/')->withFail(" Your Email address is not registered in the system, check with your system administrator");
    }

    public function register(Request $request)
    {
        $email = $request->email;
        $password = md5($request->password);

        // Check if the user already exists
        $userExists = DB::table('users')
            ->where('email', $email)
            ->exists();

        if ($userExists) {
            // User already exists, redirect with failure message
            return redirect('/')->withFail('Email already exists');
        }
        else {
            // User does not exist, proceed with registration

            // Insert the user's information into the database
            $userId = DB::table('users')->insertGetId([
                'email' => $email,
                'password' => $password,
                // Add other relevant user information here
            ]);
            // return Redirect::to('/');
            return redirect('/')->with('success', 'Successfully registered');
        }

        return Redirect::to('/')->withFail(" Something went wrong! Try again.");
    }
}
