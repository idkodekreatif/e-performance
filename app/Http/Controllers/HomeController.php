<?php

namespace App\Http\Controllers;

use App\Models\Predikat\Raport;
use App\Models\Setting\Period;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user(); // Ambil user yang sedang login
        $user_id = $user->id;

        // Ambil 5 periode terakhir berdasarkan data point_a yang dimiliki user
        $periods = Period::whereIn('id', function ($query) use ($user_id) {
            $query->select('period_id')
                ->from('point_a')
                ->where('new_user_id', $user_id);
        })
            ->whereDate('start_date', '>=', now()->subYears(4))
            ->orderBy('start_date', 'desc')
            ->take(5)
            ->get();

        $allUsersData = [];
        $resultArray = [];

        foreach ($periods as $period) {
            $userData = DB::table('users')
                ->leftJoin('point_a', function ($join) use ($period) {
                    $join->on('point_a.new_user_id', '=', 'users.id')
                        ->where('point_a.period_id', '=', $period->id);
                })
                ->leftJoin('point_b', function ($join) use ($period) {
                    $join->on('point_b.new_user_id', '=', 'users.id')
                        ->where('point_b.period_id', '=', $period->id);
                })
                ->leftJoin('point_c', function ($join) use ($period) {
                    $join->on('point_c.new_user_id', '=', 'users.id')
                        ->where('point_c.period_id', '=', $period->id);
                })
                ->leftJoin('point_d', function ($join) use ($period) {
                    $join->on('point_d.new_user_id', '=', 'users.id')
                        ->where('point_d.period_id', '=', $period->id);
                })
                ->leftJoin('point_e', function ($join) use ($period) {
                    $join->on('point_e.new_user_id', '=', 'users.id')
                        ->where('point_e.period_id', '=', $period->id);
                })
                ->select('users.*', 'point_a.*', 'point_b.*', 'point_c.*', 'point_d.*', 'point_e.*')
                ->where('users.id', $user_id)
                ->first();

            if ($userData) {
                $a = (float) ($userData->NilaiTotalPendidikanDanPengajaran ?? 0);
                $b = (float) ($userData->NilaiTotalPenelitiandanKaryaIlmiah ?? 0);
                $c = (float) ($userData->NilaiTotalPengabdianKepadaMasyarakat ?? 0);
                $d = (float) ($userData->ResultSumNilaiTotalUnsurPenunjang ?? 0);
                $e = (float) ($userData->NilaiUnsurPengabdian ?? 0);

                $total_Ntu = $a + $b + $c;
                $total_Ntd = $d + $e;
                $total_Nkd = $total_Ntu + $total_Ntd;

                $NtAFinalSum = ($a / 11.69) * 100;
                $NTiFinalSum = ($b / 4.26) * 100;
                $NTiFinalSumPkm = ($c / 1.2) * 100;
                $SUMUnsurPenungjang = ($total_Ntd / 2.17) * 100;

                // Rata-rata dari 4 komponen utama
                $averageFinalScore = ($NtAFinalSum + $NTiFinalSum + $NTiFinalSumPkm + $SUMUnsurPenungjang) / 4;

                $SumNkt = $a + $b + $c + $total_Ntd;
                $sum_Skt = 11.69 + 4.26 + 1.2 + 2.17;
                $result_PCT = ($SumNkt / $sum_Skt) * 100;

                // Predikat PDP
                $outputHasilPDP = $this->getGrade($NtAFinalSum);
                $OutputHasilPki = $this->getGrade($NTiFinalSum);
                $OutputHasilPkm = $this->getGrade($NTiFinalSumPkm);
                $OutputHasilUnsurPenunjang = $this->getGrade($SUMUnsurPenungjang);
                $Result_predikat = $this->getGrade($result_PCT);

                $testPredikat = Raport::where('a_poin', $outputHasilPDP)
                    ->where('b_poin', 'LIKE', '%' . $OutputHasilPki . '%')
                    ->where('c_poin', 'LIKE', '%' . $OutputHasilPkm . '%')
                    ->where('d_poin', 'LIKE', '%' . $OutputHasilUnsurPenunjang . '%')
                    ->first();

                $resultArray[$period->id] = [
                    'a' => number_format($a, 2),
                    'b' => number_format($b, 2),
                    'c' => number_format($c, 2),
                    'd' => number_format($d, 2),
                    'e' => number_format($e, 2),
                    'total_Ntu' => number_format($total_Ntu, 2),
                    'total_Ntd' => number_format($total_Ntd, 2),
                    'total_Nkd' => number_format($total_Nkd, 2),
                    'NtAFinalSum' => number_format($NtAFinalSum, 2),
                    'NTiFinalSum' => number_format($NTiFinalSum, 2),
                    'NTiFinalSumPkm' => number_format($NTiFinalSumPkm, 2),
                    'SUMUnsurPenungjang' => number_format($SUMUnsurPenungjang, 2),
                    'averageFinalScore' => number_format($averageFinalScore, 2),
                    'SumNkt' => number_format($SumNkt, 2),
                    'sum_Skt' => number_format($sum_Skt, 2),
                    'result_PCT' => number_format($result_PCT, 2),
                    'outputHasilPDP' => $outputHasilPDP,
                    'OutputHasilPki' => $OutputHasilPki,
                    'OutputHasilPkm' => $OutputHasilPkm,
                    'OutputHasilUnsurPenunjang' => $OutputHasilUnsurPenunjang,
                    'Result_predikat' => $Result_predikat,
                    'predikat' => $testPredikat ? $testPredikat->predikat : 'Predikat tidak ditemukan'
                ];

                $allUsersData[] = [
                    'period' => $period,
                    'data' => $userData
                ];
            }
        }

        return view('home', [
            'allUsersData' => $allUsersData,
            'resultArray' => $resultArray,
            'periods' => $periods,
            'user_id' => $user_id
        ]);
    }

    /**
     * Utility function to determine grade from score
     */
    private function getGrade($value)
    {
        if ($value >= 120) {
            return 'ISTIMEWA';
        } elseif ($value >= 110) {
            return 'SANGAT BAIK';
        } elseif ($value >= 100) {
            return 'BAIK';
        } elseif ($value >= 80) {
            return 'CUKUP';
        } else {
            return 'KURANG';
        }
    }


    public function build()
    {
        return view('build.nextIktisar');
    }
}
