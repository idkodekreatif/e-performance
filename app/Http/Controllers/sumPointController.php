<?php

namespace App\Http\Controllers;

use App\Models\Predikat\Raport;
use App\Models\Predikat\KomponenPoin;
use App\Models\Setting\Period;
use App\Models\Setting\Jabatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Illuminate\Http\Response;

class sumPointController extends Controller
{
    /**
     * Ambil nilai standar komponen berdasarkan jabatan user
     */
    private function getStandarKomponen($user_id, $komponen_nama)
    {
        $user = User::with('jabfung')->find($user_id);

        // Jika user tidak punya jabfung, gunakan Non-JAD
        if (!$user || $user->jabfung->isEmpty()) {
            return KomponenPoin::where('nama_komponen', $komponen_nama)
                ->value('Non-JAD') ?? 0;
        }

        // Ambil semua nama jabfung milik user
        $jabfungList = $user->jabfung->pluck('name')->toArray();
        $jabfungLower = array_map('strtolower', $jabfungList);

        // Daftar jabfung dosen valid
        $jabatanDosen = [
            'non-jad'       => 'Non-JAD',
            'asisten ahli'  => 'AA',
            'lektor'        => 'Lektor',
            'lektor kepala' => 'LK',
            'guru besar'    => 'GB',
        ];

        // Tentukan kolom jabfung yang sesuai
        $kolomJabatan = 'Non-JAD'; // default

        foreach ($jabfungLower as $jf) {
            if (array_key_exists($jf, $jabatanDosen)) {
                $kolomJabatan = $jabatanDosen[$jf];
                break;
            }
        }

        return KomponenPoin::where('nama_komponen', $komponen_nama)
            ->value($kolomJabatan) ?? 0;
    }


