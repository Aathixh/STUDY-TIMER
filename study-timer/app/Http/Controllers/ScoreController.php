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

    public function updateScore(Request $request)
    {
        $userId = $request->input('user_id');
        $newScore = $request->input('score');

        // Update the user's score in the database
        $user = User::find($userId);
        if ($user) {
            $user->score = $newScore;
            $user->save();

            return redirect()->back()->with('success', 'Score updated successfully');
        }

        return redirect()->back()->with('error', 'User not found');
    }

}
