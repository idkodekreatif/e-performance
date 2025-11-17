<?php

namespace App\Http\Controllers\Setting\Jabatan;

use App\Http\Controllers\Controller;
use App\Models\Setting\Jabatan\JabatanStruktural;
use App\Models\Setting\Jabatan\UnitKerja;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class JabatanStrukturalController extends Controller
{
    public function index()
    {
        return view('admin.jabatan.jabatan-struktural.index');
    }

    public function data()
    {
        $query = JabatanStruktural::with('unitKerja');

        return DataTables::of($query)
            ->addColumn('unitKerja', function ($row) {
                return $row->unitKerja->name ?? '-';
            })
            ->addColumn('action', function ($row) {
                $editUrl = route('jabatan-struktural.edit', $row->id);
                $deleteUrl = route('jabatan-struktural.delete', $row->id);

                return '
                    <div class="btn-group">
                        <a href="' . $editUrl . '" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <button class="btn btn-danger btn-sm" onclick="deleteData(\'' . $deleteUrl . '\')">
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
        $unitKerja = UnitKerja::all();

        return view('admin.jabatan.jabatan-struktural.create', compact('unitKerja'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'level' => 'nullable',
            'unit_kerja_id' => 'nullable|exists:unit_kerja,id',
            'description' => 'nullable',
        ]);

        JabatanStruktural::create($request->all());

        return redirect()->route('jabatan-struktural.index')
            ->with('success', 'Jabatan Struktural berhasil ditambahkan');
    }

    public function edit($id)
    {
        $item = JabatanStruktural::findOrFail($id);
        $unitKerja = UnitKerja::all();

        return view('admin.jabatan.jabatan-struktural.edit', compact('item', 'unitKerja'));
    }

    public function update(Request $request, $id)
    {
        $item = JabatanStruktural::findOrFail($id);

        $request->validate([
            'name'  => 'required',
            'level' => 'nullable',
            'unit_kerja_id' => 'nullable|exists:unit_kerja,id',
            'description' => 'nullable',
        ]);

        $item->update($request->all());

        return redirect()->route('jabatan-struktural.index')
            ->with('success', 'Jabatan Struktural berhasil diperbarui');
    }

    public function delete($id)
    {
        JabatanStruktural::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
