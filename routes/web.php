<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResipeController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\AboutController;
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
Route::get('/explore', [ExploreController::class, 'index'])->name('explore');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
//Route::get('/register', [RegisterController::class, 'store']);
//Route::get('/register', [RegisterController::class, 'create']);