
php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\
Model;

class PeriodeAkademik extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ms_periode_akademik';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // Daftar kolom yang dapat diisi secara massal, contoh:
        'nama',
        'tanggal_mulai',
        'tanggal_selesai',
        // ...
    ];

    //TODO : Tambah relasi, scope, atau fungsi lainnya sesuai kebutuhan
}
