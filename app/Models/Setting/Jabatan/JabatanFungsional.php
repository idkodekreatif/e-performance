<?php

namespace App\Models\Setting\Jabatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanFungsional extends Model
{
    use HasFactory;

    protected $table = 'jabatan_fungsional';

    protected $fillable = [
        'name',
        'golongan_min',
        'golongan_max',
        'angka_kredit_min',
        'angka_kredit_next',
        'description'
    ];

    // Relasi ke tabel pivot dosen_jabatan_fungsional
    public function dosen()
    {
        return $this->hasMany(DosenJabatanFungsional::class);
    }
}
