<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::resource('user', UsersController::class);
Route::resource('barang', BarangController::class);

Route::get('/login', [AuthController::class, 'login'] )->name('login');
Route::post('/login', [AuthController::class, 'authlogin'] )->name('auth.login');
Route::get('/register', [AuthController::class, 'register'] )->name('register');
Route::post('/register', [AuthController::class, 'authregister'] )->name('auth.register');
Route::delete('/logout', [AuthController::class, 'logout'] )->name('logout');