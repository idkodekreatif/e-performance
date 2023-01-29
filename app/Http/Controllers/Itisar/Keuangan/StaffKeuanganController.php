<?php

namespace App\Http\Controllers\Itisar\Keuangan;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\StaffKeuangan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffKeuanganController extends Controller
{
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm',
        ])->get();

        return view('itisar.Keuangan.create', compact('users'));
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
            'file_kinerja_kompetensi_8' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_9' => 'mimes:pdf|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $staffkeuangan = new StaffKeuangan();
            $staffkeuangan->Point1_1 = $request->get('Point1_1');
            $staffkeuangan->Point1_2 = $request->get('Point1_2');
            $staffkeuangan->Point1_3 = $request->get('Point1_3');
            $staffkeuangan->Point1_4 = $request->get('Point1_4');
            $staffkeuangan->Point1_5 = $request->get('Point1_5');
            $staffkeuangan->Point2_1 = $request->get('Point2_1');
            $staffkeuangan->Point2_2 = $request->get('Point2_2');
            $staffkeuangan->Point2_3 = $request->get('Point2_3');
            $staffkeuangan->Point2_4 = $request->get('Point2_4');
            $staffkeuangan->Point2_5 = $request->get('Point2_5');
            $staffkeuangan->Point3_1 = $request->get('Point3_1');
            $staffkeuangan->Point3_2 = $request->get('Point3_2');
            $staffkeuangan->Point3_3 = $request->get('Point3_3');
            $staffkeuangan->Point3_4 = $request->get('Point3_4');
            $staffkeuangan->Point3_5 = $request->get('Point3_5');
            $staffkeuangan->Point4_1 = $request->get('Point4_1');
            $staffkeuangan->Point4_2 = $request->get('Point4_2');
            $staffkeuangan->Point4_3 = $request->get('Point4_3');
            $staffkeuangan->Point4_4 = $request->get('Point4_4');
            $staffkeuangan->Point4_5 = $request->get('Point4_5');
            $staffkeuangan->Point5_1 = $request->get('Point5_1');
            $staffkeuangan->Point5_2 = $request->get('Point5_2');
            $staffkeuangan->Point5_3 = $request->get('Point5_3');
            $staffkeuangan->Point5_4 = $request->get('Point5_4');
            $staffkeuangan->Point5_5 = $request->get('Point5_5');
            $staffkeuangan->Point6_1 = $request->get('Point6_1');
            $staffkeuangan->Point6_2 = $request->get('Point6_2');
            $staffkeuangan->Point6_3 = $request->get('Point6_3');
            $staffkeuangan->Point6_4 = $request->get('Point6_4');
            $staffkeuangan->Point6_5 = $request->get('Point6_5');
            $staffkeuangan->output_point_1 = $request->get('output_point_1');
            $staffkeuangan->output_point_2 = $request->get('output_point_2');
            $staffkeuangan->output_point_3 = $request->get('output_point_3');
            $staffkeuangan->output_point_4 = $request->get('output_point_4');
            $staffkeuangan->output_point_5 = $request->get('output_point_5');
            $staffkeuangan->output_total_point_kinerja_perilaku = $request->get('output_total_point_kinerja_perilaku');
            $staffkeuangan->output_total_nilai_rata_rata_kinerja_perilaku = $request->get('output_total_nilai_rata_rata_kinerja_perilaku');
            $staffkeuangan->output_total_sementara_kinerja_perilaku = $request->get('output_total_sementara_kinerja_perilaku');

            $staffkeuangan->kinerja_kompetensi_1 = $request->get('kinerja_kompetensi_1');
            if ($request->hasFile('file_kinerja_kompetensi_1')) {
                $fileName = $request->file('file_kinerja_kompetensi_1')->store('uploads/Keuangan/staffkeuangan', 'public');
                $staffkeuangan->file_kinerja_kompetensi_1 = $fileName;
            }
            $staffkeuangan->kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                $fileName = $request->file('file_kinerja_kompetensi_2')->store('uploads/Keuangan/staffkeuangan', 'public');
                $staffkeuangan->file_kinerja_kompetensi_2 = $fileName;
            }
            $staffkeuangan->kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                $fileName = $request->file('file_kinerja_kompetensi_3')->store('uploads/Keuangan/staffkeuangan', 'public');
                $staffkeuangan->file_kinerja_kompetensi_3 = $fileName;
            }
            $staffkeuangan->kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                $fileName = $request->file('file_kinerja_kompetensi_4')->store('uploads/Keuangan/staffkeuangan', 'public');
                $staffkeuangan->file_kinerja_kompetensi_4 = $fileName;
            }
            $staffkeuangan->kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                $fileName = $request->file('file_kinerja_kompetensi_5')->store('uploads/Keuangan/staffkeuangan', 'public');
                $staffkeuangan->file_kinerja_kompetensi_5 = $fileName;
            }
            $staffkeuangan->kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                $fileName = $request->file('file_kinerja_kompetensi_6')->store('uploads/Keuangan/staffkeuangan', 'public');
                $staffkeuangan->file_kinerja_kompetensi_6 = $fileName;
            }
            $staffkeuangan->kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                $fileName = $request->file('file_kinerja_kompetensi_7')->store('uploads/Keuangan/staffkeuangan', 'public');
                $staffkeuangan->file_kinerja_kompetensi_7 = $fileName;
            }
            $staffkeuangan->kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('file_kinerja_kompetensi_8')) {
                $fileName = $request->file('file_kinerja_kompetensi_8')->store('uploads/Keuangan/staffkeuangan', 'public');
                $staffkeuangan->file_kinerja_kompetensi_8 = $fileName;
            }
            $staffkeuangan->kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('file_kinerja_kompetensi_9')) {
                $fileName = $request->file('file_kinerja_kompetensi_9')->store('uploads/Keuangan/staffkeuangan', 'public');
                $staffkeuangan->file_kinerja_kompetensi_9 = $fileName;
            }

            $staffkeuangan->output_point_kinerja_kompetensi_1 = $request->get('output_point_kinerja_kompetensi_1');
            $staffkeuangan->output_point_kinerja_kompetensi_2 = $request->get('output_point_kinerja_kompetensi_2');
            $staffkeuangan->output_point_kinerja_kompetensi_3 = $request->get('output_point_kinerja_kompetensi_3');
            $staffkeuangan->output_point_kinerja_kompetensi_4 = $request->get('output_point_kinerja_kompetensi_4');
            $staffkeuangan->output_point_kinerja_kompetensi_5 = $request->get('output_point_kinerja_kompetensi_5');
            $staffkeuangan->output_total_point_kinerja_kompetensi = $request->get('output_total_point_kinerja_kompetensi');
            $staffkeuangan->output_total_nilai_rata_rata_kinerja_kompetensi = $request->get('output_total_nilai_rata_rata_kinerja_kompetensi');
            $staffkeuangan->output_total_sementara_kinerja_kompetensi = $request->get('output_total_sementara_kinerja_kompetensi');

            $staffkeuangan->user_id = $request->get('UserId');
            $staffkeuangan->save();

            DB::commit();
            toast('Create Point Staff Keuangan successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point Staff Keuangan fail :)', 'error');
            return redirect()->back();
        }
    }

    /**
     * edit
     *
     * @param  mixed $PointId
     * @return void
     */
    public function edit($PointId)
    {
        $dataMenu = Menu::first();

        if (empty($dataMenu)) {
            return redirect()->back();
        } elseif ($dataMenu->control_menu == 0) {
            return view('menu.disabled');
        } elseif (StaffKeuangan::where('user_id', '=', $PointId)->first() == "") {
            return view('menu.menu-empty');
        } else {
            $data = StaffKeuangan::where('user_id', '=', $PointId)->first();
        }

        return view('itisar.Keuangan.edit', ['data' => $data]);
    }

    public function update(Request $request, $PointId)
    {
        // Validation file upload
        $request->validate([
            'kinerja_kompetensi_1' => 'mimes:pdf|max:2048',
            'kinerja_kompetensi_2' => 'mimes:pdf|max:2048',
            'kinerja_kompetensi_3' => 'mimes:pdf|max:2048',
            'kinerja_kompetensi_4' => 'mimes:pdf|max:2048',
            'kinerja_kompetensi_5' => 'mimes:pdf|max:2048',
            'kinerja_kompetensi_6' => 'mimes:pdf|max:2048',
            'kinerja_kompetensi_7' => 'mimes:pdf|max:2048',
            'kinerja_kompetensi_8' => 'mimes:pdf|max:2048',
            'kinerja_kompetensi_9' => 'mimes:pdf|max:2048',
        ]);
        DB::beginTransaction();
        try {
            $RecordData =  StaffKeuangan::where('user_id', $PointId)->firstOrFail();

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
                if ($RecordData->kinerja_kompetensi_1 && file_exists(storage_path('app/public/uploads/Keuangan/staffkeuangan/' . $RecordData->kinerja_kompetensi_1))) {
                    \Storage::delete('public/uploads/Keuangan/staffkeuangan/' . $RecordData->kinerja_kompetensi_1);
                }
                $file_kinerja_kompetensi_1 = $request->file('kinerja_kompetensi_1')->store('uploads/Keuangan/staffkeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_1 = $RecordData->kinerja_kompetensi_1;
            }

            $kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                if ($RecordData->file_kinerja_kompetensi_2 && file_exists(storage_path('app/public/uploads/Keuangan/staffkeuangan/' . $RecordData->file_kinerja_kompetensi_2))) {
                    \Storage::delete('public/uploads/Keuangan/staffkeuangan/' . $RecordData->file_kinerja_kompetensi_2);
                }
                $file_kinerja_kompetensi_2 = $request->file('file_kinerja_kompetensi_2')->store('uploads/Keuangan/staffkeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_2 = $RecordData->file_kinerja_kompetensi_2;
            }

            $kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                if ($RecordData->file_kinerja_kompetensi_3 && file_exists(storage_path('app/public/uploads/Keuangan/staffkeuangan/' . $RecordData->file_kinerja_kompetensi_3))) {
                    \Storage::delete('public/uploads/Keuangan/staffkeuangan/' . $RecordData->file_kinerja_kompetensi_3);
                }
                $file_kinerja_kompetensi_3 = $request->file('file_kinerja_kompetensi_3')->store('uploads/Keuangan/staffkeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_3 = $RecordData->file_kinerja_kompetensi_3;
            }

            $kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('kinerja_kompetensi_4')) {
                if ($RecordData->kinerja_kompetensi_4 && file_exists(storage_path('app/public/uploads/Keuangan/staffkeuangan/' . $RecordData->kinerja_kompetensi_4))) {
                    \Storage::delete('public/uploads/Keuangan/staffkeuangan/' . $RecordData->kinerja_kompetensi_4);
                }
                $file_kinerja_kompetensi_4 = $request->file('kinerja_kompetensi_4')->store('uploads/Keuangan/staffkeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_4 = $RecordData->kinerja_kompetensi_4;
            }

            $kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                if ($RecordData->file_kinerja_kompetensi_5 && file_exists(storage_path('app/public/uploads/Keuangan/staffkeuangan/' . $RecordData->file_kinerja_kompetensi_5))) {
                    \Storage::delete('public/uploads/Keuangan/staffkeuangan/' . $RecordData->file_kinerja_kompetensi_5);
                }
                $file_kinerja_kompetensi_5 = $request->file('file_kinerja_kompetensi_5')->store('uploads/Keuangan/staffkeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_5 = $RecordData->file_kinerja_kompetensi_5;
            }

            $kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                if ($RecordData->file_kinerja_kompetensi_6 && file_exists(storage_path('app/public/uploads/Keuangan/staffkeuangan/' . $RecordData->file_kinerja_kompetensi_6))) {
                    \Storage::delete('public/uploads/Keuangan/staffkeuangan/' . $RecordData->file_kinerja_kompetensi_6);
                }
                $file_kinerja_kompetensi_6 = $request->file('file_kinerja_kompetensi_6')->store('uploads/Keuangan/staffkeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_6 = $RecordData->file_kinerja_kompetensi_6;
            }

            $kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                if ($RecordData->file_kinerja_kompetensi_7 && file_exists(storage_path('app/public/uploads/Keuangan/staffkeuangan/' . $RecordData->file_kinerja_kompetensi_7))) {
                    \Storage::delete('public/uploads/Keuangan/staffkeuangan/' . $RecordData->file_kinerja_kompetensi_7);
                }
                $file_kinerja_kompetensi_7 = $request->file('file_kinerja_kompetensi_7')->store('uploads/Keuangan/staffkeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_7 = $RecordData->file_kinerja_kompetensi_7;
            }

            $kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('kinerja_kompetensi_8')) {
                if ($RecordData->kinerja_kompetensi_8 && file_exists(storage_path('app/public/uploads/Keuangan/staffkeuangan/' . $RecordData->kinerja_kompetensi_8))) {
                    \Storage::delete('public/uploads/Keuangan/staffkeuangan/' . $RecordData->kinerja_kompetensi_8);
                }
                $file_kinerja_kompetensi_8 = $request->file('kinerja_kompetensi_8')->store('uploads/Keuangan/staffkeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_8 = $RecordData->kinerja_kompetensi_8;
            }

            $kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('kinerja_kompetensi_9')) {
                if ($RecordData->kinerja_kompetensi_9 && file_exists(storage_path('app/public/uploads/Keuangan/staffkeuangan/' . $RecordData->kinerja_kompetensi_9))) {
                    \Storage::delete('public/uploads/Keuangan/staffkeuangan/' . $RecordData->kinerja_kompetensi_9);
                }
                $file_kinerja_kompetensi_9 = $request->file('kinerja_kompetensi_9')->store('uploads/Keuangan/staffkeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_9 = $RecordData->kinerja_kompetensi_9;
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
                'kinerja_kompetensi_8' => $kinerja_kompetensi_8,
                'file_kinerja_kompetensi_8' => $file_kinerja_kompetensi_8,
                'kinerja_kompetensi_9' => $kinerja_kompetensi_9,
                'file_kinerja_kompetensi_9' => $file_kinerja_kompetensi_9,
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
            toast('Update Point Staff Keuangan successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point Staff Keuangan fail :)', 'error');
            return redirect()->back();
        }
    }

    /**
     * raport
     *
     * @param  mixed $user_id
     * @return void
     */
    public function raport($user_id)
    {
        $DataUser = DB::table('users')
            ->leftJoin('staff_keuangan', 'users.id', '=', 'staff_keuangan.user_id')
            ->select(
                'users.name',
                'users.email',
                'staff_keuangan.user_id',
                'staff_keuangan.output_total_sementara_kinerja_perilaku',
                'staff_keuangan.output_total_sementara_kinerja_kompetensi',
            )
            ->where('staff_keuangan.user_id', $user_id)
            ->first();

        // dd($DataUser);
        if (!empty($DataUser->user_id)) {
            return view('itisar.Keuangan.raport', compact('DataUser'));
        } else {
            return view('menu.menu-empty');
        }
    }
}
