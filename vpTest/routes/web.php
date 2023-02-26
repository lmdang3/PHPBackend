<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
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

Route::get('/login', [AuthController::class,'loginForm']);
Route::post('/login', [AuthController::class,'login']);

Route::post('/logout', [AuthController::class, 'logoutAction']);
Route::get('/logout', function () {
    return view('logout');
});

Route::middleware('logged_in')->group(function () {
    Route::get('/', function () {
        return view('layouts.app');
    });
    Route::get('/label', function () {
        return view('/label');
    });
});
