<?php

namespace App\Http\Controllers\Setting\Jabatan;

use App\Http\Controllers\Controller;
use App\Models\Setting\Jabatan\JabatanStruktural;
use Illuminate\Http\Request;

class JabatanStrukturalController extends Controller
{
    public function index()
    {
        $data = JabatanStruktural::orderBy('name')->get();
        return view('jabatan_struktural.index', compact('data'));
    }

    public function create()
    {
        return view('jabatan_struktural.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|unique:jabatan_struktural,name',
            'level'  => 'nullable|string',
            'description' => 'nullable|string'
        ]);

        JabatanStruktural::create($request->all());

        return redirect()->route('jabatan-struktural.index')
            ->with('success', 'Jabatan struktural berhasil ditambahkan');
    }

    public function edit($id)
    {
        $item = JabatanStruktural::findOrFail($id);
        return view('jabatan_struktural.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = JabatanStruktural::findOrFail($id);

        $request->validate([
            'name'   => 'required|unique:jabatan_struktural,name,' . $id,
            'level'  => 'nullable|string',
            'description' => 'nullable|string'
        ]);

        $item->update($request->all());

        return redirect()->route('jabatan-struktural.index')
            ->with('success', 'Jabatan struktural berhasil diperbarui');
    }

    public function destroy($id)
    {
        JabatanStruktural::findOrFail($id)->delete();

        return redirect()->route('jabatan-struktural.index')
            ->with('success', 'Jabatan struktural berhasil dihapus');
    }
}
