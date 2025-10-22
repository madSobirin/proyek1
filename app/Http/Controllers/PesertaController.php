<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\IbuHamil;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function create()
    {
        return view('kader.tambah-data');
    }
    public function store(Request $request)
    {
        $kategori = $request->kategori;

        if ($kategori === 'balita') {
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

        } elseif ($kategori === 'ibu_hamil') {
            $validated = $request->validate([
                'nik_ibu_hamil' => 'required|string|max:20|unique:ibu_hamils',
                'nama_ibu_hamil' => 'required|string|max:100',
                'nama_suami' => 'required|string|max:100',
                'umur' => 'required|integer|min:15|max:60',
                'alamat_ibu_hamil' => 'required|string|max:255',
            ]);

            IbuHamil::create($validated);
        } else {
            return redirect()->back()->with('error', 'Kategori tidak valid!');
        }

        return redirect()->route('view.data')->with('success', 'Data peserta berhasil ditambahkan.');
    }
    public function destroy($kategori, $id)
    {
        if ($kategori === 'ibu_hamil') {
            IbuHamil::findOrFail($id)->delete();
        } elseif ($kategori === 'balita') {
            Balita::findOrFail($id)->delete();
        }

        return redirect()->route('view.data')->with('success', 'Data peserta berhasil dihapus.');
    }

}
