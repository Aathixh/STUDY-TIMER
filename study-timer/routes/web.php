<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::post('/authenticate', [HomeController::class, 'authenticate']);
Route::get('/dashboard', [HomeController::class, 'dash'])->name('home.dash')->middleware('auth');

Route::get('/show-dashboard', function (Request $request) {
    $request->session()->put('layout', 'dashboard');

    return back();
})->name('show-dashboard');

Route::get('/show-todo', function (Request $request) {
    $request->session()->put('layout', 'todo');

    return back();
})->name('show-todo');
