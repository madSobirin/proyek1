<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemeriksaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipe',
        'balita_id',
        'ibu_hamil_id',
        'tanggal',
        'berat_badan',
        'tinggi_badan',
        'status_gizi',
        'tekanan_darah',
        'usia_kehamilan',
        'status_ibu'
    ];

    // Relasi
    public function balita()
    {
        return $this->belongsTo(Balita::class);
    }

    public function ibuHamil()
    {
        return $this->belongsTo(IbuHamil::class, 'ibu_hamil_id');
    }
}

