<?php

namespace App\Models\Setting\Jabatan;

use App\Models\User;
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
        'description',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_jabatan_fungsional')
            ->withPivot(['tmt_mulai', 'tmt_selesai', 'status'])
            ->withTimestamps();
    }
}
