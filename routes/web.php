<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::resource('barang', BarangController::class);
Route::resource('user', UserController::class);

Route::get('/login', [AuthController::class, 'login'] )->name('login');
Route::post('/login', [AuthController::class, 'authlogin'] )->name('auth.login');
Route::get('/register', [AuthController::class, 'register'] )->name('register');
Route::post('/register', [AuthController::class, 'authregister'] )->name('auth.register');
Route::delete('/logout', [AuthController::class, 'logout'] )->name('logout');