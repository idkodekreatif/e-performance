<?php

namespace App\Http\Controllers\Setting\Jabatan;

use App\Http\Controllers\Controller;
use App\Models\Setting\Jabatan\JabatanFungsional;
use Illuminate\Http\Request;

class JabatanFungsionalController extends Controller
{
    public function index()
    {
        return view('admin.jabatan.JabatanFungsional.index');
    }

    public function data()
    {
        $data = JabatanFungsional::orderBy('name')->get();

        return response()->json([
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('admin.jabatan.JabatanFungsional.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:jabatan_fungsional,name',
            'golongan_min' => 'nullable|string',
            'golongan_max' => 'nullable|string',
            'angka_kredit_min' => 'required|numeric',
            'angka_kredit_next' => 'required|numeric',
            'description' => 'nullable|string'
        ]);

        JabatanFungsional::create($request->all());

        return redirect()->route('jabfung.index')->with('success', 'Jabatan Fungsional berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = JabatanFungsional::findOrFail($id);
        return view('admin.jabatan.JabatanFungsional.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = JabatanFungsional::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:jabatan_fungsional,name,' . $id,
            'golongan_min' => 'nullable|string',
            'golongan_max' => 'nullable|string',
            'angka_kredit_min' => 'required|numeric',
            'angka_kredit_next' => 'required|numeric',
            'description' => 'nullable|string'
        ]);

        $item->update($request->all());

        return redirect()->route('jabfung.index')->with('success', 'Jabatan Fungsional berhasil diperbarui.');
    }

    public function destroy($id)
    {
        JabatanFungsional::findOrFail($id)->delete();

        return response()->json(['success' => true, 'message' => 'Jabatan Fungsional berhasil dihapus']);
    }
}
