<?php

namespace App\Http\Controllers\InputPoint;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\PointC;
use App\Models\Setting\Period;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PointCController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Cek apakah ada periode yang sedang aktif dan belum ditutup
        $activePeriod = Period::where('is_closed', 1)
            ->where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->first();

        if (!$activePeriod) {
            // Tidak ada periode aktif yang belum ditutup, redirect ke halaman menu.disabled
            return view('menu.disabled');
        }

        // Periode aktif ditemukan, cek apakah data PointA untuk periode aktif dan user saat ini sudah ada
        $resultData = PointC::where('new_user_id', Auth::user()->id)
            ->where('period_id', $activePeriod->id)
            ->first();

        if (!$resultData) {
            // Data PointB belum ada, tampilkan halaman input
            return view('input-point.point-C');
        } else {
            // Data PointB sudah ada, redirect ke halaman edit
            $userId = $resultData->new_user_id;
            return redirect()->route('edit.Point-C', ['PointId' => $userId]);
        }
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
            'fileC1' => 'mimes:pdf',
            'fileC2' => 'mimes:pdf',
            'fileC3' => 'mimes:pdf',
            'fileC4' => 'mimes:pdf',
            'fileC5' => 'mimes:pdf',
            'fileC6' => 'mimes:pdf',
            'fileC7' => 'mimes:pdf',
            'fileC8' => 'mimes:pdf',
            'fileC9' => 'mimes:pdf',
        ]);

        $activePeriod = Period::where('is_closed', 1)
            ->where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->first();

        if (!$activePeriod) {
            throw new \Exception('Periode aktif tidak ditemukan.');
        }

        DB::beginTransaction();
        try {
            $pointC = new PointC();
            $pointC->new_user_id = Auth()->id();
            $pointC->period_id = $activePeriod->id;

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
            $pointC->NilaiTambahPengabdianKepadaMasyarakat = $request->get('NilaiTambahPengabdianKepadaMasyarakat');
            $pointC->NilaiTotalPengabdianKepadaMasyarakat = $request->get('NilaiTotalPengabdianKepadaMasyarakat');

            $pointC->save();

            DB::commit();
            toast('Create new Point C successfully :)', 'success');
            return redirect()->route('point-D');
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point C fail :)', 'error');
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PointC  $pointC
     * @return \Illuminate\Http\Response
     */
    public function edit(PointC $pointC, $PointId)
    {
        $activePeriod = Period::where('is_closed', 1)
            ->where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->first();

        if (!$activePeriod) {
            return view('menu.disabled');
        }

        $data = PointC::where('new_user_id', '=', $PointId)
            ->where('period_id', $activePeriod->id)
            ->first();

        return view('edit-point.EditPointC', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PointC  $pointC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointC $pointC, $PointId)
    {
        $request->validate([
            'fileC1' => 'mimes:pdf',
            'fileC2' => 'mimes:pdf',
            'fileC3' => 'mimes:pdf',
            'fileC4' => 'mimes:pdf',
            'fileC5' => 'mimes:pdf',
            'fileC6' => 'mimes:pdf',
            'fileC7' => 'mimes:pdf',
            'fileC8' => 'mimes:pdf',
            'fileC9' => 'mimes:pdf',
        ]);

        $activePeriod = Period::where('is_closed', 1)
            ->where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->first();

        if (!$activePeriod) {
            return view('menu.disabled');
        }

        DB::beginTransaction();
        try {
            $RecordData = PointC::where('new_user_id', $PointId)
                ->where('period_id', $activePeriod->id)
                ->firstOrFail();

            // Request put data update
            $C1 = $request->C1;
            $scorC1 = $request->scorC1;
            $scorMaxC1 = $request->scorMaxC1;
            $scorSubItemC1 = $request->scorSubItemC1;

            if ($request->hasFile('fileC1')) {
                if ($RecordData->fileC1 && file_exists(storage_path('app/public/uploads/Point-c/' . $RecordData->fileC1))) {
                    \Storage::delete('public/uploads/Point-c/' . $RecordData->fileC1);
                }
                $file_c1 = $request->file('fileC1')->store('uploads/Point-c', 'public');
            } else {
                $file_c1 = $RecordData->fileC1;
            }

            $JumlahYangDihasilkanC1_2_in = $request->JumlahYangDihasilkanC1_2;
            $SkorTambahanC1_2 = $request->SkorTambahanC1_2;
            $JumlahYangDihasilkanC1_3_in = $request->JumlahYangDihasilkanC1_3;
            $SkorTambahanC1_3 = $request->SkorTambahanC1_3;
            $JumlahYangDihasilkanC1_4_in = $request->JumlahYangDihasilkanC1_4;
            $SkorTambahanC1_4 = $request->SkorTambahanC1_4;
            $JumlahYangDihasilkanC1_5_in = $request->JumlahYangDihasilkanC1_5;
            $SkorTambahanC1_5 = $request->SkorTambahanC1_5;
            $SkorTambahanJumlahC1 = $request->SkorTambahanJumlahC1;
            $JumlahSkorYangDiHasilkanC1 = $request->JumlahSkorYangDiHasilkanC1;
            $SkorTambahanJumlahSkorC1 = $request->SkorTambahanJumlahSkorC1;
            $SkorTambahanJumlahBobotSubItemC1 = $request->SkorTambahanJumlahBobotSubItemC1;

            $C2 = $request->C2;
            $scorC2 = $request->scorC2;
            $scorMaxC2 = $request->scorMaxC2;
            $scorSubItemC2 = $request->scorSubItemC2;

            if ($request->hasFile('fileC2')) {
                if ($RecordData->fileC2 && file_exists(storage_path('app/public/uploads/Point-c/' . $RecordData->fileC2))) {
                    \Storage::delete('public/uploads/Point-c/' . $RecordData->fileC2);
                }
                $file_c2 = $request->file('fileC2')->store('uploads/Point-c', 'public');
            } else {
                $file_c2 = $RecordData->fileC2;
            }

            $JumlahYangDihasilkanC2_2_in = $request->JumlahYangDihasilkanC2_2;
            $SkorTambahanC2_2 = $request->SkorTambahanC2_2;
            $JumlahYangDihasilkanC2_3_in = $request->JumlahYangDihasilkanC2_3;
            $SkorTambahanC2_3 = $request->SkorTambahanC2_3;
            $JumlahYangDihasilkanC2_4_in = $request->JumlahYangDihasilkanC2_4;
            $SkorTambahanC2_4 = $request->SkorTambahanC2_4;
            $JumlahYangDihasilkanC2_5_in = $request->JumlahYangDihasilkanC2_5;
            $SkorTambahanC2_5 = $request->SkorTambahanC2_5;
            $SkorTambahanJumlahC2 = $request->SkorTambahanJumlahC2;
            $JumlahSkorYangDiHasilkanC2 = $request->JumlahSkorYangDiHasilkanC2;
            $SkorTambahanJumlahSkorC2 = $request->SkorTambahanJumlahSkorC2;
            $SkorTambahanJumlahBobotSubItemC2 = $request->SkorTambahanJumlahBobotSubItemC2;

            $C3 = $request->C3;
            $scorC3 = $request->scorC3;
            $scorMaxC3 = $request->scorMaxC3;
            $scorSubItemC3 = $request->scorSubItemC3;

            if ($request->hasFile('fileC3')) {
                if ($RecordData->fileC3 && file_exists(storage_path('app/public/uploads/Point-c/' . $RecordData->fileC3))) {
                    \Storage::delete('public/uploads/Point-c/' . $RecordData->fileC3);
                }
                $file_c3 = $request->file('fileC3')->store('uploads/Point-c', 'public');
            } else {
                $file_c3 = $RecordData->fileC3;
            }

            $JumlahYangDihasilkanC3_4_in = $request->JumlahYangDihasilkanC3_4;
            $SkorTambahanC3_4 = $request->SkorTambahanC3_4;
            $JumlahYangDihasilkanC3_5_in = $request->JumlahYangDihasilkanC3_5;
            $SkorTambahanC3_5 = $request->SkorTambahanC3_5;
            $SkorTambahanJumlahC3 = $request->SkorTambahanJumlahC3;
            $JumlahSkorYangDiHasilkanC3 = $request->JumlahSkorYangDiHasilkanC3;
            $SkorTambahanJumlahSkorC3 = $request->SkorTambahanJumlahSkorC3;
            $SkorTambahanJumlahBobotSubItemC3 = $request->SkorTambahanJumlahBobotSubItemC3;

            $C4 = $request->C4;
            $scorC4 = $request->scorC4;
            $scorMaxC4 = $request->scorMaxC4;
            $scorSubItemC4 = $request->scorSubItemC4;

            if ($request->hasFile('fileC4')) {
                if ($RecordData->fileC4 && file_exists(storage_path('app/public/uploads/Point-c/' . $RecordData->fileC4))) {
                    \Storage::delete('public/uploads/Point-c/' . $RecordData->fileC4);
                }
                $file_c4 = $request->file('fileC4')->store('uploads/Point-c', 'public');
            } else {
                $file_c4 = $RecordData->fileC4;
            }

            $JumlahYangDihasilkanC4_2_in = $request->JumlahYangDihasilkanC4_2;
            $SkorTambahanC4_2 = $request->SkorTambahanC4_2;
            $JumlahYangDihasilkanC4_3_in = $request->JumlahYangDihasilkanC4_3;
            $SkorTambahanC4_3 = $request->SkorTambahanC4_3;
            $JumlahYangDihasilkanC4_4_in = $request->JumlahYangDihasilkanC4_4;
            $SkorTambahanC4_4 = $request->SkorTambahanC4_4;
            $JumlahYangDihasilkanC4_5_in = $request->JumlahYangDihasilkanC4_5;
            $SkorTambahanC4_5 = $request->SkorTambahanC4_5;
            $SkorTambahanJumlahC4 = $request->SkorTambahanJumlahC4;
            $JumlahSkorYangDiHasilkanC4 = $request->JumlahSkorYangDiHasilkanC4;
            $SkorTambahanJumlahSkorC4 = $request->SkorTambahanJumlahSkorC4;
            $SkorTambahanJumlahBobotSubItemC4 = $request->SkorTambahanJumlahBobotSubItemC4;

            $C5 = $request->C5;
            $scorC5 = $request->scorC5;
            $scorMaxC5 = $request->scorMaxC5;
            $scorSubItemC5 = $request->scorSubItemC5;

            if ($request->hasFile('fileC5')) {
                if ($RecordData->fileC5 && file_exists(storage_path('app/public/uploads/Point-c/' . $RecordData->fileC5))) {
                    \Storage::delete('public/uploads/Point-c/' . $RecordData->fileC5);
                }
                $file_c5 = $request->file('fileC5')->store('uploads/Point-c', 'public');
            } else {
                $file_c5 = $RecordData->fileC5;
            }

            $JumlahYangDihasilkanC5_2_in = $request->JumlahYangDihasilkanC5_2;
            $SkorTambahanC5_2 = $request->SkorTambahanC5_2;
            $JumlahYangDihasilkanC5_3_in = $request->JumlahYangDihasilkanC5_3;
            $SkorTambahanC5_3 = $request->SkorTambahanC5_3;
            $JumlahYangDihasilkanC5_4_in = $request->JumlahYangDihasilkanC5_4;
            $SkorTambahanC5_4 = $request->SkorTambahanC5_4;
            $JumlahYangDihasilkanC5_5_in = $request->JumlahYangDihasilkanC5_5;
            $SkorTambahanC5_5 = $request->SkorTambahanC5_5;
            $SkorTambahanJumlahC5 = $request->SkorTambahanJumlahC5;
            $JumlahSkorYangDiHasilkanC5 = $request->JumlahSkorYangDiHasilkanC5;
            $SkorTambahanJumlahSkorC5 = $request->SkorTambahanJumlahSkorC5;
            $SkorTambahanJumlahBobotSubItemC5 = $request->SkorTambahanJumlahBobotSubItemC5;

            $C6 = $request->C6;
            $scorC6 = $request->scorC6;
            $scorMaxC6 = $request->scorMaxC6;
            $scorSubItemC6 = $request->scorSubItemC6;

            if ($request->hasFile('fileC6')) {
                if ($RecordData->fileC6 && file_exists(storage_path('app/public/uploads/Point-c/' . $RecordData->fileC6))) {
                    \Storage::delete('public/uploads/Point-c/' . $RecordData->fileC6);
                }
                $file_c6 = $request->file('fileC6')->store('uploads/Point-c', 'public');
            } else {
                $file_c6 = $RecordData->fileC6;
            }

            $JumlahYangDihasilkanC6_2_in = $request->JumlahYangDihasilkanC6_2;
            $SkorTambahanC6_2 = $request->SkorTambahanC6_2;
            $JumlahYangDihasilkanC6_3_in = $request->JumlahYangDihasilkanC6_3;
            $SkorTambahanC6_3 = $request->SkorTambahanC6_3;
            $JumlahYangDihasilkanC6_4_in = $request->JumlahYangDihasilkanC6_4;
            $SkorTambahanC6_4 = $request->SkorTambahanC6_4;
            $JumlahYangDihasilkanC6_5_in = $request->JumlahYangDihasilkanC6_5;
            $SkorTambahanC6_5 = $request->SkorTambahanC6_5;
            $SkorTambahanJumlahC6 = $request->SkorTambahanJumlahC6;
            $JumlahSkorYangDiHasilkanC6 = $request->JumlahSkorYangDiHasilkanC6;
            $SkorTambahanJumlahSkorC6 = $request->SkorTambahanJumlahSkorC6;
            $SkorTambahanJumlahBobotSubItemC6 = $request->SkorTambahanJumlahBobotSubItemC6;

            $C7 = $request->C7;
            $scorC7 = $request->scorC7;
            $scorMaxC7 = $request->scorMaxC7;
            $scorSubItemC7 = $request->scorSubItemC7;

            if ($request->hasFile('fileC7')) {
                if ($RecordData->fileC7 && file_exists(storage_path('app/public/uploads/Point-c/' . $RecordData->fileC7))) {
                    \Storage::delete('public/uploads/Point-c/' . $RecordData->fileC7);
                }
                $file_c7 = $request->file('fileC7')->store('uploads/Point-c', 'public');
            } else {
                $file_c7 = $RecordData->fileC7;
            }

            $JumlahYangDihasilkanC7_2_in = $request->JumlahYangDihasilkanC7_2;
            $SkorTambahanC7_2 = $request->SkorTambahanC7_2;
            $JumlahYangDihasilkanC7_3_in = $request->JumlahYangDihasilkanC7_3;
            $SkorTambahanC7_3 = $request->SkorTambahanC7_3;
            $JumlahYangDihasilkanC7_4_in = $request->JumlahYangDihasilkanC7_4;
            $SkorTambahanC7_4 = $request->SkorTambahanC7_4;
            $JumlahYangDihasilkanC7_5_in = $request->JumlahYangDihasilkanC7_5;
            $SkorTambahanC7_5 = $request->SkorTambahanC7_5;
            $SkorTambahanJumlahC7 = $request->SkorTambahanJumlahC7;
            $JumlahSkorYangDiHasilkanC7 = $request->JumlahSkorYangDiHasilkanC7;
            $SkorTambahanJumlahSkorC7 = $request->SkorTambahanJumlahSkorC7;
            $SkorTambahanJumlahBobotSubItemC7 = $request->SkorTambahanJumlahBobotSubItemC7;

            $C8 = $request->C8;
            $scorC8 = $request->scorC8;
            $scorMaxC8 = $request->scorMaxC8;
            $scorSubItemC8 = $request->scorSubItemC8;

            if ($request->hasFile('fileC8')) {
                if ($RecordData->fileC8 && file_exists(storage_path('app/public/uploads/Point-c/' . $RecordData->fileC8))) {
                    \Storage::delete('public/uploads/Point-c/' . $RecordData->fileC8);
                }
                $file_c8 = $request->file('fileC8')->store('uploads/Point-c', 'public');
            } else {
                $file_c8 = $RecordData->fileC8;
            }

            $JumlahYangDihasilkanC8_2_in = $request->JumlahYangDihasilkanC8_2;
            $SkorTambahanC8_2 = $request->SkorTambahanC8_2;
            $JumlahYangDihasilkanC8_3_in = $request->JumlahYangDihasilkanC8_3;
            $SkorTambahanC8_3 = $request->SkorTambahanC8_3;
            $JumlahYangDihasilkanC8_4_in = $request->JumlahYangDihasilkanC8_4;
            $SkorTambahanC8_4 = $request->SkorTambahanC8_4;
            $JumlahYangDihasilkanC8_5_in = $request->JumlahYangDihasilkanC8_5;
            $SkorTambahanC8_5 = $request->SkorTambahanC8_5;
            $SkorTambahanJumlahC8 = $request->SkorTambahanJumlahC8;
            $JumlahSkorYangDiHasilkanC8 = $request->JumlahSkorYangDiHasilkanC8;
            $SkorTambahanJumlahSkorC8 = $request->SkorTambahanJumlahSkorC8;
            $SkorTambahanJumlahBobotSubItemC8 = $request->SkorTambahanJumlahBobotSubItemC8;

            $C9 = $request->C9;
            $scorC9 = $request->scorC9;
            $scorMaxC9 = $request->scorMaxC9;
            $scorSubItemC9 = $request->scorSubItemC9;

            if ($request->hasFile('fileC9')) {
                if ($RecordData->fileC9 && file_exists(storage_path('app/public/uploads/Point-c/' . $RecordData->fileC9))) {
                    \Storage::delete('public/uploads/Point-c/' . $RecordData->fileC9);
                }
                $file_c9 = $request->file('fileC9')->store('uploads/Point-c', 'public');
            } else {
                $file_c9 = $RecordData->fileC9;
            }

            $JumlahYangDihasilkanC9_2_in = $request->JumlahYangDihasilkanC9_2;
            $SkorTambahanC9_2 = $request->SkorTambahanC9_2;
            $JumlahYangDihasilkanC9_3_in = $request->JumlahYangDihasilkanC9_3;
            $SkorTambahanC9_3 = $request->SkorTambahanC9_3;
            $JumlahYangDihasilkanC9_4_in = $request->JumlahYangDihasilkanC9_4;
            $SkorTambahanC9_4 = $request->SkorTambahanC9_4;
            $JumlahYangDihasilkanC9_5_in = $request->JumlahYangDihasilkanC9_5;
            $SkorTambahanC9_5 = $request->SkorTambahanC9_5;
            $SkorTambahanJumlahC9 = $request->SkorTambahanJumlahC9;
            $JumlahSkorYangDiHasilkanC9 = $request->JumlahSkorYangDiHasilkanC9;
            $SkorTambahanJumlahSkorC9 = $request->SkorTambahanJumlahSkorC9;
            $SkorTambahanJumlahBobotSubItemC9 = $request->SkorTambahanJumlahBobotSubItemC9;

            $TotalSkorPengabdianKepadaMasyarakat = $request->TotalSkorPengabdianKepadaMasyarakat;
            $TotalKelebihaC1 = $request->TotalKelebihaC1;
            $TotalKelebihaC2 = $request->TotalKelebihaC2;
            $TotalKelebihaC3 = $request->TotalKelebihaC3;
            $TotalKelebihaC4 = $request->TotalKelebihaC4;
            $TotalKelebihaC5 = $request->TotalKelebihaC5;
            $TotalKelebihaC6 = $request->TotalKelebihaC6;
            $TotalKelebihaC7 = $request->TotalKelebihaC7;
            $TotalKelebihaC8 = $request->TotalKelebihaC8;
            $TotalKelebihaC9 = $request->TotalKelebihaC9;
            $TotalKelebihanSkor = $request->TotalKelebihanSkor;
            $NilaiPengabdianKepadaMasyarakat = $request->NilaiPengabdianKepadaMasyarakat;
            $NilaiTambahPengabdianKepadaMasyarakat = $request->NilaiTambahPengabdianKepadaMasyarakat;
            $NilaiTotalPengabdianKepadaMasyarakat = $request->NilaiTotalPengabdianKepadaMasyarakat;


            $update = [
                'C1' => $C1,
                'scorC1' => $scorC1,
                'scorMaxC1' => $scorMaxC1,
                'scorSubItemC1' => $scorSubItemC1,
                'fileC1' => $file_c1,
                'JumlahYangDihasilkanC1_2_in' => $JumlahYangDihasilkanC1_2_in,
                'SkorTambahanC1_2' => $SkorTambahanC1_2,
                'JumlahYangDihasilkanC1_3_in' => $JumlahYangDihasilkanC1_3_in,
                'SkorTambahanC1_3' => $SkorTambahanC1_3,
                'JumlahYangDihasilkanC1_4_in' => $JumlahYangDihasilkanC1_4_in,
                'SkorTambahanC1_4' => $SkorTambahanC1_4,
                'JumlahYangDihasilkanC1_5_in' => $JumlahYangDihasilkanC1_5_in,
                'SkorTambahanC1_5' => $SkorTambahanC1_5,
                'SkorTambahanJumlahC1' => $SkorTambahanJumlahC1,
                'JumlahSkorYangDiHasilkanC1' => $JumlahSkorYangDiHasilkanC1,
                'SkorTambahanJumlahSkorC1' => $SkorTambahanJumlahSkorC1,
                'SkorTambahanJumlahBobotSubItemC1' => $SkorTambahanJumlahBobotSubItemC1,

                'C2' => $C2,
                'scorC2' => $scorC2,
                'scorMaxC2' => $scorMaxC2,
                'scorSubItemC2' => $scorSubItemC2,
                'fileC2' => $file_c2,
                'JumlahYangDihasilkanC2_2_in' => $JumlahYangDihasilkanC2_2_in,
                'SkorTambahanC2_2' => $SkorTambahanC2_2,
                'JumlahYangDihasilkanC2_3_in' => $JumlahYangDihasilkanC2_3_in,
                'SkorTambahanC2_3' => $SkorTambahanC2_3,
                'JumlahYangDihasilkanC2_4_in' => $JumlahYangDihasilkanC2_4_in,
                'SkorTambahanC2_4' => $SkorTambahanC2_4,
                'JumlahYangDihasilkanC2_5_in' => $JumlahYangDihasilkanC2_5_in,
                'SkorTambahanC2_5' => $SkorTambahanC2_5,
                'SkorTambahanJumlahC2' => $SkorTambahanJumlahC2,
                'JumlahSkorYangDiHasilkanC2' => $JumlahSkorYangDiHasilkanC2,
                'SkorTambahanJumlahSkorC2' => $SkorTambahanJumlahSkorC2,
                'SkorTambahanJumlahBobotSubItemC2' => $SkorTambahanJumlahBobotSubItemC2,

                'C3' => $C3,
                'scorC3' => $scorC3,
                'scorMaxC3' => $scorMaxC3,
                'scorSubItemC3' => $scorSubItemC3,
                'fileC3' => $file_c3,
                'JumlahYangDihasilkanC3_4_in' => $JumlahYangDihasilkanC3_4_in,
                'SkorTambahanC3_4' => $SkorTambahanC3_4,
                'JumlahYangDihasilkanC3_5_in' => $JumlahYangDihasilkanC3_5_in,
                'SkorTambahanC3_5' => $SkorTambahanC3_5,
                'SkorTambahanJumlahC3' => $SkorTambahanJumlahC3,
                'JumlahSkorYangDiHasilkanC3' => $JumlahSkorYangDiHasilkanC3,
                'SkorTambahanJumlahSkorC3' => $SkorTambahanJumlahSkorC3,
                'SkorTambahanJumlahBobotSubItemC3' => $SkorTambahanJumlahBobotSubItemC3,

                'C4' => $C4,
                'scorC4' => $scorC4,
                'scorMaxC4' => $scorMaxC4,
                'scorSubItemC4' => $scorSubItemC4,
                'fileC4' => $file_c4,
                'JumlahYangDihasilkanC4_2_in' => $JumlahYangDihasilkanC4_2_in,
                'SkorTambahanC4_2' => $SkorTambahanC4_2,
                'JumlahYangDihasilkanC4_3_in' => $JumlahYangDihasilkanC4_3_in,
                'SkorTambahanC4_3' => $SkorTambahanC4_3,
                'JumlahYangDihasilkanC4_4_in' => $JumlahYangDihasilkanC4_4_in,
                'SkorTambahanC4_4' => $SkorTambahanC4_4,
                'JumlahYangDihasilkanC4_5_in' => $JumlahYangDihasilkanC4_5_in,
                'SkorTambahanC4_5' => $SkorTambahanC4_5,
                'SkorTambahanJumlahC4' => $SkorTambahanJumlahC4,
                'JumlahSkorYangDiHasilkanC4' => $JumlahSkorYangDiHasilkanC4,
                'SkorTambahanJumlahSkorC4' => $SkorTambahanJumlahSkorC4,
                'SkorTambahanJumlahBobotSubItemC4' => $SkorTambahanJumlahBobotSubItemC4,

                'C5' => $C5,
                'scorC5' => $scorC5,
                'scorMaxC5' => $scorMaxC5,
                'scorSubItemC5' => $scorSubItemC5,
                'fileC5' => $file_c5,
                'JumlahYangDihasilkanC5_2_in' => $JumlahYangDihasilkanC5_2_in,
                'SkorTambahanC5_2' => $SkorTambahanC5_2,
                'JumlahYangDihasilkanC5_3_in' => $JumlahYangDihasilkanC5_3_in,
                'SkorTambahanC5_3' => $SkorTambahanC5_3,
                'JumlahYangDihasilkanC5_4_in' => $JumlahYangDihasilkanC5_4_in,
                'SkorTambahanC5_4' => $SkorTambahanC5_4,
                'JumlahYangDihasilkanC5_5_in' => $JumlahYangDihasilkanC5_5_in,
                'SkorTambahanC5_5' => $SkorTambahanC5_5,
                'SkorTambahanJumlahC5' => $SkorTambahanJumlahC5,
                'JumlahSkorYangDiHasilkanC5' => $JumlahSkorYangDiHasilkanC5,
                'SkorTambahanJumlahSkorC5' => $SkorTambahanJumlahSkorC5,
                'SkorTambahanJumlahBobotSubItemC5' => $SkorTambahanJumlahBobotSubItemC5,

                'C6' => $C6,
                'scorC6' => $scorC6,
                'scorMaxC6' => $scorMaxC6,
                'scorSubItemC6' => $scorSubItemC6,
                'fileC6' => $file_c6,
                'JumlahYangDihasilkanC6_2_in' => $JumlahYangDihasilkanC6_2_in,
                'SkorTambahanC6_2' => $SkorTambahanC6_2,
                'JumlahYangDihasilkanC6_3_in' => $JumlahYangDihasilkanC6_3_in,
                'SkorTambahanC6_3' => $SkorTambahanC6_3,
                'JumlahYangDihasilkanC6_4_in' => $JumlahYangDihasilkanC6_4_in,
                'SkorTambahanC6_4' => $SkorTambahanC6_4,
                'JumlahYangDihasilkanC6_5_in' => $JumlahYangDihasilkanC6_5_in,
                'SkorTambahanC6_5' => $SkorTambahanC6_5,
                'SkorTambahanJumlahC6' => $SkorTambahanJumlahC6,
                'JumlahSkorYangDiHasilkanC6' => $JumlahSkorYangDiHasilkanC6,
                'SkorTambahanJumlahSkorC6' => $SkorTambahanJumlahSkorC6,
                'SkorTambahanJumlahBobotSubItemC6' => $SkorTambahanJumlahBobotSubItemC6,

                'C7' => $C7,
                'scorC7' => $scorC7,
                'scorMaxC7' => $scorMaxC7,
                'scorSubItemC7' => $scorSubItemC7,
                'fileC7' => $file_c7,
                'JumlahYangDihasilkanC7_2_in' => $JumlahYangDihasilkanC7_2_in,
                'SkorTambahanC7_2' => $SkorTambahanC7_2,
                'JumlahYangDihasilkanC7_3_in' => $JumlahYangDihasilkanC7_3_in,
                'SkorTambahanC7_3' => $SkorTambahanC7_3,
                'JumlahYangDihasilkanC7_4_in' => $JumlahYangDihasilkanC7_4_in,
                'SkorTambahanC7_4' => $SkorTambahanC7_4,
                'JumlahYangDihasilkanC7_5_in' => $JumlahYangDihasilkanC7_5_in,
                'SkorTambahanC7_5' => $SkorTambahanC7_5,
                'SkorTambahanJumlahC7' => $SkorTambahanJumlahC7,
                'JumlahSkorYangDiHasilkanC7' => $JumlahSkorYangDiHasilkanC7,
                'SkorTambahanJumlahSkorC7' => $SkorTambahanJumlahSkorC7,
                'SkorTambahanJumlahBobotSubItemC7' => $SkorTambahanJumlahBobotSubItemC7,

                'C8' => $C8,
                'scorC8' => $scorC8,
                'scorMaxC8' => $scorMaxC8,
                'scorSubItemC8' => $scorSubItemC8,
                'fileC8' => $file_c8,
                'JumlahYangDihasilkanC8_2_in' => $JumlahYangDihasilkanC8_2_in,
                'SkorTambahanC8_2' => $SkorTambahanC8_2,
                'JumlahYangDihasilkanC8_3_in' => $JumlahYangDihasilkanC8_3_in,
                'SkorTambahanC8_3' => $SkorTambahanC8_3,
                'JumlahYangDihasilkanC8_4_in' => $JumlahYangDihasilkanC8_4_in,
                'SkorTambahanC8_4' => $SkorTambahanC8_4,
                'JumlahYangDihasilkanC8_5_in' => $JumlahYangDihasilkanC8_5_in,
                'SkorTambahanC8_5' => $SkorTambahanC8_5,
                'SkorTambahanJumlahC8' => $SkorTambahanJumlahC8,
                'JumlahSkorYangDiHasilkanC8' => $JumlahSkorYangDiHasilkanC8,
                'SkorTambahanJumlahSkorC8' => $SkorTambahanJumlahSkorC8,
                'SkorTambahanJumlahBobotSubItemC8' => $SkorTambahanJumlahBobotSubItemC8,

                'C9' => $C9,
                'scorC9' => $scorC9,
                'scorMaxC9' => $scorMaxC9,
                'scorSubItemC9' => $scorSubItemC9,
                'fileC9' => $file_c9,
                'JumlahYangDihasilkanC9_2_in' => $JumlahYangDihasilkanC9_2_in,
                'SkorTambahanC9_2' => $SkorTambahanC9_2,
                'JumlahYangDihasilkanC9_3_in' => $JumlahYangDihasilkanC9_3_in,
                'SkorTambahanC9_3' => $SkorTambahanC9_3,
                'JumlahYangDihasilkanC9_4_in' => $JumlahYangDihasilkanC9_4_in,
                'SkorTambahanC9_4' => $SkorTambahanC9_4,
                'JumlahYangDihasilkanC9_5_in' => $JumlahYangDihasilkanC9_5_in,
                'SkorTambahanC9_5' => $SkorTambahanC9_5,
                'SkorTambahanJumlahC9' => $SkorTambahanJumlahC9,
                'JumlahSkorYangDiHasilkanC9' => $JumlahSkorYangDiHasilkanC9,
                'SkorTambahanJumlahSkorC9' => $SkorTambahanJumlahSkorC9,
                'SkorTambahanJumlahBobotSubItemC9' => $SkorTambahanJumlahBobotSubItemC9,

                'TotalSkorPengabdianKepadaMasyarakat' => $TotalSkorPengabdianKepadaMasyarakat,
                'TotalKelebihaC1' => $TotalKelebihaC1,
                'TotalKelebihaC2' => $TotalKelebihaC2,
                'TotalKelebihaC3' => $TotalKelebihaC3,
                'TotalKelebihaC4' => $TotalKelebihaC4,
                'TotalKelebihaC5' => $TotalKelebihaC5,
                'TotalKelebihaC6' => $TotalKelebihaC6,
                'TotalKelebihaC7' => $TotalKelebihaC7,
                'TotalKelebihaC8' => $TotalKelebihaC8,
                'TotalKelebihaC9' => $TotalKelebihaC9,
                'TotalKelebihanSkor' => $TotalKelebihanSkor,
                'NilaiPengabdianKepadaMasyarakat' => $NilaiPengabdianKepadaMasyarakat,
                'NilaiTambahPengabdianKepadaMasyarakat' => $NilaiTambahPengabdianKepadaMasyarakat,
                'NilaiTotalPengabdianKepadaMasyarakat' => $NilaiTotalPengabdianKepadaMasyarakat,
            ];

            $RecordData->update($update);
            DB::commit();
            toast('Update Point C successfully :)', 'success');
            return redirect()->route('point-D');
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point C fail :)', 'error');
            return redirect()->back();
        }
    }

    // functuin mencari data page search
    public function searchPoin()
    {
        // Mendapatkan semua periode dari database
        $allPeriods = Period::all();

        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm', 'warek2', 'upt', 'baak', 'keuangan', 'lpm', 'risbang', 'gizi', 'perawat', 'bidan', 'manajemen', 'akuntansi', 'bau', 'warek1', 'rektor', 'ypsdmit'
        ])->get();

        return view('edit-point.hrd.search.searchDataPoinC', compact('users', 'allPeriods'));
    }

    // return view ke edit
    public function resultSearchPoin(Request $request)
    {
        $period_id = $request->input('period_id'); // Mendapatkan period_id dari input form

        $resultData = DB::table('users')
            ->leftJoin('point_c', 'point_c.new_user_id', '=', 'users.id')
            ->select('users.name', 'users.email', 'point_c.*')
            ->where('new_user_id', '=', $request->id)
            ->where('point_c.period_id', '=', $period_id) // Filter berdasarkan period_id
            ->first();

        if ($resultData == null) {
            return view('menu.menu-empty');
        }

        return view('edit-point.hrd.update.EditPointChrd', ['data' => $resultData]);
    }

    public function updateHrd(Request $request, PointC $pointC, $PointId)
    {
        $request->validate([
            'fileC1' => 'mimes:pdf',
            'fileC2' => 'mimes:pdf',
            'fileC3' => 'mimes:pdf',
            'fileC4' => 'mimes:pdf',
            'fileC5' => 'mimes:pdf',
            'fileC6' => 'mimes:pdf',
            'fileC7' => 'mimes:pdf',
            'fileC8' => 'mimes:pdf',
            'fileC9' => 'mimes:pdf',
        ]);

        DB::beginTransaction();
        try {
            $period_id = $request->input('period_id'); // Mendapatkan period_id dari input form
            // Menggunakan findOrFail untuk mencari data PointA berdasarkan new_user_id dan period_id
            $RecordData = PointC::where('new_user_id', $PointId)
                ->where('period_id', $period_id)
                ->firstOrFail();

            // Request put data update
            $C1 = $request->C1;
            $scorC1 = $request->scorC1;
            $scorMaxC1 = $request->scorMaxC1;
            $scorSubItemC1 = $request->scorSubItemC1;

            if ($request->hasFile('fileC1')) {
                if ($RecordData->fileC1 && file_exists(storage_path('app/public/uploads/Point-c/' . $RecordData->fileC1))) {
                    \Storage::delete('public/uploads/Point-c/' . $RecordData->fileC1);
                }
                $file_c1 = $request->file('fileC1')->store('uploads/Point-c', 'public');
            } else {
                $file_c1 = $RecordData->fileC1;
            }

            $JumlahYangDihasilkanC1_2_in = $request->JumlahYangDihasilkanC1_2;
            $SkorTambahanC1_2 = $request->SkorTambahanC1_2;
            $JumlahYangDihasilkanC1_3_in = $request->JumlahYangDihasilkanC1_3;
            $SkorTambahanC1_3 = $request->SkorTambahanC1_3;
            $JumlahYangDihasilkanC1_4_in = $request->JumlahYangDihasilkanC1_4;
            $SkorTambahanC1_4 = $request->SkorTambahanC1_4;
            $JumlahYangDihasilkanC1_5_in = $request->JumlahYangDihasilkanC1_5;
            $SkorTambahanC1_5 = $request->SkorTambahanC1_5;
            $SkorTambahanJumlahC1 = $request->SkorTambahanJumlahC1;
            $JumlahSkorYangDiHasilkanC1 = $request->JumlahSkorYangDiHasilkanC1;
            $SkorTambahanJumlahSkorC1 = $request->SkorTambahanJumlahSkorC1;
            $SkorTambahanJumlahBobotSubItemC1 = $request->SkorTambahanJumlahBobotSubItemC1;

            $C2 = $request->C2;
            $scorC2 = $request->scorC2;
            $scorMaxC2 = $request->scorMaxC2;
            $scorSubItemC2 = $request->scorSubItemC2;

            if ($request->hasFile('fileC2')) {
                if ($RecordData->fileC2 && file_exists(storage_path('app/public/uploads/Point-c/' . $RecordData->fileC2))) {
                    \Storage::delete('public/uploads/Point-c/' . $RecordData->fileC2);
                }
                $file_c2 = $request->file('fileC2')->store('uploads/Point-c', 'public');
            } else {
                $file_c2 = $RecordData->fileC2;
            }

            $JumlahYangDihasilkanC2_2_in = $request->JumlahYangDihasilkanC2_2;
            $SkorTambahanC2_2 = $request->SkorTambahanC2_2;
            $JumlahYangDihasilkanC2_3_in = $request->JumlahYangDihasilkanC2_3;
            $SkorTambahanC2_3 = $request->SkorTambahanC2_3;
            $JumlahYangDihasilkanC2_4_in = $request->JumlahYangDihasilkanC2_4;
            $SkorTambahanC2_4 = $request->SkorTambahanC2_4;
            $JumlahYangDihasilkanC2_5_in = $request->JumlahYangDihasilkanC2_5;
            $SkorTambahanC2_5 = $request->SkorTambahanC2_5;
            $SkorTambahanJumlahC2 = $request->SkorTambahanJumlahC2;
            $JumlahSkorYangDiHasilkanC2 = $request->JumlahSkorYangDiHasilkanC2;
            $SkorTambahanJumlahSkorC2 = $request->SkorTambahanJumlahSkorC2;
            $SkorTambahanJumlahBobotSubItemC2 = $request->SkorTambahanJumlahBobotSubItemC2;

            $C3 = $request->C3;
            $scorC3 = $request->scorC3;
            $scorMaxC3 = $request->scorMaxC3;
            $scorSubItemC3 = $request->scorSubItemC3;

            if ($request->hasFile('fileC3')) {
                if ($RecordData->fileC3 && file_exists(storage_path('app/public/uploads/Point-c/' . $RecordData->fileC3))) {
                    \Storage::delete('public/uploads/Point-c/' . $RecordData->fileC3);
                }
                $file_c3 = $request->file('fileC3')->store('uploads/Point-c', 'public');
            } else {
                $file_c3 = $RecordData->fileC3;
            }

            $JumlahYangDihasilkanC3_4_in = $request->JumlahYangDihasilkanC3_4;
            $SkorTambahanC3_4 = $request->SkorTambahanC3_4;
            $JumlahYangDihasilkanC3_5_in = $request->JumlahYangDihasilkanC3_5;
            $SkorTambahanC3_5 = $request->SkorTambahanC3_5;
            $SkorTambahanJumlahC3 = $request->SkorTambahanJumlahC3;
            $JumlahSkorYangDiHasilkanC3 = $request->JumlahSkorYangDiHasilkanC3;
            $SkorTambahanJumlahSkorC3 = $request->SkorTambahanJumlahSkorC3;
            $SkorTambahanJumlahBobotSubItemC3 = $request->SkorTambahanJumlahBobotSubItemC3;

            $C4 = $request->C4;
            $scorC4 = $request->scorC4;
            $scorMaxC4 = $request->scorMaxC4;
            $scorSubItemC4 = $request->scorSubItemC4;

            if ($request->hasFile('fileC4')) {
                if ($RecordData->fileC4 && file_exists(storage_path('app/public/uploads/Point-c/' . $RecordData->fileC4))) {
                    \Storage::delete('public/uploads/Point-c/' . $RecordData->fileC4);
                }
                $file_c4 = $request->file('fileC4')->store('uploads/Point-c', 'public');
            } else {
                $file_c4 = $RecordData->fileC4;
            }

            $JumlahYangDihasilkanC4_2_in = $request->JumlahYangDihasilkanC4_2;
            $SkorTambahanC4_2 = $request->SkorTambahanC4_2;
            $JumlahYangDihasilkanC4_3_in = $request->JumlahYangDihasilkanC4_3;
            $SkorTambahanC4_3 = $request->SkorTambahanC4_3;
            $JumlahYangDihasilkanC4_4_in = $request->JumlahYangDihasilkanC4_4;
            $SkorTambahanC4_4 = $request->SkorTambahanC4_4;
            $JumlahYangDihasilkanC4_5_in = $request->JumlahYangDihasilkanC4_5;
            $SkorTambahanC4_5 = $request->SkorTambahanC4_5;
            $SkorTambahanJumlahC4 = $request->SkorTambahanJumlahC4;
            $JumlahSkorYangDiHasilkanC4 = $request->JumlahSkorYangDiHasilkanC4;
            $SkorTambahanJumlahSkorC4 = $request->SkorTambahanJumlahSkorC4;
            $SkorTambahanJumlahBobotSubItemC4 = $request->SkorTambahanJumlahBobotSubItemC4;

            $C5 = $request->C5;
            $scorC5 = $request->scorC5;
            $scorMaxC5 = $request->scorMaxC5;
            $scorSubItemC5 = $request->scorSubItemC5;

            if ($request->hasFile('fileC5')) {
                if ($RecordData->fileC5 && file_exists(storage_path('app/public/uploads/Point-c/' . $RecordData->fileC5))) {
                    \Storage::delete('public/uploads/Point-c/' . $RecordData->fileC5);
                }
                $file_c5 = $request->file('fileC5')->store('uploads/Point-c', 'public');
            } else {
                $file_c5 = $RecordData->fileC5;
            }

            $JumlahYangDihasilkanC5_2_in = $request->JumlahYangDihasilkanC5_2;
            $SkorTambahanC5_2 = $request->SkorTambahanC5_2;
            $JumlahYangDihasilkanC5_3_in = $request->JumlahYangDihasilkanC5_3;
            $SkorTambahanC5_3 = $request->SkorTambahanC5_3;
            $JumlahYangDihasilkanC5_4_in = $request->JumlahYangDihasilkanC5_4;
            $SkorTambahanC5_4 = $request->SkorTambahanC5_4;
            $JumlahYangDihasilkanC5_5_in = $request->JumlahYangDihasilkanC5_5;
            $SkorTambahanC5_5 = $request->SkorTambahanC5_5;
            $SkorTambahanJumlahC5 = $request->SkorTambahanJumlahC5;
            $JumlahSkorYangDiHasilkanC5 = $request->JumlahSkorYangDiHasilkanC5;
            $SkorTambahanJumlahSkorC5 = $request->SkorTambahanJumlahSkorC5;
            $SkorTambahanJumlahBobotSubItemC5 = $request->SkorTambahanJumlahBobotSubItemC5;

            $C6 = $request->C6;
            $scorC6 = $request->scorC6;
            $scorMaxC6 = $request->scorMaxC6;
            $scorSubItemC6 = $request->scorSubItemC6;

            if ($request->hasFile('fileC6')) {
                if ($RecordData->fileC6 && file_exists(storage_path('app/public/uploads/Point-c/' . $RecordData->fileC6))) {
                    \Storage::delete('public/uploads/Point-c/' . $RecordData->fileC6);
                }
                $file_c6 = $request->file('fileC6')->store('uploads/Point-c', 'public');
            } else {
                $file_c6 = $RecordData->fileC6;
            }

            $JumlahYangDihasilkanC6_2_in = $request->JumlahYangDihasilkanC6_2;
            $SkorTambahanC6_2 = $request->SkorTambahanC6_2;
            $JumlahYangDihasilkanC6_3_in = $request->JumlahYangDihasilkanC6_3;
            $SkorTambahanC6_3 = $request->SkorTambahanC6_3;
            $JumlahYangDihasilkanC6_4_in = $request->JumlahYangDihasilkanC6_4;
            $SkorTambahanC6_4 = $request->SkorTambahanC6_4;
            $JumlahYangDihasilkanC6_5_in = $request->JumlahYangDihasilkanC6_5;
            $SkorTambahanC6_5 = $request->SkorTambahanC6_5;
            $SkorTambahanJumlahC6 = $request->SkorTambahanJumlahC6;
            $JumlahSkorYangDiHasilkanC6 = $request->JumlahSkorYangDiHasilkanC6;
            $SkorTambahanJumlahSkorC6 = $request->SkorTambahanJumlahSkorC6;
            $SkorTambahanJumlahBobotSubItemC6 = $request->SkorTambahanJumlahBobotSubItemC6;

            $C7 = $request->C7;
            $scorC7 = $request->scorC7;
            $scorMaxC7 = $request->scorMaxC7;
            $scorSubItemC7 = $request->scorSubItemC7;

            if ($request->hasFile('fileC7')) {
                if ($RecordData->fileC7 && file_exists(storage_path('app/public/uploads/Point-c/' . $RecordData->fileC7))) {
                    \Storage::delete('public/uploads/Point-c/' . $RecordData->fileC7);
                }
                $file_c7 = $request->file('fileC7')->store('uploads/Point-c', 'public');
            } else {
                $file_c7 = $RecordData->fileC7;
            }

            $JumlahYangDihasilkanC7_2_in = $request->JumlahYangDihasilkanC7_2;
            $SkorTambahanC7_2 = $request->SkorTambahanC7_2;
            $JumlahYangDihasilkanC7_3_in = $request->JumlahYangDihasilkanC7_3;
            $SkorTambahanC7_3 = $request->SkorTambahanC7_3;
            $JumlahYangDihasilkanC7_4_in = $request->JumlahYangDihasilkanC7_4;
            $SkorTambahanC7_4 = $request->SkorTambahanC7_4;
            $JumlahYangDihasilkanC7_5_in = $request->JumlahYangDihasilkanC7_5;
            $SkorTambahanC7_5 = $request->SkorTambahanC7_5;
            $SkorTambahanJumlahC7 = $request->SkorTambahanJumlahC7;
            $JumlahSkorYangDiHasilkanC7 = $request->JumlahSkorYangDiHasilkanC7;
            $SkorTambahanJumlahSkorC7 = $request->SkorTambahanJumlahSkorC7;
            $SkorTambahanJumlahBobotSubItemC7 = $request->SkorTambahanJumlahBobotSubItemC7;

            $C8 = $request->C8;
            $scorC8 = $request->scorC8;
            $scorMaxC8 = $request->scorMaxC8;
            $scorSubItemC8 = $request->scorSubItemC8;

            if ($request->hasFile('fileC8')) {
                if ($RecordData->fileC8 && file_exists(storage_path('app/public/uploads/Point-c/' . $RecordData->fileC8))) {
                    \Storage::delete('public/uploads/Point-c/' . $RecordData->fileC8);
                }
                $file_c8 = $request->file('fileC8')->store('uploads/Point-c', 'public');
            } else {
                $file_c8 = $RecordData->fileC8;
            }

            $JumlahYangDihasilkanC8_2_in = $request->JumlahYangDihasilkanC8_2;
            $SkorTambahanC8_2 = $request->SkorTambahanC8_2;
            $JumlahYangDihasilkanC8_3_in = $request->JumlahYangDihasilkanC8_3;
            $SkorTambahanC8_3 = $request->SkorTambahanC8_3;
            $JumlahYangDihasilkanC8_4_in = $request->JumlahYangDihasilkanC8_4;
            $SkorTambahanC8_4 = $request->SkorTambahanC8_4;
            $JumlahYangDihasilkanC8_5_in = $request->JumlahYangDihasilkanC8_5;
            $SkorTambahanC8_5 = $request->SkorTambahanC8_5;
            $SkorTambahanJumlahC8 = $request->SkorTambahanJumlahC8;
            $JumlahSkorYangDiHasilkanC8 = $request->JumlahSkorYangDiHasilkanC8;
            $SkorTambahanJumlahSkorC8 = $request->SkorTambahanJumlahSkorC8;
            $SkorTambahanJumlahBobotSubItemC8 = $request->SkorTambahanJumlahBobotSubItemC8;

            $C9 = $request->C9;
            $scorC9 = $request->scorC9;
            $scorMaxC9 = $request->scorMaxC9;
            $scorSubItemC9 = $request->scorSubItemC9;

            if ($request->hasFile('fileC9')) {
                if ($RecordData->fileC9 && file_exists(storage_path('app/public/uploads/Point-c/' . $RecordData->fileC9))) {
                    \Storage::delete('public/uploads/Point-c/' . $RecordData->fileC9);
                }
                $file_c9 = $request->file('fileC9')->store('uploads/Point-c', 'public');
            } else {
                $file_c9 = $RecordData->fileC9;
            }

            $JumlahYangDihasilkanC9_2_in = $request->JumlahYangDihasilkanC9_2;
            $SkorTambahanC9_2 = $request->SkorTambahanC9_2;
            $JumlahYangDihasilkanC9_3_in = $request->JumlahYangDihasilkanC9_3;
            $SkorTambahanC9_3 = $request->SkorTambahanC9_3;
            $JumlahYangDihasilkanC9_4_in = $request->JumlahYangDihasilkanC9_4;
            $SkorTambahanC9_4 = $request->SkorTambahanC9_4;
            $JumlahYangDihasilkanC9_5_in = $request->JumlahYangDihasilkanC9_5;
            $SkorTambahanC9_5 = $request->SkorTambahanC9_5;
            $SkorTambahanJumlahC9 = $request->SkorTambahanJumlahC9;
            $JumlahSkorYangDiHasilkanC9 = $request->JumlahSkorYangDiHasilkanC9;
            $SkorTambahanJumlahSkorC9 = $request->SkorTambahanJumlahSkorC9;
            $SkorTambahanJumlahBobotSubItemC9 = $request->SkorTambahanJumlahBobotSubItemC9;

            $TotalSkorPengabdianKepadaMasyarakat = $request->TotalSkorPengabdianKepadaMasyarakat;
            $TotalKelebihaC1 = $request->TotalKelebihaC1;
            $TotalKelebihaC2 = $request->TotalKelebihaC2;
            $TotalKelebihaC3 = $request->TotalKelebihaC3;
            $TotalKelebihaC4 = $request->TotalKelebihaC4;
            $TotalKelebihaC5 = $request->TotalKelebihaC5;
            $TotalKelebihaC6 = $request->TotalKelebihaC6;
            $TotalKelebihaC7 = $request->TotalKelebihaC7;
            $TotalKelebihaC8 = $request->TotalKelebihaC8;
            $TotalKelebihaC9 = $request->TotalKelebihaC9;
            $TotalKelebihanSkor = $request->TotalKelebihanSkor;
            $NilaiPengabdianKepadaMasyarakat = $request->NilaiPengabdianKepadaMasyarakat;
            $NilaiTambahPengabdianKepadaMasyarakat = $request->NilaiTambahPengabdianKepadaMasyarakat;
            $NilaiTotalPengabdianKepadaMasyarakat = $request->NilaiTotalPengabdianKepadaMasyarakat;


            $update = [
                'C1' => $C1,
                'scorC1' => $scorC1,
                'scorMaxC1' => $scorMaxC1,
                'scorSubItemC1' => $scorSubItemC1,
                'fileC1' => $file_c1,
                'JumlahYangDihasilkanC1_2_in' => $JumlahYangDihasilkanC1_2_in,
                'SkorTambahanC1_2' => $SkorTambahanC1_2,
                'JumlahYangDihasilkanC1_3_in' => $JumlahYangDihasilkanC1_3_in,
                'SkorTambahanC1_3' => $SkorTambahanC1_3,
                'JumlahYangDihasilkanC1_4_in' => $JumlahYangDihasilkanC1_4_in,
                'SkorTambahanC1_4' => $SkorTambahanC1_4,
                'JumlahYangDihasilkanC1_5_in' => $JumlahYangDihasilkanC1_5_in,
                'SkorTambahanC1_5' => $SkorTambahanC1_5,
                'SkorTambahanJumlahC1' => $SkorTambahanJumlahC1,
                'JumlahSkorYangDiHasilkanC1' => $JumlahSkorYangDiHasilkanC1,
                'SkorTambahanJumlahSkorC1' => $SkorTambahanJumlahSkorC1,
                'SkorTambahanJumlahBobotSubItemC1' => $SkorTambahanJumlahBobotSubItemC1,

                'C2' => $C2,
                'scorC2' => $scorC2,
                'scorMaxC2' => $scorMaxC2,
                'scorSubItemC2' => $scorSubItemC2,
                'fileC2' => $file_c2,
                'JumlahYangDihasilkanC2_2_in' => $JumlahYangDihasilkanC2_2_in,
                'SkorTambahanC2_2' => $SkorTambahanC2_2,
                'JumlahYangDihasilkanC2_3_in' => $JumlahYangDihasilkanC2_3_in,
                'SkorTambahanC2_3' => $SkorTambahanC2_3,
                'JumlahYangDihasilkanC2_4_in' => $JumlahYangDihasilkanC2_4_in,
                'SkorTambahanC2_4' => $SkorTambahanC2_4,
                'JumlahYangDihasilkanC2_5_in' => $JumlahYangDihasilkanC2_5_in,
                'SkorTambahanC2_5' => $SkorTambahanC2_5,
                'SkorTambahanJumlahC2' => $SkorTambahanJumlahC2,
                'JumlahSkorYangDiHasilkanC2' => $JumlahSkorYangDiHasilkanC2,
                'SkorTambahanJumlahSkorC2' => $SkorTambahanJumlahSkorC2,
                'SkorTambahanJumlahBobotSubItemC2' => $SkorTambahanJumlahBobotSubItemC2,

                'C3' => $C3,
                'scorC3' => $scorC3,
                'scorMaxC3' => $scorMaxC3,
                'scorSubItemC3' => $scorSubItemC3,
                'fileC3' => $file_c3,
                'JumlahYangDihasilkanC3_4_in' => $JumlahYangDihasilkanC3_4_in,
                'SkorTambahanC3_4' => $SkorTambahanC3_4,
                'JumlahYangDihasilkanC3_5_in' => $JumlahYangDihasilkanC3_5_in,
                'SkorTambahanC3_5' => $SkorTambahanC3_5,
                'SkorTambahanJumlahC3' => $SkorTambahanJumlahC3,
                'JumlahSkorYangDiHasilkanC3' => $JumlahSkorYangDiHasilkanC3,
                'SkorTambahanJumlahSkorC3' => $SkorTambahanJumlahSkorC3,
                'SkorTambahanJumlahBobotSubItemC3' => $SkorTambahanJumlahBobotSubItemC3,

                'C4' => $C4,
                'scorC4' => $scorC4,
                'scorMaxC4' => $scorMaxC4,
                'scorSubItemC4' => $scorSubItemC4,
                'fileC4' => $file_c4,
                'JumlahYangDihasilkanC4_2_in' => $JumlahYangDihasilkanC4_2_in,
                'SkorTambahanC4_2' => $SkorTambahanC4_2,
                'JumlahYangDihasilkanC4_3_in' => $JumlahYangDihasilkanC4_3_in,
                'SkorTambahanC4_3' => $SkorTambahanC4_3,
                'JumlahYangDihasilkanC4_4_in' => $JumlahYangDihasilkanC4_4_in,
                'SkorTambahanC4_4' => $SkorTambahanC4_4,
                'JumlahYangDihasilkanC4_5_in' => $JumlahYangDihasilkanC4_5_in,
                'SkorTambahanC4_5' => $SkorTambahanC4_5,
                'SkorTambahanJumlahC4' => $SkorTambahanJumlahC4,
                'JumlahSkorYangDiHasilkanC4' => $JumlahSkorYangDiHasilkanC4,
                'SkorTambahanJumlahSkorC4' => $SkorTambahanJumlahSkorC4,
                'SkorTambahanJumlahBobotSubItemC4' => $SkorTambahanJumlahBobotSubItemC4,

                'C5' => $C5,
                'scorC5' => $scorC5,
                'scorMaxC5' => $scorMaxC5,
                'scorSubItemC5' => $scorSubItemC5,
                'fileC5' => $file_c5,
                'JumlahYangDihasilkanC5_2_in' => $JumlahYangDihasilkanC5_2_in,
                'SkorTambahanC5_2' => $SkorTambahanC5_2,
                'JumlahYangDihasilkanC5_3_in' => $JumlahYangDihasilkanC5_3_in,
                'SkorTambahanC5_3' => $SkorTambahanC5_3,
                'JumlahYangDihasilkanC5_4_in' => $JumlahYangDihasilkanC5_4_in,
                'SkorTambahanC5_4' => $SkorTambahanC5_4,
                'JumlahYangDihasilkanC5_5_in' => $JumlahYangDihasilkanC5_5_in,
                'SkorTambahanC5_5' => $SkorTambahanC5_5,
                'SkorTambahanJumlahC5' => $SkorTambahanJumlahC5,
                'JumlahSkorYangDiHasilkanC5' => $JumlahSkorYangDiHasilkanC5,
                'SkorTambahanJumlahSkorC5' => $SkorTambahanJumlahSkorC5,
                'SkorTambahanJumlahBobotSubItemC5' => $SkorTambahanJumlahBobotSubItemC5,

                'C6' => $C6,
                'scorC6' => $scorC6,
                'scorMaxC6' => $scorMaxC6,
                'scorSubItemC6' => $scorSubItemC6,
                'fileC6' => $file_c6,
                'JumlahYangDihasilkanC6_2_in' => $JumlahYangDihasilkanC6_2_in,
                'SkorTambahanC6_2' => $SkorTambahanC6_2,
                'JumlahYangDihasilkanC6_3_in' => $JumlahYangDihasilkanC6_3_in,
                'SkorTambahanC6_3' => $SkorTambahanC6_3,
                'JumlahYangDihasilkanC6_4_in' => $JumlahYangDihasilkanC6_4_in,
                'SkorTambahanC6_4' => $SkorTambahanC6_4,
                'JumlahYangDihasilkanC6_5_in' => $JumlahYangDihasilkanC6_5_in,
                'SkorTambahanC6_5' => $SkorTambahanC6_5,
                'SkorTambahanJumlahC6' => $SkorTambahanJumlahC6,
                'JumlahSkorYangDiHasilkanC6' => $JumlahSkorYangDiHasilkanC6,
                'SkorTambahanJumlahSkorC6' => $SkorTambahanJumlahSkorC6,
                'SkorTambahanJumlahBobotSubItemC6' => $SkorTambahanJumlahBobotSubItemC6,

                'C7' => $C7,
                'scorC7' => $scorC7,
                'scorMaxC7' => $scorMaxC7,
                'scorSubItemC7' => $scorSubItemC7,
                'fileC7' => $file_c7,
                'JumlahYangDihasilkanC7_2_in' => $JumlahYangDihasilkanC7_2_in,
                'SkorTambahanC7_2' => $SkorTambahanC7_2,
                'JumlahYangDihasilkanC7_3_in' => $JumlahYangDihasilkanC7_3_in,
                'SkorTambahanC7_3' => $SkorTambahanC7_3,
                'JumlahYangDihasilkanC7_4_in' => $JumlahYangDihasilkanC7_4_in,
                'SkorTambahanC7_4' => $SkorTambahanC7_4,
                'JumlahYangDihasilkanC7_5_in' => $JumlahYangDihasilkanC7_5_in,
                'SkorTambahanC7_5' => $SkorTambahanC7_5,
                'SkorTambahanJumlahC7' => $SkorTambahanJumlahC7,
                'JumlahSkorYangDiHasilkanC7' => $JumlahSkorYangDiHasilkanC7,
                'SkorTambahanJumlahSkorC7' => $SkorTambahanJumlahSkorC7,
                'SkorTambahanJumlahBobotSubItemC7' => $SkorTambahanJumlahBobotSubItemC7,

                'C8' => $C8,
                'scorC8' => $scorC8,
                'scorMaxC8' => $scorMaxC8,
                'scorSubItemC8' => $scorSubItemC8,
                'fileC8' => $file_c8,
                'JumlahYangDihasilkanC8_2_in' => $JumlahYangDihasilkanC8_2_in,
                'SkorTambahanC8_2' => $SkorTambahanC8_2,
                'JumlahYangDihasilkanC8_3_in' => $JumlahYangDihasilkanC8_3_in,
                'SkorTambahanC8_3' => $SkorTambahanC8_3,
                'JumlahYangDihasilkanC8_4_in' => $JumlahYangDihasilkanC8_4_in,
                'SkorTambahanC8_4' => $SkorTambahanC8_4,
                'JumlahYangDihasilkanC8_5_in' => $JumlahYangDihasilkanC8_5_in,
                'SkorTambahanC8_5' => $SkorTambahanC8_5,
                'SkorTambahanJumlahC8' => $SkorTambahanJumlahC8,
                'JumlahSkorYangDiHasilkanC8' => $JumlahSkorYangDiHasilkanC8,
                'SkorTambahanJumlahSkorC8' => $SkorTambahanJumlahSkorC8,
                'SkorTambahanJumlahBobotSubItemC8' => $SkorTambahanJumlahBobotSubItemC8,

                'C9' => $C9,
                'scorC9' => $scorC9,
                'scorMaxC9' => $scorMaxC9,
                'scorSubItemC9' => $scorSubItemC9,
                'fileC9' => $file_c9,
                'JumlahYangDihasilkanC9_2_in' => $JumlahYangDihasilkanC9_2_in,
                'SkorTambahanC9_2' => $SkorTambahanC9_2,
                'JumlahYangDihasilkanC9_3_in' => $JumlahYangDihasilkanC9_3_in,
                'SkorTambahanC9_3' => $SkorTambahanC9_3,
                'JumlahYangDihasilkanC9_4_in' => $JumlahYangDihasilkanC9_4_in,
                'SkorTambahanC9_4' => $SkorTambahanC9_4,
                'JumlahYangDihasilkanC9_5_in' => $JumlahYangDihasilkanC9_5_in,
                'SkorTambahanC9_5' => $SkorTambahanC9_5,
                'SkorTambahanJumlahC9' => $SkorTambahanJumlahC9,
                'JumlahSkorYangDiHasilkanC9' => $JumlahSkorYangDiHasilkanC9,
                'SkorTambahanJumlahSkorC9' => $SkorTambahanJumlahSkorC9,
                'SkorTambahanJumlahBobotSubItemC9' => $SkorTambahanJumlahBobotSubItemC9,

                'TotalSkorPengabdianKepadaMasyarakat' => $TotalSkorPengabdianKepadaMasyarakat,
                'TotalKelebihaC1' => $TotalKelebihaC1,
                'TotalKelebihaC2' => $TotalKelebihaC2,
                'TotalKelebihaC3' => $TotalKelebihaC3,
                'TotalKelebihaC4' => $TotalKelebihaC4,
                'TotalKelebihaC5' => $TotalKelebihaC5,
                'TotalKelebihaC6' => $TotalKelebihaC6,
                'TotalKelebihaC7' => $TotalKelebihaC7,
                'TotalKelebihaC8' => $TotalKelebihaC8,
                'TotalKelebihaC9' => $TotalKelebihaC9,
                'TotalKelebihanSkor' => $TotalKelebihanSkor,
                'NilaiPengabdianKepadaMasyarakat' => $NilaiPengabdianKepadaMasyarakat,
                'NilaiTambahPengabdianKepadaMasyarakat' => $NilaiTambahPengabdianKepadaMasyarakat,
                'NilaiTotalPengabdianKepadaMasyarakat' => $NilaiTotalPengabdianKepadaMasyarakat,
            ];

            $RecordData->update($update);
            DB::commit();
            toast('Update Point C successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point C fail :)', 'error');
            return redirect()->back();
        }
    }
}
