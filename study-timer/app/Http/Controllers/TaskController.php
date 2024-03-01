<?php

namespace App\Http\Controllers;

use App\Models\TasksModel;
use Illuminate\Http\Request;
use App\Models\Tasks;

class TaskController extends Controller
{
    //
    // public function list(Request $request)
    // {
    //     $request->validate(['tasks' => 'required']);

    //     try {
    //         $newTask = Tasks::create([
    //             $tasks = $request->input('tasks')
    //         ]);
    //         return redirect()->route('home.dash');
    //     } catch (\Exception $e) {
    //         return back()->withErrors(['Invalid credentials!']);
    //         // return redirect()->route('/login')->withErrors(['Invalid credentials!']);
    //     }

    // }
    public function list(Request $request)
    {
        $request->validate(['tasks' => 'required']);

        try {
            $newTask = Tasks::create([
                'tasks' => $request->input('tasks')
            ]);

            return redirect()->route('home.dash');
        } catch (\Exception $e) {
            return back()->withErrors(['Invalid credentials!']);
        }
    }
    public function D_todo()
    {
        return view('layouts.todo');
    }

    public function display()
    {
        $Task = Tasks::all();
        return view('layouts.todo', ['tasks' => $Task]);
    }

    public function destroy(Tasks $task)
    {
        $task->delete();
        return back()->with('success', 'Task Deleted');
    }
}
