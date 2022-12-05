<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointA extends Model
{
    use HasFactory;

    protected $table = "point_a";
    protected $guarded = [];

    public function UserId()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
