<?php

use App\Http\Controllers\ViewData;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BalitaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\IbuHamilController;
use App\Http\Controllers\DashboardController;

// register view
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// view login
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/', [AuthController::class, 'login']);

// logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard routes (sesuai role ya)
Route::middleware(['auth', 'role:kader'])->prefix('kader')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'kader'])->name('kader.dashboard');
});

Route::middleware(['auth', 'role:pengguna'])->prefix('pengguna')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'pengguna'])->name('pengguna.dashboard');
});
// Menampilkan Data Peserta yang Terdaftar ya
Route::get('/data', [ViewData::class, 'index'])->name('view.data');

// form input data
Route::get('/data/tambah', [PesertaController::class, 'create'])->name('peserta.create');
Route::post('/data/store', [PesertaController::class, 'store'])->name('peserta.store');
Route::delete('/peserta/{kategori}/{id}', [PesertaController::class, 'destroy'])->name('peserta.destroy');







