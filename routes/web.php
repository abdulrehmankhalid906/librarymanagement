<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/booking/order',[BookController::class, 'bookingOrder'])->name('booking.order');

Route::resources([
    'books' => BookController::class,
    'orders' => BookingController::class,
    'users' => UserController::class,
    'roles' => RoleController::class,
    'permissions' => PermissionController::class
]);

