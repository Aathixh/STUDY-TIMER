<?php

use App\Http\Controllers\ScoreController;
use App\Models\Tasks;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;

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


Route::view("/", 'home.index');

Route::get('/login', [HomeController::class, 'index'])->name('login');
Route::post('/register', [HomeController::class, 'register'])->name('signup');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::post('/logout', [HomeController::class, 'postLogout']);

Route::post('/authenticate', [HomeController::class, 'authenticate']);
Route::get('/dashboard', [HomeController::class, 'dash'])->name('home.dash');

Route::get('/todo', [TaskController::class, 'D_todo'])->name('display_todo');

Route::post('/todo', [TaskController::class, 'list'])->name('todolist');
Route::get('/todo', [TaskController::class, 'display']);

Route::delete('/tasks/{task}/destroy', [TaskController::class, 'destroy'])->name('tasks.destroy');

Route::get('/score', [ScoreController::class, 'score'])->name('display_score');
Route::get('/score', [ScoreController::class, 'scoreboard']);
