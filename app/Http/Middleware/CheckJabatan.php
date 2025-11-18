<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckJabatan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $type = null)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        // ===============================
        // 1. CEK JABATAN FUNGSIONAL
        // ===============================
        if ($type === 'fungsional') {
            if ($user->jabfung()->exists()) {
                return $next($request);
            }
            abort(403, 'Anda tidak memiliki akses Fungsional.');
        }

        // ===============================
        // 2. CEK JABATAN STRUKTURAL
        // ===============================
        if ($type === 'struktural') {
            if ($user->jabstruk()->exists()) {
                return $next($request);
            }
            abort(403, 'Anda tidak memiliki akses Struktural.');
        }

        // Ambil jabatan struktural user (kalau ada)
        $jabatan = $user->jabstruk()->first(); // langsung dapat model JabatanStruktural

        // ===============================
        // 3. CEK STRUKTURAL SPESIFIK
        // ===============================
        if ($type === 'kbiro') {
            if ($jabatan && $jabatan->nama_jabatan === 'Kepala Biro Administrasi Akademik') {
                return $next($request);
            }
            abort(403, 'Akses khusus Kepala Biro Administrasi Akademik.');
        }

        if ($type === 'kemahasiswaan') {
            if ($jabatan && $jabatan->nama_jabatan === 'Kepala Bagian Kemahasiswaan') {
                return $next($request);
            }
            abort(403, 'Akses khusus Kepala Bagian Kemahasiswaan.');
        }

        if ($type === 'keuangan') {
            if ($jabatan && $jabatan->nama_jabatan === 'Kepala Bagian Keuangan') {
                return $next($request);
            }
            abort(403, 'Akses khusus Kepala Bagian Keuangan.');
        }

        return $next($request);
    }
}
