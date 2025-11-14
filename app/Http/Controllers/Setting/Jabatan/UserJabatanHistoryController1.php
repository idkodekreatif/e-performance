<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Setting\Jabatan\UnitKerja;
use App\Models\Setting\Jabatan\UserUnitKerja;
use App\Models\Setting\Jabatan\UserJabatanFungsional;
use App\Models\Setting\Jabatan\UserJabatanStruktural;
use App\Models\Setting\Jabatan\JabatanStruktural;
use Illuminate\Http\Request;

class UserJabatanHistoryController extends Controller
{
    /* ===========================================================
     *  UNIT KERJA (AUTO DARI JABFUNG / JABSTRUK)
     * ===========================================================
     */

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
        $data = UserUnitKerja::findOrFail($id);
        return response()->json(['data' => $data]);
    }

    public function unitUpdate(Request $request, User $user, $id)
    {
        $data = UserUnitKerja::findOrFail($id);

        $data->update([
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
     * ===========================================================
     */

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
            'tmt_selesai' => null
        ]);

        // =============================================
        // AUTO UPDATE UNIT KERJA USER
        // =============================================
        UserUnitKerja::create([
            'user_id' => $user->id,
            'unit_kerja_id' => $request->unit_kerja_id,
            'tmt_mulai' => $request->tmt_mulai,
            'status' => 'jabfung'
        ]);

        return response()->json(['message' => 'Jabatan Fungsional berhasil ditambahkan']);
    }


    /* ===========================================================
     *  JABATAN STRUKTURAL
     * ===========================================================
     */

    public function strukturalData(User $user)
    {
        $data = UserJabatanStruktural::with(['jabatanStruktural.unitKerja'])
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

        $jabstruk = UserJabatanStruktural::create([
            'user_id' => $user->id,
            'jabatan_struktural_id' => $request->jabatan_struktural_id,
            'status' => 'aktif',
            'tmt_mulai' => $request->tmt_mulai
        ]);

        // ⚡ Ambil unit kerja berdasarkan jabatan struktural
        $unitKerjaID = JabatanStruktural::find($request->jabatan_struktural_id)->unit_kerja_id;

        // ⚡ Auto update unit kerja
        UserUnitKerja::create([
            'user_id' => $user->id,
            'unit_kerja_id' => $unitKerjaID,
            'tmt_mulai' => $request->tmt_mulai,
            'status' => 'jabstruk'
        ]);

        return response()->json(['message' => 'Jabatan Struktural berhasil ditambahkan']);
    }


    /* ===========================================================
     *  UNIT KERJA AKTIF (GABUNGAN)
     * ===========================================================
     */
    public function aktifData(User $user)
    {
        $data = UserUnitKerja::with('unitKerja')
            ->where('user_id', $user->id)
            ->orderBy('tmt_mulai', 'desc')
            ->get();

        return response()->json(['data' => $data]);
    }
}
