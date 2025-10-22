<?php

namespace App\Http\Controllers;

use App\Models\Balita;

use App\Models\IbuHamil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // Dashboard untuk Kader
    public function kader()
    {
        return view('kader.dashboard', [
            'title' => 'Dashboard Kader',
            'user' => Auth::user(),
            'totalBalita' => Balita::count(),
            'totalIbuHamil' => IbuHamil::count(),
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
