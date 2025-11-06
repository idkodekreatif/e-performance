<?php

namespace App\Http\Controllers\Setting\Jabatan;

use App\Http\Controllers\Controller;
use App\Models\Setting\Jabatan\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    public function index()
    {
        $data = UnitKerja::orderBy('name')->get();
        return view('unit_kerja.index', compact('data'));
    }

    public function create()
    {
        return view('unit_kerja.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|unique:unit_kerja,name',
            'type'   => 'nullable|string',
            'description' => 'nullable|string'
        ]);

        UnitKerja::create($request->all());

        return redirect()->route('unit-kerja.index')
            ->with('success', 'Unit kerja berhasil ditambahkan');
    }

    public function edit($id)
    {
        $item = UnitKerja::findOrFail($id);
        return view('unit_kerja.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = UnitKerja::findOrFail($id);

        $request->validate([
            'name'   => 'required|unique:unit_kerja,name,' . $id,
            'type'   => 'nullable|string',
            'description' => 'nullable|string'
        ]);

        $item->update($request->all());

        return redirect()->route('unit-kerja.index')
            ->with('success', 'Unit kerja berhasil diperbarui');
    }

    public function destroy($id)
    {
        UnitKerja::findOrFail($id)->delete();

        return redirect()->route('unit-kerja.index')
            ->with('success', 'Unit kerja berhasil dihapus');
    }
}
