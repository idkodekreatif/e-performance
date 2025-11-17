<?php

namespace App\Models\Setting\Jabatan;

use App\Models\User;
use App\Models\Setting\Jabatan\UnitKerja;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanStruktural extends Model
{
    use HasFactory;

    protected $table = 'jabatan_struktural';

    protected $fillable = [
        'name',
        'level',
        'unit_kerja_id',
        'description',
    ];

    public function unitKerja()
    {
        return $this->belongsTo(UnitKerja::class, 'unit_kerja_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_jabatan_struktural')
            ->withPivot(['tmt_mulai', 'tmt_selesai', 'status'])
            ->withTimestamps();
    }
}
