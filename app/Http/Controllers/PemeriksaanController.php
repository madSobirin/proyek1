<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use App\Models\Balita;
use App\Models\IbuHamil;
use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    public function index()
    {
        $pemeriksaans = Pemeriksaan::with(['balita', 'ibu_hamil'])->get();
        return view('kader.pemeriksaan', compact('pemeriksaans'));
    }
    public function create()
    {
        return view('kader.tambah-pemeriksaan');
    }

    public function searchPeserta(Request $request)
    {
        $query = $request->get('q');

        $balitas = Balita::where('nama_balita', 'like', "%$query%")
            ->orWhere('nik', 'like', "%$query%")
            ->get(['id', 'nik', 'nama_balita as nama']);

        $ibuhamils = IbuHamil::where('nama_ibu_hamil', 'like', "%$query%")
            ->orWhere('nik_ibu_hamil', 'like', "%$query%")
            ->get(['id', 'nik_ibu_hamil as nik', 'nama_ibu_hamil as nama']);

        $results = $balitas->concat($ibuhamils);

        if ($results->isEmpty()) {
            return response()->json(['message' => 'Data peserta belum terdaftar.']);
        }

        return response()->json($results);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tipe' => 'required|in:balita,ibu_hamil',
            'peserta_id' => 'required|integer',
            'tanggal' => 'required|date',
            'berat_badan' => 'nullable|numeric',
            'tinggi_badan' => 'nullable|numeric',
            'status_gizi' => 'nullable|in:Gizi Baik,Gizi Buruk,Stunting',
            'tekanan_darah' => 'nullable|numeric',
            'usia_kehamilan' => 'nullable|integer|min:0',
            'status_ibu' => 'nullable|in:Kondisi Baik,Anemia',
        ]);

        if ($validated['tipe'] === 'balita') {
            $validated['balita_id'] = $validated['peserta_id'];
            $validated['ibu_hamil_id'] = null;
        } else {
            $validated['ibu_hamil_id'] = $validated['peserta_id'];
            $validated['balita_id'] = null;
        }

        unset($validated['peserta_id']);

        Pemeriksaan::create($validated);

        return redirect()->route('pemeriksaan.index')->with('success', 'Data pemeriksaan berhasil ditambahkan.');
    }

    // Hapus pemeriksaan
    public function destroy($id)
    {
        $pemeriksaan = Pemeriksaan::findOrFail($id);
        $pemeriksaan->delete();

        return redirect()->route('pemeriksaan.index')->with('success', 'Data pemeriksaan berhasil dihapus.');
    }
}
