<?php

namespace App\Http\Controllers\Itikad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Predikat\Raport;
use Illuminate\Support\Facades\DB;

class RekapDataController extends Controller
{
    /**
     * Menampilkan halaman utama rekap data
     */
    public function index()
    {
        // Ambil semua user yang tidak termasuk dalam daftar pengecualian
        $excludedUsers = [
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
        ];

        $users = User::whereNotIn('name', $excludedUsers)->get();

        return view('itikad.rekap.rekap_data', compact('users'));
    }

    /**
     * Mencari data berdasarkan user_id
     */
    public function searchData(Request $request)
    {
        $user_id = $request->input('id');

        if (!$user_id) {
            return redirect()->back()->with('error', 'Silakan pilih nama terlebih dahulu.');
        }

        return redirect()->route('rekap.raport', ['user_id' => $user_id]);
    }

    /**
     * Menampilkan halaman rekap raport berdasarkan user yang dipilih
     */
    public function raportView($user_id)
    {
        // Cek apakah user tersedia
        $user = User::find($user_id);

        if (!$user) {
            return redirect()->route('rekap.index')->with('error', 'User tidak ditemukan.');
        }

        // Ambil data poin berdasarkan user_id
        $users = DB::table('users')
            ->leftJoin('point_a', 'point_a.new_user_id', '=', 'users.id')
            ->leftJoin('point_b', 'point_b.new_user_id', '=', 'users.id')
            ->leftJoin('point_c', 'point_c.new_user_id', '=', 'users.id')
            ->leftJoin('point_d', 'point_d.new_user_id', '=', 'users.id')
            ->leftJoin('point_e', 'point_e.new_user_id', '=', 'users.id')
            ->select(
                'users.*',
                'point_a.NilaiTotalPendidikanDanPengajaran',
                'point_b.NilaiTotalPenelitiandanKaryaIlmiah',
                'point_c.NilaiTotalPengabdianKepadaMasyarakat',
                'point_d.ResultSumNilaiTotalUnsurPenunjang',
                'point_e.NilaiUnsurPengabdian'
            )
            ->where('users.id', $user_id)
            ->get();

        // Jika tidak ada data, tampilkan pesan kosong
        if (!$users) {
            return view('itikad.rekap.raport', ['users' => null, 'resultArray' => null]);
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
        dd($resultArray);

        // return view('itikad.rekap.raport', compact('users', 'resultArray'));
        return view('itikad.rekap.raport', ['users' => $users, 'resultArray' => $resultArray]);
    }
}
