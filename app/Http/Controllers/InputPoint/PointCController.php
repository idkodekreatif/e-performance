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
            $new_data = new PointC();
            $new_data->C1 = $request->get('C1');
            $new_data->scorC1 = $request->get('scorC1');
            $new_data->scorMaxC1 = $request->get('scorMaxC1');
            $new_data->scorSubItemC1 = $request->get('scorSubItemC1');

            if ($request->hasFile('fileC1')) {
                $fileName = $request->file('fileC1')->store('uploads/Point-c', 'public');
                $new_data->fileC1 = $fileName;
            }

            $new_data->JumlahYangDihasilkanC1_2_in = $request->get('JumlahYangDihasilkanC1_2');
            $new_data->SkorTambahanC1_2 = $request->get('SkorTambahanC1_2');
            $new_data->JumlahYangDihasilkanC1_3_in = $request->get('JumlahYangDihasilkanC1_3');
            $new_data->SkorTambahanC1_3 = $request->get('SkorTambahanC1_3');
            $new_data->JumlahYangDihasilkanC1_4_in = $request->get('JumlahYangDihasilkanC1_4');
            $new_data->SkorTambahanC1_4 = $request->get('SkorTambahanC1_4');
            $new_data->JumlahYangDihasilkanC1_5_in = $request->get('JumlahYangDihasilkanC1_5');
            $new_data->SkorTambahanC1_5 = $request->get('SkorTambahanC1_5');
            $new_data->SkorTambahanJumlahC1 = $request->get('SkorTambahanJumlahC1');
            $new_data->JumlahSkorYangDiHasilkanC1 = $request->get('JumlahSkorYangDiHasilkanC1');
            $new_data->SkorTambahanJumlahSkorC1 = $request->get('SkorTambahanJumlahSkorC1');
            $new_data->SkorTambahanJumlahBobotSubItemC1 = $request->get('SkorTambahanJumlahBobotSubItemC1');

            $new_data->C2 = $request->get('C2');
            $new_data->scorC2 = $request->get('scorC2');
            $new_data->scorMaxC2 = $request->get('scorMaxC2');
            $new_data->scorSubItemC2 = $request->get('scorSubItemC2');

            if ($request->hasFile('fileC2')) {
                $fileName = $request->file('fileC2')->store('uploads/Point-c', 'public');
                $new_data->fileC2 = $fileName;
            }

            $new_data->JumlahYangDihasilkanC2_2_in = $request->get('JumlahYangDihasilkanC2_2');
            $new_data->SkorTambahanC2_2 = $request->get('SkorTambahanC2_2');
            $new_data->JumlahYangDihasilkanC2_3_in = $request->get('JumlahYangDihasilkanC2_3');
            $new_data->SkorTambahanC2_3 = $request->get('SkorTambahanC2_3');
            $new_data->JumlahYangDihasilkanC2_4_in = $request->get('JumlahYangDihasilkanC2_4');
            $new_data->SkorTambahanC2_4 = $request->get('SkorTambahanC2_4');
            $new_data->JumlahYangDihasilkanC2_5_in = $request->get('JumlahYangDihasilkanC2_5');
            $new_data->SkorTambahanC2_5 = $request->get('SkorTambahanC2_5');
            $new_data->SkorTambahanJumlahC2 = $request->get('SkorTambahanJumlahC2');
            $new_data->JumlahSkorYangDiHasilkanC2 = $request->get('JumlahSkorYangDiHasilkanC2');
            $new_data->SkorTambahanJumlahSkorC2 = $request->get('SkorTambahanJumlahSkorC2');
            $new_data->SkorTambahanJumlahBobotSubItemC2 = $request->get('SkorTambahanJumlahBobotSubItemC2');

            $new_data->C3 = $request->get('C3');
            $new_data->scorC3 = $request->get('scorC3');
            $new_data->scorMaxC3 = $request->get('scorMaxC3');
            $new_data->scorSubItemC3 = $request->get('scorSubItemC3');

            if ($request->hasFile('fileC3')) {
                $fileName = $request->file('fileC3')->store('uploads/Point-c', 'public');
                $new_data->fileC3 = $fileName;
            }

            $new_data->JumlahYangDihasilkanC3_4_in = $request->get('JumlahYangDihasilkanC3_4');
            $new_data->SkorTambahanC3_4 = $request->get('SkorTambahanC3_4');
            $new_data->JumlahYangDihasilkanC3_5_in = $request->get('JumlahYangDihasilkanC3_5');
            $new_data->SkorTambahanC3_5 = $request->get('SkorTambahanC3_5');
            $new_data->SkorTambahanJumlahC3 = $request->get('SkorTambahanJumlahC3');
            $new_data->JumlahSkorYangDiHasilkanC3 = $request->get('JumlahSkorYangDiHasilkanC3');
            $new_data->SkorTambahanJumlahSkorC3 = $request->get('SkorTambahanJumlahSkorC3');
            $new_data->SkorTambahanJumlahBobotSubItemC3 = $request->get('SkorTambahanJumlahBobotSubItemC3');

            $new_data->C4 = $request->get('C4');
            $new_data->scorC4 = $request->get('scorC4');
            $new_data->scorMaxC4 = $request->get('scorMaxC4');
            $new_data->scorSubItemC4 = $request->get('scorSubItemC4');

            if ($request->hasFile('fileC4')) {
                $fileName = $request->file('fileC4')->store('uploads/Point-c', 'public');
                $new_data->fileC4 = $fileName;
            }

            $new_data->JumlahYangDihasilkanC4_2_in = $request->get('JumlahYangDihasilkanC4_2');
            $new_data->SkorTambahanC4_2 = $request->get('SkorTambahanC4_2');
            $new_data->JumlahYangDihasilkanC4_3_in = $request->get('JumlahYangDihasilkanC4_3');
            $new_data->SkorTambahanC4_3 = $request->get('SkorTambahanC4_3');
            $new_data->JumlahYangDihasilkanC4_4_in = $request->get('JumlahYangDihasilkanC4_4');
            $new_data->SkorTambahanC4_4 = $request->get('SkorTambahanC4_4');
            $new_data->JumlahYangDihasilkanC4_5_in = $request->get('JumlahYangDihasilkanC4_5');
            $new_data->SkorTambahanC4_5 = $request->get('SkorTambahanC4_5');
            $new_data->SkorTambahanJumlahC4 = $request->get('SkorTambahanJumlahC4');
            $new_data->JumlahSkorYangDiHasilkanC4 = $request->get('JumlahSkorYangDiHasilkanC4');
            $new_data->SkorTambahanJumlahSkorC4 = $request->get('SkorTambahanJumlahSkorC4');
            $new_data->SkorTambahanJumlahBobotSubItemC4 = $request->get('SkorTambahanJumlahBobotSubItemC4');

            $new_data->C5 = $request->get('C5');
            $new_data->scorC5 = $request->get('scorC5');
            $new_data->scorMaxC5 = $request->get('scorMaxC5');
            $new_data->scorSubItemC5 = $request->get('scorSubItemC5');

            if ($request->hasFile('fileC5')) {
                $fileName = $request->file('fileC5')->store('uploads/Point-c', 'public');
                $new_data->fileC5 = $fileName;
            }

            $new_data->JumlahYangDihasilkanC5_2_in = $request->get('JumlahYangDihasilkanC5_2');
            $new_data->SkorTambahanC5_2 = $request->get('SkorTambahanC5_2');
            $new_data->JumlahYangDihasilkanC5_3_in = $request->get('JumlahYangDihasilkanC5_3');
            $new_data->SkorTambahanC5_3 = $request->get('SkorTambahanC5_3');
            $new_data->JumlahYangDihasilkanC5_4_in = $request->get('JumlahYangDihasilkanC5_4');
            $new_data->SkorTambahanC5_4 = $request->get('SkorTambahanC5_4');
            $new_data->JumlahYangDihasilkanC5_5_in = $request->get('JumlahYangDihasilkanC5_5');
            $new_data->SkorTambahanC5_5 = $request->get('SkorTambahanC5_5');
            $new_data->SkorTambahanJumlahC5 = $request->get('SkorTambahanJumlahC5');
            $new_data->JumlahSkorYangDiHasilkanC5 = $request->get('JumlahSkorYangDiHasilkanC5');
            $new_data->SkorTambahanJumlahSkorC5 = $request->get('SkorTambahanJumlahSkorC5');
            $new_data->SkorTambahanJumlahBobotSubItemC5 = $request->get('SkorTambahanJumlahBobotSubItemC5');

            $new_data->C6 = $request->get('C6');
            $new_data->scorC6 = $request->get('scorC6');
            $new_data->scorMaxC6 = $request->get('scorMaxC6');
            $new_data->scorSubItemC6 = $request->get('scorSubItemC6');

            if ($request->hasFile('fileC6')) {
                $fileName = $request->file('fileC6')->store('uploads/Point-c', 'public');
                $new_data->fileC6 = $fileName;
            }

            $new_data->JumlahYangDihasilkanC6_2_in = $request->get('JumlahYangDihasilkanC6_2');
            $new_data->SkorTambahanC6_2 = $request->get('SkorTambahanC6_2');
            $new_data->JumlahYangDihasilkanC6_3_in = $request->get('JumlahYangDihasilkanC6_3');
            $new_data->SkorTambahanC6_3 = $request->get('SkorTambahanC6_3');
            $new_data->JumlahYangDihasilkanC6_4_in = $request->get('JumlahYangDihasilkanC6_4');
            $new_data->SkorTambahanC6_4 = $request->get('SkorTambahanC6_4');
            $new_data->JumlahYangDihasilkanC6_5_in = $request->get('JumlahYangDihasilkanC6_5');
            $new_data->SkorTambahanC6_5 = $request->get('SkorTambahanC6_5');
            $new_data->SkorTambahanJumlahC6 = $request->get('SkorTambahanJumlahC6');
            $new_data->JumlahSkorYangDiHasilkanC6 = $request->get('JumlahSkorYangDiHasilkanC6');
            $new_data->SkorTambahanJumlahSkorC6 = $request->get('SkorTambahanJumlahSkorC6');
            $new_data->SkorTambahanJumlahBobotSubItemC6 = $request->get('SkorTambahanJumlahBobotSubItemC6');

            $new_data->C7 = $request->get('C7');
            $new_data->scorC7 = $request->get('scorC7');
            $new_data->scorMaxC7 = $request->get('scorMaxC7');
            $new_data->scorSubItemC7 = $request->get('scorSubItemC7');

            if ($request->hasFile('fileC7')) {
                $fileName = $request->file('fileC7')->store('uploads/Point-c', 'public');
                $new_data->fileC7 = $fileName;
            }

            $new_data->JumlahYangDihasilkanC7_2_in = $request->get('JumlahYangDihasilkanC7_2');
            $new_data->SkorTambahanC7_2 = $request->get('SkorTambahanC7_2');
            $new_data->JumlahYangDihasilkanC7_3_in = $request->get('JumlahYangDihasilkanC7_3');
            $new_data->SkorTambahanC7_3 = $request->get('SkorTambahanC7_3');
            $new_data->JumlahYangDihasilkanC7_4_in = $request->get('JumlahYangDihasilkanC7_4');
            $new_data->SkorTambahanC7_4 = $request->get('SkorTambahanC7_4');
            $new_data->JumlahYangDihasilkanC7_5_in = $request->get('JumlahYangDihasilkanC7_5');
            $new_data->SkorTambahanC7_5 = $request->get('SkorTambahanC7_5');
            $new_data->SkorTambahanJumlahC7 = $request->get('SkorTambahanJumlahC7');
            $new_data->JumlahSkorYangDiHasilkanC7 = $request->get('JumlahSkorYangDiHasilkanC7');
            $new_data->SkorTambahanJumlahSkorC7 = $request->get('SkorTambahanJumlahSkorC7');
            $new_data->SkorTambahanJumlahBobotSubItemC7 = $request->get('SkorTambahanJumlahBobotSubItemC7');

            $new_data->C8 = $request->get('C8');
            $new_data->scorC8 = $request->get('scorC8');
            $new_data->scorMaxC8 = $request->get('scorMaxC8');
            $new_data->scorSubItemC8 = $request->get('scorSubItemC8');

            if ($request->hasFile('fileC8')) {
                $fileName = $request->file('fileC8')->store('uploads/Point-c', 'public');
                $new_data->fileC8 = $fileName;
            }

            $new_data->JumlahYangDihasilkanC8_2_in = $request->get('JumlahYangDihasilkanC8_2');
            $new_data->SkorTambahanC8_2 = $request->get('SkorTambahanC8_2');
            $new_data->JumlahYangDihasilkanC8_3_in = $request->get('JumlahYangDihasilkanC8_3');
            $new_data->SkorTambahanC8_3 = $request->get('SkorTambahanC8_3');
            $new_data->JumlahYangDihasilkanC8_4_in = $request->get('JumlahYangDihasilkanC8_4');
            $new_data->SkorTambahanC8_4 = $request->get('SkorTambahanC8_4');
            $new_data->JumlahYangDihasilkanC8_5_in = $request->get('JumlahYangDihasilkanC8_5');
            $new_data->SkorTambahanC8_5 = $request->get('SkorTambahanC8_5');
            $new_data->SkorTambahanJumlahC8 = $request->get('SkorTambahanJumlahC8');
            $new_data->JumlahSkorYangDiHasilkanC8 = $request->get('JumlahSkorYangDiHasilkanC8');
            $new_data->SkorTambahanJumlahSkorC8 = $request->get('SkorTambahanJumlahSkorC8');
            $new_data->SkorTambahanJumlahBobotSubItemC8 = $request->get('SkorTambahanJumlahBobotSubItemC8');

            $new_data->C9 = $request->get('C9');
            $new_data->scorC9 = $request->get('scorC9');
            $new_data->scorMaxC9 = $request->get('scorMaxC9');
            $new_data->scorSubItemC9 = $request->get('scorSubItemC9');

            if ($request->hasFile('fileC9')) {
                $fileName = $request->file('fileC9')->store('uploads/Point-c', 'public');
                $new_data->fileC9 = $fileName;
            }

            $new_data->JumlahYangDihasilkanC9_2_in = $request->get('JumlahYangDihasilkanC9_2');
            $new_data->SkorTambahanC9_2 = $request->get('SkorTambahanC9_2');
            $new_data->JumlahYangDihasilkanC9_3_in = $request->get('JumlahYangDihasilkanC9_3');
            $new_data->SkorTambahanC9_3 = $request->get('SkorTambahanC9_3');
            $new_data->JumlahYangDihasilkanC9_4_in = $request->get('JumlahYangDihasilkanC9_4');
            $new_data->SkorTambahanC9_4 = $request->get('SkorTambahanC9_4');
            $new_data->JumlahYangDihasilkanC9_5_in = $request->get('JumlahYangDihasilkanC9_5');
            $new_data->SkorTambahanC9_5 = $request->get('SkorTambahanC9_5');
            $new_data->SkorTambahanJumlahC9 = $request->get('SkorTambahanJumlahC9');
            $new_data->JumlahSkorYangDiHasilkanC9 = $request->get('JumlahSkorYangDiHasilkanC9');
            $new_data->SkorTambahanJumlahSkorC9 = $request->get('SkorTambahanJumlahSkorC9');
            $new_data->SkorTambahanJumlahBobotSubItemC9 = $request->get('SkorTambahanJumlahBobotSubItemC9');

            $new_data->TotalSkorPengabdianKepadaMasyarakat = $request->get('TotalSkorPengabdianKepadaMasyarakat');
            $new_data->TotalKelebihaC1 = $request->get('TotalKelebihaC1');
            $new_data->TotalKelebihaC2 = $request->get('TotalKelebihaC2');
            $new_data->TotalKelebihaC3 = $request->get('TotalKelebihaC3');
            $new_data->TotalKelebihaC4 = $request->get('TotalKelebihaC4');
            $new_data->TotalKelebihaC5 = $request->get('TotalKelebihaC5');
            $new_data->TotalKelebihaC6 = $request->get('TotalKelebihaC6');
            $new_data->TotalKelebihaC7 = $request->get('TotalKelebihaC7');
            $new_data->TotalKelebihaC8 = $request->get('TotalKelebihaC8');
            $new_data->TotalKelebihaC9 = $request->get('TotalKelebihaC9');
            $new_data->TotalKelebihanSkor = $request->get('TotalKelebihanSkor');
            $new_data->NilaiPengabdianKepadaMasyarakat = $request->get('NilaiPengabdianKepadaMasyarakat');
            $new_data->NilaiTambahPenelitian = $request->get('NilaiTambahPenelitian');
            $new_data->NilaiTotalPengabdianKepadaMasyarakat = $request->get('NilaiTotalPengabdianKepadaMasyarakat');
            $new_data->save();

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
