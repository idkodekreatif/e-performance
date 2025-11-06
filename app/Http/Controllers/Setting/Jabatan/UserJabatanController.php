<?php

namespace App\Http\Controllers\Setting\Jabatan;

use App\Http\Controllers\Controller;
use App\Models\Setting\Jabatan\JabatanFungsional;
use App\Models\Setting\Jabatan\JabatanStruktural;
use App\Models\Setting\Jabatan\UnitKerja;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserJabatanController extends Controller
{
    /**
     * Halaman utama daftar pegawai
     */
    public function index()
    {
        return view('admin.jabatan.UserJabatan.index');
    }

    /**
     * DataTables server-side data
     */
    public function data(Request $request)
    {
        $users = User::with(['jabfung', 'jabstruk', 'unitKerja'])->orderBy('name');

        return DataTables::of($users)
            ->addColumn('jabfung', fn($row) => $row->jabfung ?? [])
            ->addColumn('jabstruk', fn($row) => $row->jabstruk ?? [])
            ->addColumn('unitKerja', fn($row) => $row->unitKerja ?? [])
            ->addColumn('action', function ($row) {
                return '<a href="' . route('jabatan.pegawai.edit', $row->id) . '" class="btn btn-warning btn-sm">Edit</a>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Halaman edit jabatan / unit kerja untuk user tertentu
     */
    public function edit($id)
    {
        $user = User::with(['jabfung', 'jabstruk', 'unitKerja'])->findOrFail($id);

        $jabfungList = JabatanFungsional::orderBy('name')->get();
        $jabstrukList = JabatanStruktural::orderBy('name')->get();
        $unitList = UnitKerja::orderBy('name')->get();

        return view('admin.jabatan.UserJabatan.edit', compact(
            'user',
            'jabfungList',
            'jabstrukList',
            'unitList'
        ));
    }

    /**
     * Update pivot mapping User → Jabfung, Jabstruk, Unit Kerja
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'jabfung_ids' => 'nullable|array',
            'jabstruk_ids' => 'nullable|array',
            'unit_kerja_ids' => 'nullable|array',
        ]);

        $user = User::findOrFail($id);

        $user->jabfung()->sync($request->jabfung_ids ?? []);
        $user->jabstruk()->sync($request->jabstruk_ids ?? []);
        $user->unitKerja()->sync($request->unit_kerja_ids ?? []);

        return redirect()->route('jabatan.pegawai.index')
            ->with('success', 'Jabatan & unit kerja user berhasil diperbarui');
    }
}
