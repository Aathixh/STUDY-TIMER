<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ScoreController extends Controller
{
    //
    public function score()
    {
        return view('layouts.scoreboard');
    }
    public function scoreboard()
    {
        $users = User::orderBy('score', 'desc')->get();

        return view('layouts.scoreboard', ['User' => $users]);
    }

}
