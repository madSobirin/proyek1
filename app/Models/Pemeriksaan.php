<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemeriksaan extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    // Relasi
    // Relasi ke Balita
    public function balita()
    {
        return $this->belongsTo(Balita::class);
    }

    // Relasi ke Ibu Hamil
    public function ibu_hamil()
    {
        return $this->belongsTo(IbuHamil::class);
    }
}

