<?php

namespace App\Http\Controllers\Setting\Jabatan;

use App\Http\Controllers\Controller;
use App\Models\Setting\Jabatan\JabatanStruktural;
use Illuminate\Http\Request;

class JabatanStrukturalController extends Controller
{
    public function index()
    {
        return view('admin.jabatan.JabatanStruktural.index');
    }

    public function data(Request $request)
    {
        $query = JabatanStruktural::select(['id', 'name', 'level', 'description']);

        return datatables()->of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return '
                <button class="btn btn-sm btn-warning editBtn" data-id="' . $row->id . '">Edit</button>
                <button class="btn btn-sm btn-danger deleteBtn" data-id="' . $row->id . '">Hapus</button>
            ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }


    public function create()
    {
        return view('admin.jabatan.JabatanStruktural.create');
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
        return view('admin.jabatan.JabatanStruktural.edit', compact('item'));
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

        return response()->json(['success' => true, 'message' => 'Jabatan struktural berhasil dihapus']);
    }
}
