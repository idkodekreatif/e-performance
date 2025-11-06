<?php

namespace App\Models\Setting\Jabatan;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenJabatanFungsional extends Model
{
    use HasFactory;

    protected $table = 'dosen_jabatan_fungsional';

    protected $fillable = [
        'user_id',
        'jabatan_fungsional_id',
        'tmt_mulai',
        'tmt_selesai',
        'status'
    ];

    public function dosen()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function jabatanFungsional()
    {
        return $this->belongsTo(JabatanFungsional::class);
    }
}
