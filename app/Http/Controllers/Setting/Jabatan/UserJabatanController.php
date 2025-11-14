<?php

namespace App\Http\Controllers\Setting\Jabatan;

use App\Http\Controllers\Controller;
use App\Models\Setting\Jabatan\JabatanFungsional;
use App\Models\Setting\Jabatan\JabatanStruktural;
use App\Models\Setting\Jabatan\UnitKerja;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserJabatanController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.jabatan.UserJabatan.index', compact('users'));
    }

    public function data(Request $request)
    {
        $users = User::with(['jabfung', 'jabstruk', 'unitKerja'])->orderBy('name');

        return datatables()->of($users)

            // Jabatan Fungsional → array of string
            ->addColumn('jabfung', function ($row) {
                return $row->jabfung->pluck('name')->toArray();
            })

            // Jabatan Struktural → array of string
            ->addColumn('jabstruk', function ($row) {
                return $row->jabstruk->pluck('name')->toArray();
            })

            // Unit Kerja → array of string
            ->addColumn('unitKerja', function ($row) {
                return $row->unitKerja->pluck('name')->toArray();
            })

            // Tombol aksi
            ->addColumn('action', function ($row) {
                return '<a href="' . route('jabatan.pegawai.edit', $row->id) . '"
                        class="btn btn-warning btn-sm">Edit</a>';
            })

            ->rawColumns(['action'])
            ->make(true);
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);

        // Ambil list jabatan dan unit
        $jabfungList = JabatanFungsional::all();
        $jabstrukList = JabatanStruktural::all();
        $unitList = UnitKerja::all();

        return view('admin.jabatan.UserJabatan.edit', compact('user', 'jabfungList', 'jabstrukList', 'unitList'));
    }

    // public function update(Request $request, $id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->update($request->only(['name', 'email']));
    //     return redirect()->route('jabatan.pegawai.index')->with('success', 'Data berhasil diupdate');
    // }
}
