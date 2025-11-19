<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckJabatan
{
    public function handle(Request $request, Closure $next, ...$types)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        // ====== DATA JABATAN ======
        $jabFungsional = $user->jabfung()->exists();

        // Ambil SEMUA jabatan struktural
        $jabStrukturalList = $user->jabstruk()->get();
        $namaJabatanList   = $jabStrukturalList->pluck('name')->toArray();

        // ====== MAP ROLE JABATAN STRUKTURAL ======
        $roleMap = [
            'Rektor' => 'rektor',
            'Wakil Rektor I' => 'warek1',
            'Wakil Rektor II' => 'warek2',

            'Dekan Fakultas Kesehatan' => 'dekan',
            'Dekan Fakultas Bisnis' => 'dekan',

            'Kepala Program Studi S1 Akuntansi' => 'kaprodi',
            'Kepala Program Studi S1 Manajemen' => 'kaprodi',
            'Kepala Program Studi S1 Ilmu Gizi' => 'kaprodi',
            'Kepala Program Studi S1 Keperawatan dan Ners' => 'kaprodi',
            'Kepala Program Studi D3 Kebidanan' => 'kaprodi',

            'Sekretaris Program Studi S1 Akuntansi' => 'sekprodi',
            'Sekretaris Program Studi S1 Manajemen' => 'sekprodi',
            'Sekretaris Program Studi S1 Ilmu Gizi' => 'sekprodi',
            'Sekretaris Program Studi S1 Ilmu Keperawatan dan Ners' => 'sekprodi',
            'Sekretaris Program Studi D3 Kebidanan' => 'sekprodi',

            'Kepala Laboratorium' => 'labor',
            'Petugas Laboratorium' => 'labor',
            'Koordinator Perpustakaan' => 'perpus',
            'Kepala Unit Pelaksana Teknis' => 'upt',
            'Kepala Subbagian Teknologi Informasi' => 'subti',

            'Kepala Biro Administrasi Akademik' => 'biro_akademik',
            'Staf Biro Administrasi Akademik' => 'biro_akademik',

            'Kepala Biro Administrasi Umum' => 'biro_umum',
            'Kepala Subbagian Protokoler, Umum, dan Kepegawaian' => 'biro_umum',
            'Staf Unit Keamanan' => 'umum_staff',
            'Staf Unit Sarana' => 'umum_staff',
            'Staf Unit Prasarana' => 'umum_staff',
            'Staf Unit Kebersihan' => 'umum_staff',

            'Koordinator Website dan Media Sosial' => 'media',
            'Kepala Riset dan Pengembangan' => 'riset',
            'Kepala Lembaga Penjaminan Mutu' => 'lpm',
            'Kepala Sub-Lembaga Penelitian dan Pengabdian Masyarakat' => 'lp2m',

            'Koordinator Kemahasiswaan dan Alumni' => 'kemahasiswaan',
            'Biro Penerimaan Mahasiswa Baru' => 'pmb',
            'Staf Khusus Bidang Kerja Sama' => 'staf_khusus',
        ];

        // Convert nama jabatan → userType (array)
        $userType = [];
        foreach ($namaJabatanList as $nama) {
            if (isset($roleMap[$nama])) {
                $userType[] = $roleMap[$nama];
            }
        }

        // ============================
        // VALIDASI AKSES
        // ============================
        foreach ($types as $t) {

            if ($t === 'fungsional' && $jabFungsional) {
                return $next($request);
            }

            if ($t === 'struktural' && $jabStrukturalList->isNotEmpty()) {
                return $next($request);
            }

            if (in_array($t, $userType)) {
                return $next($request);
            }
        }

        abort(403, 'Anda tidak memiliki akses ke halaman ini.');
    }
}
