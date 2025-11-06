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
            'description' => 'nullable|string'
        ]);

        JabatanFungsional::create($request->only(['name', 'description']));

        return redirect()->route('jabfung.index')->with('success', 'Jabatan fungsional berhasil ditambahkan.');
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
            'description' => 'nullable|string'
        ]);

        $item->update($request->only(['name', 'description']));

        return redirect()->route('jabfung.index')->with('success', 'Jabatan fungsional berhasil diperbarui.');
    }

    public function destroy($id)
    {
        JabatanFungsional::findOrFail($id)->delete();

        return response()->json(['success' => true, 'message' => 'Jabatan fungsional berhasil dihapus']);
    }
}
