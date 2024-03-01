<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function authenticated(Request $request, $user)
    {
        $request->session()->put('layout', 'dashboard');
    
        return redirect()->intended($this->redirectPath());
    }
}
