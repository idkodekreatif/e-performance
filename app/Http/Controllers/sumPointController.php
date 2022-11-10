<?php

namespace App\Http\Controllers;

use App\Models\sumPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class sumPointController extends Controller
{
    // public function __construct()
    // {
    //     $this->sumPoint = new sumPoint();
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function raportView($user_id)
    {
        // $data = [
        //     'data' => $this->sumPoint->allData(),
        // ];

        $users = DB::table('users')
            ->leftJoin('point_a', 'users.id', '=', 'point_a.user_id')
            ->leftJoin('point_b', 'users.id', '=', 'point_b.user_id')
            ->leftJoin('point_c', 'users.id', '=', 'point_c.user_id')
            ->leftJoin('point_d', 'users.id', '=', 'point_d.user_id')
            ->leftJoin('point_e', 'users.id', '=', 'point_e.user_id')
            ->select('users.*', 'point_a.*', 'point_b.*', 'point_c.*', 'point_d.*', 'point_e.*')
            ->where('point_a.user_id', $user_id)
            ->where('point_b.user_id', $user_id)
            ->where('point_c.user_id', $user_id)
            ->where('point_d.user_id', $user_id)
            ->where('point_e.user_id', $user_id)
            ->first();
        // dd($users);

        return view('input-point.raport', compact('users'));
    }

    public function RaportChartView($user_id)
    {
        $users = DB::table('users')
            ->join('point_a', 'users.id', '=', 'point_a.user_id')
            ->join('point_b', 'users.id', '=', 'point_b.user_id')
            ->join('point_c', 'users.id', '=', 'point_c.user_id')
            ->join('point_d', 'users.id', '=', 'point_d.user_id')
            ->join('point_e', 'users.id', '=', 'point_e.user_id')
            ->select('users.*', 'point_a.*', 'point_b.*', 'point_c.*', 'point_d.*', 'point_e.*')
            ->where('point_a.user_id', $user_id)
            ->where('point_b.user_id', $user_id)
            ->where('point_c.user_id', $user_id)
            ->where('point_d.user_id', $user_id)
            ->where('point_e.user_id', $user_id)
            ->first();

        // GET Nilai dari database Join
        $a = (float)$users->NilaiTotalPendidikanDanPengajaran;
        $b = (float)$users->NilaiTotalPenelitiandanKaryaIlmiah;
        $c = (float)$users->NilaiTotalPengabdianKepadaMasyarakat;

        $d = (float)$users->ResultSumNilaiTotalUnsurPenunjang;
        $e = (float)$users->NilaiUnsurPengabdian;
        $sum_d_e = $d + $e;
        // Result SUM Nilai Akhir Nilai Kinerja total
        $sum_Kinerja_total = $a + $b + $c + $sum_d_e;

        // Result SUM Standart Kinerja total
        $standart_Kinerja_Total = 11.69 + 4.26 + 1.20 + 2.17;

        // Result Nilai Presentase Capaian Total (%)
        $presentase_capaian_tatal = $sum_Kinerja_total / $standart_Kinerja_Total * 100;
        $result_capaian_total = number_format((float)$presentase_capaian_tatal, 2, '.', '');

        // Predikat
        if ($result_capaian_total >= 120) {
            $predikat = "ISTIMEWA";
        } elseif ($result_capaian_total >= 110) {
            $predikat = "SANGAT BAIK";
        } elseif ($result_capaian_total >= 100) {
            $predikat = "BAIK";
        } elseif ($result_capaian_total >= 80) {
            $predikat = "CUKUP";
        } else {
            $predikat = "KURANG";
        }
        $d = [$users->name];
        $S_Kt = [$sum_Kinerja_total];
        $Std_skt = [$standart_Kinerja_Total];
        $Rct = [$result_capaian_total];
        $Prd =  [$predikat];
        // dd($S_Kt, $Std_skt, $Rct, $Prd, $users, $d);

        return view('input-point.chart_raport');
    }
}
