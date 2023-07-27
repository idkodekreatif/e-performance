<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Closure extends Model
{
    use HasFactory;

    protected $table = "closures";
    protected $guarded = [];

    public function period()
    {
        return $this->belongsTo(Period::class);
    }
}
