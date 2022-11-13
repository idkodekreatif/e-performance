<?php

namespace App\Http\Controllers;

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

    public function RaportChartView(Request $request)
    {
        $users = DB::table('users');

        $resultGetUsersName = DB::table('users')->get();

        if ($request->keyword != null) {
            $users = $users->orWhere('users.name', 'LIKE', '%' . $request->keyword . '%');
        }
        if ($request->User_Name != null) {
            $users = $users->where('users.id', $request->User_Name);
            // $users = $users->orWhere('fakultas', 'LIKE', '%' . $request->keyword . '%');
            // $users = $users->orWhere('prodi', 'LIKE', '%' . $request->keyword . '%');
        }

        $data = $users
            ->select('users.name', 'point_a.NilaiTotalPendidikanDanPengajaran', 'point_b.NilaiTotalPenelitiandanKaryaIlmiah', 'point_c.NilaiTotalPengabdianKepadaMasyarakat', 'point_d.ResultSumNilaiTotalUnsurPenunjang', 'point_e.NilaiUnsurPengabdian')
            ->leftJoin('point_a', 'point_a.user_id', 'users.id')
            ->leftJoin('point_b', 'point_b.user_id', 'users.id')
            ->leftJoin('point_c', 'point_c.user_id', 'users.id')
            ->leftJoin('point_d', 'point_d.user_id', 'users.id')
            ->leftJoin('point_e', 'point_e.user_id', 'users.id')
            ->get();

        $messagesArray = [];
        foreach ($data as $data) {
            // GET Nilai dari database Join
            $result_data["name"] = $data->name;
            $a = (float)$data->NilaiTotalPendidikanDanPengajaran;
            $b = (float)$data->NilaiTotalPenelitiandanKaryaIlmiah;
            $c = (float)$data->NilaiTotalPengabdianKepadaMasyarakat;

            $d = (float)$data->ResultSumNilaiTotalUnsurPenunjang;
            $e = (float)$data->NilaiUnsurPengabdian;

            $sum_d_e = $d + $e;
            // Result SUM Nilai Akhir Nilai Kinerja total
            $sum_Kinerja_total = $a + $b + $c + $sum_d_e;
            $result_sum_Kinerja_total = number_format((float)$sum_Kinerja_total, 2, '.', '');
            $result_data['NilaiKinerjaTotal'] = $result_sum_Kinerja_total;

            // Result SUM Nilai Akhir Standart Kinerja Total
            if ($sum_Kinerja_total == 0.0) {
                $standart_Kinerja_Total = 0;
            } else {
                $standart_Kinerja_Total = 11.69 + 4.26 + 1.20 + 2.17;
            }
            $result_data["StandartKinerjaTotal"] = $standart_Kinerja_Total;

            // Result Nilai Presentase Capaian Total (%)
            if ($standart_Kinerja_Total == 0) {
                $presentase_capaian_tatal = 0;
            } else {
                $presentase_capaian_tatal = $sum_Kinerja_total / $standart_Kinerja_Total * 100;
            }
            $result_capaian_total = number_format((float)$presentase_capaian_tatal, 2, '.', '');
            $result_data["result_capaian_total"] = $result_capaian_total;

            // Predikat
            if ($result_capaian_total >= 120) {
                $predikat = "ISTIMEWA";
            } elseif ($result_capaian_total >= 110) {
                $predikat = "SANGAT BAIK";
            } elseif ($result_capaian_total >= 100) {
                $predikat = "BAIK";
            } elseif ($result_capaian_total >= 80) {
                $predikat = "CUKUP";
            } elseif ($result_capaian_total == 0) {
                $predikat = "-";
            } else {
                $predikat = "KURANG";
            }
            $result_data["predikat"] = $predikat;

            // Result Array
            $messagesArray[] = $result_data;
        }

        // dd($messagesArray);
        // return view('input-point.chart_raport', ['messagesArray' => $messagesArray]);
        return view('input-point.chart_raport', compact('messagesArray', 'resultGetUsersName'));
    }
}
