<?php

namespace App\Http\Controllers\Setting\Jabatan;

use App\Http\Controllers\Controller;
use App\Models\Setting\Jabatan\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    public function index()
    {
        return view('admin.jabatan.UnitKerja.index');
    }

    // DataTables AJAX
    public function data()
    {
        $query = UnitKerja::select(['id', 'name', 'type', 'description']);
        return datatables()->of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return '
                    <a href="/admin/unit-kerja/edit/' . $row->id . '" class="btn btn-warning btn-sm">Edit</a>
                    <button onclick="deleteUnitKerja(' . $row->id . ')" class="btn btn-danger btn-sm">Delete</button>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        return view('admin.jabatan.UnitKerja.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|unique:unit_kerja,name',
            'type'   => 'nullable|string',
            'description' => 'nullable|string'
        ]);

        UnitKerja::create($request->only(['name', 'type', 'description']));

        return redirect()->route('unit-kerja.index')
            ->with('success', 'Unit kerja berhasil ditambahkan');
    }

    public function edit($id)
    {
        $item = UnitKerja::findOrFail($id);
        return view('admin.jabatan.UnitKerja.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = UnitKerja::findOrFail($id);

        $request->validate([
            'name'   => 'required|unique:unit_kerja,name,' . $id,
            'type'   => 'nullable|string',
            'description' => 'nullable|string'
        ]);

        $item->update($request->only(['name', 'type', 'description']));

        return redirect()->route('unit-kerja.index')
            ->with('success', 'Unit kerja berhasil diperbarui');
    }

    public function destroy($id)
    {
        UnitKerja::findOrFail($id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Unit kerja berhasil dihapus'
        ]);
    }
}
