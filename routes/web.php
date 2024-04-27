<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', [PageController::class, 'dashboard']);

Route::get('/home', [PageController::class, 'home']);

Route::get('/signin', [PageController::class, 'signin']);

Route::get('/signup', [PageController::class, 'signup']);

Route::get('/forgot-password', [PageController::class, 'forgotPassword']);