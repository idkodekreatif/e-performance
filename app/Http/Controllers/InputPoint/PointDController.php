<?php

namespace App\Http\Controllers\InputPoint;

use App\Http\Controllers\Controller;
use App\Models\PointD;
use Illuminate\Http\Request;

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
        $new_data = new PointD();

        $new_data->D1 = $request->get('D1');
        $new_data->scorD1 = $request->get('scorD1');
        $new_data->scorMaxD1 = $request->get('scorMaxD1');
        $new_data->scorSubItemD1 = $request->get('scorSubItemD1');

        $new_data->D2 = $request->get('D2');
        $new_data->scorD2 = $request->get('scorD2');
        $new_data->scorMaxD2 = $request->get('scorMaxD2');
        $new_data->scorSubItemD2 = $request->get('scorSubItemD2');
        $new_data->JumlahYangDihasilkanD2_2_in = $request->get('JumlahYangDihasilkanD2_2');
        $new_data->SkorTambahanD2_2 = $request->get('SkorTambahanD2_2');
        $new_data->JumlahYangDihasilkanD2_3_in = $request->get('JumlahYangDihasilkanD2_3');
        $new_data->SkorTambahanD2_3 = $request->get('SkorTambahanD2_3');
        $new_data->JumlahYangDihasilkanD2_4_in = $request->get('JumlahYangDihasilkanD2_4');
        $new_data->SkorTambahanD2_4 = $request->get('SkorTambahanD2_4');
        $new_data->JumlahYangDihasilkanD2_5_in = $request->get('JumlahYangDihasilkanD2_5');
        $new_data->SkorTambahanD2_5 = $request->get('SkorTambahanD2_5');
        $new_data->SkorTambahanJumlahD2 = $request->get('SkorTambahanJumlahD2');
        $new_data->JumlahSkorYangDiHasilkanD2 = $request->get('JumlahSkorYangDiHasilkanD2');
        $new_data->SkorTambahanJumlahSkorD2 = $request->get('SkorTambahanJumlahSkorD2');
        $new_data->SkorTambahanJumlahBobotSubItemD2 = $request->get('SkorTambahanJumlahBobotSubItemD2');

        $new_data->D3 = $request->get('D3');
        $new_data->scorD3 = $request->get('scorD3');
        $new_data->scorMaxD3 = $request->get('scorMaxD3');
        $new_data->scorSubItemD3 = $request->get('scorSubItemD3');
        $new_data->JumlahYangDihasilkanD3_2_in = $request->get('JumlahYangDihasilkanD3_2');
        $new_data->SkorTambahanD3_2 = $request->get('SkorTambahanD3_2');
        $new_data->JumlahYangDihasilkanD3_3_in = $request->get('JumlahYangDihasilkanD3_3');
        $new_data->SkorTambahanD3_3 = $request->get('SkorTambahanD3_3');
        $new_data->JumlahYangDihasilkanD3_4_in = $request->get('JumlahYangDihasilkanD3_4');
        $new_data->SkorTambahanD3_4 = $request->get('SkorTambahanD3_4');
        $new_data->JumlahYangDihasilkanD3_5_in = $request->get('JumlahYangDihasilkanD3_5');
        $new_data->SkorTambahanD3_5 = $request->get('SkorTambahanD3_5');
        $new_data->SkorTambahanJumlahD3 = $request->get('SkorTambahanJumlahD3');
        $new_data->JumlahSkorYangDiHasilkanD3 = $request->get('JumlahSkorYangDiHasilkanD3');
        $new_data->SkorTambahanJumlahSkorD3 = $request->get('SkorTambahanJumlahSkorD3');
        $new_data->SkorTambahanJumlahBobotSubItemD3 = $request->get('SkorTambahanJumlahBobotSubItemD3');

        $new_data->D4 = $request->get('D4');
        $new_data->scorD4 = $request->get('scorD4');
        $new_data->scorMaxD4 = $request->get('scorMaxD4');
        $new_data->scorSubItemD4 = $request->get('scorSubItemD4');
        $new_data->JumlahYangDihasilkanD4_3_in = $request->get('JumlahYangDihasilkanD4_3');
        $new_data->SkorTambahanD4_3 = $request->get('SkorTambahanD4_3');
        $new_data->JumlahYangDihasilkanD4_4_in = $request->get('JumlahYangDihasilkanD4_4');
        $new_data->SkorTambahanD4_4 = $request->get('SkorTambahanD4_4');
        $new_data->JumlahYangDihasilkanD4_5_in = $request->get('JumlahYangDihasilkanD4_5');
        $new_data->SkorTambahanD4_5 = $request->get('SkorTambahanD4_5');
        $new_data->SkorTambahanJumlahD4 = $request->get('SkorTambahanJumlahD4');
        $new_data->JumlahSkorYangDiHasilkanD4 = $request->get('JumlahSkorYangDiHasilkanD4');
        $new_data->SkorTambahanJumlahSkorD4 = $request->get('SkorTambahanJumlahSkorD4');
        $new_data->SkorTambahanJumlahBobotSubItemD4 = $request->get('SkorTambahanJumlahBobotSubItemD4');

        $new_data->D5 = $request->get('D5');
        $new_data->scorD5 = $request->get('scorD5');
        $new_data->scorMaxD5 = $request->get('scorMaxD5');
        $new_data->scorSubItemD5 = $request->get('scorSubItemD5');
        $new_data->JumlahYangDihasilkanD5_3_in = $request->get('JumlahYangDihasilkanD5_3');
        $new_data->SkorTambahanD5_3 = $request->get('SkorTambahanD5_3');
        $new_data->JumlahYangDihasilkanD5_4_in = $request->get('JumlahYangDihasilkanD5_4');
        $new_data->SkorTambahanD5_4 = $request->get('SkorTambahanD5_4');
        $new_data->JumlahYangDihasilkanD5_5_in = $request->get('JumlahYangDihasilkanD5_5');
        $new_data->SkorTambahanD5_5 = $request->get('SkorTambahanD5_5');
        $new_data->SkorTambahanJumlahD5 = $request->get('SkorTambahanJumlahD5');
        $new_data->JumlahSkorYangDiHasilkanD5 = $request->get('JumlahSkorYangDiHasilkanD5');
        $new_data->SkorTambahanJumlahSkorD5 = $request->get('SkorTambahanJumlahSkorD5');
        $new_data->SkorTambahanJumlahBobotSubItemD5 = $request->get('SkorTambahanJumlahBobotSubItemD5');

        $new_data->D6 = $request->get('D6');
        $new_data->scorD6 = $request->get('scorD6');
        $new_data->scorMaxD6 = $request->get('scorMaxD6');
        $new_data->scorSubItemD6 = $request->get('scorSubItemD6');
        $new_data->JumlahYangDihasilkanD6_2_in = $request->get('JumlahYangDihasilkanD6_2');
        $new_data->SkorTambahanD6_2 = $request->get('SkorTambahanD6_2');
        $new_data->JumlahYangDihasilkanD6_3_in = $request->get('JumlahYangDihasilkanD6_3');
        $new_data->SkorTambahanD6_3 = $request->get('SkorTambahanD6_3');
        $new_data->JumlahYangDihasilkanD6_4_in = $request->get('JumlahYangDihasilkanD6_4');
        $new_data->SkorTambahanD6_4 = $request->get('SkorTambahanD6_4');
        $new_data->JumlahYangDihasilkanD6_5_in = $request->get('JumlahYangDihasilkanD6_5');
        $new_data->SkorTambahanD6_5 = $request->get('SkorTambahanD6_5');
        $new_data->SkorTambahanJumlahD6 = $request->get('SkorTambahanJumlahD6');
        $new_data->JumlahSkorYangDiHasilkanD6 = $request->get('JumlahSkorYangDiHasilkanD6');
        $new_data->SkorTambahanJumlahSkorD6 = $request->get('SkorTambahanJumlahSkorD6');
        $new_data->SkorTambahanJumlahBobotSubItemD6 = $request->get('SkorTambahanJumlahBobotSubItemD6');

        $new_data->D7 = $request->get('D7');
        $new_data->scorD7 = $request->get('scorD7');
        $new_data->scorMaxD7 = $request->get('scorMaxD7');
        $new_data->scorSubItemD7 = $request->get('scorSubItemD7');
        $new_data->JumlahYangDihasilkanD7_5_in = $request->get('JumlahYangDihasilkanD7_5');
        $new_data->SkorTambahanD7_5 = $request->get('SkorTambahanD7_5');
        $new_data->SkorTambahanJumlahD7 = $request->get('SkorTambahanJumlahD7');
        $new_data->JumlahSkorYangDiHasilkanD7 = $request->get('JumlahSkorYangDiHasilkanD7');
        $new_data->SkorTambahanJumlahSkorD7 = $request->get('SkorTambahanJumlahSkorD7');
        $new_data->SkorTambahanJumlahBobotSubItemD7 = $request->get('SkorTambahanJumlahBobotSubItemD7');

        $new_data->D8 = $request->get('D8');
        $new_data->scorD8 = $request->get('scorD8');
        $new_data->scorMaxD8 = $request->get('scorMaxD8');
        $new_data->scorSubItemD8 = $request->get('scorSubItemD8');
        $new_data->JumlahYangDihasilkanD8_3_in = $request->get('JumlahYangDihasilkanD8_3');
        $new_data->SkorTambahanD8_3 = $request->get('SkorTambahanD8_3');
        $new_data->JumlahYangDihasilkanD8_4_in = $request->get('JumlahYangDihasilkanD8_4');
        $new_data->SkorTambahanD8_4 = $request->get('SkorTambahanD8_4');
        $new_data->JumlahYangDihasilkanD8_5_in = $request->get('JumlahYangDihasilkanD8_5');
        $new_data->SkorTambahanD8_5 = $request->get('SkorTambahanD8_5');
        $new_data->SkorTambahanJumlahD8 = $request->get('SkorTambahanJumlahD8');
        $new_data->JumlahSkorYangDiHasilkanD8 = $request->get('JumlahSkorYangDiHasilkanD8');
        $new_data->SkorTambahanJumlahSkorD8 = $request->get('SkorTambahanJumlahSkorD8');
        $new_data->SkorTambahanJumlahBobotSubItemD8 = $request->get('SkorTambahanJumlahBobotSubItemD8');

        $new_data->D9 = $request->get('D9');
        $new_data->scorD9 = $request->get('scorD9');
        $new_data->scorMaxD9 = $request->get('scorMaxD9');
        $new_data->scorSubItemD9 = $request->get('scorSubItemD9');
        $new_data->JumlahYangDihasilkanD9_2_in = $request->get('JumlahYangDihasilkanD9_2');
        $new_data->SkorTambahanD9_2 = $request->get('SkorTambahanD9_2');
        $new_data->JumlahYangDihasilkanD9_3_in = $request->get('JumlahYangDihasilkanD9_3');
        $new_data->SkorTambahanD9_3 = $request->get('SkorTambahanD9_3');
        $new_data->JumlahYangDihasilkanD9_4_in = $request->get('JumlahYangDihasilkanD9_4');
        $new_data->SkorTambahanD9_4 = $request->get('SkorTambahanD9_4');
        $new_data->JumlahYangDihasilkanD9_5_in = $request->get('JumlahYangDihasilkanD9_5');
        $new_data->SkorTambahanD9_5 = $request->get('SkorTambahanD9_5');
        $new_data->SkorTambahanJumlahD9 = $request->get('SkorTambahanJumlahD9');
        $new_data->JumlahSkorYangDiHasilkanD9 = $request->get('JumlahSkorYangDiHasilkanD9');
        $new_data->SkorTambahanJumlahSkorD9 = $request->get('SkorTambahanJumlahSkorD9');
        $new_data->SkorTambahanJumlahBobotSubItemD9 = $request->get('SkorTambahanJumlahBobotSubItemD9');

        $new_data->D10 = $request->get('D10');
        $new_data->scorD10 = $request->get('scorD10');
        $new_data->scorMaxD10 = $request->get('scorMaxD10');
        $new_data->scorSubItemD10 = $request->get('scorSubItemD10');
        $new_data->JumlahYangDihasilkanD10_3_in = $request->get('JumlahYangDihasilkanD10_3');
        $new_data->SkorTambahanD10_3 = $request->get('SkorTambahanD10_3');
        $new_data->JumlahYangDihasilkanD10_4_in = $request->get('JumlahYangDihasilkanD10_4');
        $new_data->SkorTambahanD10_4 = $request->get('SkorTambahanD10_4');
        $new_data->JumlahYangDihasilkanD10_5_in = $request->get('JumlahYangDihasilkanD10_5');
        $new_data->SkorTambahanD10_5 = $request->get('SkorTambahanD10_5');
        $new_data->SkorTambahanJumlahD10 = $request->get('SkorTambahanJumlahD10');
        $new_data->JumlahSkorYangDiHasilkanD10 = $request->get('JumlahSkorYangDiHasilkanD10');
        $new_data->SkorTambahanJumlahSkorD10 = $request->get('SkorTambahanJumlahSkorD10');
        $new_data->SkorTambahanJumlahBobotSubItemD10 = $request->get('SkorTambahanJumlahBobotSubItemD10');

        $new_data->D11 = $request->get('D11');
        $new_data->scorD11 = $request->get('scorD11');
        $new_data->scorMaxD11 = $request->get('scorMaxD11');
        $new_data->scorSubItemD11 = $request->get('scorSubItemD11');
        $new_data->JumlahYangDihasilkanD11_3_in = $request->get('JumlahYangDihasilkanD11_3');
        $new_data->SkorTambahanD11_3 = $request->get('SkorTambahanD11_3');
        $new_data->JumlahYangDihasilkanD11_4_in = $request->get('JumlahYangDihasilkanD11_4');
        $new_data->SkorTambahanD11_4 = $request->get('SkorTambahanD11_4');
        $new_data->JumlahYangDihasilkanD11_5_in = $request->get('JumlahYangDihasilkanD11_5');
        $new_data->SkorTambahanD11_5 = $request->get('SkorTambahanD11_5');
        $new_data->SkorTambahanJumlahD11 = $request->get('SkorTambahanJumlahD11');
        $new_data->JumlahSkorYangDiHasilkanD11 = $request->get('JumlahSkorYangDiHasilkanD11');
        $new_data->SkorTambahanJumlahSkorD11 = $request->get('SkorTambahanJumlahSkorD11');
        $new_data->SkorTambahanJumlahBobotSubItemD11 = $request->get('SkorTambahanJumlahBobotSubItemD11');

        $new_data->TotalSkorUnsurPenunjang = $request->get('TotalSkorUnsurPenunjang');
        $new_data->TotalKelebihaD2 = $request->get('TotalKelebihaD2');
        $new_data->TotalKelebihaD3 = $request->get('TotalKelebihaD3');
        $new_data->TotalKelebihaD4 = $request->get('TotalKelebihaD4');
        $new_data->TotalKelebihaD5 = $request->get('TotalKelebihaD5');
        $new_data->TotalKelebihaD6 = $request->get('TotalKelebihaD6');
        $new_data->TotalKelebihaD7 = $request->get('TotalKelebihaD7');
        $new_data->TotalKelebihaD8 = $request->get('TotalKelebihaD8');
        $new_data->TotalKelebihaD9 = $request->get('TotalKelebihaD9');
        $new_data->TotalKelebihaD10 = $request->get('TotalKelebihaD10');
        $new_data->TotalKelebihaD11 = $request->get('TotalKelebihaD11');
        $new_data->TotalKelebihanSkor = $request->get('TotalKelebihanSkor');
        $new_data->NilaiUnsurPenunjang = $request->get('NilaiUnsurPenunjang');
        $new_data->NilaiTambahUnsurPenunjang = $request->get('NilaiTambahUnsurPenunjang');
        $new_data->ResultSumNilaiTotalUnsurPenunjang = $request->get('ResultSumNilaiTotalUnsurPenunjang');

        $new_data->save();
        return redirect()->route('point-D');
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
