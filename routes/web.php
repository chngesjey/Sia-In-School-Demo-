<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    SiswaController,
    DashboardController,
    GuruController,
    MapelController,
    KelasController
};

Route::get('/', [DashboardController::class, 'index']);

// Route Siswa
Route::resource('/siswa', SiswaController::class);
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit']);
Route::get('/siswa/{id}/hapus', [SiswaController::class, 'destroy']);

// Route Mapel
Route::resource('/mapel', MapelController::class);
Route::get('/mapel/edit/{id}', [MapelController::class, 'edit']);
Route::get('/mapel/hapus/{id}', [MapelController::class, 'destroy']);

// Route Kelas
Route::resource('/kelas', KelasController::class);
Route::get('/kelas/hapus/{id}', [KelasController::class, 'destroy']);
Route::get('/kelas/edit/{id}', [KelasController::class, 'edit']);

// Route Guru
Route::resource('/guru', GuruController::class);
Route::get('/guru/hapus/{id}', [GuruController::class, 'destroy']);
Route::get('/guru/edit/{id}', [GuruController::class, 'edit']);