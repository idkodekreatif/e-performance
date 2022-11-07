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


    public function allData()
    {
        $users = DB::table('users')
            ->leftJoin('point_a', 'users.id', '=', 'point_a.id')
            ->leftJoin('point_b', 'users.id', '=', 'point_b.id')
            ->leftJoin('point_c', 'users.id', '=', 'point_c.id')
            ->leftJoin('point_d', 'users.id', '=', 'point_d.id')
            ->leftJoin('point_e', 'users.id', '=', 'point_e.id')
            ->get();
        // dd($users);
        return $users;
    }
}
