<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


/**
 * sumPointController
 */
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

    /**
     * raportView
     *
     * @param  mixed $user_id
     * @return void
     */
    public function raportView($user_id)
    {
        $users = DB::table('users')
            ->leftJoin('point_a', 'point_a.user_id', '=', 'users.id')
            ->leftJoin('point_b', 'point_b.user_id', '=', 'users.id')
            ->leftJoin('point_c', 'point_c.user_id', '=', 'users.id')
            ->leftJoin('point_d', 'point_d.user_id', '=', 'users.id')
            ->leftJoin('point_e', 'point_e.user_id', '=', 'users.id')
            ->select('users.name', 'point_a.NilaiTotalPendidikanDanPengajaran', 'point_b.NilaiTotalPenelitiandanKaryaIlmiah', 'point_c.NilaiTotalPengabdianKepadaMasyarakat', 'point_d.ResultSumNilaiTotalUnsurPenunjang', 'point_e.NilaiUnsurPengabdian')
            ->where(function($query) use ($user_id) {
                $query->whereNotNull('point_a.NilaiTotalPendidikanDanPengajaran')
                      ->orWhere('point_a.user_id', '=', $user_id)
                      ->orWhereNotNull('point_b.NilaiTotalPenelitiandanKaryaIlmiah')
                      ->orWhere('point_b.user_id', '=', $user_id)
                      ->orWhereNotNull('point_c.NilaiTotalPengabdianKepadaMasyarakat')
                      ->orWhere('point_c.user_id', '=', $user_id)
                      ->orWhereNotNull('point_d.ResultSumNilaiTotalUnsurPenunjang')
                      ->orWhere('point_d.user_id', '=', $user_id)
                      ->orWhereNotNull('point_e.NilaiUnsurPengabdian')
                      ->orWhere('point_e.user_id', '=', $user_id);
            })
            ->where('users.id', $user_id)
            ->first();


            // dd($users);

        return view('input-point.raport', compact('users'));
    }

    /**
     * RaportChartView
     *
     * @param  mixed $request
     * @return void
     */
    public function RaportChartView(Request $request)
    {
        $users = DB::table('users');

        $resultGetUsersName = User::whereNotIn('name', [
            'it', 'superuser', 'manajer', 'lppm', 'hrd'
        ])->get();

        if ($request->keyword != null) {
            $users = $users->orWhere('users.name', 'LIKE', '%' . $request->keyword . '%');
        }
        if ($request->User_Name != null) {
            $users = $users->where('users.id', $request->User_Name);
        }
        if ($request->fakultas != null) {
            $users = $users->where('users.fakultas', $request->fakultas);
        }
        if ($request->prodi != null) {
            $users = $users->where('users.prodi', $request->prodi);
        }

        $data = $users
        ->leftJoin('point_a', 'point_a.user_id', '=', 'users.id')
        ->leftJoin('point_b', 'point_b.user_id', '=', 'users.id')
        ->leftJoin('point_c', 'point_c.user_id', '=', 'users.id')
        ->leftJoin('point_d', 'point_d.user_id', '=', 'users.id')
        ->leftJoin('point_e', 'point_e.user_id', '=', 'users.id')
        ->select('users.name', 'point_a.NilaiTotalPendidikanDanPengajaran', 'point_b.NilaiTotalPenelitiandanKaryaIlmiah', 'point_c.NilaiTotalPengabdianKepadaMasyarakat', 'point_d.ResultSumNilaiTotalUnsurPenunjang', 'point_e.NilaiUnsurPengabdian')
        ->where(function($query) {
            $query->whereNotNull('point_a.NilaiTotalPendidikanDanPengajaran')
                ->orWhereNotNull('point_b.NilaiTotalPenelitiandanKaryaIlmiah')
                ->orWhereNotNull('point_c.NilaiTotalPengabdianKepadaMasyarakat')
                ->orWhereNotNull('point_d.ResultSumNilaiTotalUnsurPenunjang')
                ->orWhereNotNull('point_e.NilaiUnsurPengabdian');
        })
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

            // Result nilai Pendidikan dan Pengajaran
            $resultSumPendidikanDanPengajaran = ($a / 11.69) * 100;
            $result_data["PendidikanDanPengajaran"] = number_format((float)$resultSumPendidikanDanPengajaran, 2, '.', '');
            // Result Nilai Penelitian & karya Ilmiah
            $resultSumPenelitian = ($b / 4.26) * 100;
            $result_data["PenelitianDanKaryaIlmiah"] = number_format((float)$resultSumPenelitian, 2, '.', '');
            // Result Nilai Pengabdian Masyarakat
            $resultSumPengabdian = ($c / 1.20) * 100;
            $result_data["PengabdianMasyarakat"] = number_format((float)$resultSumPengabdian, 2, '.', '');


            $sum_d_e = $d + $e;
            // Result Nilai Penunjang, Pengabdian Intitus dan Pengembangan Diri
            $resultSumPenunjangPengabdian = ($sum_d_e / 2.17) * 100;
            $result_data["PengabdianInstitusiDanPengembanganDiri"] = number_format((float)$resultSumPenunjangPengabdian, 2, '.', '');

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

        return view('input-point.chart_raport', compact('messagesArray', 'resultGetUsersName'));
    }

    public function Preview($user_id)
    {
        $data = DB::table('users')
        ->leftJoin('point_a', 'point_a.user_id', '=', 'users.id')
        ->leftJoin('point_b', 'point_b.user_id', '=', 'users.id')
        ->leftJoin('point_c', 'point_c.user_id', '=', 'users.id')
        ->leftJoin('point_d', 'point_d.user_id', '=', 'users.id')
        ->leftJoin('point_e', 'point_e.user_id', '=', 'users.id')
        ->select('users.*', 'point_a.*', 'point_b.*', 'point_c.*', 'point_d.*', 'point_e.*')
        ->where(function($query) {
            $query->whereNotNull('point_a.NilaiTotalPendidikanDanPengajaran')
                ->orWhereNotNull('point_b.NilaiTotalPenelitiandanKaryaIlmiah')
                ->orWhereNotNull('point_c.NilaiTotalPengabdianKepadaMasyarakat')
                ->orWhereNotNull('point_d.ResultSumNilaiTotalUnsurPenunjang')
                ->orWhereNotNull('point_e.NilaiUnsurPengabdian');
        })
        ->where('users.id', $user_id)
        ->first();

        return view('input-point.preview', compact('data'));
    }
}
