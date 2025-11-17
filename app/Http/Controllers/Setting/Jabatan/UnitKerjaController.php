<?php

namespace App\Http\Controllers\Setting\Jabatan;

use App\Http\Controllers\Controller;
use App\Models\Setting\Jabatan\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    public function index()
    {
        return view('admin.jabatan.unit-kerja.index');
    }

    /**
     * DataTables AJAX
     */
    public function data()
    {
        $query = UnitKerja::select(['id', 'name', 'type', 'description']);

        return datatables()->of($query)
            ->addIndexColumn()

            // Kolom Aksi
            ->addColumn('action', function ($row) {
                return '
        <div class="btn-group" role="group">
            <a href="' . route('unit-kerja.edit', $row->id) . '"
                class="btn btn-sm btn-warning">
                <i class="bi bi-pencil-square"></i>
            </a>

            <button type="button"
                class="btn btn-sm btn-danger"
                onclick="deleteUnitKerja(' . $row->id . ')">
                <i class="bi bi-trash"></i>
            </button>
        </div>
    ';
            })


            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        return view('admin.jabatan.unit-kerja.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|unique:unit_kerja,name',
            'type'        => 'nullable|string|max:100',
            'description' => 'nullable|string'
        ]);

        UnitKerja::create([
            'name'        => $request->name,
            'type'        => $request->type,
            'description' => $request->description,
        ]);

        return redirect()->route('unit-kerja.index')
            ->with('success', 'Unit Kerja berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = UnitKerja::findOrFail($id);

        return view('admin.jabatan.unit-kerja.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = UnitKerja::findOrFail($id);

        $request->validate([
            'name'        => 'required|unique:unit_kerja,name,' . $id,
            'type'        => 'nullable|string|max:100',
            'description' => 'nullable|string'
        ]);

        $item->update([
            'name'        => $request->name,
            'type'        => $request->type,
            'description' => $request->description,
        ]);

        return redirect()->route('unit-kerja.index')
            ->with('success', 'Unit Kerja berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = UnitKerja::findOrFail($id);
        $item->delete();

        return response()->json([
            'success' => true,
            'message' => 'Unit Kerja berhasil dihapus.'
        ]);
    }
}
