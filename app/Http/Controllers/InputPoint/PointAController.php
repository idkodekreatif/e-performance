<?php

namespace App\Http\Controllers\InputPoint;

use App\Http\Controllers\Controller;
use App\Models\PointA;
use Illuminate\Http\Request;

class PointAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   return view('input-point.point-A');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input-point.point-A');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'file' => 'required|mimes:pdf|max:2048',
        //     'text' => 're|numeric'
        // ]);

        // PointA::create($request->all());
        $new_data_point = new PointA();
        $new_data_point->A1 = $request->get('A1');
        $new_data_point->scorA1 = $request->get('scorA1');
        $new_data_point->scorMaxA1 = $request->get('scorMaxA1');
        $new_data_point->scorSubItemA1 = $request->get('scorSubItemA1');
        $new_data_point->A2 = $request->get('A2');
        $new_data_point->scorA2 = $request->get('scorA2');
        $new_data_point->scorMaxA2 = $request->get('scorMaxA2');
        $new_data_point->scorSubItemA2 = $request->get('scorSubItemA2');
        $new_data_point->A3 = $request->get('A3');
        $new_data_point->scorA3 = $request->get('scorA3');
        $new_data_point->scorMaxA3 = $request->get('scorMaxA3');
        $new_data_point->scorSubItemA3 = $request->get('scorSubItemA3');
        $new_data_point->A4 = $request->get('A4');
        $new_data_point->scorA4 = $request->get('scorA4');
        $new_data_point->scorMaxA4 = $request->get('scorMaxA4');
        $new_data_point->scorSubItemA4 = $request->get('scorSubItemA4');
        $new_data_point->A5 = $request->get('A5');
        $new_data_point->scorA5 = $request->get('scorA5');
        $new_data_point->scorMaxA5 = $request->get('scorMaxA5');
        $new_data_point->scorSubItemA5 = $request->get('scorSubItemA5');
        $new_data_point->A6 = $request->get('A6');
        $new_data_point->scorA6 = $request->get('scorA6');
        $new_data_point->scorMaxA6 = $request->get('scorMaxA6');
        $new_data_point->scorSubItemA6 = $request->get('scorSubItemA6');
        $new_data_point->A7 = $request->get('A7');
        $new_data_point->scorA7 = $request->get('scorA7');
        $new_data_point->scorMaxA7 = $request->get('scorMaxA7');
        $new_data_point->scorSubItemA7 = $request->get('scorSubItemA7');
        $new_data_point->A8 = $request->get('A8');
        $new_data_point->scorA8 = $request->get('scorA8');
        $new_data_point->scorMaxA8 = $request->get('scorMaxA8');
        $new_data_point->scorSubItemA8 = $request->get('scorSubItemA8');
        $new_data_point->A9 = $request->get('A9');
        $new_data_point->scorA9 = $request->get('scorA9');
        $new_data_point->scorMaxA9 = $request->get('scorMaxA9');
        $new_data_point->scorSubItemA9 = $request->get('scorSubItemA9');
        $new_data_point->A10 = $request->get('A10');
        $new_data_point->scorA10 = $request->get('scorA10');
        $new_data_point->scorMaxA10 = $request->get('scorMaxA10');
        $new_data_point->scorSubItemA10 = $request->get('scorSubItemA10');
        $new_data_point->A11 = $request->get('A11');
        $new_data_point->scorA11 = $request->get('scorA11');
        $new_data_point->scorMaxA11 = $request->get('scorMaxA11');
        $new_data_point->scorSubItemA11 = $request->get('scorSubItemA11');
        $new_data_point->tambahan_a11_in = $request->get('JumlahYangDihasilkanA11_5');
        $new_data_point->SkorTambahanA11_5 = $request->get('SkorTambahanA11_5');
        $new_data_point->SkorTambahanJumlahA11_5 = $request->get('SkorTambahanJumlahA11_5');
        $new_data_point->JumlahSkorYangDiHasilkanA11_5 = $request->get('JumlahSkorYangDiHasilkanA11_5');
        $new_data_point->JumlahSkorYangDiHasilkanBobotSubItemA11_5 = $request->get('JumlahSkorYangDiHasilkanBobotSubItemA11_5');
        $new_data_point->SkorTambahanJumlahBobotSubItemA11_5 = $request->get('SkorTambahanJumlahBobotSubItemA11_5');
        $new_data_point->A12 = $request->get('A12');
        $new_data_point->scorA12 = $request->get('scorA12');
        $new_data_point->scorMaxA12 = $request->get('scorMaxA12');
        $new_data_point->scorSubItemA12 = $request->get('scorSubItemA12');
        $new_data_point->JumlahYangDihasilkanA12_3_in = $request->get('JumlahYangDihasilkanA12_3');
        $new_data_point->SkorTambahanA12_3 = $request->get('SkorTambahanA12_3');
        $new_data_point->JumlahYangDihasilkanA12_4_in = $request->get('JumlahYangDihasilkanA12_4');
        $new_data_point->SkorTambahanA12_4 = $request->get('SkorTambahanA12_4');
        $new_data_point->JumlahYangDihasilkanA12_5_in = $request->get('JumlahYangDihasilkanA12_5');
        $new_data_point->SkorTambahanA12_5 = $request->get('SkorTambahanA12_5');
        $new_data_point->SkorTambahanJumlahA12 = $request->get('SkorTambahanJumlahA12');
        $new_data_point->JumlahSkorYangDiHasilkanA12 = $request->get('JumlahSkorYangDiHasilkanA12');
        $new_data_point->SkorTambahanJumlahSkorA12 = $request->get('SkorTambahanJumlahSkorA12');
        $new_data_point->SkorTambahanJumlahBobotSubItemA12 = $request->get('SkorTambahanJumlahBobotSubItemA12');
        $new_data_point->A13 = $request->get('A13');
        $new_data_point->scorA13 = $request->get('scorA13');
        $new_data_point->scorMaxA13 = $request->get('scorMaxA13');
        $new_data_point->scorSubItemA13 = $request->get('scorSubItemA13');
        $new_data_point->TotalSkorPendidikanPointA = $request->get('TotalSkorPendidikanPointA');
        $new_data_point->TotalKelebihanA11 = $request->get('TotalKelebihanA11');
        $new_data_point->TotalKelebihanA12 = $request->get('TotalKelebihanA12');
        $new_data_point->TotalKelebihanSkor = $request->get('TotalKelebihanSkor');
        $new_data_point->nilaiPendidikandanPengajaran = $request->get('nilaiPendidikandanPengajaran');
        $new_data_point->NilaiTambahPendidikanDanPengajaran = $request->get('NilaiTambahPendidikanDanPengajaran');
        $new_data_point->NilaiTotalPendidikanDanPengajaran = $request->get('NilaiTotalPendidikanDanPengajaran');

        // dd($new_data_point);
        $new_data_point->save();
        return redirect()->route('point-A');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PointA  $pointA
     * @return \Illuminate\Http\Response
     */
    public function show(PointA $pointA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PointA  $pointA
     * @return \Illuminate\Http\Response
     */
    public function edit(PointA $pointA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PointA  $pointA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointA $pointA)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PointA  $pointA
     * @return \Illuminate\Http\Response
     */
    public function destroy(PointA $pointA)
    {
        //
    }
}
