<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ms_mahasiswa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nim',
        'nama',
        'email',
        'jurusan',
        'angkatan',
    ];

    /**
     * Get the KRS records associated with the mahasiswa.
     */
    public function krs()
    {
        return $this->hasMany(KRS::class, 'mahasiswa_id');
    }

    /**
     * Get the kelas (classes) that the mahasiswa belongs to.
     */
    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'ak_kelas_mahasiswa', 'mahasiswa_id', 'kelas_id');
    }
}
