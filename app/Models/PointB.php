<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointB extends Model
{
    use HasFactory;

    protected $table = "point_b";
    protected $guarded = [];

    public function UserId()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
