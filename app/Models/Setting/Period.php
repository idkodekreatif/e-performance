<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    protected $table = "periods";
    protected $guarded = [];

    // Relasi one-to-many dengan tabel "closures"
    public function closure()
    {
        return $this->hasMany(Closure::class);
    }
}
