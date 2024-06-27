<?php

use App\Models\PeriodeAkademik;
use App\Models\UnitKerja;
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
        Schema::create('ms_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->text('nim');
            $table->text('nama_mahasiswa');
            $table->foreignIdFor(UnitKerja::class, 'id_unit');
            $table->foreignIdFor(PeriodeAkademik::class, 'id_periode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ms_mahasiswa');
    }
};
