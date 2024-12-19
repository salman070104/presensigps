<?php

use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;


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



Route::middleware(['guest:mahasiswa'])->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    })->name('login');
    Route::post('/proseslogin', 'App\Http\Controllers\AuthController@proseslogin');
});

Route::middleware(['auth:mahasiswa'])->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');
    Route::get('/logout', 'App\Http\Controllers\AuthController@proseslogout');
});
