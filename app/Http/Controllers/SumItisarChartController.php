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

        $data = $users
        ->leftJoin('baak', 'baak.user_id', 'users.id')
        // ->leftJoin('baak_bisnis', 'baak_bisnis.user_id', 'users.id')
        ->whereNotNull('baak.user_id')
        // ->whereNotNull('baak_bisnis.user_id')
        ->select(
            'users.name',
            'baak.output_total_sementara_kinerja_perilaku',
            'baak.output_total_sementara_kinerja_kompetensi',
            // 'baak_bisnis.output_total_sementara_kinerja_perilaku',
            // 'baak_bisnis.output_total_sementara_kinerja_kompetensi',
            )
        ->get();


        $messagesArray = [];
        foreach ($data as $data) {
            // GET Nilai dari database Join
            $result_data["name"] = $data->name;
            $a = (float)$data->output_total_sementara_kinerja_perilaku;
            $b = (float)$data->output_total_sementara_kinerja_kompetensi;
            // Result SUM Nilai Akhir Nilai Kinerja total
            $sum_Kinerja_total = $a + $b;
            $result_sum_Kinerja_total = number_format((float)$sum_Kinerja_total, 2, '.', '');
            $result_data['NilaiKinerjaTotal'] = $result_sum_Kinerja_total;

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
        dd($data);

        return view('itisar.ChartRaport.Chart', compact('messagesArray', 'resultGetUsersName'));
    }
}
