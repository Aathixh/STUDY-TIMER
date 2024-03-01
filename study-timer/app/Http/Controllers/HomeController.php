<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.login');
    }
    public function dash()
    {
        return view('layouts.dashboard');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $newuser = User::where('email', $email)->first();
            Auth::login($newuser);
            return redirect('/dashboard');
        } else {
            return back()->withErrors(['Invalid credentials!']);
        }
    }

    public function register(Request $request)
    {
        $request->validate(['name' => 'required']);
        $request->validate(['email' => 'required']);
        $request->validate(['password' => 'required']);
        try {
            $newuser = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);
            return redirect()->route('login');
        } catch (\Exception $e) {
            // return back()->withErrors(['Invalid credentials!']);
            return redirect()->route('/login')->withErrors(['Invalid credentials!']);
        }
    }

    // In HomeController.php
    public function postLogout()
    {
        Auth::logout();
        return redirect('/');
    }

}
