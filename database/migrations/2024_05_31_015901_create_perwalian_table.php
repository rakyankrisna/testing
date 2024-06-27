<?php

use App\Models\Mahasiswa;
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
        Schema::create('ak_perwalian', function (Blueprint $table) {
            $table->id();
            $table->boolean('apakah_krs_disetujui');
            $table->float('sks_semester');
            $table->float('total_sks');
            $table->float('ips');
            $table->float('ipk');
            $table->foreignIdFor(Mahasiswa::class, 'id_mahasiswa');
            $table->foreignIdFor(PeriodeAkademik::class, 'id_periode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ak_perwalian');
    }
};
