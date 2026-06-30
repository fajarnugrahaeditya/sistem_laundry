<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaundryServiceController;
use App\Http\Controllers\LaundryOrderController;

Route::get('/', function () {
    return view('home');
});

Route::resource('services', LaundryServiceController::class);
Route::resource('orders', LaundryOrderController::class);
