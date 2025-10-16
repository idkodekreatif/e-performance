<?php

namespace App\Models\Predikat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomponenPoin extends Model
{
    use HasFactory;

    protected $table = 'komponen_poin';
    protected $fillable = [
        'nama_komponen',
        'Non-JAD',
        'AA',
        'Lektor',
        'LK',
        'GB'
    ];
}
