<?php

namespace App\Http\Controllers\InputPoint;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\PointD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PointDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input-point.point-D');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fileD1' => 'required|mimes:pdf|max:2048',
            'fileD2' => 'required|mimes:pdf|max:2048',
            'fileD3' => 'required|mimes:pdf|max:2048',
            'fileD4' => 'required|mimes:pdf|max:2048',
            'fileD5' => 'required|mimes:pdf|max:2048',
            'fileD6' => 'required|mimes:pdf|max:2048',
            'fileD7' => 'required|mimes:pdf|max:2048',
            'fileD8' => 'required|mimes:pdf|max:2048',
            'fileD9' => 'required|mimes:pdf|max:2048',
            'fileD10' => 'required|mimes:pdf|max:2048',
            'fileD11' => 'required|mimes:pdf|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $pointD = new PointD();
            $pointD->D1 = $request->get('D1');
            $pointD->scorD1 = $request->get('scorD1');
            $pointD->scorMaxD1 = $request->get('scorMaxD1');
            $pointD->scorSubItemD1 = $request->get('scorSubItemD1');

            if ($request->hasFile('fileD1')) {
                $fileName = $request->file('fileD1')->store('uploads/Point-d', 'public');
                $pointD->fileD1 = $fileName;
            }

            $pointD->D2 = $request->get('D2');
            $pointD->scorD2 = $request->get('scorD2');
            $pointD->scorMaxD2 = $request->get('scorMaxD2');
            $pointD->scorSubItemD2 = $request->get('scorSubItemD2');

            if ($request->hasFile('fileD2')) {
                $fileName = $request->file('fileD2')->store('uploads/Point-d', 'public');
                $pointD->fileD2 = $fileName;
            }

            $pointD->JumlahYangDihasilkanD2_2_in = $request->get('JumlahYangDihasilkanD2_2');
            $pointD->SkorTambahanD2_2 = $request->get('SkorTambahanD2_2');
            $pointD->JumlahYangDihasilkanD2_3_in = $request->get('JumlahYangDihasilkanD2_3');
            $pointD->SkorTambahanD2_3 = $request->get('SkorTambahanD2_3');
            $pointD->JumlahYangDihasilkanD2_4_in = $request->get('JumlahYangDihasilkanD2_4');
            $pointD->SkorTambahanD2_4 = $request->get('SkorTambahanD2_4');
            $pointD->JumlahYangDihasilkanD2_5_in = $request->get('JumlahYangDihasilkanD2_5');
            $pointD->SkorTambahanD2_5 = $request->get('SkorTambahanD2_5');
            $pointD->SkorTambahanJumlahD2 = $request->get('SkorTambahanJumlahD2');
            $pointD->JumlahSkorYangDiHasilkanD2 = $request->get('JumlahSkorYangDiHasilkanD2');
            $pointD->SkorTambahanJumlahSkorD2 = $request->get('SkorTambahanJumlahSkorD2');
            $pointD->SkorTambahanJumlahBobotSubItemD2 = $request->get('SkorTambahanJumlahBobotSubItemD2');

            $pointD->D3 = $request->get('D3');
            $pointD->scorD3 = $request->get('scorD3');
            $pointD->scorMaxD3 = $request->get('scorMaxD3');
            $pointD->scorSubItemD3 = $request->get('scorSubItemD3');

            if ($request->hasFile('fileD3')) {
                $fileName = $request->file('fileD3')->store('uploads/Point-d', 'public');
                $pointD->fileD3 = $fileName;
            }

            $pointD->JumlahYangDihasilkanD3_2_in = $request->get('JumlahYangDihasilkanD3_2');
            $pointD->SkorTambahanD3_2 = $request->get('SkorTambahanD3_2');
            $pointD->JumlahYangDihasilkanD3_3_in = $request->get('JumlahYangDihasilkanD3_3');
            $pointD->SkorTambahanD3_3 = $request->get('SkorTambahanD3_3');
            $pointD->JumlahYangDihasilkanD3_4_in = $request->get('JumlahYangDihasilkanD3_4');
            $pointD->SkorTambahanD3_4 = $request->get('SkorTambahanD3_4');
            $pointD->JumlahYangDihasilkanD3_5_in = $request->get('JumlahYangDihasilkanD3_5');
            $pointD->SkorTambahanD3_5 = $request->get('SkorTambahanD3_5');
            $pointD->SkorTambahanJumlahD3 = $request->get('SkorTambahanJumlahD3');
            $pointD->JumlahSkorYangDiHasilkanD3 = $request->get('JumlahSkorYangDiHasilkanD3');
            $pointD->SkorTambahanJumlahSkorD3 = $request->get('SkorTambahanJumlahSkorD3');
            $pointD->SkorTambahanJumlahBobotSubItemD3 = $request->get('SkorTambahanJumlahBobotSubItemD3');

            $pointD->D4 = $request->get('D4');
            $pointD->scorD4 = $request->get('scorD4');
            $pointD->scorMaxD4 = $request->get('scorMaxD4');
            $pointD->scorSubItemD4 = $request->get('scorSubItemD4');

            if ($request->hasFile('fileD4')) {
                $fileName = $request->file('fileD4')->store('uploads/Point-d', 'public');
                $pointD->fileD4 = $fileName;
            }

            $pointD->JumlahYangDihasilkanD4_3_in = $request->get('JumlahYangDihasilkanD4_3');
            $pointD->SkorTambahanD4_3 = $request->get('SkorTambahanD4_3');
            $pointD->JumlahYangDihasilkanD4_4_in = $request->get('JumlahYangDihasilkanD4_4');
            $pointD->SkorTambahanD4_4 = $request->get('SkorTambahanD4_4');
            $pointD->JumlahYangDihasilkanD4_5_in = $request->get('JumlahYangDihasilkanD4_5');
            $pointD->SkorTambahanD4_5 = $request->get('SkorTambahanD4_5');
            $pointD->SkorTambahanJumlahD4 = $request->get('SkorTambahanJumlahD4');
            $pointD->JumlahSkorYangDiHasilkanD4 = $request->get('JumlahSkorYangDiHasilkanD4');
            $pointD->SkorTambahanJumlahSkorD4 = $request->get('SkorTambahanJumlahSkorD4');
            $pointD->SkorTambahanJumlahBobotSubItemD4 = $request->get('SkorTambahanJumlahBobotSubItemD4');

            $pointD->D5 = $request->get('D5');
            $pointD->scorD5 = $request->get('scorD5');
            $pointD->scorMaxD5 = $request->get('scorMaxD5');
            $pointD->scorSubItemD5 = $request->get('scorSubItemD5');

            if ($request->hasFile('fileD5')) {
                $fileName = $request->file('fileD5')->store('uploads/Point-d', 'public');
                $pointD->fileD5 = $fileName;
            }

            $pointD->JumlahYangDihasilkanD5_3_in = $request->get('JumlahYangDihasilkanD5_3');
            $pointD->SkorTambahanD5_3 = $request->get('SkorTambahanD5_3');
            $pointD->JumlahYangDihasilkanD5_4_in = $request->get('JumlahYangDihasilkanD5_4');
            $pointD->SkorTambahanD5_4 = $request->get('SkorTambahanD5_4');
            $pointD->JumlahYangDihasilkanD5_5_in = $request->get('JumlahYangDihasilkanD5_5');
            $pointD->SkorTambahanD5_5 = $request->get('SkorTambahanD5_5');
            $pointD->SkorTambahanJumlahD5 = $request->get('SkorTambahanJumlahD5');
            $pointD->JumlahSkorYangDiHasilkanD5 = $request->get('JumlahSkorYangDiHasilkanD5');
            $pointD->SkorTambahanJumlahSkorD5 = $request->get('SkorTambahanJumlahSkorD5');
            $pointD->SkorTambahanJumlahBobotSubItemD5 = $request->get('SkorTambahanJumlahBobotSubItemD5');

            $pointD->D6 = $request->get('D6');
            $pointD->scorD6 = $request->get('scorD6');
            $pointD->scorMaxD6 = $request->get('scorMaxD6');
            $pointD->scorSubItemD6 = $request->get('scorSubItemD6');

            if ($request->hasFile('fileD6')) {
                $fileName = $request->file('fileD6')->store('uploads/Point-d', 'public');
                $pointD->fileD6 = $fileName;
            }

            $pointD->JumlahYangDihasilkanD6_2_in = $request->get('JumlahYangDihasilkanD6_2');
            $pointD->SkorTambahanD6_2 = $request->get('SkorTambahanD6_2');
            $pointD->JumlahYangDihasilkanD6_3_in = $request->get('JumlahYangDihasilkanD6_3');
            $pointD->SkorTambahanD6_3 = $request->get('SkorTambahanD6_3');
            $pointD->JumlahYangDihasilkanD6_4_in = $request->get('JumlahYangDihasilkanD6_4');
            $pointD->SkorTambahanD6_4 = $request->get('SkorTambahanD6_4');
            $pointD->JumlahYangDihasilkanD6_5_in = $request->get('JumlahYangDihasilkanD6_5');
            $pointD->SkorTambahanD6_5 = $request->get('SkorTambahanD6_5');
            $pointD->SkorTambahanJumlahD6 = $request->get('SkorTambahanJumlahD6');
            $pointD->JumlahSkorYangDiHasilkanD6 = $request->get('JumlahSkorYangDiHasilkanD6');
            $pointD->SkorTambahanJumlahSkorD6 = $request->get('SkorTambahanJumlahSkorD6');
            $pointD->SkorTambahanJumlahBobotSubItemD6 = $request->get('SkorTambahanJumlahBobotSubItemD6');

            $pointD->D7 = $request->get('D7');
            $pointD->scorD7 = $request->get('scorD7');
            $pointD->scorMaxD7 = $request->get('scorMaxD7');
            $pointD->scorSubItemD7 = $request->get('scorSubItemD7');

            if ($request->hasFile('fileD7')) {
                $fileName = $request->file('fileD7')->store('uploads/Point-d', 'public');
                $pointD->fileD7 = $fileName;
            }

            $pointD->JumlahYangDihasilkanD7_5_in = $request->get('JumlahYangDihasilkanD7_5');
            $pointD->SkorTambahanD7_5 = $request->get('SkorTambahanD7_5');
            $pointD->SkorTambahanJumlahD7 = $request->get('SkorTambahanJumlahD7');
            $pointD->JumlahSkorYangDiHasilkanD7 = $request->get('JumlahSkorYangDiHasilkanD7');
            $pointD->SkorTambahanJumlahSkorD7 = $request->get('SkorTambahanJumlahSkorD7');
            $pointD->SkorTambahanJumlahBobotSubItemD7 = $request->get('SkorTambahanJumlahBobotSubItemD7');

            $pointD->D8 = $request->get('D8');
            $pointD->scorD8 = $request->get('scorD8');
            $pointD->scorMaxD8 = $request->get('scorMaxD8');
            $pointD->scorSubItemD8 = $request->get('scorSubItemD8');

            if ($request->hasFile('fileD8')) {
                $fileName = $request->file('fileD8')->store('uploads/Point-d', 'public');
                $pointD->fileD8 = $fileName;
            }

            $pointD->JumlahYangDihasilkanD8_3_in = $request->get('JumlahYangDihasilkanD8_3');
            $pointD->SkorTambahanD8_3 = $request->get('SkorTambahanD8_3');
            $pointD->JumlahYangDihasilkanD8_4_in = $request->get('JumlahYangDihasilkanD8_4');
            $pointD->SkorTambahanD8_4 = $request->get('SkorTambahanD8_4');
            $pointD->JumlahYangDihasilkanD8_5_in = $request->get('JumlahYangDihasilkanD8_5');
            $pointD->SkorTambahanD8_5 = $request->get('SkorTambahanD8_5');
            $pointD->SkorTambahanJumlahD8 = $request->get('SkorTambahanJumlahD8');
            $pointD->JumlahSkorYangDiHasilkanD8 = $request->get('JumlahSkorYangDiHasilkanD8');
            $pointD->SkorTambahanJumlahSkorD8 = $request->get('SkorTambahanJumlahSkorD8');
            $pointD->SkorTambahanJumlahBobotSubItemD8 = $request->get('SkorTambahanJumlahBobotSubItemD8');

            $pointD->D9 = $request->get('D9');
            $pointD->scorD9 = $request->get('scorD9');
            $pointD->scorMaxD9 = $request->get('scorMaxD9');
            $pointD->scorSubItemD9 = $request->get('scorSubItemD9');

            if ($request->hasFile('fileD9')) {
                $fileName = $request->file('fileD9')->store('uploads/Point-d', 'public');
                $pointD->fileD9 = $fileName;
            }

            $pointD->JumlahYangDihasilkanD9_2_in = $request->get('JumlahYangDihasilkanD9_2');
            $pointD->SkorTambahanD9_2 = $request->get('SkorTambahanD9_2');
            $pointD->JumlahYangDihasilkanD9_3_in = $request->get('JumlahYangDihasilkanD9_3');
            $pointD->SkorTambahanD9_3 = $request->get('SkorTambahanD9_3');
            $pointD->JumlahYangDihasilkanD9_4_in = $request->get('JumlahYangDihasilkanD9_4');
            $pointD->SkorTambahanD9_4 = $request->get('SkorTambahanD9_4');
            $pointD->JumlahYangDihasilkanD9_5_in = $request->get('JumlahYangDihasilkanD9_5');
            $pointD->SkorTambahanD9_5 = $request->get('SkorTambahanD9_5');
            $pointD->SkorTambahanJumlahD9 = $request->get('SkorTambahanJumlahD9');
            $pointD->JumlahSkorYangDiHasilkanD9 = $request->get('JumlahSkorYangDiHasilkanD9');
            $pointD->SkorTambahanJumlahSkorD9 = $request->get('SkorTambahanJumlahSkorD9');
            $pointD->SkorTambahanJumlahBobotSubItemD9 = $request->get('SkorTambahanJumlahBobotSubItemD9');

            $pointD->D10 = $request->get('D10');
            $pointD->scorD10 = $request->get('scorD10');
            $pointD->scorMaxD10 = $request->get('scorMaxD10');
            $pointD->scorSubItemD10 = $request->get('scorSubItemD10');

            if ($request->hasFile('fileD10')) {
                $fileName = $request->file('fileD10')->store('uploads/Point-d', 'public');
                $pointD->fileD10 = $fileName;
            }

            $pointD->JumlahYangDihasilkanD10_3_in = $request->get('JumlahYangDihasilkanD10_3');
            $pointD->SkorTambahanD10_3 = $request->get('SkorTambahanD10_3');
            $pointD->JumlahYangDihasilkanD10_4_in = $request->get('JumlahYangDihasilkanD10_4');
            $pointD->SkorTambahanD10_4 = $request->get('SkorTambahanD10_4');
            $pointD->JumlahYangDihasilkanD10_5_in = $request->get('JumlahYangDihasilkanD10_5');
            $pointD->SkorTambahanD10_5 = $request->get('SkorTambahanD10_5');
            $pointD->SkorTambahanJumlahD10 = $request->get('SkorTambahanJumlahD10');
            $pointD->JumlahSkorYangDiHasilkanD10 = $request->get('JumlahSkorYangDiHasilkanD10');
            $pointD->SkorTambahanJumlahSkorD10 = $request->get('SkorTambahanJumlahSkorD10');
            $pointD->SkorTambahanJumlahBobotSubItemD10 = $request->get('SkorTambahanJumlahBobotSubItemD10');

            $pointD->D11 = $request->get('D11');
            $pointD->scorD11 = $request->get('scorD11');
            $pointD->scorMaxD11 = $request->get('scorMaxD11');
            $pointD->scorSubItemD11 = $request->get('scorSubItemD11');

            if ($request->hasFile('fileD11')) {
                $fileName = $request->file('fileD11')->store('uploads/Point-d', 'public');
                $pointD->fileD11 = $fileName;
            }

            $pointD->JumlahYangDihasilkanD11_3_in = $request->get('JumlahYangDihasilkanD11_3');
            $pointD->SkorTambahanD11_3 = $request->get('SkorTambahanD11_3');
            $pointD->JumlahYangDihasilkanD11_4_in = $request->get('JumlahYangDihasilkanD11_4');
            $pointD->SkorTambahanD11_4 = $request->get('SkorTambahanD11_4');
            $pointD->JumlahYangDihasilkanD11_5_in = $request->get('JumlahYangDihasilkanD11_5');
            $pointD->SkorTambahanD11_5 = $request->get('SkorTambahanD11_5');
            $pointD->SkorTambahanJumlahD11 = $request->get('SkorTambahanJumlahD11');
            $pointD->JumlahSkorYangDiHasilkanD11 = $request->get('JumlahSkorYangDiHasilkanD11');
            $pointD->SkorTambahanJumlahSkorD11 = $request->get('SkorTambahanJumlahSkorD11');
            $pointD->SkorTambahanJumlahBobotSubItemD11 = $request->get('SkorTambahanJumlahBobotSubItemD11');

            $pointD->TotalSkorUnsurPenunjang = $request->get('TotalSkorUnsurPenunjang');
            $pointD->TotalKelebihaD2 = $request->get('TotalKelebihaD2');
            $pointD->TotalKelebihaD3 = $request->get('TotalKelebihaD3');
            $pointD->TotalKelebihaD4 = $request->get('TotalKelebihaD4');
            $pointD->TotalKelebihaD5 = $request->get('TotalKelebihaD5');
            $pointD->TotalKelebihaD6 = $request->get('TotalKelebihaD6');
            $pointD->TotalKelebihaD7 = $request->get('TotalKelebihaD7');
            $pointD->TotalKelebihaD8 = $request->get('TotalKelebihaD8');
            $pointD->TotalKelebihaD9 = $request->get('TotalKelebihaD9');
            $pointD->TotalKelebihaD10 = $request->get('TotalKelebihaD10');
            $pointD->TotalKelebihaD11 = $request->get('TotalKelebihaD11');
            $pointD->TotalKelebihanSkor = $request->get('TotalKelebihanSkor');
            $pointD->NilaiUnsurPenunjang = $request->get('NilaiUnsurPenunjang');
            $pointD->NilaiTambahUnsurPenunjang = $request->get('NilaiTambahUnsurPenunjang');
            $pointD->ResultSumNilaiTotalUnsurPenunjang = $request->get('ResultSumNilaiTotalUnsurPenunjang');
            $pointD->user_id = Auth()->id();
            $pointD->save();

            DB::commit();
            toast('Create new Point D successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point D fail :)', 'error');
            return redirect()->back();
        }
        // toast('Berhasil menambahkan Point D', 'success');
        // return redirect()->route('point-D');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PointD  $pointD
     * @return \Illuminate\Http\Response
     */
    public function show(PointD $pointD)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PointD  $pointD
     * @return \Illuminate\Http\Response
     */
    public function edit(PointD $pointD, $PointId)
    {
        $dataMenu = Menu::first();

        if ($dataMenu->control_menu == 0)
            return view('menu.disabled');
        elseif (PointD::where('user_id', '=', $PointId)->first() == "") {
            return view('menu.menu-empty');
        } else {
            $data = PointD::where('user_id', '=', $PointId)->first();
        }

        return view('edit-point.EditPointD', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PointD  $pointD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointD $pointD, $PointId)
    {
        $request->validate([
            'fileD1' => 'mimes:pdf|max:2048',
            'fileD2' => 'mimes:pdf|max:2048',
            'fileD3' => 'mimes:pdf|max:2048',
            'fileD4' => 'mimes:pdf|max:2048',
            'fileD5' => 'mimes:pdf|max:2048',
            'fileD6' => 'mimes:pdf|max:2048',
            'fileD7' => 'mimes:pdf|max:2048',
            'fileD8' => 'mimes:pdf|max:2048',
            'fileD9' => 'mimes:pdf|max:2048',
            'fileD10' => 'mimes:pdf|max:2048',
            'fileD11' => 'mimes:pdf|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $RecordData =  PointD::where('user_id', $PointId)->firstOrFail();
            // Request put data update
            $D1 = $request->D1;
            $scorD1 = $request->scorD1;
            $scorMaxD1 = $request->scorMaxD1;
            $scorSubItemD1 = $request->scorSubItemD1;


            if ($request->hasFile('fileD1')) {
                if ($RecordData->fileD1 && file_exists(storage_path('app/public/uploads/Point-d/' . $RecordData->fileD1))) {
                    \Storage::delete('public/uploads/Point-d/' . $RecordData->fileD1);
                }
                $file_D1 = $request->file('fileD1')->store('uploads/Point-d', 'public');
            } else {
                $file_D1 = $RecordData->fileD1;
            }

            $D2 = $request->D2;
            $scorD2 = $request->scorD2;
            $scorMaxD2 = $request->scorMaxD2;
            $scorSubItemD2 = $request->scorSubItemD2;

            if ($request->hasFile('fileD2')) {
                if ($RecordData->fileD2 && file_exists(storage_path('app/public/uploads/Point-d/' . $RecordData->fileD2))) {
                    \Storage::delete('public/uploads/Point-d/' . $RecordData->fileD2);
                }
                $file_D2 = $request->file('fileD2')->store('uploads/Point-d', 'public');
            } else {
                $file_D2 = $RecordData->fileD2;
            }

            $JumlahYangDihasilkanD2_2_in = $request->JumlahYangDihasilkanD2_2;
            $SkorTambahanD2_2 = $request->SkorTambahanD2_2;
            $JumlahYangDihasilkanD2_3_in = $request->JumlahYangDihasilkanD2_3;
            $SkorTambahanD2_3 = $request->SkorTambahanD2_3;
            $JumlahYangDihasilkanD2_4_in = $request->JumlahYangDihasilkanD2_4;
            $SkorTambahanD2_4 = $request->SkorTambahanD2_4;
            $JumlahYangDihasilkanD2_5_in = $request->JumlahYangDihasilkanD2_5;
            $SkorTambahanD2_5 = $request->SkorTambahanD2_5;
            $SkorTambahanJumlahD2 = $request->SkorTambahanJumlahD2;
            $JumlahSkorYangDiHasilkanD2 = $request->JumlahSkorYangDiHasilkanD2;
            $SkorTambahanJumlahSkorD2 = $request->SkorTambahanJumlahSkorD2;
            $SkorTambahanJumlahBobotSubItemD2 = $request->SkorTambahanJumlahBobotSubItemD2;

            $D3 = $request->D3;
            $scorD3 = $request->scorD3;
            $scorMaxD3 = $request->scorMaxD3;
            $scorSubItemD3 = $request->scorSubItemD3;

            if ($request->hasFile('fileD3')) {
                if ($RecordData->fileD3 && file_exists(storage_path('app/public/uploads/Point-d/' . $RecordData->fileD3))) {
                    \Storage::delete('public/uploads/Point-d/' . $RecordData->fileD3);
                }
                $file_D3 = $request->file('fileD3')->store('uploads/Point-d', 'public');
            } else {
                $file_D3 = $RecordData->fileD3;
            }

            $JumlahYangDihasilkanD3_2_in = $request->JumlahYangDihasilkanD3_2;
            $SkorTambahanD3_2 = $request->SkorTambahanD3_2;
            $JumlahYangDihasilkanD3_3_in = $request->JumlahYangDihasilkanD3_3;
            $SkorTambahanD3_3 = $request->SkorTambahanD3_3;
            $JumlahYangDihasilkanD3_4_in = $request->JumlahYangDihasilkanD3_4;
            $SkorTambahanD3_4 = $request->SkorTambahanD3_4;
            $JumlahYangDihasilkanD3_5_in = $request->JumlahYangDihasilkanD3_5;
            $SkorTambahanD3_5 = $request->SkorTambahanD3_5;
            $SkorTambahanJumlahD3 = $request->SkorTambahanJumlahD3;
            $JumlahSkorYangDiHasilkanD3 = $request->JumlahSkorYangDiHasilkanD3;
            $SkorTambahanJumlahSkorD3 = $request->SkorTambahanJumlahSkorD3;
            $SkorTambahanJumlahBobotSubItemD3 = $request->SkorTambahanJumlahBobotSubItemD3;

            $D4 = $request->D4;
            $scorD4 = $request->scorD4;
            $scorMaxD4 = $request->scorMaxD4;
            $scorSubItemD4 = $request->scorSubItemD4;

            if ($request->hasFile('fileD4')) {
                if ($RecordData->fileD4 && file_exists(storage_path('app/public/uploads/Point-d/' . $RecordData->fileD4))) {
                    \Storage::delete('public/uploads/Point-d/' . $RecordData->fileD4);
                }
                $file_D4 = $request->file('fileD4')->store('uploads/Point-d', 'public');
            } else {
                $file_D4 = $RecordData->fileD4;
            }

            $JumlahYangDihasilkanD4_3_in = $request->JumlahYangDihasilkanD4_3;
            $SkorTambahanD4_3 = $request->SkorTambahanD4_3;
            $JumlahYangDihasilkanD4_4_in = $request->JumlahYangDihasilkanD4_4;
            $SkorTambahanD4_4 = $request->SkorTambahanD4_4;
            $JumlahYangDihasilkanD4_5_in = $request->JumlahYangDihasilkanD4_5;
            $SkorTambahanD4_5 = $request->SkorTambahanD4_5;
            $SkorTambahanJumlahD4 = $request->SkorTambahanJumlahD4;
            $JumlahSkorYangDiHasilkanD4 = $request->JumlahSkorYangDiHasilkanD4;
            $SkorTambahanJumlahSkorD4 = $request->SkorTambahanJumlahSkorD4;
            $SkorTambahanJumlahBobotSubItemD4 = $request->SkorTambahanJumlahBobotSubItemD4;

            $D5 = $request->D5;
            $scorD5 = $request->scorD5;
            $scorMaxD5 = $request->scorMaxD5;
            $scorSubItemD5 = $request->scorSubItemD5;

            if ($request->hasFile('fileD5')) {
                if ($RecordData->fileD5 && file_exists(storage_path('app/public/uploads/Point-d/' . $RecordData->fileD5))) {
                    \Storage::delete('public/uploads/Point-d/' . $RecordData->fileD5);
                }
                $file_D5 = $request->file('fileD5')->store('uploads/Point-d', 'public');
            } else {
                $file_D5 = $RecordData->fileD5;
            }

            $JumlahYangDihasilkanD5_3_in = $request->JumlahYangDihasilkanD5_3;
            $SkorTambahanD5_3 = $request->SkorTambahanD5_3;
            $JumlahYangDihasilkanD5_4_in = $request->JumlahYangDihasilkanD5_4;
            $SkorTambahanD5_4 = $request->SkorTambahanD5_4;
            $JumlahYangDihasilkanD5_5_in = $request->JumlahYangDihasilkanD5_5;
            $SkorTambahanD5_5 = $request->SkorTambahanD5_5;
            $SkorTambahanJumlahD5 = $request->SkorTambahanJumlahD5;
            $JumlahSkorYangDiHasilkanD5 = $request->JumlahSkorYangDiHasilkanD5;
            $SkorTambahanJumlahSkorD5 = $request->SkorTambahanJumlahSkorD5;
            $SkorTambahanJumlahBobotSubItemD5 = $request->SkorTambahanJumlahBobotSubItemD5;

            $D6 = $request->D6;
            $scorD6 = $request->scorD6;
            $scorMaxD6 = $request->scorMaxD6;
            $scorSubItemD6 = $request->scorSubItemD6;

            if ($request->hasFile('fileD6')) {
                if ($RecordData->fileD6 && file_exists(storage_path('app/public/uploads/Point-d/' . $RecordData->fileD6))) {
                    \Storage::delete('public/uploads/Point-d/' . $RecordData->fileD6);
                }
                $file_D6 = $request->file('fileD6')->store('uploads/Point-d', 'public');
            } else {
                $file_D6 = $RecordData->fileD6;
            }

            $JumlahYangDihasilkanD6_2_in = $request->JumlahYangDihasilkanD6_2;
            $SkorTambahanD6_2 = $request->SkorTambahanD6_2;
            $JumlahYangDihasilkanD6_3_in = $request->JumlahYangDihasilkanD6_3;
            $SkorTambahanD6_3 = $request->SkorTambahanD6_3;
            $JumlahYangDihasilkanD6_4_in = $request->JumlahYangDihasilkanD6_4;
            $SkorTambahanD6_4 = $request->SkorTambahanD6_4;
            $JumlahYangDihasilkanD6_5_in = $request->JumlahYangDihasilkanD6_5;
            $SkorTambahanD6_5 = $request->SkorTambahanD6_5;
            $SkorTambahanJumlahD6 = $request->SkorTambahanJumlahD6;
            $JumlahSkorYangDiHasilkanD6 = $request->JumlahSkorYangDiHasilkanD6;
            $SkorTambahanJumlahSkorD6 = $request->SkorTambahanJumlahSkorD6;
            $SkorTambahanJumlahBobotSubItemD6 = $request->SkorTambahanJumlahBobotSubItemD6;

            $D7 = $request->D7;
            $scorD7 = $request->scorD7;
            $scorMaxD7 = $request->scorMaxD7;
            $scorSubItemD7 = $request->scorSubItemD7;

            if ($request->hasFile('fileD7')) {
                if ($RecordData->fileD7 && file_exists(storage_path('app/public/uploads/Point-d/' . $RecordData->fileD7))) {
                    \Storage::delete('public/uploads/Point-d/' . $RecordData->fileD7);
                }
                $file_D7 = $request->file('fileD7')->store('uploads/Point-d', 'public');
            } else {
                $file_D7 = $RecordData->fileD7;
            }

            $JumlahYangDihasilkanD7_5_in = $request->JumlahYangDihasilkanD7_5;
            $SkorTambahanD7_5 = $request->SkorTambahanD7_5;
            $SkorTambahanJumlahD7 = $request->SkorTambahanJumlahD7;
            $JumlahSkorYangDiHasilkanD7 = $request->JumlahSkorYangDiHasilkanD7;
            $SkorTambahanJumlahSkorD7 = $request->SkorTambahanJumlahSkorD7;
            $SkorTambahanJumlahBobotSubItemD7 = $request->SkorTambahanJumlahBobotSubItemD7;

            $D8 = $request->D8;
            $scorD8 = $request->scorD8;
            $scorMaxD8 = $request->scorMaxD8;
            $scorSubItemD8 = $request->scorSubItemD8;

            if ($request->hasFile('fileD8')) {
                if ($RecordData->fileD8 && file_exists(storage_path('app/public/uploads/Point-d/' . $RecordData->fileD8))) {
                    \Storage::delete('public/uploads/Point-d/' . $RecordData->fileD8);
                }
                $file_D8 = $request->file('fileD8')->store('uploads/Point-d', 'public');
            } else {
                $file_D8 = $RecordData->fileD8;
            }

            $JumlahYangDihasilkanD8_3_in = $request->JumlahYangDihasilkanD8_3;
            $SkorTambahanD8_3 = $request->SkorTambahanD8_3;
            $JumlahYangDihasilkanD8_4_in = $request->JumlahYangDihasilkanD8_4;
            $SkorTambahanD8_4 = $request->SkorTambahanD8_4;
            $JumlahYangDihasilkanD8_5_in = $request->JumlahYangDihasilkanD8_5;
            $SkorTambahanD8_5 = $request->SkorTambahanD8_5;
            $SkorTambahanJumlahD8 = $request->SkorTambahanJumlahD8;
            $JumlahSkorYangDiHasilkanD8 = $request->JumlahSkorYangDiHasilkanD8;
            $SkorTambahanJumlahSkorD8 = $request->SkorTambahanJumlahSkorD8;
            $SkorTambahanJumlahBobotSubItemD8 = $request->SkorTambahanJumlahBobotSubItemD8;

            $D9 = $request->D9;
            $scorD9 = $request->scorD9;
            $scorMaxD9 = $request->scorMaxD9;
            $scorSubItemD9 = $request->scorSubItemD9;

            if ($request->hasFile('fileD9')) {
                if ($RecordData->fileD9 && file_exists(storage_path('app/public/uploads/Point-d/' . $RecordData->fileD9))) {
                    \Storage::delete('public/uploads/Point-d/' . $RecordData->fileD9);
                }
                $file_D9 = $request->file('fileD9')->store('uploads/Point-d', 'public');
            } else {
                $file_D9 = $RecordData->fileD9;
            }

            $JumlahYangDihasilkanD9_2_in = $request->JumlahYangDihasilkanD9_2;
            $SkorTambahanD9_2 = $request->SkorTambahanD9_2;
            $JumlahYangDihasilkanD9_3_in = $request->JumlahYangDihasilkanD9_3;
            $SkorTambahanD9_3 = $request->SkorTambahanD9_3;
            $JumlahYangDihasilkanD9_4_in = $request->JumlahYangDihasilkanD9_4;
            $SkorTambahanD9_4 = $request->SkorTambahanD9_4;
            $JumlahYangDihasilkanD9_5_in = $request->JumlahYangDihasilkanD9_5;
            $SkorTambahanD9_5 = $request->SkorTambahanD9_5;
            $SkorTambahanJumlahD9 = $request->SkorTambahanJumlahD9;
            $JumlahSkorYangDiHasilkanD9 = $request->JumlahSkorYangDiHasilkanD9;
            $SkorTambahanJumlahSkorD9 = $request->SkorTambahanJumlahSkorD9;
            $SkorTambahanJumlahBobotSubItemD9 = $request->SkorTambahanJumlahBobotSubItemD9;

            $D10 = $request->D10;
            $scorD10 = $request->scorD10;
            $scorMaxD10 = $request->scorMaxD10;
            $scorSubItemD10 = $request->scorSubItemD10;

            if ($request->hasFile('fileD10')) {
                if ($RecordData->fileD10 && file_exists(storage_path('app/public/uploads/Point-d/' . $RecordData->fileD10))) {
                    \Storage::delete('public/uploads/Point-d/' . $RecordData->fileD10);
                }
                $file_D10 = $request->file('fileD10')->store('uploads/Point-d', 'public');
            } else {
                $file_D10 = $RecordData->fileD10;
            }

            $JumlahYangDihasilkanD10_3_in = $request->JumlahYangDihasilkanD10_3;
            $SkorTambahanD10_3 = $request->SkorTambahanD10_3;
            $JumlahYangDihasilkanD10_4_in = $request->JumlahYangDihasilkanD10_4;
            $SkorTambahanD10_4 = $request->SkorTambahanD10_4;
            $JumlahYangDihasilkanD10_5_in = $request->JumlahYangDihasilkanD10_5;
            $SkorTambahanD10_5 = $request->SkorTambahanD10_5;
            $SkorTambahanJumlahD10 = $request->SkorTambahanJumlahD10;
            $JumlahSkorYangDiHasilkanD10 = $request->JumlahSkorYangDiHasilkanD10;
            $SkorTambahanJumlahSkorD10 = $request->SkorTambahanJumlahSkorD10;
            $SkorTambahanJumlahBobotSubItemD10 = $request->SkorTambahanJumlahBobotSubItemD10;

            $D11 = $request->D11;
            $scorD11 = $request->scorD11;
            $scorMaxD11 = $request->scorMaxD11;
            $scorSubItemD11 = $request->scorSubItemD11;

            if ($request->hasFile('fileD11')) {
                if ($RecordData->fileD11 && file_exists(storage_path('app/public/uploads/Point-d/' . $RecordData->fileD11))) {
                    \Storage::delete('public/uploads/Point-d/' . $RecordData->fileD11);
                }
                $file_D11 = $request->file('fileD11')->store('uploads/Point-d', 'public');
            } else {
                $file_D11 = $RecordData->fileD11;
            }

            $JumlahYangDihasilkanD11_3_in = $request->JumlahYangDihasilkanD11_3;
            $SkorTambahanD11_3 = $request->SkorTambahanD11_3;
            $JumlahYangDihasilkanD11_4_in = $request->JumlahYangDihasilkanD11_4;
            $SkorTambahanD11_4 = $request->SkorTambahanD11_4;
            $JumlahYangDihasilkanD11_5_in = $request->JumlahYangDihasilkanD11_5;
            $SkorTambahanD11_5 = $request->SkorTambahanD11_5;
            $SkorTambahanJumlahD11 = $request->SkorTambahanJumlahD11;
            $JumlahSkorYangDiHasilkanD11 = $request->JumlahSkorYangDiHasilkanD11;
            $SkorTambahanJumlahSkorD11 = $request->SkorTambahanJumlahSkorD11;
            $SkorTambahanJumlahBobotSubItemD11 = $request->SkorTambahanJumlahBobotSubItemD11;

            $TotalSkorUnsurPenunjang = $request->TotalSkorUnsurPenunjang;
            $TotalKelebihaD2 = $request->TotalKelebihaD2;
            $TotalKelebihaD3 = $request->TotalKelebihaD3;
            $TotalKelebihaD4 = $request->TotalKelebihaD4;
            $TotalKelebihaD5 = $request->TotalKelebihaD5;
            $TotalKelebihaD6 = $request->TotalKelebihaD6;
            $TotalKelebihaD7 = $request->TotalKelebihaD7;
            $TotalKelebihaD8 = $request->TotalKelebihaD8;
            $TotalKelebihaD9 = $request->TotalKelebihaD9;
            $TotalKelebihaD10 = $request->TotalKelebihaD10;
            $TotalKelebihaD11 = $request->TotalKelebihaD11;
            $TotalKelebihanSkor = $request->TotalKelebihanSkor;
            $NilaiUnsurPenunjang = $request->NilaiUnsurPenunjang;
            $NilaiTambahUnsurPenunjang = $request->NilaiTambahUnsurPenunjang;
            $ResultSumNilaiTotalUnsurPenunjang = $request->ResultSumNilaiTotalUnsurPenunjang;


            $update = [
                'D1' => $D1,
                'scorD1' => $scorD1,
                'scorMaxD1' => $scorMaxD1,
                'scorSubItemD1' => $scorSubItemD1,
                'fileD1' => $file_D1,

                'D2' => $D2,
                'scorD2' => $scorD2,
                'scorMaxD2' => $scorMaxD2,
                'scorSubItemD2' => $scorSubItemD2,
                'fileD2' => $file_D2,
                'JumlahYangDihasilkanD2_2_in' => $JumlahYangDihasilkanD2_2_in,
                'SkorTambahanD2_2' => $SkorTambahanD2_2,
                'JumlahYangDihasilkanD2_3_in' => $JumlahYangDihasilkanD2_3_in,
                'SkorTambahanD2_3' => $SkorTambahanD2_3,
                'JumlahYangDihasilkanD2_4_in' => $JumlahYangDihasilkanD2_4_in,
                'SkorTambahanD2_4' => $SkorTambahanD2_4,
                'JumlahYangDihasilkanD2_5_in' => $JumlahYangDihasilkanD2_5_in,
                'SkorTambahanD2_5' => $SkorTambahanD2_5,
                'SkorTambahanJumlahD2' => $SkorTambahanJumlahD2,
                'JumlahSkorYangDiHasilkanD2' => $JumlahSkorYangDiHasilkanD2,
                'SkorTambahanJumlahSkorD2' => $SkorTambahanJumlahSkorD2,
                'SkorTambahanJumlahBobotSubItemD2' => $SkorTambahanJumlahBobotSubItemD2,

                'D3' => $D3,
                'scorD3' => $scorD3,
                'scorMaxD3' => $scorMaxD3,
                'scorSubItemD3' => $scorSubItemD3,
                'fileD3' => $file_D3,
                'JumlahYangDihasilkanD3_2_in' => $JumlahYangDihasilkanD3_2_in,
                'SkorTambahanD3_2' => $SkorTambahanD3_2,
                'JumlahYangDihasilkanD3_3_in' => $JumlahYangDihasilkanD3_3_in,
                'SkorTambahanD3_3' => $SkorTambahanD3_3,
                'JumlahYangDihasilkanD3_4_in' => $JumlahYangDihasilkanD3_4_in,
                'SkorTambahanD3_4' => $SkorTambahanD3_4,
                'JumlahYangDihasilkanD3_5_in' => $JumlahYangDihasilkanD3_5_in,
                'SkorTambahanD3_5' => $SkorTambahanD3_5,
                'SkorTambahanJumlahD3' => $SkorTambahanJumlahD3,
                'JumlahSkorYangDiHasilkanD3' => $JumlahSkorYangDiHasilkanD3,
                'SkorTambahanJumlahSkorD3' => $SkorTambahanJumlahSkorD3,
                'SkorTambahanJumlahBobotSubItemD3' => $SkorTambahanJumlahBobotSubItemD3,

                'D4' => $D4,
                'scorD4' => $scorD4,
                'scorMaxD4' => $scorMaxD4,
                'scorSubItemD4' => $scorSubItemD4,
                'fileD4' => $file_D4,
                'JumlahYangDihasilkanD4_3_in' => $JumlahYangDihasilkanD4_3_in,
                'SkorTambahanD4_3' => $SkorTambahanD4_3,
                'JumlahYangDihasilkanD4_4_in' => $JumlahYangDihasilkanD4_4_in,
                'SkorTambahanD4_4' => $SkorTambahanD4_4,
                'JumlahYangDihasilkanD4_5_in' => $JumlahYangDihasilkanD4_5_in,
                'SkorTambahanD4_5' => $SkorTambahanD4_5,
                'SkorTambahanJumlahD4' => $SkorTambahanJumlahD4,
                'JumlahSkorYangDiHasilkanD4' => $JumlahSkorYangDiHasilkanD4,
                'SkorTambahanJumlahSkorD4' => $SkorTambahanJumlahSkorD4,
                'SkorTambahanJumlahBobotSubItemD4' => $SkorTambahanJumlahBobotSubItemD4,

                'D5' => $D5,
                'scorD5' => $scorD5,
                'scorMaxD5' => $scorMaxD5,
                'scorSubItemD5' => $scorSubItemD5,
                'fileD5' => $file_D5,
                'JumlahYangDihasilkanD5_3_in' => $JumlahYangDihasilkanD5_3_in,
                'SkorTambahanD5_3' => $SkorTambahanD5_3,
                'JumlahYangDihasilkanD5_4_in' => $JumlahYangDihasilkanD5_4_in,
                'SkorTambahanD5_4' => $SkorTambahanD5_4,
                'JumlahYangDihasilkanD5_5_in' => $JumlahYangDihasilkanD5_5_in,
                'SkorTambahanD5_5' => $SkorTambahanD5_5,
                'SkorTambahanJumlahD5' => $SkorTambahanJumlahD5,
                'JumlahSkorYangDiHasilkanD5' => $JumlahSkorYangDiHasilkanD5,
                'SkorTambahanJumlahSkorD5' => $SkorTambahanJumlahSkorD5,
                'SkorTambahanJumlahBobotSubItemD5' => $SkorTambahanJumlahBobotSubItemD5,

                'D6' => $D6,
                'scorD6' => $scorD6,
                'scorMaxD6' => $scorMaxD6,
                'scorSubItemD6' => $scorSubItemD6,
                'fileD6' => $file_D6,
                'JumlahYangDihasilkanD6_2_in' => $JumlahYangDihasilkanD6_2_in,
                'SkorTambahanD6_2' => $SkorTambahanD6_2,
                'JumlahYangDihasilkanD6_3_in' => $JumlahYangDihasilkanD6_3_in,
                'SkorTambahanD6_3' => $SkorTambahanD6_3,
                'JumlahYangDihasilkanD6_4_in' => $JumlahYangDihasilkanD6_4_in,
                'SkorTambahanD6_4' => $SkorTambahanD6_4,
                'JumlahYangDihasilkanD6_5_in' => $JumlahYangDihasilkanD6_5_in,
                'SkorTambahanD6_5' => $SkorTambahanD6_5,
                'SkorTambahanJumlahD6' => $SkorTambahanJumlahD6,
                'JumlahSkorYangDiHasilkanD6' => $JumlahSkorYangDiHasilkanD6,
                'SkorTambahanJumlahSkorD6' => $SkorTambahanJumlahSkorD6,
                'SkorTambahanJumlahBobotSubItemD6' => $SkorTambahanJumlahBobotSubItemD6,

                'D7' => $D7,
                'scorD7' => $scorD7,
                'scorMaxD7' => $scorMaxD7,
                'scorSubItemD7' => $scorSubItemD7,
                'fileD7' => $file_D7,
                'JumlahYangDihasilkanD7_5_in' => $JumlahYangDihasilkanD7_5_in,
                'SkorTambahanD7_5' => $SkorTambahanD7_5,
                'SkorTambahanJumlahD7' => $SkorTambahanJumlahD7,
                'JumlahSkorYangDiHasilkanD7' => $JumlahSkorYangDiHasilkanD7,
                'SkorTambahanJumlahSkorD7' => $SkorTambahanJumlahSkorD7,
                'SkorTambahanJumlahBobotSubItemD7' => $SkorTambahanJumlahBobotSubItemD7,

                'D8' => $D8,
                'scorD8' => $scorD8,
                'scorMaxD8' => $scorMaxD8,
                'scorSubItemD8' => $scorSubItemD8,
                'fileD8' => $file_D8,
                'JumlahYangDihasilkanD8_3_in' => $JumlahYangDihasilkanD8_3_in,
                'SkorTambahanD8_3' => $SkorTambahanD8_3,
                'JumlahYangDihasilkanD8_4_in' => $JumlahYangDihasilkanD8_4_in,
                'SkorTambahanD8_4' => $SkorTambahanD8_4,
                'JumlahYangDihasilkanD8_5_in' => $JumlahYangDihasilkanD8_5_in,
                'SkorTambahanD8_5' => $SkorTambahanD8_5,
                'SkorTambahanJumlahD8' => $SkorTambahanJumlahD8,
                'JumlahSkorYangDiHasilkanD8' => $JumlahSkorYangDiHasilkanD8,
                'SkorTambahanJumlahSkorD8' => $SkorTambahanJumlahSkorD8,
                'SkorTambahanJumlahBobotSubItemD8' => $SkorTambahanJumlahBobotSubItemD8,

                'D9' => $D9,
                'scorD9' => $scorD9,
                'scorMaxD9' => $scorMaxD9,
                'scorSubItemD9' => $scorSubItemD9,
                'fileD9' => $file_D9,
                'JumlahYangDihasilkanD9_2_in' => $JumlahYangDihasilkanD9_2_in,
                'SkorTambahanD9_2' => $SkorTambahanD9_2,
                'JumlahYangDihasilkanD9_3_in' => $JumlahYangDihasilkanD9_3_in,
                'SkorTambahanD9_3' => $SkorTambahanD9_3,
                'JumlahYangDihasilkanD9_4_in' => $JumlahYangDihasilkanD9_4_in,
                'SkorTambahanD9_4' => $SkorTambahanD9_4,
                'JumlahYangDihasilkanD9_5_in' => $JumlahYangDihasilkanD9_5_in,
                'SkorTambahanD9_5' => $SkorTambahanD9_5,
                'SkorTambahanJumlahD9' => $SkorTambahanJumlahD9,
                'JumlahSkorYangDiHasilkanD9' => $JumlahSkorYangDiHasilkanD9,
                'SkorTambahanJumlahSkorD9' => $SkorTambahanJumlahSkorD9,
                'SkorTambahanJumlahBobotSubItemD9' => $SkorTambahanJumlahBobotSubItemD9,

                'D10' => $D10,
                'scorD10' => $scorD10,
                'scorMaxD10' => $scorMaxD10,
                'scorSubItemD10' => $scorSubItemD10,
                'fileD10' => $file_D10,
                'JumlahYangDihasilkanD10_3_in' => $JumlahYangDihasilkanD10_3_in,
                'SkorTambahanD10_3' => $SkorTambahanD10_3,
                'JumlahYangDihasilkanD10_4_in' => $JumlahYangDihasilkanD10_4_in,
                'SkorTambahanD10_4' => $SkorTambahanD10_4,
                'JumlahYangDihasilkanD10_5_in' => $JumlahYangDihasilkanD10_5_in,
                'SkorTambahanD10_5' => $SkorTambahanD10_5,
                'SkorTambahanJumlahD10' => $SkorTambahanJumlahD10,
                'JumlahSkorYangDiHasilkanD10' => $JumlahSkorYangDiHasilkanD10,
                'SkorTambahanJumlahSkorD10' => $SkorTambahanJumlahSkorD10,
                'SkorTambahanJumlahBobotSubItemD10' => $SkorTambahanJumlahBobotSubItemD10,

                'D11' => $D11,
                'scorD11' => $scorD11,
                'scorMaxD11' => $scorMaxD11,
                'scorSubItemD11' => $scorSubItemD11,
                'fileD11' => $file_D11,
                'JumlahYangDihasilkanD11_3_in' => $JumlahYangDihasilkanD11_3_in,
                'SkorTambahanD11_3' => $SkorTambahanD11_3,
                'JumlahYangDihasilkanD11_4_in' => $JumlahYangDihasilkanD11_4_in,
                'SkorTambahanD11_4' => $SkorTambahanD11_4,
                'JumlahYangDihasilkanD11_5_in' => $JumlahYangDihasilkanD11_5_in,
                'SkorTambahanD11_5' => $SkorTambahanD11_5,
                'SkorTambahanJumlahD11' => $SkorTambahanJumlahD11,
                'JumlahSkorYangDiHasilkanD11' => $JumlahSkorYangDiHasilkanD11,
                'SkorTambahanJumlahSkorD11' => $SkorTambahanJumlahSkorD11,
                'SkorTambahanJumlahBobotSubItemD11' => $SkorTambahanJumlahBobotSubItemD11,

                'TotalSkorUnsurPenunjang' => $TotalSkorUnsurPenunjang,
                'TotalKelebihaD2' => $TotalKelebihaD2,
                'TotalKelebihaD3' => $TotalKelebihaD3,
                'TotalKelebihaD4' => $TotalKelebihaD4,
                'TotalKelebihaD5' => $TotalKelebihaD5,
                'TotalKelebihaD6' => $TotalKelebihaD6,
                'TotalKelebihaD7' => $TotalKelebihaD7,
                'TotalKelebihaD8' => $TotalKelebihaD8,
                'TotalKelebihaD9' => $TotalKelebihaD9,
                'TotalKelebihaD10' => $TotalKelebihaD10,
                'TotalKelebihaD11' => $TotalKelebihaD11,
                'TotalKelebihanSkor' => $TotalKelebihanSkor,
                'NilaiUnsurPenunjang' => $NilaiUnsurPenunjang,
                'NilaiTambahUnsurPenunjang' => $NilaiTambahUnsurPenunjang,
                'ResultSumNilaiTotalUnsurPenunjang' => $ResultSumNilaiTotalUnsurPenunjang,
            ];

            $RecordData->update($update);
            DB::commit();
            toast('Update Point D successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point D fail :)', 'error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PointD  $pointD
     * @return \Illuminate\Http\Response
     */
    public function destroy(PointD $pointD)
    {
        //
    }
}
