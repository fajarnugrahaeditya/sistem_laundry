<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaundryServiceController;
use App\Http\Controllers\LaundryOrderController;

/*
|--------------------------------------------------------------------------
| Guest (belum login)
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginProses']);

    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'registerProses']);

});

/*
|--------------------------------------------------------------------------
| Admin (sudah login)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('home');
    });

    Route::resource('services', LaundryServiceController::class);

    Route::resource('orders', LaundryOrderController::class);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});