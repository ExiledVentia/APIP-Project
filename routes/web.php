<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KembaliController;
use App\Http\Controllers\KembaliUserController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\PinjamUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('user/dashboard');
}); // dashboard admin (aku murka)



Route::resource('barang', BarangController::class);
Route::resource('user', UserController::class);
Route::get('/search', [BarangController::class, 'search'])->name('barang.search');
Route::get('/pinjam', [PinjamUserController::class, 'index'])->name('pinjam.user');
Route::get('/pengembalian', [KembaliUserController::class, 'index'])->name('kembali.user');
// Route::delete('/pengembalian', [KembaliUserController::class, 'delete'])->name('kembali.hapus');

Route::get('/login', [AuthController::class, 'login'] )->name('login');
Route::post('/login', [AuthController::class, 'authlogin'] )->name('auth.login');
Route::get('/register', [AuthController::class, 'register'] )->name('register');
Route::post('/register', [AuthController::class, 'authregister'] )->name('auth.register');
Route::delete('/logout', [AuthController::class, 'logout'] )->name('logout');

// bikin route pinjam dan kembali nnti
Route::resource('peminjaman', PinjamController::class);
Route::resource('kembali', KembaliController::class);
