<?php

namespace App\Http\Controllers\Setting\Jabatan;

use App\Http\Controllers\Controller;
use App\Models\Setting\Jabatan\JabatanFungsional;
use App\Models\Setting\Jabatan\JabatanStruktural;
use App\Models\Setting\Jabatan\UserJabatanFungsional;
use App\Models\Setting\Jabatan\UserJabatanStruktural;
use App\Models\Setting\Jabatan\UserUnitKerja;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserJabatanHistoryController extends Controller
{
    /* ===========================================================
     *  UNIT KERJA
     * =========================================================== */
    public function unitData(User $user)
    {
        $data = UserUnitKerja::with('unitKerja')
            ->where('user_id', $user->id)
            ->orderBy('tmt_mulai', 'desc')
            ->get();

        return response()->json(['data' => $data]);
    }

    public function unitStore(Request $request, User $user)
    {
        $request->validate([
            'unit_kerja_id' => 'required|exists:unit_kerja,id',
            'tmt_mulai' => 'required|date',
            'tmt_selesai' => 'nullable|date|after_or_equal:tmt_mulai',
        ]);

        DB::transaction(function () use ($request, $user) {
            // akhiri semua unit aktif sebelumnya (set tmt_selesai = tmt_mulai new)
            UserUnitKerja::where('user_id', $user->id)
                ->whereNull('tmt_selesai')
                ->update(['tmt_selesai' => $request->tmt_mulai]);

            UserUnitKerja::create([
                'user_id' => $user->id,
                'unit_kerja_id' => $request->unit_kerja_id,
                'tmt_mulai' => $request->tmt_mulai,
                'tmt_selesai' => $request->tmt_selesai,
                'status' => $request->status ?? 'manual'
            ]);
        });

        return response()->json(['message' => 'Unit Kerja berhasil ditambahkan']);
    }

    public function unitEdit(User $user, $id)
    {
        $data = UserUnitKerja::findOrFail($id);
        return response()->json(['data' => $data]);
    }

    public function unitUpdate(Request $request, User $user, $id)
    {
        $request->validate([
            'unit_kerja_id' => 'required|exists:unit_kerja,id',
            'tmt_mulai' => 'required|date',
            'tmt_selesai' => 'nullable|date|after_or_equal:tmt_mulai'
        ]);

        $record = UserUnitKerja::findOrFail($id);

        $record->update([
            'unit_kerja_id' => $request->unit_kerja_id,
            'tmt_mulai' => $request->tmt_mulai,
            'tmt_selesai' => $request->tmt_selesai
        ]);

        return response()->json(['message' => 'Unit Kerja berhasil diupdate']);
    }

    public function unitDestroy(User $user, $id)
    {
        $record = UserUnitKerja::findOrFail($id);
        $record->delete();

        return response()->json(['message' => 'Unit Kerja berhasil dihapus']);
    }

    /* ===========================================================
     *  JABATAN FUNGSIONAL
     * =========================================================== */
    public function fungsionalData(User $user)
    {
        $data = UserJabatanFungsional::with(['jabatanFungsional', 'unitKerja'])
            ->where('user_id', $user->id)
            ->orderBy('tmt_mulai', 'desc')
            ->get();

        return response()->json(['data' => $data]);
    }

    public function fungsionalStore(Request $request, User $user)
    {
        $request->validate([
            'jabatan_fungsional_id' => 'required|exists:jabatan_fungsional,id',
            'unit_kerja_id' => 'nullable|exists:unit_kerja,id',
            'tmt_mulai' => 'required|date',
            'tmt_selesai' => 'nullable|date|after_or_equal:tmt_mulai',
            'status' => 'nullable|in:aktif,nonaktif'
        ]);

        // jika unit_kerja_id tidak diberikan, coba ambil default dari jabatan_fungsional (jika ada)
        $unitId = $request->unit_kerja_id;
        if (!$unitId) {
            $jf = JabatanFungsional::find($request->jabatan_fungsional_id);
            $unitId = $jf?->unit_kerja_id ?? null;
        }

        DB::transaction(function () use ($request, $user, $unitId) {
            // create jabfung
            $record = UserJabatanFungsional::create([
                'user_id' => $user->id,
                'jabatan_fungsional_id' => $request->jabatan_fungsional_id,
                'unit_kerja_id' => $unitId,
                'tmt_mulai' => $request->tmt_mulai,
                'tmt_selesai' => $request->tmt_selesai,
                'status' => $request->status ?? 'aktif'
            ]);

            // sinkron unit kerja (akhiri unit aktif sebelumnya & buat unit baru)
            if ($unitId) {
                $this->syncUnitKerja($user->id, $unitId, $request->tmt_mulai, $request->tmt_selesai, 'jabfung');
            }
        });

        return response()->json(['message' => 'Jabatan fungsional berhasil ditambahkan']);
    }

    public function fungsionalEdit(User $user, $id)
    {
        $data = UserJabatanFungsional::with(['jabatanFungsional', 'unitKerja'])->findOrFail($id);
        return response()->json(['data' => $data]);
    }

    public function fungsionalUpdate(Request $request, User $user, $id)
    {
        $request->validate([
            'jabatan_fungsional_id' => 'required|exists:jabatan_fungsional,id',
            'unit_kerja_id' => 'nullable|exists:unit_kerja,id',
            'tmt_mulai' => 'required|date',
            'tmt_selesai' => 'nullable|date|after_or_equal:tmt_mulai',
            'status' => 'nullable|in:aktif,nonaktif'
        ]);

        $unitId = $request->unit_kerja_id;
        if (!$unitId) {
            $jf = JabatanFungsional::find($request->jabatan_fungsional_id);
            $unitId = $jf?->unit_kerja_id ?? null;
        }

        DB::transaction(function () use ($request, $user, $id, $unitId) {
            $item = UserJabatanFungsional::findOrFail($id);

            // jika unit diganti atau tgl mulai diupdate -> akhiri unit lama sebelum membuat unit baru
            if ($unitId) {
                // akhiri semua unit aktif terlebih dahulu (set tmt_selesai = tmt_mulai baru)
                UserUnitKerja::where('user_id', $user->id)
                    ->whereNull('tmt_selesai')
                    ->update(['tmt_selesai' => $request->tmt_mulai]);
            }

            $item->update([
                'jabatan_fungsional_id' => $request->jabatan_fungsional_id,
                'unit_kerja_id' => $unitId,
                'tmt_mulai' => $request->tmt_mulai,
                'tmt_selesai' => $request->tmt_selesai,
                'status' => $request->status ?? $item->status
            ]);

            if ($unitId) {
                $this->syncUnitKerja($user->id, $unitId, $request->tmt_mulai, $request->tmt_selesai, 'jabfung');
            }
        });

        return response()->json(['message' => 'Jabatan fungsional berhasil diperbarui']);
    }

    public function fungsionalDestroy(User $user, $id)
    {
        $item = UserJabatanFungsional::findOrFail($id);

        // akhiri unit aktif yang terkait dengan jabfung ini (jika ada)
        if ($item->unit_kerja_id) {
            UserUnitKerja::where('user_id', $user->id)
                ->where('unit_kerja_id', $item->unit_kerja_id)
                ->whereNull('tmt_selesai')
                ->update(['tmt_selesai' => Carbon::now()->toDateString()]);
        }

        $item->delete();

        return response()->json(['message' => 'Jabatan fungsional berhasil dihapus']);
    }


    /* ===========================================================
     *  JABATAN STRUKTURAL
     * =========================================================== */
    public function strukturalData(User $user)
    {
        $data = UserJabatanStruktural::with(['jabatanStruktural', 'jabatanStruktural.unitKerja'])
            ->where('user_id', $user->id)
            ->orderBy('tmt_mulai', 'desc')
            ->get();

        return response()->json(['data' => $data]);
    }

    public function strukturalStore(Request $request, User $user)
    {
        $request->validate([
            'jabatan_struktural_id' => 'required|exists:jabatan_struktural,id',
            'tmt_mulai' => 'required|date',
            'tmt_selesai' => 'nullable|date|after_or_equal:tmt_mulai',
            'status' => 'nullable|in:aktif,nonaktif'
        ]);

        DB::transaction(function () use ($request, $user) {
            $record = UserJabatanStruktural::create([
                'user_id' => $user->id,
                'jabatan_struktural_id' => $request->jabatan_struktural_id,
                'status' => $request->status ?? 'aktif',
                'tmt_mulai' => $request->tmt_mulai,
                'tmt_selesai' => $request->tmt_selesai
            ]);

            // Ambil unit kerja default dari jabatan struktural (jika ada)
            $jab = JabatanStruktural::find($request->jabatan_struktural_id);
            $unitId = $jab?->unit_kerja_id ?? null;

            if ($unitId) {
                $this->syncUnitKerja($user->id, $unitId, $request->tmt_mulai, $request->tmt_selesai, 'jabstruk');
            }
        });

        return response()->json(['message' => 'Jabatan struktural berhasil ditambahkan']);
    }

    public function strukturalEdit(User $user, $id)
    {
        $data = UserJabatanStruktural::with('jabatanStruktural')->findOrFail($id);
        return response()->json(['data' => $data]);
    }

    public function strukturalUpdate(Request $request, User $user, $id)
    {
        $request->validate([
            'jabatan_struktural_id' => 'required|exists:jabatan_struktural,id',
            'tmt_mulai' => 'required|date',
            'tmt_selesai' => 'nullable|date|after_or_equal:tmt_mulai',
            'status' => 'nullable|in:aktif,nonaktif'
        ]);

        DB::transaction(function () use ($request, $user, $id) {
            $data = UserJabatanStruktural::findOrFail($id);

            $data->update([
                'jabatan_struktural_id' => $request->jabatan_struktural_id,
                'tmt_mulai' => $request->tmt_mulai,
                'tmt_selesai' => $request->tmt_selesai,
                'status' => $request->status ?? $data->status
            ]);

            // Ambil unit kerja default dari jabatan struktural (jika ada)
            $jab = JabatanStruktural::find($request->jabatan_struktural_id);
            $unitId = $jab?->unit_kerja_id ?? null;

            if ($unitId) {
                // akhiri unit aktif sebelumnya then create new
                $this->syncUnitKerja($user->id, $unitId, $request->tmt_mulai, $request->tmt_selesai, 'jabstruk');
            }
        });

        return response()->json(['message' => 'Jabatan struktural berhasil diperbarui']);
    }

    public function strukturalDestroy(User $user, $id)
    {
        $item = UserJabatanStruktural::findOrFail($id);

        // jika unit terkait ada, akhiri unit aktifnya (jaga histori)
        $unitId = $item->jabatanStruktural?->unit_kerja_id ?? $item->unit_kerja_id ?? null;
        if ($unitId) {
            UserUnitKerja::where('user_id', $user->id)
                ->where('unit_kerja_id', $unitId)
                ->whereNull('tmt_selesai')
                ->update(['tmt_selesai' => Carbon::now()->toDateString()]);
        }

        $item->delete();

        return response()->json(['message' => 'Jabatan struktural berhasil dihapus']);
    }



    /* ===========================================================
     *  AKTIF GABUNGAN
     * =========================================================== */
    public function aktifData(User $user)
    {
        $fungsional = UserJabatanFungsional::with(['jabatanFungsional', 'unitKerja'])
            ->where('user_id', $user->id)
            ->where('status', 'aktif')
            ->latest('tmt_mulai')
            ->first();

        $struktural = UserJabatanStruktural::with(['jabatanStruktural', 'jabatanStruktural.unitKerja'])
            ->where('user_id', $user->id)
            ->where('status', 'aktif')
            ->latest('tmt_mulai')
            ->first();

        // unit aktif terakhir (tmt_selesai = null)
        // $unit = UserUnitKerja::with('unitKerja')
        //     ->where('user_id', $user->id)
        //     ->whereNull('tmt_selesai')
        //     ->latest('tmt_mulai')
        //     ->first();

        return response()->json([
            'fungsional' => $fungsional,
            'struktural' => $struktural,
            // 'unit' => $unit
        ]);
    }

    /**
     * Sync unit kerja:
     * - tutup semua unit aktif (set tmt_selesai = $mulai)
     * - tambahkan user_unit_kerja baru
     *
     * @param int $user_id
     * @param int $unit_id
     * @param string $mulai (YYYY-MM-DD)
     * @param string|null $selesai
     * @param string|null $statusTag (jabfung|jabstruk|manual)
     * @return void
     */
    private function syncUnitKerja($user_id, $unit_id, $mulai, $selesai = null, $statusTag = null)
    {
        // tutup unit aktif sebelumnya (agar tidak ada lebih dari 1 active)
        UserUnitKerja::where('user_id', $user_id)
            ->whereNull('tmt_selesai')
            ->update(['tmt_selesai' => $mulai]);

        // buat record unit baru
        UserUnitKerja::create([
            'user_id' => $user_id,
            'unit_kerja_id' => $unit_id,
            'tmt_mulai' => $mulai,
            'tmt_selesai' => $selesai,
            'status' => $statusTag ?? 'system'
        ]);
    }
}
