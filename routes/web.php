<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/booking/order',[BookController::class, 'bookingOrder'])->name('booking.order');

Route::resource('/books', BookController::class);
Route::resource('/orders', BookingController::class);
