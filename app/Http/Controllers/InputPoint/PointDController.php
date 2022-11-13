<?php

namespace App\Http\Controllers\InputPoint;

use App\Http\Controllers\Controller;
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
    public function edit(PointD $pointD)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PointD  $pointD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointD $pointD)
    {
        //
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
