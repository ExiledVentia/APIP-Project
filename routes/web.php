<?php

use App\Http\Controllers\C_Siswa;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('welcome');
});

//Route::get('/nilai', function () {
//    return view('nilai/index');
//});

//Route::get('/mapel', function () {
//    return view('mapel/index');
//});

Route::get('/siswa', [C_Siswa::class, 'index'])->name('siswa');
Route::get('/siswa/tambah', [C_Siswa::class, 'tambah']);
Route::post('/siswa/store', [C_Siswa::class, 'store']);
Route::post('/siswa/{id}/update', [C_Siswa::class, 'update']);
Route::get('/siswa/{id}/ubah', [C_Siswa::class, 'ubah'])->name('ubah');
Route::delete('/siswa/{id}', [C_Siswa::class, 'delete'])->name('delete');

Route::get('/mapel', [C_Siswa::class, 'index']);
Route::get('/nilai', [C_Siswa::class, 'index']);

Route::resource('kelas', KelasController::class)->parameters(['kelas' => 'kelas']);
Route::resource('guru', GuruController::class);
Route::resource('user', UsersController::class);