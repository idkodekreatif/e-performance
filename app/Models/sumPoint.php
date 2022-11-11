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


    public function allDataChart()
    {
        $users = DB::table('users');
        $data = $users
            ->select('users.name', 'point_a.NilaiTotalPendidikanDanPengajaran as PointA', 'point_b.NilaiTotalPenelitiandanKaryaIlmiah as PointB', 'point_c.NilaiTotalPengabdianKepadaMasyarakat as PointC', 'point_d.ResultSumNilaiTotalUnsurPenunjang as PointD', 'point_e.NilaiUnsurPengabdian as PointE')
            ->leftJoin('point_a', 'point_a.user_id', 'users.id')
            ->leftJoin('point_b', 'point_b.user_id', 'users.id')
            ->leftJoin('point_c', 'point_c.user_id', 'users.id')
            ->leftJoin('point_d', 'point_d.user_id', 'users.id')
            ->leftJoin('point_e', 'point_e.user_id', 'users.id')
            ->get();
        // dd($users);
        return $data;
    }
}