    /**
     * raportView
     */
    public function raportView($user_id, Request $request)
    {
        $user_id = $request->input('user_id', $user_id);
        $period_id = $request->input('period_id');
        $downloadPdf = $request->input('download') === 'pdf';

        $periods = Period::orderBy('start_date', 'desc')->get();

        if (!$period_id) {
            $activePeriod = Period::where('is_closed', 1)
                ->where('start_date', '<=', Carbon::now())
                ->where('end_date', '>=', Carbon::now())
                ->first();

            if (!$activePeriod) {
                return view('input-point.raport', [
                    'users' => null,
                    'resultArray' => null,
                    'periods' => $periods,
                    'selectedPeriodId' => null
                ]);
            }

            $period_id = $activePeriod->id;
        } else {
            $activePeriod = Period::find($period_id);
        }

        $users = DB::table('users')
            ->leftJoin('point_a', function ($join) use ($activePeriod) {
                $join->on('point_a.new_user_id', '=', 'users.id')
                    ->where('point_a.period_id', '=', $activePeriod->id);
            })
            ->leftJoin('point_b', function ($join) use ($activePeriod) {
                $join->on('point_b.new_user_id', '=', 'users.id')
                    ->where('point_b.period_id', '=', $activePeriod->id);
            })
            ->leftJoin('point_c', function ($join) use ($activePeriod) {
                $join->on('point_c.new_user_id', '=', 'users.id')
                    ->where('point_c.period_id', '=', $activePeriod->id);
            })
            ->leftJoin('point_d', function ($join) use ($activePeriod) {
                $join->on('point_d.new_user_id', '=', 'users.id')
                    ->where('point_d.period_id', '=', $activePeriod->id);
            })
            ->leftJoin('point_e', function ($join) use ($activePeriod) {
                $join->on('point_e.new_user_id', '=', 'users.id')
                    ->where('point_e.period_id', '=', $activePeriod->id);
            })
            ->select('users.*', 'point_a.*', 'point_b.*', 'point_c.*', 'point_d.*', 'point_e.*')
            ->where('users.id', $user_id)
            ->first();

        if (!$users) {
            return view('input-point.raport', [
                'users' => null,
                'resultArray' => null,
                'periods' => $periods,
                'selectedPeriodId' => $period_id
            ]);
        }

        // Ambil standar komponen berdasarkan jabatan user
        $standarA = $this->getStandarKomponen($user_id, 'Pendidikan');
        $standarB = $this->getStandarKomponen($user_id, 'Penelitian');
        $standarC = $this->getStandarKomponen($user_id, 'Pengabdian');
        $standarD = $this->getStandarKomponen($user_id, 'Penunjang');

        // Nilai mentah
        $a = (float) ($users->NilaiTotalPendidikanDanPengajaran ?? 0);
        $b = (float) ($users->NilaiTotalPenelitiandanKaryaIlmiah ?? 0);
        $c = (float) ($users->NilaiTotalPengabdianKepadaMasyarakat ?? 0);
        $d = (float) ($users->ResultSumNilaiTotalUnsurPenunjang ?? 0);
        $e = (float) ($users->NilaiUnsurPengabdian ?? 0);

        $total_Ntu = $a + $b + $c;
        $total_Ntd = $d + $e;
        $total_Nkd = $total_Ntu + $total_Ntd;

        // Hitung persentase dinamis
        $NtAFinalSum = $standarA > 0 ? ($a / $standarA) * 100 : 0;
        $NTiFinalSum = $standarB > 0 ? ($b / $standarB) * 100 : 0;
        $NTiFinalSumPkm = $standarC > 0 ? ($c / $standarC) * 100 : 0;
        $SUMUnsurPenungjang = $standarD > 0 ? ($total_Ntd / $standarD) * 100 : 0;

        $totalStandar = $standarA + $standarB + $standarC + $standarD;
        $result_PCT = $totalStandar > 0 ? (($a + $b + $c + $total_Ntd) / $totalStandar) * 100 : 0;

        $resultArray = [
            'a' => number_format($a, 2, '.', ''),
            'b' => number_format($b, 2, '.', ''),
            'c' => number_format($c, 2, '.', ''),
            'total_Ntu' => number_format($total_Ntu, 2, '.', ''),
            'total_Ntd' => number_format($total_Ntd, 2, '.', ''),
            'total_Nkd' => number_format($total_Nkd, 2, '.', ''),
            'SumNkt' => number_format($total_Nkd, 2, '.', ''),
            'standar_a' => number_format($standarA, 2, '.', ''),
            'standar_b' => number_format($standarB, 2, '.', ''),
            'standar_c' => number_format($standarC, 2, '.', ''),
            'standar_d' => number_format($standarD, 2, '.', ''),
            'sum_Skt' => number_format($totalStandar, 2, '.', ''),
            'result_PCT' => number_format($result_PCT, 2, '.', ''),
            'NtAFinalSum' => number_format($NtAFinalSum, 2, '.', ''),
            'NTiFinalSum' => number_format($NTiFinalSum, 2, '.', ''),
            'NTiFinalSumPkm' => number_format($NTiFinalSumPkm, 2, '.', ''),
            'SUMUnsurPenungjang' => number_format($SUMUnsurPenungjang, 2, '.', ''),
            'outputHasilPDP' => $this->getPredikat($NtAFinalSum),
            'OutputHasilPki' => $this->getPredikat($NTiFinalSum),
            'OutputHasilPkm' => $this->getPredikat($NTiFinalSumPkm),
            'OutputHasilUnsurPenunjang' => $this->getPredikat($SUMUnsurPenungjang),
        ];

        $testPredikat = Raport::where('a_poin', $resultArray['outputHasilPDP'])
            ->where('b_poin', 'LIKE', '%' . $resultArray['OutputHasilPki'] . '%')
            ->where('c_poin', 'LIKE', '%' . $resultArray['OutputHasilPkm'] . '%')
            ->where('d_poin', 'LIKE', '%' . $resultArray['OutputHasilUnsurPenunjang'] . '%')
            ->first();

        $resultArray['predikat'] = $testPredikat ? $testPredikat->predikat : 'Predikat tidak ditemukan';

        if ($downloadPdf) {
            $pdfView = view('input-point.raportPdf', [
                'users' => $users,
                'resultArray' => $resultArray,
                'periods' => $periods,
                'selectedPeriodId' => $period_id,
            ]);

            $pdf = Pdf::loadHtml($pdfView->render())
                ->setPaper('A4', 'portrait')
                ->setOptions(['defaultFont' => 'sans-serif']);

            return $pdf->download('raportDosen-' . ($users->name ?? 'user') . '.pdf');
        }

        return view('input-point.raport', compact('users', 'resultArray', 'periods'))
            ->with('selectedPeriodId', $period_id);
    }

