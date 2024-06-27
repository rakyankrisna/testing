<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ak_kelas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'kode',
        'deskripsi',
        'kapasitas',
    ];

    /**
     * Get the mahasiswa (students) that belong to the kelas.
     */
    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class, 'ak_kelas_mahasiswa', 'kelas_id', 'mahasiswa_id');
    }
}

