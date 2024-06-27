<?php

use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ak_krs', function (Blueprint $table) {
            $table->id();
            $table->float('nilai_numerik')->nullable();
            $table->float('nilai_angka')->nullable();
            $table->text('nilai_huruf')->nullable();
            $table->boolean('apakah_nilai_masuk');
            $table->foreignIdFor(Mahasiswa::class, 'id_mahasiswa');
            $table->foreignIdFor(Kelas::class, 'id_kelas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ak_krs');
    }
};
