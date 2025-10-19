<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use Illuminate\Http\Request;

class ViewData extends Controller
{
    public function index()
    {
        $balitas = Balita::all();
        return view('kader.data-peserta', compact('balitas'));
    }
}
