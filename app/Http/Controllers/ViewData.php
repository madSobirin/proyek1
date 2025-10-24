<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\IbuHamil;
use Illuminate\Http\Request;

class ViewData extends Controller
{
    public function index()
    {
        $balitas = Balita::all();
        $ibu_hamils = IbuHamil::all();
        $totalBalita = Balita::count();
        $totalIbuHamil = IbuHamil::count();
        return view('kader.data-peserta', compact('balitas', 'ibu_hamils', 'totalBalita', 'totalIbuHamil'));
    }
}
