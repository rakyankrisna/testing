<?php

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
        Schema::create('ak_mata_kuliah', function (Blueprint $table) {
            $table->id();
            $table->text('kode_mata_kuliah');
            $table->text('nama_mata_kuliah');
            $table->float('sks');
            $table->foreignIdFor(UnitKerja::class, 'id_unit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ak_mata_kuliah');
    }
};
