<?php

namespace App\Http\Controllers\Setting\Jabatan;

use App\Http\Controllers\Controller;
use App\Models\Setting\Jabatan\DosenJabatanFungsional;
use App\Models\Setting\Jabatan\DosenJabatanStruktural;
use App\Models\Setting\Jabatan\DosenUnitKerja;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class UserJabatanHistoryController extends Controller
{
    // ---------------- Fungsional ----------------
    public function fungsionalData(User $user)
    {
        $rows = DosenJabatanFungsional::where('user_id', $user->id)->with('jabatanFungsional')->orderByDesc('tmt_mulai')->get();
        return response()->json(['data' => $rows]);
    }

    public function fungsionalStore(Request $request, User $user)
    {
        $request->validate([
            'jabatan_fungsional_id' => ['required', 'exists:jabatan_fungsional,id'],
            'tmt_mulai' => 'required|date',
            'tmt_selesai' => 'nullable|date|after_or_equal:tmt_mulai',
            'status' => ['required', Rule::in(['aktif', 'nonaktif'])]
        ]);

        $entry = DosenJabatanFungsional::create([
            'user_id' => $user->id,
            'jabatan_fungsional_id' => $request->jabatan_fungsional_id,
            'tmt_mulai' => $request->tmt_mulai,
            'tmt_selesai' => $request->tmt_selesai,
            'status' => $request->status,
        ]);

        return response()->json(['success' => true, 'message' => 'Riwayat fungsional ditambahkan', 'data' => $entry]);
    }

    public function fungsionalEdit(User $user, $id)
    {
        $entry = DosenJabatanFungsional::with('jabatanFungsional')->where('user_id', $user->id)->findOrFail($id);
        return response()->json($entry);
    }

    public function fungsionalUpdate(Request $request, User $user, $id)
    {
        $request->validate([
            'jabatan_fungsional_id' => ['required', 'exists:jabatan_fungsional,id'],
            'tmt_mulai' => 'required|date',
            'tmt_selesai' => 'nullable|date|after_or_equal:tmt_mulai',
            'status' => ['required', Rule::in(['aktif', 'nonaktif'])]
        ]);

        $entry = DosenJabatanFungsional::where('user_id', $user->id)->findOrFail($id);
        $entry->update($request->only(['jabatan_fungsional_id', 'tmt_mulai', 'tmt_selesai', 'status']));

        return response()->json(['success' => true, 'message' => 'Riwayat fungsional diperbarui', 'data' => $entry]);
    }

    public function fungsionalDestroy(User $user, $id)
    {
        $entry = DosenJabatanFungsional::where('user_id', $user->id)->findOrFail($id);
        $entry->delete();
        return response()->json(['success' => true, 'message' => 'Riwayat fungsional dihapus']);
    }

    // ---------------- Struktural ----------------
    public function strukturalData(User $user)
    {
        $rows = DosenJabatanStruktural::where('user_id', $user->id)->with('jabatanStruktural')->orderByDesc('tmt_mulai')->get();
        return response()->json(['data' => $rows]);
    }

    public function strukturalStore(Request $request, User $user)
    {
        $request->validate([
            'jabatan_struktural_id' => ['required', 'exists:jabatan_struktural,id'],
            'tmt_mulai' => 'required|date',
            'tmt_selesai' => 'nullable|date|after_or_equal:tmt_mulai',
            'status' => ['required', Rule::in(['aktif', 'nonaktif'])]
        ]);

        $entry = DosenJabatanStruktural::create([
            'user_id' => $user->id,
            'jabatan_struktural_id' => $request->jabatan_struktural_id,
            'tmt_mulai' => $request->tmt_mulai,
            'tmt_selesai' => $request->tmt_selesai,
            'status' => $request->status,
        ]);

        return response()->json(['success' => true, 'message' => 'Riwayat struktural ditambahkan', 'data' => $entry]);
    }

    public function strukturalEdit(User $user, $id)
    {
        $entry = DosenJabatanStruktural::with('jabatanStruktural')->where('user_id', $user->id)->findOrFail($id);
        return response()->json($entry);
    }

    public function strukturalUpdate(Request $request, User $user, $id)
    {
        $request->validate([
            'jabatan_struktural_id' => ['required', 'exists:jabatan_struktural,id'],
            'tmt_mulai' => 'required|date',
            'tmt_selesai' => 'nullable|date|after_or_equal:tmt_mulai',
            'status' => ['required', Rule::in(['aktif', 'nonaktif'])]
        ]);

        $entry = DosenJabatanStruktural::where('user_id', $user->id)->findOrFail($id);
        $entry->update($request->only(['jabatan_struktural_id', 'tmt_mulai', 'tmt_selesai', 'status']));

        return response()->json(['success' => true, 'message' => 'Riwayat struktural diperbarui', 'data' => $entry]);
    }

    public function strukturalDestroy(User $user, $id)
    {
        $entry = DosenJabatanStruktural::where('user_id', $user->id)->findOrFail($id);
        $entry->delete();
        return response()->json(['success' => true, 'message' => 'Riwayat struktural dihapus']);
    }

    // ---------------- Unit Kerja ----------------
    public function unitData(User $user)
    {
        $rows = DosenUnitKerja::where('user_id', $user->id)->with('unitKerja')->orderByDesc('tmt_mulai')->get();
        return response()->json(['data' => $rows]);
    }

    public function unitStore(Request $request, User $user)
    {
        $request->validate([
            'unit_kerja_id' => ['required', 'exists:unit_kerja,id'],
            'tmt_mulai' => 'required|date',
            'tmt_selesai' => 'nullable|date|after_or_equal:tmt_mulai',
        ]);

        $entry = DosenUnitKerja::create([
            'user_id' => $user->id,
            'unit_kerja_id' => $request->unit_kerja_id,
            'tmt_mulai' => $request->tmt_mulai,
            'tmt_selesai' => $request->tmt_selesai,
        ]);

        return response()->json(['success' => true, 'message' => 'Riwayat unit kerja ditambahkan', 'data' => $entry]);
    }

    public function unitEdit(User $user, $id)
    {
        $entry = DosenUnitKerja::with('unitKerja')->where('user_id', $user->id)->findOrFail($id);
        return response()->json($entry);
    }

    public function unitUpdate(Request $request, User $user, $id)
    {
        $request->validate([
            'unit_kerja_id' => ['required', 'exists:unit_kerja,id'],
            'tmt_mulai' => 'required|date',
            'tmt_selesai' => 'nullable|date|after_or_equal:tmt_mulai',
        ]);

        $entry = DosenUnitKerja::where('user_id', $user->id)->findOrFail($id);
        $entry->update($request->only(['unit_kerja_id', 'tmt_mulai', 'tmt_selesai']));

        return response()->json(['success' => true, 'message' => 'Riwayat unit kerja diperbarui', 'data' => $entry]);
    }

    public function unitDestroy(User $user, $id)
    {
        $entry = DosenUnitKerja::where('user_id', $user->id)->findOrFail($id);
        $entry->delete();
        return response()->json(['success' => true, 'message' => 'Riwayat unit kerja dihapus']);
    }
}
