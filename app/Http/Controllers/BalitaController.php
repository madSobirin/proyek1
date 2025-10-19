<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use Illuminate\Http\Request;

class BalitaController extends Controller
{
    public function index()
    {
        $balitas = Balita::all();
        return view('kader.tambah-data', compact('balitas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|string|max:20|unique:balitas',
            'nama_balita' => 'required|string|max:100',
            'usia_tahun' => 'required|integer|min:0',
            'usia_bulan' => 'nullable|integer|min:0|max:11',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string|max:255',
            'nama_orang_tua' => 'required|string|max:100',
        ]);

        Balita::create($validated);

        return redirect()->route('view.data')->with('success', 'Data balita berhasil ditambahkan.');
        // return redirect()->back()->with('success', 'Data balita berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $balita = Balita::findOrFail($id);
        $balita->delete();

        return redirect()->route('view.data')->with('success', 'Data balita berhasil dihapus.');
    }
}
