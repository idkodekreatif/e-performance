<?php

namespace App\Models\Setting\Jabatan;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenJabatanStruktural extends Model
{
    use HasFactory;

    protected $table = 'dosen_jabatan_struktural';

    protected $fillable = [
        'user_id',
        'jabatan_struktural_id',
        'tmt_mulai',
        'tmt_selesai',
        'status'
    ];

    public function dosen()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function jabatanStruktural()
    {
        return $this->belongsTo(JabatanStruktural::class);
    }
}
