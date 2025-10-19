<?php

use App\Http\Controllers\ViewData;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BalitaController;
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

// Data Peserta routes
Route::get('/data', [ViewData::class, 'index'])->name('view.data');

// menampilkan View Tambah data
Route::get('/data/tambah', [BalitaController::class, 'index'])->name('balita.index');

// Mengirim ke database tambah data
Route::post('/data/tambah', [BalitaController::class, 'store'])->name('balita.store');

// Menghapus data Balita berdasrkan id yang di pilih ya
Route::delete('/balita/{id}', [BalitaController::class, 'destroy'])->name('balita.destroy');