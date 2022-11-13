<?php

namespace App\Http\Controllers\InputPoint;

use App\Http\Controllers\Controller;
use App\Models\PointC;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PointCController extends Controller
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
        return view('input-point.point-C');
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
            'fileC1' => 'required|mimes:pdf|max:2048',
            'fileC2' => 'required|mimes:pdf|max:2048',
            'fileC3' => 'required|mimes:pdf|max:2048',
            'fileC4' => 'required|mimes:pdf|max:2048',
            'fileC5' => 'required|mimes:pdf|max:2048',
            'fileC6' => 'required|mimes:pdf|max:2048',
            'fileC7' => 'required|mimes:pdf|max:2048',
            'fileC8' => 'required|mimes:pdf|max:2048',
            'fileC9' => 'required|mimes:pdf|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $pointC = new PointC();
            $pointC->C1 = $request->get('C1');
            $pointC->scorC1 = $request->get('scorC1');
            $pointC->scorMaxC1 = $request->get('scorMaxC1');
            $pointC->scorSubItemC1 = $request->get('scorSubItemC1');

            if ($request->hasFile('fileC1')) {
                $fileName = $request->file('fileC1')->store('uploads/Point-c', 'public');
                $pointC->fileC1 = $fileName;
            }

            $pointC->JumlahYangDihasilkanC1_2_in = $request->get('JumlahYangDihasilkanC1_2');
            $pointC->SkorTambahanC1_2 = $request->get('SkorTambahanC1_2');
            $pointC->JumlahYangDihasilkanC1_3_in = $request->get('JumlahYangDihasilkanC1_3');
            $pointC->SkorTambahanC1_3 = $request->get('SkorTambahanC1_3');
            $pointC->JumlahYangDihasilkanC1_4_in = $request->get('JumlahYangDihasilkanC1_4');
            $pointC->SkorTambahanC1_4 = $request->get('SkorTambahanC1_4');
            $pointC->JumlahYangDihasilkanC1_5_in = $request->get('JumlahYangDihasilkanC1_5');
            $pointC->SkorTambahanC1_5 = $request->get('SkorTambahanC1_5');
            $pointC->SkorTambahanJumlahC1 = $request->get('SkorTambahanJumlahC1');
            $pointC->JumlahSkorYangDiHasilkanC1 = $request->get('JumlahSkorYangDiHasilkanC1');
            $pointC->SkorTambahanJumlahSkorC1 = $request->get('SkorTambahanJumlahSkorC1');
            $pointC->SkorTambahanJumlahBobotSubItemC1 = $request->get('SkorTambahanJumlahBobotSubItemC1');

            $pointC->C2 = $request->get('C2');
            $pointC->scorC2 = $request->get('scorC2');
            $pointC->scorMaxC2 = $request->get('scorMaxC2');
            $pointC->scorSubItemC2 = $request->get('scorSubItemC2');

            if ($request->hasFile('fileC2')) {
                $fileName = $request->file('fileC2')->store('uploads/Point-c', 'public');
                $pointC->fileC2 = $fileName;
            }

            $pointC->JumlahYangDihasilkanC2_2_in = $request->get('JumlahYangDihasilkanC2_2');
            $pointC->SkorTambahanC2_2 = $request->get('SkorTambahanC2_2');
            $pointC->JumlahYangDihasilkanC2_3_in = $request->get('JumlahYangDihasilkanC2_3');
            $pointC->SkorTambahanC2_3 = $request->get('SkorTambahanC2_3');
            $pointC->JumlahYangDihasilkanC2_4_in = $request->get('JumlahYangDihasilkanC2_4');
            $pointC->SkorTambahanC2_4 = $request->get('SkorTambahanC2_4');
            $pointC->JumlahYangDihasilkanC2_5_in = $request->get('JumlahYangDihasilkanC2_5');
            $pointC->SkorTambahanC2_5 = $request->get('SkorTambahanC2_5');
            $pointC->SkorTambahanJumlahC2 = $request->get('SkorTambahanJumlahC2');
            $pointC->JumlahSkorYangDiHasilkanC2 = $request->get('JumlahSkorYangDiHasilkanC2');
            $pointC->SkorTambahanJumlahSkorC2 = $request->get('SkorTambahanJumlahSkorC2');
            $pointC->SkorTambahanJumlahBobotSubItemC2 = $request->get('SkorTambahanJumlahBobotSubItemC2');

            $pointC->C3 = $request->get('C3');
            $pointC->scorC3 = $request->get('scorC3');
            $pointC->scorMaxC3 = $request->get('scorMaxC3');
            $pointC->scorSubItemC3 = $request->get('scorSubItemC3');

            if ($request->hasFile('fileC3')) {
                $fileName = $request->file('fileC3')->store('uploads/Point-c', 'public');
                $pointC->fileC3 = $fileName;
            }

            $pointC->JumlahYangDihasilkanC3_4_in = $request->get('JumlahYangDihasilkanC3_4');
            $pointC->SkorTambahanC3_4 = $request->get('SkorTambahanC3_4');
            $pointC->JumlahYangDihasilkanC3_5_in = $request->get('JumlahYangDihasilkanC3_5');
            $pointC->SkorTambahanC3_5 = $request->get('SkorTambahanC3_5');
            $pointC->SkorTambahanJumlahC3 = $request->get('SkorTambahanJumlahC3');
            $pointC->JumlahSkorYangDiHasilkanC3 = $request->get('JumlahSkorYangDiHasilkanC3');
            $pointC->SkorTambahanJumlahSkorC3 = $request->get('SkorTambahanJumlahSkorC3');
            $pointC->SkorTambahanJumlahBobotSubItemC3 = $request->get('SkorTambahanJumlahBobotSubItemC3');

            $pointC->C4 = $request->get('C4');
            $pointC->scorC4 = $request->get('scorC4');
            $pointC->scorMaxC4 = $request->get('scorMaxC4');
            $pointC->scorSubItemC4 = $request->get('scorSubItemC4');

            if ($request->hasFile('fileC4')) {
                $fileName = $request->file('fileC4')->store('uploads/Point-c', 'public');
                $pointC->fileC4 = $fileName;
            }

            $pointC->JumlahYangDihasilkanC4_2_in = $request->get('JumlahYangDihasilkanC4_2');
            $pointC->SkorTambahanC4_2 = $request->get('SkorTambahanC4_2');
            $pointC->JumlahYangDihasilkanC4_3_in = $request->get('JumlahYangDihasilkanC4_3');
            $pointC->SkorTambahanC4_3 = $request->get('SkorTambahanC4_3');
            $pointC->JumlahYangDihasilkanC4_4_in = $request->get('JumlahYangDihasilkanC4_4');
            $pointC->SkorTambahanC4_4 = $request->get('SkorTambahanC4_4');
            $pointC->JumlahYangDihasilkanC4_5_in = $request->get('JumlahYangDihasilkanC4_5');
            $pointC->SkorTambahanC4_5 = $request->get('SkorTambahanC4_5');
            $pointC->SkorTambahanJumlahC4 = $request->get('SkorTambahanJumlahC4');
            $pointC->JumlahSkorYangDiHasilkanC4 = $request->get('JumlahSkorYangDiHasilkanC4');
            $pointC->SkorTambahanJumlahSkorC4 = $request->get('SkorTambahanJumlahSkorC4');
            $pointC->SkorTambahanJumlahBobotSubItemC4 = $request->get('SkorTambahanJumlahBobotSubItemC4');

            $pointC->C5 = $request->get('C5');
            $pointC->scorC5 = $request->get('scorC5');
            $pointC->scorMaxC5 = $request->get('scorMaxC5');
            $pointC->scorSubItemC5 = $request->get('scorSubItemC5');

            if ($request->hasFile('fileC5')) {
                $fileName = $request->file('fileC5')->store('uploads/Point-c', 'public');
                $pointC->fileC5 = $fileName;
            }

            $pointC->JumlahYangDihasilkanC5_2_in = $request->get('JumlahYangDihasilkanC5_2');
            $pointC->SkorTambahanC5_2 = $request->get('SkorTambahanC5_2');
            $pointC->JumlahYangDihasilkanC5_3_in = $request->get('JumlahYangDihasilkanC5_3');
            $pointC->SkorTambahanC5_3 = $request->get('SkorTambahanC5_3');
            $pointC->JumlahYangDihasilkanC5_4_in = $request->get('JumlahYangDihasilkanC5_4');
            $pointC->SkorTambahanC5_4 = $request->get('SkorTambahanC5_4');
            $pointC->JumlahYangDihasilkanC5_5_in = $request->get('JumlahYangDihasilkanC5_5');
            $pointC->SkorTambahanC5_5 = $request->get('SkorTambahanC5_5');
            $pointC->SkorTambahanJumlahC5 = $request->get('SkorTambahanJumlahC5');
            $pointC->JumlahSkorYangDiHasilkanC5 = $request->get('JumlahSkorYangDiHasilkanC5');
            $pointC->SkorTambahanJumlahSkorC5 = $request->get('SkorTambahanJumlahSkorC5');
            $pointC->SkorTambahanJumlahBobotSubItemC5 = $request->get('SkorTambahanJumlahBobotSubItemC5');

            $pointC->C6 = $request->get('C6');
            $pointC->scorC6 = $request->get('scorC6');
            $pointC->scorMaxC6 = $request->get('scorMaxC6');
            $pointC->scorSubItemC6 = $request->get('scorSubItemC6');

            if ($request->hasFile('fileC6')) {
                $fileName = $request->file('fileC6')->store('uploads/Point-c', 'public');
                $pointC->fileC6 = $fileName;
            }

            $pointC->JumlahYangDihasilkanC6_2_in = $request->get('JumlahYangDihasilkanC6_2');
            $pointC->SkorTambahanC6_2 = $request->get('SkorTambahanC6_2');
            $pointC->JumlahYangDihasilkanC6_3_in = $request->get('JumlahYangDihasilkanC6_3');
            $pointC->SkorTambahanC6_3 = $request->get('SkorTambahanC6_3');
            $pointC->JumlahYangDihasilkanC6_4_in = $request->get('JumlahYangDihasilkanC6_4');
            $pointC->SkorTambahanC6_4 = $request->get('SkorTambahanC6_4');
            $pointC->JumlahYangDihasilkanC6_5_in = $request->get('JumlahYangDihasilkanC6_5');
            $pointC->SkorTambahanC6_5 = $request->get('SkorTambahanC6_5');
            $pointC->SkorTambahanJumlahC6 = $request->get('SkorTambahanJumlahC6');
            $pointC->JumlahSkorYangDiHasilkanC6 = $request->get('JumlahSkorYangDiHasilkanC6');
            $pointC->SkorTambahanJumlahSkorC6 = $request->get('SkorTambahanJumlahSkorC6');
            $pointC->SkorTambahanJumlahBobotSubItemC6 = $request->get('SkorTambahanJumlahBobotSubItemC6');

            $pointC->C7 = $request->get('C7');
            $pointC->scorC7 = $request->get('scorC7');
            $pointC->scorMaxC7 = $request->get('scorMaxC7');
            $pointC->scorSubItemC7 = $request->get('scorSubItemC7');

            if ($request->hasFile('fileC7')) {
                $fileName = $request->file('fileC7')->store('uploads/Point-c', 'public');
                $pointC->fileC7 = $fileName;
            }

            $pointC->JumlahYangDihasilkanC7_2_in = $request->get('JumlahYangDihasilkanC7_2');
            $pointC->SkorTambahanC7_2 = $request->get('SkorTambahanC7_2');
            $pointC->JumlahYangDihasilkanC7_3_in = $request->get('JumlahYangDihasilkanC7_3');
            $pointC->SkorTambahanC7_3 = $request->get('SkorTambahanC7_3');
            $pointC->JumlahYangDihasilkanC7_4_in = $request->get('JumlahYangDihasilkanC7_4');
            $pointC->SkorTambahanC7_4 = $request->get('SkorTambahanC7_4');
            $pointC->JumlahYangDihasilkanC7_5_in = $request->get('JumlahYangDihasilkanC7_5');
            $pointC->SkorTambahanC7_5 = $request->get('SkorTambahanC7_5');
            $pointC->SkorTambahanJumlahC7 = $request->get('SkorTambahanJumlahC7');
            $pointC->JumlahSkorYangDiHasilkanC7 = $request->get('JumlahSkorYangDiHasilkanC7');
            $pointC->SkorTambahanJumlahSkorC7 = $request->get('SkorTambahanJumlahSkorC7');
            $pointC->SkorTambahanJumlahBobotSubItemC7 = $request->get('SkorTambahanJumlahBobotSubItemC7');

            $pointC->C8 = $request->get('C8');
            $pointC->scorC8 = $request->get('scorC8');
            $pointC->scorMaxC8 = $request->get('scorMaxC8');
            $pointC->scorSubItemC8 = $request->get('scorSubItemC8');

            if ($request->hasFile('fileC8')) {
                $fileName = $request->file('fileC8')->store('uploads/Point-c', 'public');
                $pointC->fileC8 = $fileName;
            }

            $pointC->JumlahYangDihasilkanC8_2_in = $request->get('JumlahYangDihasilkanC8_2');
            $pointC->SkorTambahanC8_2 = $request->get('SkorTambahanC8_2');
            $pointC->JumlahYangDihasilkanC8_3_in = $request->get('JumlahYangDihasilkanC8_3');
            $pointC->SkorTambahanC8_3 = $request->get('SkorTambahanC8_3');
            $pointC->JumlahYangDihasilkanC8_4_in = $request->get('JumlahYangDihasilkanC8_4');
            $pointC->SkorTambahanC8_4 = $request->get('SkorTambahanC8_4');
            $pointC->JumlahYangDihasilkanC8_5_in = $request->get('JumlahYangDihasilkanC8_5');
            $pointC->SkorTambahanC8_5 = $request->get('SkorTambahanC8_5');
            $pointC->SkorTambahanJumlahC8 = $request->get('SkorTambahanJumlahC8');
            $pointC->JumlahSkorYangDiHasilkanC8 = $request->get('JumlahSkorYangDiHasilkanC8');
            $pointC->SkorTambahanJumlahSkorC8 = $request->get('SkorTambahanJumlahSkorC8');
            $pointC->SkorTambahanJumlahBobotSubItemC8 = $request->get('SkorTambahanJumlahBobotSubItemC8');

            $pointC->C9 = $request->get('C9');
            $pointC->scorC9 = $request->get('scorC9');
            $pointC->scorMaxC9 = $request->get('scorMaxC9');
            $pointC->scorSubItemC9 = $request->get('scorSubItemC9');

            if ($request->hasFile('fileC9')) {
                $fileName = $request->file('fileC9')->store('uploads/Point-c', 'public');
                $pointC->fileC9 = $fileName;
            }

            $pointC->JumlahYangDihasilkanC9_2_in = $request->get('JumlahYangDihasilkanC9_2');
            $pointC->SkorTambahanC9_2 = $request->get('SkorTambahanC9_2');
            $pointC->JumlahYangDihasilkanC9_3_in = $request->get('JumlahYangDihasilkanC9_3');
            $pointC->SkorTambahanC9_3 = $request->get('SkorTambahanC9_3');
            $pointC->JumlahYangDihasilkanC9_4_in = $request->get('JumlahYangDihasilkanC9_4');
            $pointC->SkorTambahanC9_4 = $request->get('SkorTambahanC9_4');
            $pointC->JumlahYangDihasilkanC9_5_in = $request->get('JumlahYangDihasilkanC9_5');
            $pointC->SkorTambahanC9_5 = $request->get('SkorTambahanC9_5');
            $pointC->SkorTambahanJumlahC9 = $request->get('SkorTambahanJumlahC9');
            $pointC->JumlahSkorYangDiHasilkanC9 = $request->get('JumlahSkorYangDiHasilkanC9');
            $pointC->SkorTambahanJumlahSkorC9 = $request->get('SkorTambahanJumlahSkorC9');
            $pointC->SkorTambahanJumlahBobotSubItemC9 = $request->get('SkorTambahanJumlahBobotSubItemC9');

            $pointC->TotalSkorPengabdianKepadaMasyarakat = $request->get('TotalSkorPengabdianKepadaMasyarakat');
            $pointC->TotalKelebihaC1 = $request->get('TotalKelebihaC1');
            $pointC->TotalKelebihaC2 = $request->get('TotalKelebihaC2');
            $pointC->TotalKelebihaC3 = $request->get('TotalKelebihaC3');
            $pointC->TotalKelebihaC4 = $request->get('TotalKelebihaC4');
            $pointC->TotalKelebihaC5 = $request->get('TotalKelebihaC5');
            $pointC->TotalKelebihaC6 = $request->get('TotalKelebihaC6');
            $pointC->TotalKelebihaC7 = $request->get('TotalKelebihaC7');
            $pointC->TotalKelebihaC8 = $request->get('TotalKelebihaC8');
            $pointC->TotalKelebihaC9 = $request->get('TotalKelebihaC9');
            $pointC->TotalKelebihanSkor = $request->get('TotalKelebihanSkor');
            $pointC->NilaiPengabdianKepadaMasyarakat = $request->get('NilaiPengabdianKepadaMasyarakat');
            $pointC->NilaiTambahPenelitian = $request->get('NilaiTambahPenelitian');
            $pointC->NilaiTotalPengabdianKepadaMasyarakat = $request->get('NilaiTotalPengabdianKepadaMasyarakat');
            $pointC->user_id = Auth()->id();
            $pointC->save();

            DB::commit();
            toast('Create new Point C successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point C fail :)', 'error');
            return redirect()->back();
        }
        // toast('Berhasil menambahkan Point C', 'success');
        // return redirect()->route('point-C');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PointC  $pointC
     * @return \Illuminate\Http\Response
     */
    public function show(PointC $pointC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PointC  $pointC
     * @return \Illuminate\Http\Response
     */
    public function edit(PointC $pointC)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PointC  $pointC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointC $pointC)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PointC  $pointC
     * @return \Illuminate\Http\Response
     */
    public function destroy(PointC $pointC)
    {
        //
    }
}
