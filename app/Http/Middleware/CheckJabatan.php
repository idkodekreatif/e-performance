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

        // Data Jabatan
        $jabFungsional = $user->jabfung()->exists();
        $jabStruktural = $user->jabstruk()->first();
        $namaJabatan   = $jabStruktural->name ?? null;

        // Mapping jabatan struktural
        $roleMap = [
            // Rektor
            'Rektor' => 'rektor',
            'Wakil Rektor I' => 'warek1',
            'Wakil Rektor II' => 'warek2',

            // Dekan
            'Dekan Fakultas Kesehatan' => 'dekan',
            'Dekan Fakultas Bisnis' => 'dekan',

            // Kaprodi
            'Kepala Program Studi S1 Akuntansi' => 'kaprodi',
            'Kepala Program Studi S1 Manajemen' => 'kaprodi',
            'Kepala Program Studi S1 Ilmu Gizi' => 'kaprodi',
            'Kepala Program Studi S1 Keperawatan dan Ners' => 'kaprodi',
            'Kepala Program Studi D3 Kebidanan' => 'kaprodi',

            // Sekprodi
            'Sekretaris Program Studi S1 Akuntansi' => 'sekprodi',
            'Sekretaris Program Studi S1 Manajemen' => 'sekprodi',
            'Sekretaris Program Studi S1 Ilmu Gizi' => 'sekprodi',
            'Sekretaris Program Studi S1 Ilmu Keperawatan dan Ners' => 'sekprodi',
            'Sekretaris Program Studi D3 Kebidanan' => 'sekprodi',

            // UPT & Laboratorium
            'Kepala Laboratorium' => 'labor',
            'Petugas Laboratorium' => 'labor',
            'Koordinator Perpustakaan' => 'perpus',
            'Kepala Unit Pelaksana Teknis' => 'upt',
            'Kepala Subbagian Teknologi Informasi' => 'subti',

            // Akademik
            'Kepala Biro Administrasi Akademik' => 'biro_akademik',
            'Staf Biro Administrasi Akademik' => 'biro_akademik',

            // Administrasi Umum / BAU
            'Kepala Biro Administrasi Umum' => 'biro_umum',
            'Kepala Subbagian Protokoler, Umum, dan Kepegawaian' => 'biro_umum',
            'Staf Unit Keamanan' => 'umum_staff',
            'Staf Unit Sarana' => 'umum_staff',
            'Staf Unit Prasarana' => 'umum_staff',
            'Staf Unit Kebersihan' => 'umum_staff',

            // Lembaga
            'Koordinator Website dan Media Sosial' => 'media',
            'Kepala Riset dan Pengembangan' => 'riset',
            'Kepala Lembaga Penjaminan Mutu' => 'lpm',
            'Kepala Sub-Lembaga Penelitian dan Pengabdian Masyarakat' => 'lp2m',

            // WR1 - Kemahasiswaan
            'Koordinator Kemahasiswaan dan Alumni' => 'kemahasiswaan',

            // UPT PMB
            'Biro Penerimaan Mahasiswa Baru' => 'pmb',

            // Staf khusus
            'Staf Khusus Bidang Kerja Sama' => 'staf_khusus',
        ];

        $userType = $roleMap[$namaJabatan] ?? null;

        // ============================================
        // VALIDASI: Boleh akses jika salah satu cocok
        // ============================================
        foreach ($types as $t) {

            if ($t === 'fungsional' && $jabFungsional) {
                return $next($request);
            }

            if ($t === 'struktural' && $jabStruktural) {
                return $next($request);
            }

            if ($userType === $t) {
                return $next($request);
            }
        }

        abort(403, 'Anda tidak memiliki akses ke halaman ini.');
    }
}
