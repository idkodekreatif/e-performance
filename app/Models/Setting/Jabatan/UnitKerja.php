<?php

namespace App\Models\Setting\Jabatan;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    use HasFactory;

    protected $table = 'unit_kerja';

    protected $fillable = [
        'name',
        'type',
        'description',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_unit_kerja')
            ->withPivot(['tmt_mulai', 'tmt_selesai'])
            ->withTimestamps();
    }
}
