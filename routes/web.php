<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/booking', [App\Http\Controllers\BookingController::class, 'index']);
Route::get('/members', [App\Http\Controllers\BookingController::class, 'apply']);
Route::get('/traniner', [App\Http\Controllers\BookingController::class, 'get']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
