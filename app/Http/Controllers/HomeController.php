<?php

namespace App\Http\Controllers;

use App\Models\Predikat\Raport;
use App\Models\Setting\Period;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard view.
     */
    public function index()
    {
        $user = auth()->user();
        $user_id = $user->id;

        [$allUsersData, $resultArray, $periods] = $this->calculateUserPerformanceDataItikad($user_id);
        // Debug hasil rekap 4 bulan terakhir
        // dd($this->getRekapEmpatBulanTerakhirItisar($user));
        $rekapEmpatBulan = $this->getRekapEmpatBulanTerakhirItisar($user);

        return view('home', [
            'allUsersData' => $allUsersData,
            'resultArray' => $resultArray,
            'periods' => $periods,
            'user_id' => $user_id,
            'rekapEmpatBulan' => $rekapEmpatBulan
        ]);
    }

    /**
     * Cek apakah tabel tersedia
     */
    private function tableExists($table)
    {
        return Schema::hasTable($table);
    }

    /**
     * Ambil rekap 4 bulan terakhir berdasarkan role user
     */
    private function getRekapEmpatBulanTerakhirItisar($user)
    {
        $jabatanName = strtolower(optional($user->jabatan)->name);

        $jabatanToTable = [
            'kaupt'            => 'iktisar_kaunit_bulanan_perilaku',
            'baak'             => 'iktisar_kaunit_baak_bulanan_perilaku',
            'dosen'            => 'iktisar_dosen_bulanan',
            'bau'              => 'iktisar_bau_bulanan_perilaku',
            'dekan'            => 'iktisar_dekan_bulanan_perilaku',
            'staff_hrd'        => 'iktisar_staff_hrd_bulanan_perilaku',
            'kaprodi'          => 'iktisar_kaprodi_bulanan_perilaku',
            'keuangan'         => 'iktisar_keuangan_bulanan_perilaku',
            'lpm'              => 'iktisar_lpm_bulanan_perilaku',
            'staff_marketing'  => 'iktisar_staff_marketing_perilaku',
            'rektor'           => 'iktisar_rektor_bulanan_perilaku',
            'risbang'          => 'iktisar_risbang_bulanan_perilaku',
            'warek1'           => 'iktisar_warek1_bulanan_perilaku',
            'warek2'           => 'iktisar_warek2_bulanan_perilaku',
            'kaunit_ypsdmit'   => 'kaunit_ypsdmit_bulanan_perilaku',
            'staffupt'         => 'iktisar_staff_bulanan_perilaku',
        ];

        if (!array_key_exists($jabatanName, $jabatanToTable)) {
            return collect();
        }

        $table = $jabatanToTable[$jabatanName];

        if (!$this->tableExists($table)) {
            return collect();
        }

        $userId = $user->id;

        // Format tanggal untuk field DATE
        $endRef = Carbon::now()->subMonth();
        $startDate = $endRef->copy()->subMonths(3)->startOfMonth()->format('Y-m-d'); // mulai dari 3 bulan sebelum bulan sebelumnya
        $endDate = $endRef->copy()->endOfMonth()->format('Y-m-d'); // akhir bulan sebelumnya


        return DB::table($table)
            ->select(
                DB::raw('MONTH(created_insert) as bulan'),
                DB::raw('YEAR(created_insert) as tahun'),
                DB::raw('AVG(output_total_sementara_kinerja_perilaku) as rata_kinerja'),
                DB::raw('AVG(total_nilai_presentase) as rata_presentase')
            )
            ->where('user_id', $userId)
            ->whereBetween('created_insert', [$startDate, $endDate])
            ->groupBy(DB::raw('YEAR(created_insert)'), DB::raw('MONTH(created_insert)'))
            ->orderBy('tahun', 'ASC')
            ->orderBy('bulan', 'ASC')
            ->get();
    }

    /**
     * Hitung data performa pengguna
     */
    private function calculateUserPerformanceDataItikad($user_id)
    {
        $periods = Period::whereIn('id', function ($query) use ($user_id) {
            $query->select('period_id')
                ->from('point_a')
                ->where('new_user_id', $user_id);
        })
            ->whereDate('start_date', '>=', now()->subYears(4))
            ->orderBy('start_date', 'ASC')
            ->take(5)
            ->get();

        $allUsersData = [];
        $resultArray = [];

        foreach ($periods as $period) {
            $userData = DB::table('users')
                ->leftJoin('point_a', fn($join) => $join->on('point_a.new_user_id', '=', 'users.id')
                    ->where('point_a.period_id', '=', $period->id))
                ->leftJoin('point_b', fn($join) => $join->on('point_b.new_user_id', '=', 'users.id')
                    ->where('point_b.period_id', '=', $period->id))
                ->leftJoin('point_c', fn($join) => $join->on('point_c.new_user_id', '=', 'users.id')
                    ->where('point_c.period_id', '=', $period->id))
                ->leftJoin('point_d', fn($join) => $join->on('point_d.new_user_id', '=', 'users.id')
                    ->where('point_d.period_id', '=', $period->id))
                ->leftJoin('point_e', fn($join) => $join->on('point_e.new_user_id', '=', 'users.id')
                    ->where('point_e.period_id', '=', $period->id))
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

                $averageFinalScore = ($NtAFinalSum + $NTiFinalSum + $NTiFinalSumPkm + $SUMUnsurPenungjang) / 4;

                $SumNkt = $a + $b + $c + $total_Ntd;
                $sum_Skt = 11.69 + 4.26 + 1.2 + 2.17;
                $result_PCT = ($SumNkt / $sum_Skt) * 100;

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

        return [$allUsersData, $resultArray, $periods];
    }

    /**
     * Konversi nilai ke grade
     */
    private function getGrade($value)
    {
        if ($value >= 120) return 'ISTIMEWA';
        if ($value >= 110) return 'SANGAT BAIK';
        if ($value >= 100) return 'BAIK';
        if ($value >= 80) return 'CUKUP';
        return 'KURANG';
    }

    /**
     * Halaman builder view
     */
    public function build()
    {
        return view('build.nextIktisar');
    }
}
