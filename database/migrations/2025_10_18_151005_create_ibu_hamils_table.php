<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('ibu_hamils', function (Blueprint $table) {
            $table->id();
            $table->string('nik_ibu_hamil', 20)->unique();
            $table->string('nama_ibu_hamil');
            $table->string('nama_suami');
            $table->integer('umur');
            $table->string('alamat_ibu_hamil');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ibu_hamils');
    }
};
