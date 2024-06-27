<?php

use App\Models\MataKuliah;
use App\Models\PeriodeAkademik;
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
        Schema::create('ak_kelas', function (Blueprint $table) {
            $table->id();
            $table->text('kode_kelas');
            $table->integer('hari')->nullable();
            $table->integer('jam_mulai')->nullable();
            $table->integer('jam_selesai')->nullable();
            $table->integer('daya_tampung')->nullable();
            $table->integer('jumlah_peserta');
            $table->boolean('apakah_nilai_dikunci');
            $table->timestamp('waktu_kunci_nilai')->nullable();
            $table->foreignIdFor(MataKuliah::class, 'id_mata_kuliah');
            $table->foreignIdFor(PeriodeAkademik::class, 'id_periode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ak_kelas');
    }
};
