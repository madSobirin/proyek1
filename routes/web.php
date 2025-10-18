<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// des sederhana

// register view
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// view login
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/', [AuthController::class, 'login']);

// logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Routes
// Dashboard routes (aman)
Route::middleware(['auth', 'role:kader'])->prefix('kader')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'kader'])->name('kader.dashboard');
});

Route::middleware(['auth', 'role:pengguna'])->prefix('pengguna')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'pengguna'])->name('pengguna.dashboard');
});
// Route::middleware(['auth'])->group(function () {
//     Route::get('/kader/dashboard', [DashboardController::class, 'kader'])->name('kader.dashboard');
//     Route::get('/pengguna/dashboard', [DashboardController::class, 'pengguna'])->name('pengguna.dashboard');
// });