<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::POST('/booking', [App\Http\Controllers\BookingController::class, 'input']);
Route::get('/booking', [App\Http\Controllers\BookingController::class, 'index'])->middleware('auth');
Route::get('/members', [App\Http\Controllers\BookingController::class, 'apply'])->middleware('auth');
Route::get('/traniner', [App\Http\Controllers\BookingController::class, 'get'])->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
