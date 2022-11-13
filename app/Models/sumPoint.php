<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class sumPoint extends Model
{
    use HasFactory;
    protected $table = "raport_user";
    protected $guarded = [];
}
