<?php

namespace App\Models\Setting\Jabatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    use HasFactory;

    protected $table = 'unit_kerja';

    protected $fillable = [
        'name',
        'type',
        'description'
    ];

    public function dosen()
    {
        return $this->hasMany(DosenUnitKerja::class);
    }
}
