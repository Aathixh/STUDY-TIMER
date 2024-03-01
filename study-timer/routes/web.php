<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

