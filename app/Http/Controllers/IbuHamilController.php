<?php

namespace App\Http\Controllers;

use App\Models\IbuHamil;
use Illuminate\Http\Request;

class IbuHamilController extends Controller
{
    public function index()
    {
        $ibu_hamils = IbuHamil::all();
        return view('kader.data-peserta', compact('ibu_hamils'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|string|max:20|unique:ibu_hamils',
            'nama_ibu_hamil' => 'required|string|max:100',
            'nama_suami' => 'required|string|max:100',
            'umur' => 'required|string|max:50',
            'alamat' => 'required|string|max:255',
        ]);

        IbuHamil::create($validated);

        return redirect()->route('')->with('success', 'Data balita berhasil ditambahkan.');

        // return redirect()->back()->with('success', 'Data ibu hamil berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $ibuHamil = IbuHamil::findOrFail($id);
        $ibuHamil->delete();

        return redirect()->back()->with('success', 'Data ibu hamil berhasil dihapus.');
    }
}

