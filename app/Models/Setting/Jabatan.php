<?php

namespace App\Models\Setting;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = "jabatan";
    protected $fillable = ['name', 'description'];

    public function users()
    {
        return $this->hasMany(User::class, 'jabatan_id', 'id');
    }
}
