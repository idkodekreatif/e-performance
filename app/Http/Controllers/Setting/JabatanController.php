<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\Jabatan;
use App\Models\User;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatan = Jabatan::all();
        return view('admin.jabatan.index', compact('jabatan'));
    }
    public function create()
    {
        return view('admin.jabatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Jabatan::create($request->all());

        return redirect()->route('jabatan.index')->with('success', 'Jabatan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('admin.jabatan.edit', compact('jabatan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $jabatan = Jabatan::findOrFail($id);
        $jabatan->update($request->all());

        return redirect()->route('jabatan.index')->with('success', 'Jabatan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->delete();

        return response()->json(['success' => 'Jabatan berhasil dihapus.']);
    }

    public function indexRoleJabatan()
    {
        $excludedNames = ['akuntansi', 'baak', 'bau', 'bidan', 'gizi', 'hrd', 'ka. Sub. Baak', 'ka. Sub. Baak', 'keuangan', 'lpm', 'lppm', 'manajemen', 'manajer', 'marketing', 'perawat', 'rektor', 'risbang', 'superuser', 'upt', 'warek1', 'warek2', 'ypsdmit'];

        $users = User::with('jabatan')
            ->whereNotIn('name', $excludedNames)
            ->get();

        return view('admin.user_jabatan.index', compact('users'));
    }

    public function editRoleJabatan($id)
    {
        $user = User::findOrFail($id);
        $jabatans = Jabatan::all();
        return view('admin.user_jabatan.edit', compact('user', 'jabatans'));
    }

    public function updateRoleJabatan(Request $request, $id)
    {
        $request->validate([
            'jabatan_id' => 'nullable|exists:jabatan,id',
        ]);

        $user = User::findOrFail($id);
        $user->jabatan_id = $request->jabatan_id;
        $user->save();

        toast('Jabatan berhasil diperbarui.', 'success');
        return redirect()->route('user-jabatan.indexRoleJabatan')->with('success', 'Jabatan berhasil diperbarui.');
    }
}