    public function RaportChartView(Request $request)
    {
        $selectedPeriodId = $request->input('period');

        if (!$selectedPeriodId) {
            $activePeriod = Period::where('start_date', '<=', Carbon::now())
                ->where('end_date', '>=', Carbon::now())
                ->first();
            $selectedPeriodId = $activePeriod ? $activePeriod->id : null;
        }

        $allPeriods = Period::all();

        $resultGetUsersName = User::whereNotIn('name', [
            'superuser',
            'manajer',
            'it',
            'hrd',
            'lppm',
            'warek2',
            'upt',
            'baak',
            'keuangan',
            'lpm',
            'risbang',
            'gizi',
            'perawat',
            'bidan',
            'manajemen',
            'akuntansi',
            'bau',
            'warek1',
            'rektor',
            'ypsdmit'
        ])->get();

        $usersQuery = DB::table('users')
            ->leftJoin('point_a', 'point_a.new_user_id', '=', 'users.id')
            ->leftJoin('point_b', 'point_b.new_user_id', '=', 'users.id')
            ->leftJoin('point_c', 'point_c.new_user_id', '=', 'users.id')
            ->leftJoin('point_d', 'point_d.new_user_id', '=', 'users.id')
            ->leftJoin('point_e', 'point_e.new_user_id', '=', 'users.id')
            ->select(
                'users.id',
                'users.name',
                'point_a.NilaiTotalPendidikanDanPengajaran',
                'point_b.NilaiTotalPenelitiandanKaryaIlmiah',
                'point_c.NilaiTotalPengabdianKepadaMasyarakat',
                'point_d.ResultSumNilaiTotalUnsurPenunjang',
                'point_e.NilaiUnsurPengabdian'
            )
            ->where(function ($query) {
                $query->whereNotNull('point_a.NilaiTotalPendidikanDanPengajaran')
                    ->orWhereNotNull('point_b.NilaiTotalPenelitiandanKaryaIlmiah')
                    ->orWhereNotNull('point_c.NilaiTotalPengabdianKepadaMasyarakat')
                    ->orWhereNotNull('point_d.ResultSumNilaiTotalUnsurPenunjang')
                    ->orWhereNotNull('point_e.NilaiUnsurPengabdian');
            });

        // Filter berdasarkan periode
        if ($selectedPeriodId) {
            $usersQuery->where('point_a.period_id', '=', $selectedPeriodId)
                ->where('point_b.period_id', '=', $selectedPeriodId)
                ->where('point_c.period_id', '=', $selectedPeriodId)
                ->where('point_d.period_id', '=', $selectedPeriodId)
                ->where('point_e.period_id', '=', $selectedPeriodId);
        }

        // Filter tambahan (opsional)
        if ($request->filled('keyword')) {
            $usersQuery->where('users.name', 'LIKE', '%' . $request->keyword . '%');
        }
        if ($request->filled('User_Name')) {
            $usersQuery->where('users.id', $request->User_Name);
        }
        if ($request->filled('fakultas')) {
            $usersQuery->where('users.fakultas', $request->fakultas);
        }
        if ($request->filled('prodi')) {
            $usersQuery->where('users.prodi', $request->prodi);
        }

        $data = $usersQuery->get();

        $messagesArray = [];
        foreach ($data as $user) {
            // Ambil standar berdasarkan jabatan user
            $standarA = $this->getStandarKomponen($user->id, 'Pendidikan');
            $standarB = $this->getStandarKomponen($user->id, 'Penelitian');
            $standarC = $this->getStandarKomponen($user->id, 'Pengabdian');
            $standarD = $this->getStandarKomponen($user->id, 'Penunjang');

            $a = (float) ($user->NilaiTotalPendidikanDanPengajaran ?? 0);
            $b = (float) ($user->NilaiTotalPenelitiandanKaryaIlmiah ?? 0);
            $c = (float) ($user->NilaiTotalPengabdianKepadaMasyarakat ?? 0);
            $d = (float) ($user->ResultSumNilaiTotalUnsurPenunjang ?? 0);
            $e = (float) ($user->NilaiUnsurPengabdian ?? 0);

            $sum_d_e = $d + $e;
            $sum_Kinerja_total = $a + $b + $c + $sum_d_e;
            $totalStandar = $standarA + $standarB + $standarC + $standarD;

            // Hitung persentase dinamis
            $resultSumPendidikanDanPengajaran = $standarA > 0 ? ($a / $standarA) * 100 : 0;
            $resultSumPenelitian = $standarB > 0 ? ($b / $standarB) * 100 : 0;
            $resultSumPengabdian = $standarC > 0 ? ($c / $standarC) * 100 : 0;
            $resultSumPenunjangPengabdian = $standarD > 0 ? ($sum_d_e / $standarD) * 100 : 0;
            $presentase_capaian_total = $totalStandar > 0 ? ($sum_Kinerja_total / $totalStandar) * 100 : 0;

            // Predikat akhir
            if ($presentase_capaian_total >= 120) {
                $predikat = "ISTIMEWA";
            } elseif ($presentase_capaian_total >= 110) {
                $predikat = "SANGAT BAIK";
            } elseif ($presentase_capaian_total >= 100) {
                $predikat = "BAIK";
            } elseif ($presentase_capaian_total >= 80) {
                $predikat = "CUKUP";
            } elseif ($presentase_capaian_total == 0) {
                $predikat = "-";
            } else {
                $predikat = "KURANG";
            }

            $messagesArray[] = [
                "name" => $user->name,
                "PendidikanDanPengajaran" => number_format($resultSumPendidikanDanPengajaran, 2, '.', ''),
                "PenelitianDanKaryaIlmiah" => number_format($resultSumPenelitian, 2, '.', ''),
                "PengabdianMasyarakat" => number_format($resultSumPengabdian, 2, '.', ''),
                "PengabdianInstitusiDanPengembanganDiri" => number_format($resultSumPenunjangPengabdian, 2, '.', ''),
                "NilaiKinerjaTotal" => number_format($sum_Kinerja_total, 2, '.', ''),
                "StandartKinerjaTotal" => number_format($totalStandar, 2, '.', ''),
                "result_capaian_total" => number_format($presentase_capaian_total, 2, '.', ''),
                "predikat" => $predikat,
            ];
        }

        return view('input-point.chart_raport', compact('messagesArray', 'resultGetUsersName', 'allPeriods', 'selectedPeriodId'));
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
            ->where(function ($query) {
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

    // functuin mencari data page search
    public function searchRaport()
    {
        // Ambil semua periode
        $allPeriods = Period::all();

        // Ambil users yang bukan dari role/label tertentu
        $users = User::whereNotIn('name', [
            'superuser',
            'manajer',
            'it',
            'hrd',
            'lppm',
            'warek2',
            'upt',
            'baak',
            'keuangan',
            'lpm',
            'risbang',
            'gizi',
            'perawat',
            'bidan',
            'manajemen',
            'akuntansi',
            'bau',
            'warek1',
            'rektor',
            'ypsdmit'
        ])->pluck('name', 'id'); // Optimasi: hanya ambil name dan id

        return view('edit-point.hrd.search.searchDataRaport', compact('users', 'allPeriods'));
    }

    // Perbarui method resultSearchRaport
    public function resultSearchRaport(Request $request)
    {
        $request->validate([
            'period_id' => 'required|integer|exists:periods,id',
            'id' => 'required|integer|exists:users,id',
        ]);

        $period_id = $request->input('period_id');
        $user_id = $request->input('id');

        $users = DB::table('users')
            ->leftJoin('point_a', function ($join) use ($period_id) {
                $join->on('point_a.new_user_id', '=', 'users.id')
                    ->where('point_a.period_id', '=', $period_id);
            })
            ->leftJoin('point_b', function ($join) use ($period_id) {
                $join->on('point_b.new_user_id', '=', 'users.id')
                    ->where('point_b.period_id', '=', $period_id);
            })
            ->leftJoin('point_c', function ($join) use ($period_id) {
                $join->on('point_c.new_user_id', '=', 'users.id')
                    ->where('point_c.period_id', '=', $period_id);
            })
            ->leftJoin('point_d', function ($join) use ($period_id) {
                $join->on('point_d.new_user_id', '=', 'users.id')
                    ->where('point_d.period_id', '=', $period_id);
            })
            ->leftJoin('point_e', function ($join) use ($period_id) {
                $join->on('point_e.new_user_id', '=', 'users.id')
                    ->where('point_e.period_id', '=', $period_id);
            })
            ->select(
                'users.*',
                'point_a.NilaiTotalPendidikanDanPengajaran as nilai_a',
                'point_b.NilaiTotalPenelitiandanKaryaIlmiah as nilai_b',
                'point_c.NilaiTotalPengabdianKepadaMasyarakat as nilai_c',
                'point_d.ResultSumNilaiTotalUnsurPenunjang as nilai_d',
                'point_e.NilaiUnsurPengabdian as nilai_e'
            )
            ->where('users.id', $user_id)
            ->first();

        if (!$users) {
            return back()->with('error', 'Data dosen tidak ditemukan.');
        }

        // Ambil standar dinamis
        $standarA = $this->getStandarKomponen($user_id, 'Pendidikan');
        $standarB = $this->getStandarKomponen($user_id, 'Penelitian');
        $standarC = $this->getStandarKomponen($user_id, 'Pengabdian');
        $standarD = $this->getStandarKomponen($user_id, 'Penunjang');

        $a = (float) ($users->nilai_a ?? 0);
        $b = (float) ($users->nilai_b ?? 0);
        $c = (float) ($users->nilai_c ?? 0);
        $d = (float) ($users->nilai_d ?? 0);
        $e = (float) ($users->nilai_e ?? 0);

        $total_Ntu = $a + $b + $c;
        $total_Ntd = $d + $e;
        $total_Nkd = $total_Ntu + $total_Ntd;

        $NtAFinalSum = $standarA > 0 ? ($a / $standarA) * 100 : 0;
        $NTiFinalSum = $standarB > 0 ? ($b / $standarB) * 100 : 0;
        $NTiFinalSumPkm = $standarC > 0 ? ($c / $standarC) * 100 : 0;
        $SUMUnsurPenungjang = $standarD > 0 ? ($total_Ntd / $standarD) * 100 : 0;

        $totalStandar = $standarA + $standarB + $standarC + $standarD;
        $result_PCT = $totalStandar > 0 ? (($a + $b + $c + $total_Ntd) / $totalStandar) * 100 : 0;

        $getPredikat = function ($nilai) {
            if ($nilai >= 120) return 'ISTIMEWA';
            if ($nilai >= 110) return 'SANGAT BAIK';
            if ($nilai >= 100) return 'BAIK';
            if ($nilai >= 80) return 'CUKUP';
            return 'KURANG';
        };

        $outputHasilPDP = $getPredikat($NtAFinalSum);
        $OutputHasilPki = $getPredikat($NTiFinalSum);
        $OutputHasilPkm = $getPredikat($NTiFinalSumPkm);
        $OutputHasilUnsurPenunjang = $getPredikat($SUMUnsurPenungjang);
        $Result_predikat = $getPredikat($result_PCT);

        $testPredikat = Raport::where('a_poin', $outputHasilPDP)
            ->where('b_poin', 'LIKE', '%' . $OutputHasilPki . '%')
            ->where('c_poin', 'LIKE', '%' . $OutputHasilPkm . '%')
            ->where('d_poin', 'LIKE', '%' . $OutputHasilUnsurPenunjang . '%')
            ->first();

        $resultArray = [
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
            'SumNkt' => number_format($a + $b + $c + $total_Ntd, 2),
            'standar_a' => number_format($standarA, 2, '.', ''),
            'standar_b' => number_format($standarB, 2, '.', ''),
            'standar_c' => number_format($standarC, 2, '.', ''),
            'standar_d' => number_format($standarD, 2, '.', ''),
            'sum_Skt' => number_format($totalStandar, 2),
            'result_PCT' => number_format($result_PCT, 2),
            'outputHasilPDP' => $outputHasilPDP,
            'OutputHasilPki' => $OutputHasilPki,
            'OutputHasilPkm' => $OutputHasilPkm,
            'OutputHasilUnsurPenunjang' => $OutputHasilUnsurPenunjang,
            'Result_predikat' => $Result_predikat,
            'predikat' => $testPredikat ? $testPredikat->predikat : 'Predikat tidak ditemukan',
        ];

        return view('edit-point.hrd.raport.raport', compact('users', 'resultArray', 'period_id'));
    }

    // Perbarui juga method generatePDF
    public function generatePDF(Request $request, $id, $period_id)
    {
        $user_id = $id;
        $period = Period::find($period_id);
        $periodName = $period ? $period->name : 'Unknown Period';

        $users = DB::table('users')
            ->leftJoin('point_a', function ($join) use ($user_id, $period_id) {
                $join->on('point_a.new_user_id', '=', 'users.id')
                    ->where('point_a.period_id', '=', $period_id);
            })
            // ... (sama seperti sebelumnya untuk point_b sampai point_e)
            ->leftJoin('point_b', function ($join) use ($user_id, $period_id) {
                $join->on('point_b.new_user_id', '=', 'users.id')
                    ->where('point_b.period_id', '=', $period_id);
            })
            ->leftJoin('point_c', function ($join) use ($user_id, $period_id) {
                $join->on('point_c.new_user_id', '=', 'users.id')
                    ->where('point_c.period_id', '=', $period_id);
            })
            ->leftJoin('point_d', function ($join) use ($user_id, $period_id) {
                $join->on('point_d.new_user_id', '=', 'users.id')
                    ->where('point_d.period_id', '=', $period_id);
            })
            ->leftJoin('point_e', function ($join) use ($user_id, $period_id) {
                $join->on('point_e.new_user_id', '=', 'users.id')
                    ->where('point_e.period_id', '=', $period_id);
            })
            ->select('users.*', 'point_a.*', 'point_b.*', 'point_c.*', 'point_d.*', 'point_e.*')
            ->where('users.id', $user_id)
            ->first();

        if (!$users) {
            abort(404, 'User not found');
        }

        // Ambil standar dinamis
        $standarA = $this->getStandarKomponen($user_id, 'Pendidikan');
        $standarB = $this->getStandarKomponen($user_id, 'Penelitian');
        $standarC = $this->getStandarKomponen($user_id, 'Pengabdian');
        $standarD = $this->getStandarKomponen($user_id, 'Penunjang');

        $a = (float) ($users->NilaiTotalPendidikanDanPengajaran ?? 0);
        $b = (float) ($users->NilaiTotalPenelitiandanKaryaIlmiah ?? 0);
        $c = (float) ($users->NilaiTotalPengabdianKepadaMasyarakat ?? 0);
        $d = (float) ($users->ResultSumNilaiTotalUnsurPenunjang ?? 0);
        $e = (float) ($users->NilaiUnsurPengabdian ?? 0);

        $total_Ntu = $a + $b + $c;
        $total_Ntd = $d + $e;
        $total_Nkd = $total_Ntu + $total_Ntd;

        $NtAFinalSum = $standarA > 0 ? ($a / $standarA) * 100 : 0;
        $NTiFinalSum = $standarB > 0 ? ($b / $standarB) * 100 : 0;
        $NTiFinalSumPkm = $standarC > 0 ? ($c / $standarC) * 100 : 0;
        $SUMUnsurPenungjang = $standarD > 0 ? ($total_Ntd / $standarD) * 100 : 0;

        $totalStandar = $standarA + $standarB + $standarC + $standarD;
        $result_PCT = $totalStandar > 0 ? (($a + $b + $c + $total_Ntd) / $totalStandar) * 100 : 0;


        // Format semua nilai
        $resultArray = [
            'a' => number_format($a, 2, '.', ''),
            'b' => number_format($b, 2, '.', ''),
            'c' => number_format($c, 2, '.', ''),
            'total_Ntu' => number_format($total_Ntu, 2, '.', ''),
            'total_Ntd' => number_format($total_Ntd, 2, '.', ''),
            'total_Nkd' => number_format($total_Nkd, 2, '.', ''),
            'NtAFinalSum' => number_format($NtAFinalSum, 2, '.', ''),
            'NTiFinalSum' => number_format($NTiFinalSum, 2, '.', ''),
            'NTiFinalSumPkm' => number_format($NTiFinalSumPkm, 2, '.', ''),
            'SUMUnsurPenungjang' => number_format($SUMUnsurPenungjang, 2, '.', ''),
            'SumNkt' => number_format($total_Nkd, 2, '.', ''),
            'standar_a' => number_format($standarA, 2, '.', ''),
            'standar_b' => number_format($standarB, 2, '.', ''),
            'standar_c' => number_format($standarC, 2, '.', ''),
            'standar_d' => number_format($standarD, 2, '.', ''),
            'sum_Skt' => number_format($totalStandar, 2, '.', ''),
            'result_PCT' => number_format($result_PCT, 2, '.', ''),
        ];

        // Predikat
        $outputHasilPDP = $this->getPredikat($NtAFinalSum);
        $OutputHasilPki = $this->getPredikat($NTiFinalSum);
        $OutputHasilPkm = $this->getPredikat($NTiFinalSumPkm);
        $OutputHasilUnsurPenunjang = $this->getPredikat($SUMUnsurPenungjang);
        $Result_predikat = $this->getPredikat($result_PCT);

        $resultArray['outputHasilPDP'] = $outputHasilPDP;
        $resultArray['OutputHasilPki'] = $OutputHasilPki;
        $resultArray['OutputHasilPkm'] = $OutputHasilPkm;
        $resultArray['OutputHasilUnsurPenunjang'] = $OutputHasilUnsurPenunjang;
        $resultArray['Result_predikat'] = $Result_predikat;

        $testPredikat = Raport::where('a_poin', $outputHasilPDP)
            ->where('b_poin', 'LIKE', '%' . $OutputHasilPki . '%')
            ->where('c_poin', 'LIKE', '%' . $OutputHasilPkm . '%')
            ->where('d_poin', 'LIKE', '%' . $OutputHasilUnsurPenunjang . '%')
            ->first();

        $resultArray['predikat'] = $testPredikat ? $testPredikat->predikat : 'Predikat tidak ditemukan';

        $html = view('edit-point.hrd.raport.raportPDF', compact('users', 'resultArray', 'user_id', 'period_id', 'periodName'))->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->getOptions()->setIsHtml5ParserEnabled(true);
        $dompdf->render();

        $pdfName = 'raport_' . $user_id . '.pdf';
        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $pdfName . '"'
        ]);
    }

    // Helper predikat tetap sama
    private function getPredikat($nilai)
    {
        if ($nilai >= 120) return 'ISTIMEWA';
        if ($nilai >= 110) return 'SANGAT BAIK';
        if ($nilai >= 100) return 'BAIK';
        if ($nilai >= 80) return 'CUKUP';
        return 'KURANG';
    }
}
