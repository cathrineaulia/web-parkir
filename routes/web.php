<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/locations', App\Http\Controllers\LocationsController::class);
Route::resource('/transactions', App\Http\Controllers\TransactionsController::class);
Route::resource('/vehicle', App\Http\Controllers\VehicleController::class);
