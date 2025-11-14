<?php

namespace App\Http\Controllers\Setting\Jabatan;

use App\Http\Controllers\Controller;
use App\Models\Setting\Jabatan\JabatanStruktural;
use App\Models\Setting\Jabatan\UserJabatanFungsional;
use App\Models\Setting\Jabatan\UserJabatanStruktural;
use App\Models\Setting\Jabatan\UserUnitKerja;
use App\Models\User;
use Illuminate\Http\Request;

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
            'unit_kerja_id' => 'required',
            'tmt_mulai' => 'required|date',
        ]);

        UserUnitKerja::create([
            'user_id'  => $user->id,
            'unit_kerja_id' => $request->unit_kerja_id,
            'tmt_mulai' => $request->tmt_mulai,
            'tmt_selesai' => $request->tmt_selesai,
            'status' => 'manual'
        ]);

        return response()->json(['message' => 'Unit Kerja berhasil ditambahkan']);
    }

    public function unitEdit(User $user, $id)
    {
        return response()->json([
            'data' => UserUnitKerja::findOrFail($id)
        ]);
    }

    public function unitUpdate(Request $request, User $user, $id)
    {
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
        UserUnitKerja::findOrFail($id)->delete();
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
            'jabatan_fungsional_id' => 'required',
            'unit_kerja_id' => 'required',
            'tmt_mulai' => 'required|date',
        ]);

        $record = UserJabatanFungsional::create([
            'user_id' => $user->id,
            'jabatan_fungsional_id' => $request->jabatan_fungsional_id,
            'unit_kerja_id' => $request->unit_kerja_id,
            'status' => 'aktif',
            'tmt_mulai' => $request->tmt_mulai,
            'tmt_selesai' => $request->tmt_selesai
        ]);

        // AUTO UPDATE UNIT
        UserUnitKerja::create([
            'user_id' => $user->id,
            'unit_kerja_id' => $request->unit_kerja_id,
            'tmt_mulai' => $request->tmt_mulai,
            'status' => 'jabfung'
        ]);

        return response()->json(['message' => 'Jabatan Fungsional berhasil ditambahkan']);
    }

    public function fungsionalEdit(User $user, $id)
    {
        $data = UserJabatanFungsional::with(['jabatanFungsional', 'unitKerja'])
            ->findOrFail($id);

        return response()->json(['data' => $data]);
    }

    public function fungsionalUpdate(Request $request, User $user, $id)
    {
        $request->validate([
            'jabatan_fungsional_id' => 'required',
            'unit_kerja_id' => 'required',
            'tmt_mulai' => 'required|date'
        ]);

        $data = UserJabatanFungsional::findOrFail($id);

        $data->update([
            'jabatan_fungsional_id' => $request->jabatan_fungsional_id,
            'unit_kerja_id' => $request->unit_kerja_id,
            'tmt_mulai' => $request->tmt_mulai,
            'tmt_selesai' => $request->tmt_selesai,
            'status' => $request->status
        ]);

        return response()->json(['message' => 'Jabatan Fungsional berhasil diperbarui']);
    }

    public function fungsionalDestroy(User $user, $id)
    {
        UserJabatanFungsional::findOrFail($id)->delete();
        return response()->json(['message' => 'Jabatan Fungsional dihapus']);
    }

    /* ===========================================================
     *  JABATAN STRUKTURAL
     * =========================================================== */
    public function strukturalData(User $user)
    {
        $data = UserJabatanStruktural::with('jabatanStruktural')
            ->where('user_id', $user->id)
            ->orderBy('tmt_mulai', 'desc')
            ->get();

        return response()->json(['data' => $data]);
    }

    public function strukturalStore(Request $request, User $user)
    {
        $request->validate([
            'jabatan_struktural_id' => 'required',
            'tmt_mulai' => 'required|date'
        ]);

        $record = UserJabatanStruktural::create([
            'user_id' => $user->id,
            'jabatan_struktural_id' => $request->jabatan_struktural_id,
            'status' => 'aktif',
            'tmt_mulai' => $request->tmt_mulai,
            'tmt_selesai' => $request->tmt_selesai
        ]);

        // Ambil unit kerja default jabatan struktural
        $unitId = JabatanStruktural::find($request->jabatan_struktural_id)->unit_kerja_id;

        UserUnitKerja::create([
            'user_id' => $user->id,
            'unit_kerja_id' => $unitId,
            'tmt_mulai' => $request->tmt_mulai,
            'status' => 'jabstruk'
        ]);

        return response()->json(['message' => 'Jabatan Struktural berhasil ditambahkan']);
    }

    public function strukturalEdit(User $user, $id)
    {
        $data = UserJabatanStruktural::with('jabatanStruktural')
            ->findOrFail($id);

        return response()->json(['data' => $data]);
    }

    public function strukturalUpdate(Request $request, User $user, $id)
    {
        $request->validate([
            'jabatan_struktural_id' => 'required',
            'tmt_mulai' => 'required|date'
        ]);

        $data = UserJabatanStruktural::findOrFail($id);

        $data->update([
            'jabatan_struktural_id' => $request->jabatan_struktural_id,
            'tmt_mulai' => $request->tmt_mulai,
            'tmt_selesai' => $request->tmt_selesai,
            'status' => $request->status
        ]);

        return response()->json(['message' => 'Jabatan Struktural berhasil diperbarui']);
    }

    public function strukturalDestroy(User $user, $id)
    {
        UserJabatanStruktural::findOrFail($id)->delete();
        return response()->json(['message' => 'Jabatan Struktural dihapus']);
    }


    /* ===========================================================
     *  AKTIF GABUNGAN
     * =========================================================== */
    public function aktifData(User $user)
    {
        // Fungsional aktif
        $fungsional = UserJabatanFungsional::with(['jabatanFungsional', 'unitKerja'])
            ->where('user_id', $user->id)
            ->where('status', 'aktif')
            ->latest('tmt_mulai')
            ->first();

        // Struktural aktif
        $struktural = UserJabatanStruktural::with('jabatanStruktural')
            ->where('user_id', $user->id)
            ->where('status', 'aktif')
            ->latest('tmt_mulai')
            ->first();

        // Unit aktif
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
}
