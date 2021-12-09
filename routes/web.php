<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResipeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/resipe', [ResipeController::class, 'index'])->name('home');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/register', [RegisterController::class, 'store']);