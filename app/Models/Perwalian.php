<!-- Suggested code may be subject to a license. Learn more: ~LicenseLog:2085142960. -->
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\
Model;

class Perwalian extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ak_perwalian';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mahasiswa_id',
        'dosen_id',
        'periode_akademik_id',
        // Tambahkan kolom-kolom lain yang relevan di sini
    ];

    // Relasi dengan model Mahasiswa
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id');
    }

    // Relasi dengan model Dosen
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }

    // Relasi dengan model PeriodeAkademik
    public function periodeAkademik()
    {
        return $this->belongsTo(PeriodeAkademik::class, 'periode_akademik_id');
    }

    //TODO : Tambahkan scope, fungsi, atau relasi lain sesuai kebutuhan
}
