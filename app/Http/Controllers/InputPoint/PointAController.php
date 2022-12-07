<?php

namespace App\Http\Controllers\InputPoint;

use App\Http\Controllers\Controller;
use App\Models\PointA;
use Illuminate\Http\Request;
use Alert;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        // $user = User::find(1)->PointAId;
        // dd($user);
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
        $request->validate([
            'fileA1' => 'required|mimes:pdf|max:2048',
            'fileA2' => 'required|mimes:pdf|max:2048',
            'fileA3' => 'required|mimes:pdf|max:2048',
            'fileA4' => 'required|mimes:pdf|max:2048',
            'fileA5' => 'required|mimes:pdf|max:2048',
            'fileA6' => 'required|mimes:pdf|max:2048',
            'fileA7' => 'required|mimes:pdf|max:2048',
            'fileA8' => 'required|mimes:pdf|max:2048',
            'fileA9' => 'required|mimes:pdf|max:2048',
            'fileA10' => 'required|mimes:pdf|max:2048',
            'fileA11' => 'required|mimes:pdf|max:2048',
            'fileA12' => 'required|mimes:pdf|max:2048',
            'fileA13' => 'required|mimes:pdf|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $pointA = new PointA();
            $pointA->A1 = $request->get('A1');
            $pointA->scorA1 = $request->get('scorA1');
            $pointA->scorMaxA1 = $request->get('scorMaxA1');
            $pointA->scorSubItemA1 = $request->get('scorSubItemA1');

            if ($request->hasFile('fileA1')) {
                $fileName = $request->file('fileA1')->store('uploads/Point-a', 'public');
                $pointA->fileA1 = $fileName;
            }


            $pointA->A2 = $request->get('A2');
            $pointA->scorA2 = $request->get('scorA2');
            $pointA->scorMaxA2 = $request->get('scorMaxA2');
            $pointA->scorSubItemA2 = $request->get('scorSubItemA2');

            if ($request->hasFile('fileA2')) {
                $fileName = $request->file('fileA2')->store('uploads/Point-a', 'public');
                $pointA->fileA2 = $fileName;
            }

            $pointA->A3 = $request->get('A3');
            $pointA->scorA3 = $request->get('scorA3');
            $pointA->scorMaxA3 = $request->get('scorMaxA3');
            $pointA->scorSubItemA3 = $request->get('scorSubItemA3');

            if ($request->hasFile('fileA3')) {
                $fileName = $request->file('fileA3')->store('uploads/Point-a', 'public');
                $pointA->fileA3 = $fileName;
            }

            $pointA->A4 = $request->get('A4');
            $pointA->scorA4 = $request->get('scorA4');
            $pointA->scorMaxA4 = $request->get('scorMaxA4');
            $pointA->scorSubItemA4 = $request->get('scorSubItemA4');

            if ($request->hasFile('fileA4')) {
                $fileName = $request->file('fileA4')->store('uploads/Point-a', 'public');
                $pointA->fileA4 = $fileName;
            }

            $pointA->A5 = $request->get('A5');
            $pointA->scorA5 = $request->get('scorA5');
            $pointA->scorMaxA5 = $request->get('scorMaxA5');
            $pointA->scorSubItemA5 = $request->get('scorSubItemA5');

            if ($request->hasFile('fileA5')) {
                $fileName = $request->file('fileA5')->store('uploads/Point-a', 'public');
                $pointA->fileA5 = $fileName;
            }

            $pointA->A6 = $request->get('A6');
            $pointA->scorA6 = $request->get('scorA6');
            $pointA->scorMaxA6 = $request->get('scorMaxA6');
            $pointA->scorSubItemA6 = $request->get('scorSubItemA6');

            if ($request->hasFile('fileA6')) {
                $fileName = $request->file('fileA6')->store('uploads/Point-a', 'public');
                $pointA->fileA6 = $fileName;
            }

            $pointA->A7 = $request->get('A7');
            $pointA->scorA7 = $request->get('scorA7');
            $pointA->scorMaxA7 = $request->get('scorMaxA7');
            $pointA->scorSubItemA7 = $request->get('scorSubItemA7');

            if ($request->hasFile('fileA7')) {
                $fileName = $request->file('fileA7')->store('uploads/Point-a', 'public');
                $pointA->fileA7 = $fileName;
            }

            $pointA->A8 = $request->get('A8');
            $pointA->scorA8 = $request->get('scorA8');
            $pointA->scorMaxA8 = $request->get('scorMaxA8');
            $pointA->scorSubItemA8 = $request->get('scorSubItemA8');

            if ($request->hasFile('fileA8')) {
                $fileName = $request->file('fileA8')->store('uploads/Point-a', 'public');
                $pointA->fileA8 = $fileName;
            }

            $pointA->A9 = $request->get('A9');
            $pointA->scorA9 = $request->get('scorA9');
            $pointA->scorMaxA9 = $request->get('scorMaxA9');
            $pointA->scorSubItemA9 = $request->get('scorSubItemA9');

            if ($request->hasFile('fileA9')) {
                $fileName = $request->file('fileA9')->store('uploads/Point-a', 'public');
                $pointA->fileA9 = $fileName;
            }

            $pointA->A10 = $request->get('A10');
            $pointA->scorA10 = $request->get('scorA10');
            $pointA->scorMaxA10 = $request->get('scorMaxA10');
            $pointA->scorSubItemA10 = $request->get('scorSubItemA10');

            if ($request->hasFile('fileA10')) {
                $fileName = $request->file('fileA10')->store('uploads/Point-a', 'public');
                $pointA->fileA10 = $fileName;
            }

            $pointA->A11 = $request->get('A11');
            $pointA->scorA11 = $request->get('scorA11');
            $pointA->scorMaxA11 = $request->get('scorMaxA11');
            $pointA->scorSubItemA11 = $request->get('scorSubItemA11');

            if ($request->hasFile('fileA11')) {
                $fileName = $request->file('fileA11')->store('uploads/Point-a', 'public');
                $pointA->fileA11 = $fileName;
            }

            $pointA->tambahan_a11_in = $request->get('JumlahYangDihasilkanA11_5');
            $pointA->SkorTambahanA11_5 = $request->get('SkorTambahanA11_5');
            $pointA->SkorTambahanJumlahA11_5 = $request->get('SkorTambahanJumlahA11_5');
            $pointA->JumlahSkorYangDiHasilkanA11_5 = $request->get('JumlahSkorYangDiHasilkanA11_5');
            $pointA->JumlahSkorYangDiHasilkanBobotSubItemA11_5 = $request->get('JumlahSkorYangDiHasilkanBobotSubItemA11_5');
            $pointA->SkorTambahanJumlahBobotSubItemA11_5 = $request->get('SkorTambahanJumlahBobotSubItemA11_5');

            $pointA->A12 = $request->get('A12');
            $pointA->scorA12 = $request->get('scorA12');
            $pointA->scorMaxA12 = $request->get('scorMaxA12');
            $pointA->scorSubItemA12 = $request->get('scorSubItemA12');

            if ($request->hasFile('fileA12')) {
                $fileName = $request->file('fileA12')->store('uploads/Point-a', 'public');
                $pointA->fileA12 = $fileName;
            }

            $pointA->JumlahYangDihasilkanA12_3_in = $request->get('JumlahYangDihasilkanA12_3');
            $pointA->SkorTambahanA12_3 = $request->get('SkorTambahanA12_3');
            $pointA->JumlahYangDihasilkanA12_4_in = $request->get('JumlahYangDihasilkanA12_4');
            $pointA->SkorTambahanA12_4 = $request->get('SkorTambahanA12_4');
            $pointA->JumlahYangDihasilkanA12_5_in = $request->get('JumlahYangDihasilkanA12_5');
            $pointA->SkorTambahanA12_5 = $request->get('SkorTambahanA12_5');
            $pointA->SkorTambahanJumlahA12 = $request->get('SkorTambahanJumlahA12');
            $pointA->JumlahSkorYangDiHasilkanA12 = $request->get('JumlahSkorYangDiHasilkanA12');
            $pointA->SkorTambahanJumlahSkorA12 = $request->get('SkorTambahanJumlahSkorA12');
            $pointA->SkorTambahanJumlahBobotSubItemA12 = $request->get('SkorTambahanJumlahBobotSubItemA12');

            $pointA->A13 = $request->get('A13');
            $pointA->scorA13 = $request->get('scorA13');
            $pointA->scorMaxA13 = $request->get('scorMaxA13');
            $pointA->scorSubItemA13 = $request->get('scorSubItemA13');

            if ($request->hasFile('fileA13')) {
                $fileName = $request->file('fileA13')->store('uploads/Point-a', 'public');
                $pointA->fileA13 = $fileName;
            }

            $pointA->TotalSkorPendidikanPointA = $request->get('TotalSkorPendidikanPointA');
            $pointA->TotalKelebihanA11 = $request->get('TotalKelebihanA11');
            $pointA->TotalKelebihanA12 = $request->get('TotalKelebihanA12');
            $pointA->TotalKelebihanSkor = $request->get('TotalKelebihanSkor');
            $pointA->nilaiPendidikandanPengajaran = $request->get('nilaiPendidikandanPengajaran');
            $pointA->NilaiTambahPendidikanDanPengajaran = $request->get('NilaiTambahPendidikanDanPengajaran');
            $pointA->NilaiTotalPendidikanDanPengajaran = $request->get('NilaiTotalPendidikanDanPengajaran');
            $pointA->user_id = Auth()->id();
            $pointA->save();


            DB::commit();
            toast('Create new Point A successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point A fail :)', 'error');
            return redirect()->back();
        }

        // PointA::create($request->all());

        // return redirect()->route('point-A')->with('status', 'Point A Telah di isi');
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
    public function edit(PointA $pointA, $PointId)
    {
        $dataMenu = Menu::first();

        if (empty($dataMenu)) {
            return redirect()->back();
        } elseif ($dataMenu->control_menu == 0) {
            return view('menu.disabled');
        } elseif (PointA::where('user_id', '=', $PointId)->first() == "") {
            return view('menu.menu-empty');
        } else {
            $data = PointA::where('user_id', '=', $PointId)->first();
        }

        return view('edit-point.EditPointA', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PointA  $pointA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointA $pointA, $PointId)
    {
        // Validation file upload
        $request->validate([
            'fileA1' => 'mimes:pdf|max:2048',
            'fileA2' => 'mimes:pdf|max:2048',
            'fileA3' => 'mimes:pdf|max:2048',
            'fileA4' => 'mimes:pdf|max:2048',
            'fileA5' => 'mimes:pdf|max:2048',
            'fileA6' => 'mimes:pdf|max:2048',
            'fileA7' => 'mimes:pdf|max:2048',
            'fileA8' => 'mimes:pdf|max:2048',
            'fileA9' => 'mimes:pdf|max:2048',
            'fileA10' => 'mimes:pdf|max:2048',
            'fileA11' => 'mimes:pdf|max:2048',
            'fileA12' => 'mimes:pdf|max:2048',
            'fileA13' => 'mimes:pdf|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $RecordData =  PointA::where('user_id', $PointId)->firstOrFail();
            // Request put data update
            $A1 = $request->A1;
            $scorA1 = $request->scorA1;
            $scorMaxA1 = $request->scorMaxA1;
            $scorSubItemA1 = $request->scorSubItemA1;

            if ($request->hasFile('fileA1')) {
                if ($RecordData->fileA1 && file_exists(storage_path('app/public/uploads/Point-a/' . $RecordData->fileA1))) {
                    \Storage::delete('public/uploads/Point-a/' . $RecordData->fileA1);
                }
                $file_a1 = $request->file('fileA1')->store('uploads/Point-a', 'public');
            } else {
                $file_a1 = $RecordData->fileA1;
            }

            $A2 = $request->A2;
            $scorA2 = $request->scorA2;
            $scorMaxA2 = $request->scorMaxA2;
            $scorSubItemA2 = $request->scorSubItemA2;

            if ($request->hasFile('fileA2')) {
                if ($RecordData->fileA2 && file_exists(storage_path('app/public/uploads/Point-a/' . $RecordData->fileA2))) {
                    \Storage::delete('public/uploads/Point-a/' . $RecordData->fileA2);
                }
                $file_a2 = $request->file('fileA2')->store('uploads/Point-a', 'public');
            } else {
                $file_a2 = $RecordData->fileA2;
            }

            $A3 = $request->A3;
            $scorA3 = $request->scorA3;
            $scorMaxA3 = $request->scorMaxA3;
            $scorSubItemA3 = $request->scorSubItemA3;

            if ($request->hasFile('fileA3')) {
                if ($RecordData->fileA3 && file_exists(storage_path('app/public/uploads/Point-a/' . $RecordData->fileA3))) {
                    \Storage::delete('public/uploads/Point-a/' . $RecordData->fileA3);
                }
                $file_a3 = $request->file('fileA3')->store('uploads/Point-a', 'public');
            } else {
                $file_a3 = $RecordData->fileA3;
            }

            $A4 = $request->A4;
            $scorA4 = $request->scorA4;
            $scorMaxA4 = $request->scorMaxA4;
            $scorSubItemA4 = $request->scorSubItemA4;

            if ($request->hasFile('fileA4')) {
                if ($RecordData->fileA4 && file_exists(storage_path('app/public/uploads/Point-a/' . $RecordData->fileA4))) {
                    \Storage::delete('public/uploads/Point-a/' . $RecordData->fileA4);
                }
                $file_a4 = $request->file('fileA4')->store('uploads/Point-a', 'public');
            } else {
                $file_a4 = $RecordData->fileA4;
            }

            $A5 = $request->A5;
            $scorA5 = $request->scorA5;
            $scorMaxA5 = $request->scorMaxA5;
            $scorSubItemA5 = $request->scorSubItemA5;

            if ($request->hasFile('fileA5')) {
                if ($RecordData->fileA5 && file_exists(storage_path('app/public/uploads/Point-a/' . $RecordData->fileA5))) {
                    \Storage::delete('public/uploads/Point-a/' . $RecordData->fileA5);
                }
                $file_a5 = $request->file('fileA5')->store('uploads/Point-a', 'public');
            } else {
                $file_a5 = $RecordData->fileA5;
            }

            $A6 = $request->A6;
            $scorA6 = $request->scorA6;
            $scorMaxA6 = $request->scorMaxA6;
            $scorSubItemA6 = $request->scorSubItemA6;

            if ($request->hasFile('fileA6')) {
                if ($RecordData->fileA6 && file_exists(storage_path('app/public/uploads/Point-a/' . $RecordData->fileA6))) {
                    \Storage::delete('public/uploads/Point-a/' . $RecordData->fileA6);
                }
                $file_a6 = $request->file('fileA6')->store('uploads/Point-a', 'public');
            } else {
                $file_a6 = $RecordData->fileA6;
            }

            $A7 = $request->A7;
            $scorA7 = $request->scorA7;
            $scorMaxA7 = $request->scorMaxA7;
            $scorSubItemA7 = $request->scorSubItemA7;

            if ($request->hasFile('fileA7')) {
                if ($RecordData->fileA7 && file_exists(storage_path('app/public/uploads/Point-a/' . $RecordData->fileA7))) {
                    \Storage::delete('public/uploads/Point-a/' . $RecordData->fileA7);
                }
                $file_a7 = $request->file('fileA7')->store('uploads/Point-a', 'public');
            } else {
                $file_a7 = $RecordData->fileA7;
            }

            $A8 = $request->A8;
            $scorA8 = $request->scorA8;
            $scorMaxA8 = $request->scorMaxA8;
            $scorSubItemA8 = $request->scorSubItemA8;

            if ($request->hasFile('fileA8')) {
                if ($RecordData->fileA8 && file_exists(storage_path('app/public/uploads/Point-a/' . $RecordData->fileA8))) {
                    \Storage::delete('public/uploads/Point-a/' . $RecordData->fileA8);
                }
                $file_a8 = $request->file('fileA8')->store('uploads/Point-a', 'public');
            } else {
                $file_a8 = $RecordData->fileA8;
            }

            $A9 = $request->A9;
            $scorA9 = $request->scorA9;
            $scorMaxA9 = $request->scorMaxA9;
            $scorSubItemA9 = $request->scorSubItemA9;

            if ($request->hasFile('fileA9')) {
                if ($RecordData->fileA9 && file_exists(storage_path('app/public/uploads/Point-a/' . $RecordData->fileA9))) {
                    \Storage::delete('public/uploads/Point-a/' . $RecordData->fileA9);
                }
                $file_a9 = $request->file('fileA9')->store('uploads/Point-a', 'public');
            } else {
                $file_a9 = $RecordData->fileA9;
            }

            $A10 = $request->A10;
            $scorA10 = $request->scorA10;
            $scorMaxA10 = $request->scorMaxA10;
            $scorSubItemA10 = $request->scorSubItemA10;

            if ($request->hasFile('fileA10')) {
                if ($RecordData->fileA10 && file_exists(storage_path('app/public/uploads/Point-a/' . $RecordData->fileA10))) {
                    \Storage::delete('public/uploads/Point-a/' . $RecordData->fileA10);
                }
                $file_a10 = $request->file('fileA10')->store('uploads/Point-a', 'public');
            } else {
                $file_a10 = $RecordData->fileA10;
            }

            $A11 = $request->A11;
            $scorA11 = $request->scorA11;
            $scorMaxA11 = $request->scorMaxA11;
            $scorSubItemA11 = $request->scorSubItemA11;

            if ($request->hasFile('fileA11')) {
                if ($RecordData->fileA11 && file_exists(storage_path('app/public/uploads/Point-a/' . $RecordData->fileA11))) {
                    \Storage::delete('public/uploads/Point-a/' . $RecordData->fileA11);
                }
                $file_a11 = $request->file('fileA11')->store('uploads/Point-a', 'public');
            } else {
                $file_a11 = $RecordData->fileA11;
            }

            $tambahan_a11_in = $request->JumlahYangDihasilkanA11_5;
            $SkorTambahanA11_5 = $request->SkorTambahanA11_5;
            $SkorTambahanJumlahA11_5 = $request->SkorTambahanJumlahA11_5;
            $JumlahSkorYangDiHasilkanA11_5 = $request->JumlahSkorYangDiHasilkanA11_5;
            $JumlahSkorYangDiHasilkanBobotSubItemA11_5 = $request->JumlahSkorYangDiHasilkanBobotSubItemA11_5;
            $SkorTambahanJumlahBobotSubItemA11_5 = $request->SkorTambahanJumlahBobotSubItemA11_5;

            $A12 = $request->A12;
            $scorA12 = $request->scorA12;
            $scorMaxA12 = $request->scorMaxA12;
            $scorSubItemA12 = $request->scorSubItemA12;

            if ($request->hasFile('fileA12')) {
                if ($RecordData->fileA12 && file_exists(storage_path('app/public/uploads/Point-a/' . $RecordData->fileA12))) {
                    \Storage::delete('public/uploads/Point-a/' . $RecordData->fileA12);
                }
                $file_a12 = $request->file('fileA12')->store('uploads/Point-a', 'public');
            } else {
                $file_a12 = $RecordData->fileA12;
            }

            $JumlahYangDihasilkanA12_3_in = $request->JumlahYangDihasilkanA12_3;
            $SkorTambahanA12_3 = $request->SkorTambahanA12_3;
            $JumlahYangDihasilkanA12_4_in = $request->JumlahYangDihasilkanA12_4;
            $SkorTambahanA12_4 = $request->SkorTambahanA12_4;
            $JumlahYangDihasilkanA12_5_in = $request->JumlahYangDihasilkanA12_5;
            $SkorTambahanA12_5 = $request->SkorTambahanA12_5;
            $SkorTambahanJumlahA12 = $request->SkorTambahanJumlahA12;
            $JumlahSkorYangDiHasilkanA12 = $request->JumlahSkorYangDiHasilkanA12;
            $SkorTambahanJumlahSkorA12 = $request->SkorTambahanJumlahSkorA12;
            $SkorTambahanJumlahBobotSubItemA12 = $request->SkorTambahanJumlahBobotSubItemA12;

            $A13 = $request->A13;
            $scorA13 = $request->scorA13;
            $scorMaxA13 = $request->scorMaxA13;
            $scorSubItemA13 = $request->scorSubItemA13;

            if ($request->hasFile('fileA13')) {
                if ($RecordData->fileA13 && file_exists(storage_path('app/public/uploads/Point-a/' . $RecordData->fileA13))) {
                    \Storage::delete('public/uploads/Point-a/' . $RecordData->fileA13);
                }
                $file_a13 = $request->file('fileA13')->store('uploads/Point-a', 'public');
            } else {
                $file_a13 = $RecordData->fileA13;
            }

            $TotalSkorPendidikanPointA = $request->TotalSkorPendidikanPointA;
            $TotalKelebihanA11 = $request->TotalKelebihanA11;
            $TotalKelebihanA12 = $request->TotalKelebihanA12;
            $TotalKelebihanSkor = $request->TotalKelebihanSkor;
            $nilaiPendidikandanPengajaran = $request->nilaiPendidikandanPengajaran;
            $NilaiTambahPendidikanDanPengajaran = $request->NilaiTambahPendidikanDanPengajaran;
            $NilaiTotalPendidikanDanPengajaran = $request->NilaiTotalPendidikanDanPengajaran;

            $update = [
                'A1' => $A1,
                'scorA1' => $scorA1,
                'scorMaxA1' => $scorMaxA1,
                'scorSubItemA1' => $scorSubItemA1,
                'fileA1' => $file_a1,

                'A2' => $A2,
                'scorA2' => $scorA2,
                'scorMaxA2' => $scorMaxA2,
                'scorSubItemA2' => $scorSubItemA2,
                'fileA2' => $file_a2,

                'A3' => $A3,
                'scorA3' => $scorA3,
                'scorMaxA3' =>  $scorMaxA3,
                'scorSubItemA3' => $scorSubItemA3,
                'fileA3' => $file_a3,

                'A4' => $A4,
                'scorA4' => $scorA4,
                'scorMaxA4' => $scorMaxA4,
                'scorSubItemA4' => $scorSubItemA4,
                'fileA4' => $file_a4,

                'A5' => $A5,
                'scorA5' => $scorA5,
                'scorMaxA5' => $scorMaxA5,
                'scorSubItemA5' => $scorSubItemA5,
                'fileA5' => $file_a5,

                'A6' => $A6,
                'scorA6' => $scorA6,
                'scorMaxA6' => $scorMaxA6,
                'scorSubItemA6' => $scorSubItemA6,
                'fileA6' => $file_a6,

                'A7' => $A7,
                'scorA7' => $scorA7,
                'scorMaxA7' => $scorMaxA7,
                'scorSubItemA7' => $scorSubItemA7,
                'fileA7' => $file_a7,

                'A8' =>  $A8,
                'scorA8' => $scorA8,
                'scorMaxA8' => $scorMaxA8,
                'scorSubItemA8' => $scorSubItemA8,
                'fileA8' => $file_a8,

                'A9' => $A9,
                'scorA9' => $scorA9,
                'scorMaxA9' => $scorMaxA9,
                'scorSubItemA9' => $scorSubItemA9,
                'fileA9' => $file_a9,

                'A10' => $A10,
                'scorA10' => $scorA10,
                'scorMaxA10' => $scorMaxA10,
                'scorSubItemA10' => $scorSubItemA10,
                'fileA10' => $file_a10,

                'A11' => $A11,
                'scorA11' => $scorA11,
                'scorMaxA11' => $scorMaxA11,
                'scorSubItemA11' => $scorSubItemA11,
                'fileA11' => $file_a11,
                'tambahan_a11_in' => $tambahan_a11_in,
                'SkorTambahanA11_5' => $SkorTambahanA11_5,
                'SkorTambahanJumlahA11_5' => $SkorTambahanJumlahA11_5,
                'JumlahSkorYangDiHasilkanA11_5' =>  $JumlahSkorYangDiHasilkanA11_5,
                'JumlahSkorYangDiHasilkanBobotSubItemA11_5' =>  $JumlahSkorYangDiHasilkanBobotSubItemA11_5,
                'SkorTambahanJumlahBobotSubItemA11_5' => $SkorTambahanJumlahBobotSubItemA11_5,

                'A12' => $A12,
                'scorA12' => $scorA12,
                'scorMaxA12' => $scorMaxA12,
                'scorSubItemA12' => $scorSubItemA12,
                'fileA12' => $file_a12,
                'JumlahYangDihasilkanA12_3_in' => $JumlahYangDihasilkanA12_3_in,
                'SkorTambahanA12_3' => $SkorTambahanA12_3,
                'JumlahYangDihasilkanA12_4_in' => $JumlahYangDihasilkanA12_4_in,
                'SkorTambahanA12_4' => $SkorTambahanA12_4,
                'JumlahYangDihasilkanA12_5_in' => $JumlahYangDihasilkanA12_5_in,
                'SkorTambahanA12_5' => $SkorTambahanA12_5,
                'SkorTambahanJumlahA12' => $SkorTambahanJumlahA12,
                'JumlahSkorYangDiHasilkanA12' =>  $JumlahSkorYangDiHasilkanA12,
                'SkorTambahanJumlahSkorA12' => $SkorTambahanJumlahSkorA12,
                'SkorTambahanJumlahBobotSubItemA12' => $SkorTambahanJumlahBobotSubItemA12,

                'A13' => $A13,
                'scorA13' => $scorA13,
                'scorMaxA13' => $scorMaxA13,
                'scorSubItemA13' => $scorSubItemA13,
                'fileA13' => $file_a13,

                'TotalSkorPendidikanPointA' => $TotalSkorPendidikanPointA,
                'TotalKelebihanA11' => $TotalKelebihanA11,
                'TotalKelebihanA12' => $TotalKelebihanA12,
                'TotalKelebihanSkor' => $TotalKelebihanSkor,
                'nilaiPendidikandanPengajaran' => $nilaiPendidikandanPengajaran,
                'NilaiTambahPendidikanDanPengajaran' => $NilaiTambahPendidikanDanPengajaran,
                'NilaiTotalPendidikanDanPengajaran' => $NilaiTotalPendidikanDanPengajaran,
            ];

            $RecordData->update($update);
            DB::commit();
            toast('Update Point A successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point A fail :)', 'error');
            return redirect()->back();
        }
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
