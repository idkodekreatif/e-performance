<?php

namespace App\Models\Setting\Jabatan;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanStruktural extends Model
{
    use HasFactory;

    protected $table = 'jabatan_struktural';

    protected $fillable = [
        'name',
        'level',
        'description'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_jabatan_struktural');
    }
}
