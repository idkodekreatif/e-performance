<?php

namespace App\Http\Controllers\Itisar\Bau;

use App\Http\Controllers\Controller;
use App\Models\KasubBiroKeuangan;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KasubBiroKeuanganController extends Controller
{
    public function create()
    {
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm',
        ])->get();
        return view('itisar.bau.KasubBiroKeuangan.create', compact('users'));
    }

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
            'file_kinerja_kompetensi_10' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_11' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_12' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_13' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_14' => 'mimes:pdf|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $kasubbirokeuangan = new KasubBiroKeuangan();
            $kasubbirokeuangan->Point1_1 = $request->get('Point1_1');
            $kasubbirokeuangan->Point1_2 = $request->get('Point1_2');
            $kasubbirokeuangan->Point1_3 = $request->get('Point1_3');
            $kasubbirokeuangan->Point1_4 = $request->get('Point1_4');
            $kasubbirokeuangan->Point1_5 = $request->get('Point1_5');
            $kasubbirokeuangan->Point2_1 = $request->get('Point2_1');
            $kasubbirokeuangan->Point2_2 = $request->get('Point2_2');
            $kasubbirokeuangan->Point2_3 = $request->get('Point2_3');
            $kasubbirokeuangan->Point2_4 = $request->get('Point2_4');
            $kasubbirokeuangan->Point2_5 = $request->get('Point2_5');
            $kasubbirokeuangan->Point3_1 = $request->get('Point3_1');
            $kasubbirokeuangan->Point3_2 = $request->get('Point3_2');
            $kasubbirokeuangan->Point3_3 = $request->get('Point3_3');
            $kasubbirokeuangan->Point3_4 = $request->get('Point3_4');
            $kasubbirokeuangan->Point3_5 = $request->get('Point3_5');
            $kasubbirokeuangan->Point4_1 = $request->get('Point4_1');
            $kasubbirokeuangan->Point4_2 = $request->get('Point4_2');
            $kasubbirokeuangan->Point4_3 = $request->get('Point4_3');
            $kasubbirokeuangan->Point4_4 = $request->get('Point4_4');
            $kasubbirokeuangan->Point4_5 = $request->get('Point4_5');
            $kasubbirokeuangan->Point5_1 = $request->get('Point5_1');
            $kasubbirokeuangan->Point5_2 = $request->get('Point5_2');
            $kasubbirokeuangan->Point5_3 = $request->get('Point5_3');
            $kasubbirokeuangan->Point5_4 = $request->get('Point5_4');
            $kasubbirokeuangan->Point5_5 = $request->get('Point5_5');
            $kasubbirokeuangan->Point6_1 = $request->get('Point6_1');
            $kasubbirokeuangan->Point6_2 = $request->get('Point6_2');
            $kasubbirokeuangan->Point6_3 = $request->get('Point6_3');
            $kasubbirokeuangan->Point6_4 = $request->get('Point6_4');
            $kasubbirokeuangan->Point6_5 = $request->get('Point6_5');
            $kasubbirokeuangan->output_point_1 = $request->get('output_point_1');
            $kasubbirokeuangan->output_point_2 = $request->get('output_point_2');
            $kasubbirokeuangan->output_point_3 = $request->get('output_point_3');
            $kasubbirokeuangan->output_point_4 = $request->get('output_point_4');
            $kasubbirokeuangan->output_point_5 = $request->get('output_point_5');
            $kasubbirokeuangan->output_total_point_kinerja_perilaku = $request->get('output_total_point_kinerja_perilaku');
            $kasubbirokeuangan->output_total_nilai_rata_rata_kinerja_perilaku = $request->get('output_total_nilai_rata_rata_kinerja_perilaku');
            $kasubbirokeuangan->output_total_sementara_kinerja_perilaku = $request->get('output_total_sementara_kinerja_perilaku');

            $kasubbirokeuangan->kinerja_kompetensi_1 = $request->get('kinerja_kompetensi_1');
            if ($request->hasFile('file_kinerja_kompetensi_1')) {
                $fileName = $request->file('file_kinerja_kompetensi_1')->store('uploads/bau/kasubirokeuangan', 'public');
                $kasubbirokeuangan->file_kinerja_kompetensi_1 = $fileName;
            }
            $kasubbirokeuangan->kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                $fileName = $request->file('file_kinerja_kompetensi_2')->store('uploads/bau/kasubirokeuangan', 'public');
                $kasubbirokeuangan->file_kinerja_kompetensi_2 = $fileName;
            }
            $kasubbirokeuangan->kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                $fileName = $request->file('file_kinerja_kompetensi_3')->store('uploads/bau/kasubirokeuangan', 'public');
                $kasubbirokeuangan->file_kinerja_kompetensi_3 = $fileName;
            }
            $kasubbirokeuangan->kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                $fileName = $request->file('file_kinerja_kompetensi_4')->store('uploads/bau/kasubirokeuangan', 'public');
                $kasubbirokeuangan->file_kinerja_kompetensi_4 = $fileName;
            }
            $kasubbirokeuangan->kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                $fileName = $request->file('file_kinerja_kompetensi_5')->store('uploads/bau/kasubirokeuangan', 'public');
                $kasubbirokeuangan->file_kinerja_kompetensi_5 = $fileName;
            }
            $kasubbirokeuangan->kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                $fileName = $request->file('file_kinerja_kompetensi_6')->store('uploads/bau/kasubirokeuangan', 'public');
                $kasubbirokeuangan->file_kinerja_kompetensi_6 = $fileName;
            }
            $kasubbirokeuangan->kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                $fileName = $request->file('file_kinerja_kompetensi_7')->store('uploads/bau/kasubirokeuangan', 'public');
                $kasubbirokeuangan->file_kinerja_kompetensi_7 = $fileName;
            }
            $kasubbirokeuangan->kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('file_kinerja_kompetensi_8')) {
                $fileName = $request->file('file_kinerja_kompetensi_8')->store('uploads/bau/kasubirokeuangan', 'public');
                $kasubbirokeuangan->file_kinerja_kompetensi_8 = $fileName;
            }
            $kasubbirokeuangan->kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('file_kinerja_kompetensi_9')) {
                $fileName = $request->file('file_kinerja_kompetensi_9')->store('uploads/bau/kasubirokeuangan', 'public');
                $kasubbirokeuangan->file_kinerja_kompetensi_9 = $fileName;
            }
            $kasubbirokeuangan->kinerja_kompetensi_10 = $request->get('kinerja_kompetensi_10');
            if ($request->hasFile('file_kinerja_kompetensi_10')) {
                $fileName = $request->file('file_kinerja_kompetensi_10')->store('uploads/bau/kasubirokeuangan', 'public');
                $kasubbirokeuangan->file_kinerja_kompetensi_10 = $fileName;
            }
            $kasubbirokeuangan->kinerja_kompetensi_11 = $request->get('kinerja_kompetensi_11');
            if ($request->hasFile('file_kinerja_kompetensi_11')) {
                $fileName = $request->file('file_kinerja_kompetensi_11')->store('uploads/bau/kasubirokeuangan', 'public');
                $kasubbirokeuangan->file_kinerja_kompetensi_11 = $fileName;
            }
            $kasubbirokeuangan->kinerja_kompetensi_12 = $request->get('kinerja_kompetensi_12');
            if ($request->hasFile('file_kinerja_kompetensi_12')) {
                $fileName = $request->file('file_kinerja_kompetensi_12')->store('uploads/bau/kasubirokeuangan', 'public');
                $kasubbirokeuangan->file_kinerja_kompetensi_12 = $fileName;
            }
            $kasubbirokeuangan->kinerja_kompetensi_13 = $request->get('kinerja_kompetensi_13');
            if ($request->hasFile('file_kinerja_kompetensi_13')) {
                $fileName = $request->file('file_kinerja_kompetensi_13')->store('uploads/bau/kasubirokeuangan', 'public');
                $kasubbirokeuangan->file_kinerja_kompetensi_13 = $fileName;
            }
            $kasubbirokeuangan->kinerja_kompetensi_14 = $request->get('kinerja_kompetensi_14');
            if ($request->hasFile('file_kinerja_kompetensi_14')) {
                $fileName = $request->file('file_kinerja_kompetensi_14')->store('uploads/bau/kasubirokeuangan', 'public');
                $kasubbirokeuangan->file_kinerja_kompetensi_14 = $fileName;
            }

            $kasubbirokeuangan->output_point_kinerja_kompetensi_1 = $request->get('output_point_kinerja_kompetensi_1');
            $kasubbirokeuangan->output_point_kinerja_kompetensi_2 = $request->get('output_point_kinerja_kompetensi_2');
            $kasubbirokeuangan->output_point_kinerja_kompetensi_3 = $request->get('output_point_kinerja_kompetensi_3');
            $kasubbirokeuangan->output_point_kinerja_kompetensi_4 = $request->get('output_point_kinerja_kompetensi_4');
            $kasubbirokeuangan->output_point_kinerja_kompetensi_5 = $request->get('output_point_kinerja_kompetensi_5');
            $kasubbirokeuangan->output_total_point_kinerja_kompetensi = $request->get('output_total_point_kinerja_kompetensi');
            $kasubbirokeuangan->output_total_nilai_rata_rata_kinerja_kompetensi = $request->get('output_total_nilai_rata_rata_kinerja_kompetensi');
            $kasubbirokeuangan->output_total_sementara_kinerja_kompetensi = $request->get('output_total_sementara_kinerja_kompetensi');

            $kasubbirokeuangan->user_id = $request->get('UserId');
            $kasubbirokeuangan->save();

            DB::commit();
            toast('Create Point Ka. Sub. Biro Keuangan & Akuntansi successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point Ka. Sub. Biro Keuangan & Akuntansi fail :)', 'error');
            return redirect()->back();
        }
    }

    public function edit($PointId)
    {
        $dataMenu = Menu::first();

        if (empty($dataMenu)) {
            return redirect()->back();
        } elseif ($dataMenu->control_menu == 0) {
            return view('menu.disabled');
        } elseif (KasubBiroKeuangan::where('user_id', '=', $PointId)->first() == "") {
            return view('menu.menu-empty');
        } else {
            $data = KasubBiroKeuangan::where('user_id', '=', $PointId)->first();
        }

        return view('itisar.bau.KasubBiroKeuangan.edit', ['data' => $data]);
    }

    public function update(Request $request, $PointId)
    {
        // Validation file upload
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
            'file_kinerja_kompetensi_10' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_11' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_12' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_13' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_14' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_15' => 'mimes:pdf|max:2048',
        ]);
        DB::beginTransaction();
        try {
            $RecordData =  KasubBiroKeuangan::where('user_id', $PointId)->firstOrFail();

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
            if ($request->hasFile('file_kinerja_kompetensi_1')) {
                if ($RecordData->file_kinerja_kompetensi_1 && file_exists(storage_path('app/public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_1))) {
                    \Storage::delete('public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_1);
                }
                $file_kinerja_kompetensi_1 = $request->file('file_kinerja_kompetensi_1')->store('uploads/bau/kasubirokeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_1 = $RecordData->file_kinerja_kompetensi_1;
            }

            $kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                if ($RecordData->file_kinerja_kompetensi_2 && file_exists(storage_path('app/public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_2))) {
                    \Storage::delete('public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_2);
                }
                $file_kinerja_kompetensi_2 = $request->file('file_kinerja_kompetensi_2')->store('uploads/bau/kasubirokeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_2 = $RecordData->file_kinerja_kompetensi_2;
            }

            $kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                if ($RecordData->file_kinerja_kompetensi_3 && file_exists(storage_path('app/public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_3))) {
                    \Storage::delete('public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_3);
                }
                $file_kinerja_kompetensi_3 = $request->file('file_kinerja_kompetensi_3')->store('uploads/bau/kasubirokeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_3 = $RecordData->file_kinerja_kompetensi_3;
            }

            $kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                if ($RecordData->file_kinerja_kompetensi_4 && file_exists(storage_path('app/public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_4))) {
                    \Storage::delete('public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_4);
                }
                $file_kinerja_kompetensi_4 = $request->file('file_kinerja_kompetensi_4')->store('uploads/bau/kasubirokeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_4 = $RecordData->file_kinerja_kompetensi_4;
            }

            $kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                if ($RecordData->file_kinerja_kompetensi_5 && file_exists(storage_path('app/public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_5))) {
                    \Storage::delete('public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_5);
                }
                $file_kinerja_kompetensi_5 = $request->file('file_kinerja_kompetensi_5')->store('uploads/bau/kasubirokeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_5 = $RecordData->file_kinerja_kompetensi_5;
            }

            $kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                if ($RecordData->file_kinerja_kompetensi_6 && file_exists(storage_path('app/public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_6))) {
                    \Storage::delete('public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_6);
                }
                $file_kinerja_kompetensi_6 = $request->file('file_kinerja_kompetensi_6')->store('uploads/bau/kasubirokeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_6 = $RecordData->file_kinerja_kompetensi_6;
            }

            $kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                if ($RecordData->file_kinerja_kompetensi_7 && file_exists(storage_path('app/public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_7))) {
                    \Storage::delete('public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_7);
                }
                $file_kinerja_kompetensi_7 = $request->file('file_kinerja_kompetensi_7')->store('uploads/bau/kasubirokeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_7 = $RecordData->file_kinerja_kompetensi_7;
            }

            $kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('file_kinerja_kompetensi_8')) {
                if ($RecordData->file_kinerja_kompetensi_8 && file_exists(storage_path('app/public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_8))) {
                    \Storage::delete('public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_8);
                }
                $file_kinerja_kompetensi_8 = $request->file('file_kinerja_kompetensi_8')->store('uploads/bau/kasubirokeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_8 = $RecordData->file_kinerja_kompetensi_8;
            }

            $kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('file_kinerja_kompetensi_9')) {
                if ($RecordData->file_kinerja_kompetensi_9 && file_exists(storage_path('app/public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_9))) {
                    \Storage::delete('public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_9);
                }
                $file_kinerja_kompetensi_9 = $request->file('file_kinerja_kompetensi_9')->store('uploads/bau/kasubirokeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_9 = $RecordData->file_kinerja_kompetensi_9;
            }

            $kinerja_kompetensi_10 = $request->get('kinerja_kompetensi_10');
            if ($request->hasFile('file_kinerja_kompetensi_10')) {
                if ($RecordData->file_kinerja_kompetensi_10 && file_exists(storage_path('app/public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_10))) {
                    \Storage::delete('public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_10);
                }
                $file_kinerja_kompetensi_10 = $request->file('file_kinerja_kompetensi_10')->store('uploads/bau/kasubirokeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_10 = $RecordData->file_kinerja_kompetensi_10;
            }

            $kinerja_kompetensi_11 = $request->get('kinerja_kompetensi_11');
            if ($request->hasFile('file_kinerja_kompetensi_11')) {
                if ($RecordData->file_kinerja_kompetensi_11 && file_exists(storage_path('app/public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_11))) {
                    \Storage::delete('public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_11);
                }
                $file_kinerja_kompetensi_11 = $request->file('file_kinerja_kompetensi_11')->store('uploads/bau/kasubirokeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_11 = $RecordData->file_kinerja_kompetensi_11;
            }

            $kinerja_kompetensi_12 = $request->get('kinerja_kompetensi_12');
            if ($request->hasFile('file_kinerja_kompetensi_12')) {
                if ($RecordData->file_kinerja_kompetensi_12 && file_exists(storage_path('app/public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_12))) {
                    \Storage::delete('public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_12);
                }
                $file_kinerja_kompetensi_12 = $request->file('file_kinerja_kompetensi_12')->store('uploads/bau/kasubirokeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_12 = $RecordData->file_kinerja_kompetensi_12;
            }

            $kinerja_kompetensi_13 = $request->get('kinerja_kompetensi_13');
            if ($request->hasFile('file_kinerja_kompetensi_13')) {
                if ($RecordData->file_kinerja_kompetensi_13 && file_exists(storage_path('app/public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_13))) {
                    \Storage::delete('public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_13);
                }
                $file_kinerja_kompetensi_13 = $request->file('file_kinerja_kompetensi_13')->store('uploads/bau/kasubirokeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_13 = $RecordData->file_kinerja_kompetensi_13;
            }

            $kinerja_kompetensi_14 = $request->get('kinerja_kompetensi_14');
            if ($request->hasFile('file_kinerja_kompetensi_14')) {
                if ($RecordData->file_kinerja_kompetensi_14 && file_exists(storage_path('app/public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_14))) {
                    \Storage::delete('public/uploads/bau/kasubirokeuangan/' . $RecordData->file_kinerja_kompetensi_14);
                }
                $file_kinerja_kompetensi_14 = $request->file('file_kinerja_kompetensi_14')->store('uploads/bau/kasubirokeuangan', 'public');
            } else {
                $file_kinerja_kompetensi_14 = $RecordData->file_kinerja_kompetensi_14;
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
                'kinerja_kompetensi_10' => $kinerja_kompetensi_10,
                'file_kinerja_kompetensi_10' => $file_kinerja_kompetensi_10,
                'kinerja_kompetensi_11' => $kinerja_kompetensi_11,
                'file_kinerja_kompetensi_11' => $file_kinerja_kompetensi_11,
                'kinerja_kompetensi_12' => $kinerja_kompetensi_12,
                'file_kinerja_kompetensi_12' => $file_kinerja_kompetensi_12,
                'kinerja_kompetensi_13' => $kinerja_kompetensi_13,
                'file_kinerja_kompetensi_13' => $file_kinerja_kompetensi_13,
                'kinerja_kompetensi_14' => $kinerja_kompetensi_14,
                'file_kinerja_kompetensi_14' => $file_kinerja_kompetensi_14,
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
            toast('Update Point Ka. Sub. Biro Keuangan & Akuntansi successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point Ka. Sub. Biro Keuangan & Akuntansi fail :)', 'error');
            return redirect()->back();
        }
    }

    public function raport($user_id)
    {
        $DataUser = DB::table('users')
            ->leftJoin('kasub_biro_keuangan_akuntansi', 'users.id', '=', 'kasub_biro_keuangan_akuntansi.user_id')
            ->select(
                'users.name',
                'users.email',
                'kasub_biro_keuangan_akuntansi.user_id',
                'kasub_biro_keuangan_akuntansi.output_total_sementara_kinerja_perilaku',
                'kasub_biro_keuangan_akuntansi.output_total_sementara_kinerja_kompetensi',
            )
            ->where('kasub_biro_keuangan_akuntansi.user_id', $user_id)
            ->first();

        // dd($DataUser);
        if (!empty($DataUser->user_id)) {
            return view('itisar.bau.KasubBiroKeuangan.raport', compact('DataUser'));
        } else {
            return view('menu.menu-empty');
        }
    }
}