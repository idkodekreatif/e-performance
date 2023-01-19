<?php

namespace App\Http\Controllers\Itisar\KaUpt;

use App\Http\Controllers\Controller;
use App\Models\KaLaboran;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaLaboranController extends Controller
{
    public function create()
    {
        return view('itisar.ka-upt.koord-laboran.create');
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
            'file_kinerja_kompetensi_1' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_2' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_3' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_4' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_5' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_6' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_7' => 'mimes:pdf|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $kalaboran = new KaLaboran();
            $kalaboran->Point1_1 = $request->get('Point1_1');
            $kalaboran->Point1_2 = $request->get('Point1_2');
            $kalaboran->Point1_3 = $request->get('Point1_3');
            $kalaboran->Point1_4 = $request->get('Point1_4');
            $kalaboran->Point1_5 = $request->get('Point1_5');
            $kalaboran->Point2_1 = $request->get('Point2_1');
            $kalaboran->Point2_2 = $request->get('Point2_2');
            $kalaboran->Point2_3 = $request->get('Point2_3');
            $kalaboran->Point2_4 = $request->get('Point2_4');
            $kalaboran->Point2_5 = $request->get('Point2_5');
            $kalaboran->Point3_1 = $request->get('Point3_1');
            $kalaboran->Point3_2 = $request->get('Point3_2');
            $kalaboran->Point3_3 = $request->get('Point3_3');
            $kalaboran->Point3_4 = $request->get('Point3_4');
            $kalaboran->Point3_5 = $request->get('Point3_5');
            $kalaboran->Point4_1 = $request->get('Point4_1');
            $kalaboran->Point4_2 = $request->get('Point4_2');
            $kalaboran->Point4_3 = $request->get('Point4_3');
            $kalaboran->Point4_4 = $request->get('Point4_4');
            $kalaboran->Point4_5 = $request->get('Point4_5');
            $kalaboran->Point5_1 = $request->get('Point5_1');
            $kalaboran->Point5_2 = $request->get('Point5_2');
            $kalaboran->Point5_3 = $request->get('Point5_3');
            $kalaboran->Point5_4 = $request->get('Point5_4');
            $kalaboran->Point5_5 = $request->get('Point5_5');
            $kalaboran->Point6_1 = $request->get('Point6_1');
            $kalaboran->Point6_2 = $request->get('Point6_2');
            $kalaboran->Point6_3 = $request->get('Point6_3');
            $kalaboran->Point6_4 = $request->get('Point6_4');
            $kalaboran->Point6_5 = $request->get('Point6_5');
            $kalaboran->output_point_1 = $request->get('output_point_1');
            $kalaboran->output_point_2 = $request->get('output_point_2');
            $kalaboran->output_point_3 = $request->get('output_point_3');
            $kalaboran->output_point_4 = $request->get('output_point_4');
            $kalaboran->output_point_5 = $request->get('output_point_5');
            $kalaboran->output_total_point_kinerja_perilaku = $request->get('output_total_point_kinerja_perilaku');
            $kalaboran->output_total_nilai_rata_rata_kinerja_perilaku = $request->get('output_total_nilai_rata_rata_kinerja_perilaku');
            $kalaboran->output_total_sementara_kinerja_perilaku = $request->get('output_total_sementara_kinerja_perilaku');

            $kalaboran->kinerja_kompetensi_1 = $request->get('kinerja_kompetensi_1');
            if ($request->hasFile('file_kinerja_kompetensi_1')) {
                $fileName = $request->file('file_kinerja_kompetensi_1')->store('uploads/KaUpt/KaLaboran', 'public');
                $kalaboran->file_kinerja_kompetensi_1 = $fileName;
            }
            $kalaboran->kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                $fileName = $request->file('file_kinerja_kompetensi_2')->store('uploads/KaUpt/KaLaboran', 'public');
                $kalaboran->file_kinerja_kompetensi_2 = $fileName;
            }
            $kalaboran->kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                $fileName = $request->file('file_kinerja_kompetensi_3')->store('uploads/KaUpt/KaLaboran', 'public');
                $kalaboran->file_kinerja_kompetensi_3 = $fileName;
            }
            $kalaboran->kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                $fileName = $request->file('file_kinerja_kompetensi_4')->store('uploads/KaUpt/KaLaboran', 'public');
                $kalaboran->file_kinerja_kompetensi_4 = $fileName;
            }
            $kalaboran->kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                $fileName = $request->file('file_kinerja_kompetensi_5')->store('uploads/KaUpt/KaLaboran', 'public');
                $kalaboran->file_kinerja_kompetensi_5 = $fileName;
            }
            $kalaboran->kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                $fileName = $request->file('file_kinerja_kompetensi_6')->store('uploads/KaUpt/KaLaboran', 'public');
                $kalaboran->file_kinerja_kompetensi_6 = $fileName;
            }
            $kalaboran->kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                $fileName = $request->file('file_kinerja_kompetensi_7')->store('uploads/KaUpt/KaLaboran', 'public');
                $kalaboran->file_kinerja_kompetensi_7 = $fileName;
            }

            $kalaboran->output_point_kinerja_kompetensi_1 = $request->get('output_point_kinerja_kompetensi_1');
            $kalaboran->output_point_kinerja_kompetensi_2 = $request->get('output_point_kinerja_kompetensi_2');
            $kalaboran->output_point_kinerja_kompetensi_3 = $request->get('output_point_kinerja_kompetensi_3');
            $kalaboran->output_point_kinerja_kompetensi_4 = $request->get('output_point_kinerja_kompetensi_4');
            $kalaboran->output_point_kinerja_kompetensi_5 = $request->get('output_point_kinerja_kompetensi_5');
            $kalaboran->output_total_point_kinerja_kompetensi = $request->get('output_total_point_kinerja_kompetensi');
            $kalaboran->output_total_nilai_rata_rata_kinerja_kompetensi = $request->get('output_total_nilai_rata_rata_kinerja_kompetensi');
            $kalaboran->output_total_sementara_kinerja_kompetensi = $request->get('output_total_sementara_kinerja_kompetensi');

            $kalaboran->user_id = Auth()->id();
            $kalaboran->save();

            DB::commit();
            toast('Create Point Ka. Laboran successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point Ka. Laboran fail :)', 'error');
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kalabora
     * @return \Illuminate\Http\Response
     */
    public function edit($PointId)
    {
        $dataMenu = Menu::first();

        if (empty($dataMenu)) {
            return redirect()->back();
        } elseif ($dataMenu->control_menu == 0) {
            return view('menu.disabled');
        } elseif (KaLaboran::where('user_id', '=', $PointId)->first() == "") {
            return view('menu.menu-empty');
        } else {
            $data = KaLaboran::where('user_id', '=', $PointId)->first();
        }

        return view('itisar.ka-upt.koord-laboran.edit', ['data' => $data]);
    }

    public function update(Request $request, $PointId)
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
        ]);
        DB::beginTransaction();
        try {
            $RecordData =  KaLaboran::where('user_id', $PointId)->firstOrFail();

            $Point1_1 = $request->get('Point1_1');
            $Point1_2 = $request->get('Point1_2');
            $Point1_3 = $request->get('Point1_3');
            $Point1_4 = $request->get('Point1_4');
            $Point1_5 = $request->get('Point1_5');
            $Point2_1 = $request->get('Point2_1');
            $Point2_2 = $request->get('Point2_2');
            $Point2_3 = $request->get('Point2_3');
            $Point2_4 = $request->get('Point2_4');
            $Point2_5 = $request->get('Point2_5');
            $Point3_1 = $request->get('Point3_1');
            $Point3_2 = $request->get('Point3_2');
            $Point3_3 = $request->get('Point3_3');
            $Point3_4 = $request->get('Point3_4');
            $Point3_5 = $request->get('Point3_5');
            $Point4_1 = $request->get('Point4_1');
            $Point4_2 = $request->get('Point4_2');
            $Point4_3 = $request->get('Point4_3');
            $Point4_4 = $request->get('Point4_4');
            $Point4_5 = $request->get('Point4_5');
            $Point5_1 = $request->get('Point5_1');
            $Point5_2 = $request->get('Point5_2');
            $Point5_3 = $request->get('Point5_3');
            $Point5_4 = $request->get('Point5_4');
            $Point5_5 = $request->get('Point5_5');
            $Point6_1 = $request->get('Point6_1');
            $Point6_2 = $request->get('Point6_2');
            $Point6_3 = $request->get('Point6_3');
            $Point6_4 = $request->get('Point6_4');
            $Point6_5 = $request->get('Point6_5');
            $output_point_1 = $request->get('output_point_1');
            $output_point_2 = $request->get('output_point_2');
            $output_point_3 = $request->get('output_point_3');
            $output_point_4 = $request->get('output_point_4');
            $output_point_5 = $request->get('output_point_5');
            $output_total_point_kinerja_perilaku = $request->get('output_total_point_kinerja_perilaku');
            $output_total_nilai_rata_rata_kinerja_perilaku = $request->get('output_total_nilai_rata_rata_kinerja_perilaku');
            $output_total_sementara_kinerja_perilaku = $request->get('output_total_sementara_kinerja_perilaku');

            $kinerja_kompetensi_1 = $request->get('kinerja_kompetensi_1');
            if ($request->hasFile('kinerja_kompetensi_1')) {
                if ($RecordData->kinerja_kompetensi_1 && file_exists(storage_path('app/public/uploads/KaUpt/KaLaboran/' . $RecordData->kinerja_kompetensi_1))) {
                    \Storage::delete('public/uploads/KaUpt/KaLaboran/' . $RecordData->kinerja_kompetensi_1);
                }
                $file_kinerja_kompetensi_1 = $request->file('kinerja_kompetensi_1')->store('uploads/KaUpt/KaLaboran', 'public');
            } else {
                $file_kinerja_kompetensi_1 = $RecordData->kinerja_kompetensi_1;
            }

            $kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                if ($RecordData->file_kinerja_kompetensi_2 && file_exists(storage_path('app/public/uploads/KaUpt/KaLaboran/' . $RecordData->file_kinerja_kompetensi_2))) {
                    \Storage::delete('public/uploads/KaUpt/KaLaboran/' . $RecordData->file_kinerja_kompetensi_2);
                }
                $file_kinerja_kompetensi_2 = $request->file('file_kinerja_kompetensi_2')->store('uploads/KaUpt/KaLaboran', 'public');
            } else {
                $file_kinerja_kompetensi_2 = $RecordData->file_kinerja_kompetensi_2;
            }

            $kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                if ($RecordData->file_kinerja_kompetensi_3 && file_exists(storage_path('app/public/uploads/KaUpt/KaLaboran/' . $RecordData->file_kinerja_kompetensi_3))) {
                    \Storage::delete('public/uploads/KaUpt/KaLaboran/' . $RecordData->file_kinerja_kompetensi_3);
                }
                $file_kinerja_kompetensi_3 = $request->file('file_kinerja_kompetensi_3')->store('uploads/KaUpt/KaLaboran', 'public');
            } else {
                $file_kinerja_kompetensi_3 = $RecordData->file_kinerja_kompetensi_3;
            }

            $kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('kinerja_kompetensi_4')) {
                if ($RecordData->kinerja_kompetensi_4 && file_exists(storage_path('app/public/uploads/KaUpt/KaLaboran/' . $RecordData->kinerja_kompetensi_4))) {
                    \Storage::delete('public/uploads/KaUpt/KaLaboran/' . $RecordData->kinerja_kompetensi_4);
                }
                $file_kinerja_kompetensi_4 = $request->file('kinerja_kompetensi_4')->store('uploads/KaUpt/KaLaboran', 'public');
            } else {
                $file_kinerja_kompetensi_4 = $RecordData->kinerja_kompetensi_4;
            }

            $kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                if ($RecordData->file_kinerja_kompetensi_5 && file_exists(storage_path('app/public/uploads/KaUpt/KaLaboran/' . $RecordData->file_kinerja_kompetensi_5))) {
                    \Storage::delete('public/uploads/KaUpt/KaLaboran/' . $RecordData->file_kinerja_kompetensi_5);
                }
                $file_kinerja_kompetensi_5 = $request->file('file_kinerja_kompetensi_5')->store('uploads/KaUpt/KaLaboran', 'public');
            } else {
                $file_kinerja_kompetensi_5 = $RecordData->file_kinerja_kompetensi_5;
            }

            $kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                if ($RecordData->file_kinerja_kompetensi_6 && file_exists(storage_path('app/public/uploads/KaUpt/KaLaboran/' . $RecordData->file_kinerja_kompetensi_6))) {
                    \Storage::delete('public/uploads/KaUpt/KaLaboran/' . $RecordData->file_kinerja_kompetensi_6);
                }
                $file_kinerja_kompetensi_6 = $request->file('file_kinerja_kompetensi_6')->store('uploads/KaUpt/KaLaboran', 'public');
            } else {
                $file_kinerja_kompetensi_6 = $RecordData->file_kinerja_kompetensi_6;
            }

            $kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                if ($RecordData->file_kinerja_kompetensi_7 && file_exists(storage_path('app/public/uploads/KaUpt/KaLaboran/' . $RecordData->file_kinerja_kompetensi_7))) {
                    \Storage::delete('public/uploads/KaUpt/KaLaboran/' . $RecordData->file_kinerja_kompetensi_7);
                }
                $file_kinerja_kompetensi_7 = $request->file('file_kinerja_kompetensi_7')->store('uploads/KaUpt/KaLaboran', 'public');
            } else {
                $file_kinerja_kompetensi_7 = $RecordData->file_kinerja_kompetensi_7;
            }


            $output_point_kinerja_kompetensi_1 = $request->get('output_point_kinerja_kompetensi_1');
            $output_point_kinerja_kompetensi_2 = $request->get('output_point_kinerja_kompetensi_2');
            $output_point_kinerja_kompetensi_3 = $request->get('output_point_kinerja_kompetensi_3');
            $output_point_kinerja_kompetensi_4 = $request->get('output_point_kinerja_kompetensi_4');
            $output_point_kinerja_kompetensi_5 = $request->get('output_point_kinerja_kompetensi_5');
            $output_total_point_kinerja_kompetensi = $request->get('output_total_point_kinerja_kompetensi');
            $output_total_nilai_rata_rata_kinerja_kompetensi = $request->get('output_total_nilai_rata_rata_kinerja_kompetensi');
            $output_total_sementara_kinerja_kompetensi = $request->get('output_total_sementara_kinerja_kompetensi');

            $update = [
                'point1_1' => $Point1_1,
                'point1_2' => $Point1_2,
                'point1_3' => $Point1_3,
                'point1_4' => $Point1_4,
                'point1_5' => $Point1_5,
                'point2_1' => $Point2_1,
                'point2_2' => $Point2_2,
                'point2_3' => $Point2_3,
                'point2_4' => $Point2_4,
                'point2_5' => $Point2_5,
                'point3_1' => $Point3_1,
                'point3_2' => $Point3_2,
                'point3_3' => $Point3_3,
                'point3_4' => $Point3_4,
                'point3_5' => $Point3_5,
                'point4_1' => $Point4_1,
                'point4_2' => $Point4_2,
                'point4_3' => $Point4_3,
                'point4_4' => $Point4_4,
                'point4_5' => $Point4_5,
                'point5_1' => $Point5_1,
                'point5_2' => $Point5_2,
                'point5_3' => $Point5_3,
                'point5_4' => $Point5_4,
                'point5_5' => $Point5_5,
                'point6_1' => $Point6_1,
                'point6_2' => $Point6_2,
                'point6_3' => $Point6_3,
                'point6_4' => $Point6_4,
                'point6_5' => $Point6_5,
                'output_point_1' => $output_point_1,
                'output_point_2' => $output_point_2,
                'output_point_3' => $output_point_3,
                'output_point_4' => $output_point_4,
                'output_point_5' => $output_point_5,
                'output_total_point_kinerja_perilaku' => $output_total_point_kinerja_perilaku,
                'output_total_nilai_rata_rata_kinerja_perilaku' => $output_total_nilai_rata_rata_kinerja_perilaku,
                'output_total_sementara_kinerja_perilaku' => $output_total_sementara_kinerja_perilaku,
                'kinerja_kompetensi_1' => $kinerja_kompetensi_1,
                'file_kinerja_kompetensi_1' => $file_kinerja_kompetensi_1,
                'kinerja_kompetensi_2' => $kinerja_kompetensi_2,
                'file_kinerja_kompetensi_2' => $file_kinerja_kompetensi_2,
                'kinerja_kompetensi_3' => $kinerja_kompetensi_3,
                'file_kinerja_kompetensi_3' => $file_kinerja_kompetensi_3,
                'kinerja_kompetensi_4' => $kinerja_kompetensi_4,
                'file_kinerja_kompetensi_4' => $file_kinerja_kompetensi_4,
                'kinerja_kompetensi_5' => $kinerja_kompetensi_5,
                'file_kinerja_kompetensi_5' => $file_kinerja_kompetensi_5,
                'kinerja_kompetensi_6' => $kinerja_kompetensi_6,
                'file_kinerja_kompetensi_6' => $file_kinerja_kompetensi_6,
                'kinerja_kompetensi_7' => $kinerja_kompetensi_7,
                'file_kinerja_kompetensi_7' => $file_kinerja_kompetensi_7,
                'output_point_kinerja_kompetensi_1' => $output_point_kinerja_kompetensi_1,
                'output_point_kinerja_kompetensi_2' => $output_point_kinerja_kompetensi_2,
                'output_point_kinerja_kompetensi_3' => $output_point_kinerja_kompetensi_3,
                'output_point_kinerja_kompetensi_4' => $output_point_kinerja_kompetensi_4,
                'output_point_kinerja_kompetensi_5' => $output_point_kinerja_kompetensi_5,
                'output_total_point_kinerja_kompetensi' => $output_total_point_kinerja_kompetensi,
                'output_total_nilai_rata_rata_kinerja_kompetensi' => $output_total_nilai_rata_rata_kinerja_kompetensi,
                'output_total_sementara_kinerja_kompetensi' => $output_total_sementara_kinerja_kompetensi,

            ];
            $RecordData->update($update);
            DB::commit();
            toast('Update Point Ka. Laboran successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point Ka. Laboran fail :)', 'error');
            return redirect()->back();
        }
    }

    /**
     * raport
     *
     * @return void
     */
    public function raport($user_id)
    {
        $DataUser = DB::table('users')
            ->leftJoin('ka_laboran', 'users.id', '=', 'ka_laboran.user_id')
            ->select(
                'users.name',
                'users.email',
                'ka_laboran.user_id',
                'ka_laboran.output_total_sementara_kinerja_perilaku',
                'ka_laboran.output_total_sementara_kinerja_kompetensi',
            )
            ->where('ka_laboran.user_id', $user_id)
            ->first();

        // dd($DataUser);
        if (!empty($DataUser->user_id)) {
            return view('itisar.ka-upt.koord-laboran.raport', compact('DataUser'));
        } else {
            return view('menu.menu-empty');
        }
    }
}
