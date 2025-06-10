<?php

namespace App\Http\Controllers;

use App\Models\Predikat\Raport;
use App\Models\Setting\Period;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Illuminate\Http\Response;

/**
 * sumPointController
 */
class sumPointController extends Controller
{
    /**
     * raportView
     *
     * @param  mixed $user_id
     * @return void
     */

    public function raportView($user_id, Request $request)
    {
        $user_id = $request->input('user_id');
        $period_id = $request->input('period_id');

        // Ambil semua periode terlebih dahulu
        $periods = Period::orderBy('start_date', 'desc')->get();

        if (!$period_id) {
            $activePeriod = Period::where('is_closed', 1)
                ->where('start_date', '<=', Carbon::now())
                ->where('end_date', '>=', Carbon::now())
                ->first();

            if (!$activePeriod) {
                return view('input-point.raport', ['users' => null, 'resultArray' => null, 'periods' => $periods]);
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
            return view('input-point.raport', ['users' => null, 'resultArray' => null, 'periods' => $periods]);
        }


        $resultArray = [];

        $a = (float) ($users->NilaiTotalPendidikanDanPengajaran ?? 0);
        $aFormatted = number_format((float) $a, 2, '.', '');

        $b = (float) ($users->NilaiTotalPenelitiandanKaryaIlmiah ?? 0);
        $bFormatted = number_format((float) $b, 2, '.', '');

        $c = (float) ($users->NilaiTotalPengabdianKepadaMasyarakat ?? 0);
        $cFormatted = number_format((float) $c, 2, '.', '');

        // SUM Point (A, B, C)
        $total_Ntu = $a + $b + $c;
        $total_NtuFormatted = number_format((float) $total_Ntu, 2, '.', '');

        $d = (float) ($users->ResultSumNilaiTotalUnsurPenunjang ?? 0);
        $e = (float) ($users->NilaiUnsurPengabdian ?? 0);

        // SUM Point (D, E)
        $total_Ntd = $d + $e;
        $total_NtdFormatted = number_format((float) $total_Ntd, 2, '.', '');

        // SUM Point Nilai Kinerja Dosen
        $total_Nkd = $total_Ntu + $total_Ntd;
        $total_NkdFormatted = number_format((float) $total_Nkd, 2, '.', '');

        $NtAFinalSum = ($a / 11.69) * 100;
        $NtAFinalSumFormatted = number_format((float) $NtAFinalSum, 2, '.', '');
        if ($NtAFinalSum >= 120) {
            $outputHasilPDP = 'ISTIMEWA';
        } elseif ($NtAFinalSum >= 110) {
            $outputHasilPDP = 'SANGAT BAIK';
        } elseif ($NtAFinalSum >= 100) {
            $outputHasilPDP = 'BAIK';
        } elseif ($NtAFinalSum >= 80) {
            $outputHasilPDP = 'CUKUP';
        } else {
            $outputHasilPDP = 'KURANG';
        }

        $NTiFinalSum = ($b / 4.26) * 100;
        $NTiFinalSumFormatted = number_format((float) $NTiFinalSum, 2, '.', '');
        if ($NTiFinalSum >= 120) {
            $OutputHasilPki = 'ISTIMEWA';
        } elseif ($NTiFinalSum >= 110) {
            $OutputHasilPki = 'SANGAT BAIK';
        } elseif ($NTiFinalSum >= 100) {
            $OutputHasilPki = 'BAIK';
        } elseif ($NTiFinalSum >= 80) {
            $OutputHasilPki = 'CUKUP';
        } else {
            $OutputHasilPki = 'KURANG';
        }

        $NTiFinalSumPkm = ($c / 1.2) * 100;
        $NTiFinalSumPkmFormatted = number_format((float) $NTiFinalSumPkm, 2, '.', '');
        if ($NTiFinalSumPkm >= 120) {
            $OutputHasilPkm = 'ISTIMEWA';
        } elseif ($NTiFinalSumPkm >= 110) {
            $OutputHasilPkm = 'SANGAT BAIK';
        } elseif ($NTiFinalSumPkm >= 100) {
            $OutputHasilPkm = 'BAIK';
        } elseif ($NTiFinalSumPkm >= 80) {
            $OutputHasilPkm = 'CUKUP';
        } else {
            $OutputHasilPkm = 'KURANG';
        }

        // Persentase Capaian terhadap standar (%) Point UNSUR PENUNJANG, Pengabdian institusi, dan pengembangan diri
        $SUMUnsurPenungjang = ($total_Ntd / 2.17) * 100;
        $SUMUnsurPenungjangFormatted = number_format((float) $SUMUnsurPenungjang, 2, '.', '');

        // Predikat
        if ($SUMUnsurPenungjang >= 120) {
            $OutputHasilUnsurPenunjang = 'ISTIMEWA';
        } elseif ($SUMUnsurPenungjang >= 110) {
            $OutputHasilUnsurPenunjang = 'SANGAT BAIK';
        } elseif ($SUMUnsurPenungjang >= 100) {
            $OutputHasilUnsurPenunjang = 'BAIK';
        } elseif ($SUMUnsurPenungjang >= 80) {
            $OutputHasilUnsurPenunjang = 'CUKUP';
        } else {
            $OutputHasilUnsurPenunjang = 'KURANG';
        }

        // SUM Nilai kinerja total
        $SumNkt = $a + $b + $c + $total_Ntd;
        $SumNktFormatted = number_format((float) $SumNkt, 2, '.', '');

        // SUM Nilai standar
        $sum_Skt = 11.69 + 4.26 + 1.2 + 2.17;
        $sum_SktFormatted = number_format((float) $sum_Skt, 2, '.', '');

        // Result nilai presentasi Capaian total (%)
        $result_PCT = ($SumNkt / $sum_Skt) * 100;
        $result_PCTFormatted = number_format((float) $result_PCT, 2, '.', '');

        // Predikat akhir
        if ($result_PCT >= 120) {
            $Result_predikat = 'ISTIMEWA';
        } elseif ($result_PCT >= 110) {
            $Result_predikat = 'SANGAT BAIK';
        } elseif ($result_PCT >= 100) {
            $Result_predikat = 'BAIK';
        } elseif ($result_PCT >= 80) {
            $Result_predikat = 'CUKUP';
        } else {
            $Result_predikat = 'KURANG';
        }

        $resultArray['total_Ntu'] = $total_NtuFormatted;
        $resultArray['total_Ntd'] = $total_NtdFormatted;
        $resultArray['total_Nkd'] = $total_NkdFormatted;

        $resultArray['a'] = $aFormatted;
        $resultArray['NtAFinalSum'] = $NtAFinalSumFormatted;
        // predikat 1
        $resultArray['outputHasilPDP'] = $outputHasilPDP;

        // predikat 2
        $resultArray['OutputHasilPki'] = $OutputHasilPki;
        // predikat 3
        $resultArray['OutputHasilPkm'] = $OutputHasilPkm;
        // predikat 4
        $resultArray['OutputHasilUnsurPenunjang'] = $OutputHasilUnsurPenunjang;
        // predikat akhir
        $resultArray['Result_predikat'] = $Result_predikat;

        $resultArray['b'] = $bFormatted;
        $resultArray['NTiFinalSum'] = $NTiFinalSumFormatted;
        $resultArray['c'] = $cFormatted;
        $resultArray['NTiFinalSumPkm'] = $NTiFinalSumPkmFormatted;
        $resultArray['total_Ntd'] = $total_NtdFormatted;
        $resultArray['SUMUnsurPenungjang'] = $SUMUnsurPenungjangFormatted;
        $resultArray['SumNkt'] = $SumNktFormatted;
        $resultArray['sum_Skt'] = $sum_SktFormatted;
        $resultArray['result_PCT'] = $result_PCTFormatted;

        $testPredikat = Raport::where('a_poin', $outputHasilPDP)
            ->where('b_poin', 'LIKE', '%' . $OutputHasilPki . '%')
            ->where('c_poin', 'LIKE', '%' . $OutputHasilPkm . '%')
            ->where('d_poin', 'LIKE', '%' . $OutputHasilUnsurPenunjang . '%')
            ->first();

        if ($testPredikat) {
            $resultArray['predikat'] = $testPredikat->predikat;
        } else {
            $resultArray['predikat'] = 'Predikat tidak ditemukan';
        }

        return view('input-point.raport', compact('users', 'resultArray', 'periods'));
    }


    // public function raportView($user_id, Request $request)
    // {
    //     $user_id = $request->input('user_id');
    //     $period_id = $request->input('period_id');

    //     $periods = Period::orderBy('start_date', 'desc')->get();

    //     if (!$period_id) {
    //         $activePeriod = Period::where('is_closed', 1)
    //             ->where('start_date', '<=', Carbon::now())
    //             ->where('end_date', '>=', Carbon::now())
    //             ->first();

    //         if (!$activePeriod) {
    //             return view('input-point.raport', ['users' => null, 'resultArray' => null, 'periods' => $periods]);
    //         }

    //         $period_id = $activePeriod->id;
    //     }

    //     // Ambil data periode (semua untuk dropdown)
    //     $periods = Period::orderBy('start_date', 'desc')->get();



    //     if (!$users) {
    //         // Return empty data or handle the case when there are no users with the given ID.
    //         return view('input-point.raport', ['users' => null, 'resultArray' => null]);
    //     }

    //     return view('input-point.raport', compact('users', 'resultArray', 'periods'));
    // }

    public function raportPdf($user_id)
    {
        $activePeriod = Period::where('is_closed', 1)
            ->where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->first();

        if (!$activePeriod) {
            // Return empty data or handle the case when there is no active period.
            return view('input-point.raport', ['users' => null, 'resultArray' => null]);
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
            // Return empty data or handle the case when there are no users with the given ID.
            return view('input-point.raport', ['users' => null, 'resultArray' => null]);
        }

        $resultArray = [];

        $a = (float) ($users->NilaiTotalPendidikanDanPengajaran ?? 0);
        $aFormatted = number_format((float) $a, 2, '.', '');

        $b = (float) ($users->NilaiTotalPenelitiandanKaryaIlmiah ?? 0);
        $bFormatted = number_format((float) $b, 2, '.', '');

        $c = (float) ($users->NilaiTotalPengabdianKepadaMasyarakat ?? 0);
        $cFormatted = number_format((float) $c, 2, '.', '');

        // SUM Point (A, B, C)
        $total_Ntu = $a + $b + $c;
        $total_NtuFormatted = number_format((float) $total_Ntu, 2, '.', '');

        $d = (float) ($users->ResultSumNilaiTotalUnsurPenunjang ?? 0);
        $e = (float) ($users->NilaiUnsurPengabdian ?? 0);

        // SUM Point (D, E)
        $total_Ntd = $d + $e;
        $total_NtdFormatted = number_format((float) $total_Ntd, 2, '.', '');

        // SUM Point Nilai Kinerja Dosen
        $total_Nkd = $total_Ntu + $total_Ntd;
        $total_NkdFormatted = number_format((float) $total_Nkd, 2, '.', '');

        $NtAFinalSum = ($a / 11.69) * 100;
        $NtAFinalSumFormatted = number_format((float) $NtAFinalSum, 2, '.', '');
        if ($NtAFinalSum >= 120) {
            $outputHasilPDP = 'ISTIMEWA';
        } elseif ($NtAFinalSum >= 110) {
            $outputHasilPDP = 'SANGAT BAIK';
        } elseif ($NtAFinalSum >= 100) {
            $outputHasilPDP = 'BAIK';
        } elseif ($NtAFinalSum >= 80) {
            $outputHasilPDP = 'CUKUP';
        } else {
            $outputHasilPDP = 'KURANG';
        }

        $NTiFinalSum = ($b / 4.26) * 100;
        $NTiFinalSumFormatted = number_format((float) $NTiFinalSum, 2, '.', '');
        if ($NTiFinalSum >= 120) {
            $OutputHasilPki = 'ISTIMEWA';
        } elseif ($NTiFinalSum >= 110) {
            $OutputHasilPki = 'SANGAT BAIK';
        } elseif ($NTiFinalSum >= 100) {
            $OutputHasilPki = 'BAIK';
        } elseif ($NTiFinalSum >= 80) {
            $OutputHasilPki = 'CUKUP';
        } else {
            $OutputHasilPki = 'KURANG';
        }

        $NTiFinalSumPkm = ($c / 1.2) * 100;
        $NTiFinalSumPkmFormatted = number_format((float) $NTiFinalSumPkm, 2, '.', '');
        if ($NTiFinalSumPkm >= 120) {
            $OutputHasilPkm = 'ISTIMEWA';
        } elseif ($NTiFinalSumPkm >= 110) {
            $OutputHasilPkm = 'SANGAT BAIK';
        } elseif ($NTiFinalSumPkm >= 100) {
            $OutputHasilPkm = 'BAIK';
        } elseif ($NTiFinalSumPkm >= 80) {
            $OutputHasilPkm = 'CUKUP';
        } else {
            $OutputHasilPkm = 'KURANG';
        }

        // Persentase Capaian terhadap standar (%) Point UNSUR PENUNJANG, Pengabdian institusi, dan pengembangan diri
        $SUMUnsurPenungjang = ($total_Ntd / 2.17) * 100;
        $SUMUnsurPenungjangFormatted = number_format((float) $SUMUnsurPenungjang, 2, '.', '');

        // Predikat
        if ($SUMUnsurPenungjang >= 120) {
            $OutputHasilUnsurPenunjang = 'ISTIMEWA';
        } elseif ($SUMUnsurPenungjang >= 110) {
            $OutputHasilUnsurPenunjang = 'SANGAT BAIK';
        } elseif ($SUMUnsurPenungjang >= 100) {
            $OutputHasilUnsurPenunjang = 'BAIK';
        } elseif ($SUMUnsurPenungjang >= 80) {
            $OutputHasilUnsurPenunjang = 'CUKUP';
        } else {
            $OutputHasilUnsurPenunjang = 'KURANG';
        }

        // SUM Nilai kinerja total
        $SumNkt = $a + $b + $c + $total_Ntd;
        $SumNktFormatted = number_format((float) $SumNkt, 2, '.', '');

        // SUM Nilai standar
        $sum_Skt = 11.69 + 4.26 + 1.2 + 2.17;
        $sum_SktFormatted = number_format((float) $sum_Skt, 2, '.', '');

        // Result nilai presentasi Capaian total (%)
        $result_PCT = ($SumNkt / $sum_Skt) * 100;
        $result_PCTFormatted = number_format((float) $result_PCT, 2, '.', '');

        // Predikat akhir
        if ($result_PCT >= 120) {
            $Result_predikat = 'ISTIMEWA';
        } elseif ($result_PCT >= 110) {
            $Result_predikat = 'SANGAT BAIK';
        } elseif ($result_PCT >= 100) {
            $Result_predikat = 'BAIK';
        } elseif ($result_PCT >= 80) {
            $Result_predikat = 'CUKUP';
        } else {
            $Result_predikat = 'KURANG';
        }

        $resultArray['total_Ntu'] = $total_NtuFormatted;
        $resultArray['total_Ntd'] = $total_NtdFormatted;
        $resultArray['total_Nkd'] = $total_NkdFormatted;

        $resultArray['a'] = $aFormatted;
        $resultArray['NtAFinalSum'] = $NtAFinalSumFormatted;
        // predikat 1
        $resultArray['outputHasilPDP'] = $outputHasilPDP;

        // predikat 2
        $resultArray['OutputHasilPki'] = $OutputHasilPki;
        // predikat 3
        $resultArray['OutputHasilPkm'] = $OutputHasilPkm;
        // predikat 4
        $resultArray['OutputHasilUnsurPenunjang'] = $OutputHasilUnsurPenunjang;
        // predikat akhir
        $resultArray['Result_predikat'] = $Result_predikat;

        $resultArray['b'] = $bFormatted;
        $resultArray['NTiFinalSum'] = $NTiFinalSumFormatted;
        $resultArray['c'] = $cFormatted;
        $resultArray['NTiFinalSumPkm'] = $NTiFinalSumPkmFormatted;
        $resultArray['total_Ntd'] = $total_NtdFormatted;
        $resultArray['SUMUnsurPenungjang'] = $SUMUnsurPenungjangFormatted;
        $resultArray['SumNkt'] = $SumNktFormatted;
        $resultArray['sum_Skt'] = $sum_SktFormatted;
        $resultArray['result_PCT'] = $result_PCTFormatted;

        $testPredikat = Raport::where('a_poin', $outputHasilPDP)
            ->where('b_poin', 'LIKE', '%' . $OutputHasilPki . '%')
            ->where('c_poin', 'LIKE', '%' . $OutputHasilPkm . '%')
            ->where('d_poin', 'LIKE', '%' . $OutputHasilUnsurPenunjang . '%')
            ->first();

        if ($testPredikat) {
            $resultArray['predikat'] = $testPredikat->predikat;
        } else {
            $resultArray['predikat'] = 'Predikat tidak ditemukan';
        }
        // return view('input-point.raportPdf', compact('users'));

        $pdf = PDF::loadView('input-point.raportPdf', compact('users', 'resultArray'))->setOptions(['defaultFont' => 'sans-serif'])->setPaper('A4', 'potrait');
        return $pdf->download('raportDosen-' . Auth::user()->name . '.pdf');
    }

    /**
     * RaportChartView
     *
     * @param  mixed $request
     * @return void
     */
    public function RaportChartView(Request $request)
    {
        // Mendapatkan periode aktif
        $activePeriod = Period::where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->first();

        // Get the selected period ID from the request
        $selectedPeriodId = $request->input('period');
        // If no period is selected, get the active period
        if (!$selectedPeriodId) {
            $activePeriod = Period::where('start_date', '<=', Carbon::now())
                ->where('end_date', '>=', Carbon::now())
                ->first();

            if ($activePeriod) {
                $selectedPeriodId = $activePeriod->id;
            } else {
                $selectedPeriodId = null; // Atur default jika tidak ada periode aktif
            }
        }


        $allPeriods = Period::all();

        $users = DB::table('users');

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
            ->leftJoin('point_a', 'point_a.new_user_id', '=', 'users.id')
            ->leftJoin('point_b', 'point_b.new_user_id', '=', 'users.id')
            ->leftJoin('point_c', 'point_c.new_user_id', '=', 'users.id')
            ->leftJoin('point_d', 'point_d.new_user_id', '=', 'users.id')
            ->leftJoin('point_e', 'point_e.new_user_id', '=', 'users.id')
            ->select('users.name', 'point_a.NilaiTotalPendidikanDanPengajaran', 'point_b.NilaiTotalPenelitiandanKaryaIlmiah', 'point_c.NilaiTotalPengabdianKepadaMasyarakat', 'point_d.ResultSumNilaiTotalUnsurPenunjang', 'point_e.NilaiUnsurPengabdian')
            ->where(function ($query) {
                $query->whereNotNull('point_a.NilaiTotalPendidikanDanPengajaran')
                    ->orWhereNotNull('point_b.NilaiTotalPenelitiandanKaryaIlmiah')
                    ->orWhereNotNull('point_c.NilaiTotalPengabdianKepadaMasyarakat')
                    ->orWhereNotNull('point_d.ResultSumNilaiTotalUnsurPenunjang')
                    ->orWhereNotNull('point_e.NilaiUnsurPengabdian');
            })
            ->where('point_a.period_id', '=', $selectedPeriodId) // Filter berdasarkan periode aktif pada tabel point_a
            ->where('point_b.period_id', '=', $selectedPeriodId) // Filter berdasarkan periode aktif pada tabel point_b
            ->where('point_c.period_id', '=', $selectedPeriodId) // Filter berdasarkan periode aktif pada tabel point_c
            ->where('point_d.period_id', '=', $selectedPeriodId) // Filter berdasarkan periode aktif pada tabel point_d
            ->where('point_e.period_id', '=', $selectedPeriodId) // Filter berdasarkan periode aktif pada tabel point_e
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

        return view('input-point.chart_raport', compact('messagesArray', 'resultGetUsersName', 'allPeriods', 'activePeriod'));
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

    public function resultSearchRaport(Request $request)
    {
        // Validasi input
        $request->validate([
            'period_id' => 'required|integer|exists:periods,id',
            'id' => 'required|integer|exists:users,id',
        ]);

        $period_id = $request->input('period_id');
        $user_id = $request->input('id');

        // Ambil data user beserta point A-E
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

        // Helper fungsi predikat
        $getPredikat = function ($nilai) {
            if ($nilai >= 120) return 'ISTIMEWA';
            if ($nilai >= 110) return 'SANGAT BAIK';
            if ($nilai >= 100) return 'BAIK';
            if ($nilai >= 80) return 'CUKUP';
            return 'KURANG';
        };

        // Nilai mentah
        $a = (float) ($users->nilai_a ?? 0);
        $b = (float) ($users->nilai_b ?? 0);
        $c = (float) ($users->nilai_c ?? 0);
        $d = (float) ($users->nilai_d ?? 0);
        $e = (float) ($users->nilai_e ?? 0);

        // NTU = A + B + C
        $total_Ntu = $a + $b + $c;

        // NTD = D + E
        $total_Ntd = $d + $e;

        // NKD = NTU + NTD
        $total_Nkd = $total_Ntu + $total_Ntd;

        // Persentase nilai standar
        $NtAFinalSum = ($a / 11.69) * 100;
        $NTiFinalSum = ($b / 4.26) * 100;
        $NTiFinalSumPkm = ($c / 1.2) * 100;
        $SUMUnsurPenungjang = ($total_Ntd / 2.17) * 100;

        // Nilai total & standar
        $SumNkt = $a + $b + $c + $total_Ntd;
        $sum_Skt = 11.69 + 4.26 + 1.2 + 2.17;
        $result_PCT = ($SumNkt / $sum_Skt) * 100;

        // Predikat tiap unsur
        $outputHasilPDP = $getPredikat($NtAFinalSum);
        $OutputHasilPki = $getPredikat($NTiFinalSum);
        $OutputHasilPkm = $getPredikat($NTiFinalSumPkm);
        $OutputHasilUnsurPenunjang = $getPredikat($SUMUnsurPenungjang);
        $Result_predikat = $getPredikat($result_PCT);

        // Ambil predikat akhir dari tabel Raport jika ada
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

            'SumNkt' => number_format($SumNkt, 2),
            'sum_Skt' => number_format($sum_Skt, 2),
            'result_PCT' => number_format($result_PCT, 2),

            'outputHasilPDP' => $outputHasilPDP,
            'OutputHasilPki' => $OutputHasilPki,
            'OutputHasilPkm' => $OutputHasilPkm,
            'OutputHasilUnsurPenunjang' => $OutputHasilUnsurPenunjang,
            'Result_predikat' => $Result_predikat,

            'predikat' => $testPredikat->predikat ?? 'Predikat tidak ditemukan',
        ];

        return view('edit-point.hrd.raport.raport', compact('users', 'resultArray', 'period_id'));
    }



    public function generatePDF(Request $request, $id, $period_id)
    {
        // Your existing code here, with some modifications:
        // Replace the $user_id variable with $id
        $user_id = $id;
        $period_id = $period_id;

        // Fetch the period name based on $period_id
        $period = Period::find($period_id);
        $periodName = $period ? $period->name : 'Unknown Period';

        // Your query remains the same
        $users = DB::table('users')
            ->leftJoin('point_a', function ($join) use ($user_id, $period_id) {
                $join->on('point_a.new_user_id', '=', 'users.id')
                    ->where(
                        'point_a.period_id',
                        '=',
                        $period_id
                    );
            })
            ->leftJoin('point_b', function ($join) use ($user_id, $period_id) {
                $join->on('point_b.new_user_id', '=', 'users.id')
                    ->where(
                        'point_b.period_id',
                        '=',
                        $period_id
                    );
            })
            ->leftJoin('point_c', function ($join) use ($user_id, $period_id) {
                $join->on('point_c.new_user_id', '=', 'users.id')
                    ->where(
                        'point_c.period_id',
                        '=',
                        $period_id
                    );
            })
            ->leftJoin('point_d', function ($join) use ($user_id, $period_id) {
                $join->on('point_d.new_user_id', '=', 'users.id')
                    ->where(
                        'point_d.period_id',
                        '=',
                        $period_id
                    );
            })
            ->leftJoin('point_e', function ($join) use ($user_id, $period_id) {
                $join->on('point_e.new_user_id', '=', 'users.id')
                    ->where(
                        'point_e.period_id',
                        '=',
                        $period_id
                    );
            })
            ->select('users.*', 'point_a.*', 'point_b.*', 'point_c.*', 'point_d.*', 'point_e.*')
            ->where('users.id', $user_id)
            ->first();
        $resultArray = [];

        $a = (float) ($users->NilaiTotalPendidikanDanPengajaran ?? 0);
        $aFormatted = number_format(
            (float) $a,
            2,
            '.',
            ''
        );

        $b = (float) ($users->NilaiTotalPenelitiandanKaryaIlmiah ?? 0);
        $bFormatted = number_format(
            (float) $b,
            2,
            '.',
            ''
        );

        $c = (float) ($users->NilaiTotalPengabdianKepadaMasyarakat ?? 0);
        $cFormatted = number_format((float) $c, 2, '.', '');

        // SUM Point (A, B, C)
        $total_Ntu = $a + $b + $c;
        $total_NtuFormatted = number_format((float) $total_Ntu, 2, '.', '');

        $d = (float) ($users->ResultSumNilaiTotalUnsurPenunjang ?? 0);
        $e = (float) ($users->NilaiUnsurPengabdian ?? 0);

        // SUM Point (D, E)
        $total_Ntd = $d + $e;
        $total_NtdFormatted = number_format((float) $total_Ntd, 2, '.', '');

        // SUM Point Nilai Kinerja Dosen
        $total_Nkd = $total_Ntu + $total_Ntd;
        $total_NkdFormatted = number_format((float) $total_Nkd, 2, '.', '');

        $NtAFinalSum = ($a / 11.69) * 100;
        $NtAFinalSumFormatted = number_format(
            (float) $NtAFinalSum,
            2,
            '.',
            ''
        );
        if ($NtAFinalSum >= 120) {
            $outputHasilPDP = 'ISTIMEWA';
        } elseif ($NtAFinalSum >= 110) {
            $outputHasilPDP = 'SANGAT BAIK';
        } elseif (
            $NtAFinalSum >= 100
        ) {
            $outputHasilPDP = 'BAIK';
        } elseif ($NtAFinalSum >= 80) {
            $outputHasilPDP = 'CUKUP';
        } else {
            $outputHasilPDP = 'KURANG';
        }

        $NTiFinalSum = ($b / 4.26) * 100;
        $NTiFinalSumFormatted = number_format((float) $NTiFinalSum, 2, '.', '');
        if ($NTiFinalSum >= 120) {
            $OutputHasilPki = 'ISTIMEWA';
        } elseif ($NTiFinalSum >= 110) {
            $OutputHasilPki = 'SANGAT BAIK';
        } elseif (
            $NTiFinalSum >= 100
        ) {
            $OutputHasilPki = 'BAIK';
        } elseif ($NTiFinalSum >= 80) {
            $OutputHasilPki = 'CUKUP';
        } else {
            $OutputHasilPki = 'KURANG';
        }

        $NTiFinalSumPkm = ($c / 1.2) * 100;
        $NTiFinalSumPkmFormatted = number_format((float) $NTiFinalSumPkm, 2, '.', '');
        if ($NTiFinalSumPkm >= 120) {
            $OutputHasilPkm = 'ISTIMEWA';
        } elseif ($NTiFinalSumPkm >= 110) {
            $OutputHasilPkm = 'SANGAT BAIK';
        } elseif ($NTiFinalSumPkm >= 100) {
            $OutputHasilPkm = 'BAIK';
        } elseif ($NTiFinalSumPkm >= 80) {
            $OutputHasilPkm = 'CUKUP';
        } else {
            $OutputHasilPkm = 'KURANG';
        }

        // Persentase Capaian terhadap standar (%) Point UNSUR PENUNJANG, Pengabdian institusi, dan pengembangan diri
        $SUMUnsurPenungjang = ($total_Ntd / 2.17) * 100;
        $SUMUnsurPenungjangFormatted = number_format((float) $SUMUnsurPenungjang, 2, '.', '');

        // Predikat
        if ($SUMUnsurPenungjang >= 120) {
            $OutputHasilUnsurPenunjang = 'ISTIMEWA';
        } elseif ($SUMUnsurPenungjang >= 110) {
            $OutputHasilUnsurPenunjang = 'SANGAT BAIK';
        } elseif ($SUMUnsurPenungjang >= 100) {
            $OutputHasilUnsurPenunjang = 'BAIK';
        } elseif ($SUMUnsurPenungjang >= 80) {
            $OutputHasilUnsurPenunjang = 'CUKUP';
        } else {
            $OutputHasilUnsurPenunjang = 'KURANG';
        }

        // SUM Nilai kinerja total
        $SumNkt = $a + $b + $c + $total_Ntd;
        $SumNktFormatted = number_format((float) $SumNkt, 2, '.', '');

        // SUM Nilai standar
        $sum_Skt = 11.69 + 4.26 + 1.2 + 2.17;
        $sum_SktFormatted = number_format((float) $sum_Skt, 2, '.', '');

        // Result nilai presentasi Capaian total (%)
        $result_PCT = ($SumNkt / $sum_Skt) * 100;
        $result_PCTFormatted = number_format((float) $result_PCT, 2, '.', '');

        // Predikat akhir
        if ($result_PCT >= 120) {
            $Result_predikat = 'ISTIMEWA';
        } elseif ($result_PCT >= 110) {
            $Result_predikat = 'SANGAT BAIK';
        } elseif ($result_PCT >= 100) {
            $Result_predikat = 'BAIK';
        } elseif ($result_PCT >= 80) {
            $Result_predikat = 'CUKUP';
        } else {
            $Result_predikat = 'KURANG';
        }

        $resultArray['total_Ntu'] = $total_NtuFormatted;
        $resultArray['total_Ntd'] = $total_NtdFormatted;
        $resultArray['total_Nkd'] = $total_NkdFormatted;

        $resultArray['a'] = $aFormatted;
        $resultArray['NtAFinalSum'] = $NtAFinalSumFormatted;
        // predikat 1
        $resultArray['outputHasilPDP'] = $outputHasilPDP;

        // predikat 2
        $resultArray['OutputHasilPki'] = $OutputHasilPki;
        // predikat 3
        $resultArray['OutputHasilPkm'] = $OutputHasilPkm;
        // predikat 4
        $resultArray['OutputHasilUnsurPenunjang'] = $OutputHasilUnsurPenunjang;
        // predikat akhir
        $resultArray['Result_predikat'] = $Result_predikat;

        $resultArray['b'] = $bFormatted;
        $resultArray['NTiFinalSum'] = $NTiFinalSumFormatted;
        $resultArray['c'] = $cFormatted;
        $resultArray['NTiFinalSumPkm'] = $NTiFinalSumPkmFormatted;
        $resultArray['total_Ntd'] = $total_NtdFormatted;
        $resultArray['SUMUnsurPenungjang'] = $SUMUnsurPenungjangFormatted;
        $resultArray['SumNkt'] = $SumNktFormatted;
        $resultArray['sum_Skt'] = $sum_SktFormatted;
        $resultArray['result_PCT'] = $result_PCTFormatted;

        $testPredikat = Raport::where('a_poin', $outputHasilPDP)
            ->where('b_poin', 'LIKE', '%' . $OutputHasilPki . '%')
            ->where('c_poin', 'LIKE', '%' . $OutputHasilPkm . '%')
            ->where('d_poin', 'LIKE', '%' . $OutputHasilUnsurPenunjang . '%')
            ->first();

        if ($testPredikat) {
            $resultArray['predikat'] = $testPredikat->predikat;
        } else {
            $resultArray['predikat'] = 'Predikat tidak ditemukan';
        }
        // The PDF generation code should be the same as before
        $html = view('edit-point.hrd.raport.raportPDF', compact('users', 'resultArray', 'user_id', 'period_id', 'periodName'))->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait'); // Set the paper size and orientation

        // (Optional) You can set additional PDF options here if needed
        $dompdf->getOptions()->setIsHtml5ParserEnabled(true);

        $dompdf->render();

        // Generate and return the PDF as a response
        $pdfName = 'raport_' . $user_id . '.pdf'; // Change the filename as needed
        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $pdfName . '"'
        ]);
    }
}
