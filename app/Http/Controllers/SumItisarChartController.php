<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SumItisarChartController extends Controller
{
    public function ChartView(Request $request)
    {
        $users = DB::table('users');

        $resultGetUsersName = User::whereNotIn('name', [
            'it', 'superuser', 'manajer', 'lppm', 'hrd'
        ])->get();

        if ($request->keyword != null) {
            $users = $users->orWhere('users.name', 'LIKE', '%' . $request->keyword . '%');
        }
        // if ($request->User_Name != null) {
        //     $users = $users->where('users.id', $request->User_Name);
        // }
        // if ($request->fakultas != null) {
        //     $users = $users->where('users.fakultas', $request->fakultas);
        // }
        // if ($request->prodi != null) {
        //     $users = $users->where('users.prodi', $request->prodi);
        // }

        $data = $users
            ->leftJoin('baak', 'baak.user_id', 'users.id')
            ->whereNotNull('baak.user_id')
            ->select('users.name', 'baak.output_total_sementara_kinerja_perilaku', 'baak.output_total_sementara_kinerja_kompetensi')
            ->get();


        $messagesArray = [];
        foreach ($data as $data) {
            // GET Nilai dari database Join
            $result_data["name"] = $data->name;
            $a = (float)$data->output_total_sementara_kinerja_perilaku;
            $b = (float)$data->output_total_sementara_kinerja_kompetensi;
            // $c = (float)$data->NilaiTotalPengabdianKepadaMasyarakat;

            // $d = (float)$data->ResultSumNilaiTotalUnsurPenunjang;
            // $e = (float)$data->NilaiUnsurPengabdian;

            // $sum_d_e = $d + $e;
            // // Result SUM Nilai Akhir Nilai Kinerja total
            $sum_Kinerja_total = $a + $b;
            $result_sum_Kinerja_total = number_format((float)$sum_Kinerja_total, 2, '.', '');
            $result_data['NilaiKinerjaTotal'] = $result_sum_Kinerja_total;

            // // Result SUM Nilai Akhir Standart Kinerja Total
            // if ($sum_Kinerja_total == 0.0) {
            //     $standart_Kinerja_Total = 0;
            // } else {
            //     $standart_Kinerja_Total = 11.69 + 4.26 + 1.20 + 2.17;
            // }
            // $result_data["StandartKinerjaTotal"] = $standart_Kinerja_Total;

            // // Result Nilai Presentase Capaian Total (%)
            // if ($standart_Kinerja_Total == 0) {
            //     $presentase_capaian_tatal = 0;
            // } else {
            //     $presentase_capaian_tatal = $sum_Kinerja_total / $standart_Kinerja_Total * 100;
            // }
            // $result_capaian_total = number_format((float)$presentase_capaian_tatal, 2, '.', '');
            // $result_data["result_capaian_total"] = $result_capaian_total;

            // Predikat
            if ($result_sum_Kinerja_total >= 5) {
                $predikat = "ISTIMEWA";
            } elseif ($result_sum_Kinerja_total >= 4.01) {
                $predikat = "SANGAT BAIK";
            } elseif ($result_sum_Kinerja_total >= 3.01) {
                $predikat = "BAIK";
            } elseif ($result_sum_Kinerja_total >= 2.01) {
                $predikat = "CUKUP";
            } elseif ($result_sum_Kinerja_total == 0) {
                $predikat = "-";
            } else {
                $predikat = "KURANG";
            }
            $result_data["predikat"] = $predikat;

            // Result Array
            $messagesArray[] = $result_data;
        }
        // dd($messagesArray);

        return view('itisar.ChartRaport.Chart', compact('messagesArray', 'resultGetUsersName'));
    }
}
