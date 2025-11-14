<?php

namespace App\Http\Controllers\Setting\Jabatan;

use App\Http\Controllers\Controller;
use App\Models\Setting\Jabatan\JabatanFungsional;
use App\Models\Setting\Jabatan\JabatanStruktural;
use App\Models\Setting\Jabatan\UnitKerja;
use App\Models\User;
use Illuminate\Http\Request;

class UserJabatanController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.jabatan.UserJabatan.index', compact('users'));
    }

    public function data()
    {
        $users = User::select('id', 'name', 'email')->get();
        return datatables()->of($users)
            ->addColumn('action', function ($user) {
                return '<a href="' . route('jabatan.pegawai.edit', $user->id) . '" class="btn btn-sm btn-primary">Edit</a>';
            })
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
