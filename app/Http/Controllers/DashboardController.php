<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Dashboard untuk Kader
    public function kader()
    {
        return view('kader.dashboard', [
            'title' => 'Dashboard Kader',
            'user' => Auth::user()
        ]);
    }

    public function pengguna()
    {
        return view('pengguna.dashboard', [
            'title' => 'Dashboard Pengguna',
            'user' => Auth::user()
        ]);
    }
}
