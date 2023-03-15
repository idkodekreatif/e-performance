<?php

namespace App\Http\Controllers\Itisar\WarekSatu;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\User;
use App\Models\WarekSatu\KoorKemahasiswaanDanAlumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KoorKemahasiswaanDanAlumniController extends Controller
{
    public function create()
    {
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm',
        ])->get();
        return view('itisar.WarekSatu.KoorKemahasiswaanDanAlumni.create', compact('users'));
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
            'file_kinerja_kompetensi_15' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_16' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_17' => 'mimes:pdf|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $koorkemahasiswaandanalumni = new KoorKemahasiswaanDanAlumni();
            $koorkemahasiswaandanalumni->Point1_1 = $request->get('Point1_1');
            $koorkemahasiswaandanalumni->Point1_2 = $request->get('Point1_2');
            $koorkemahasiswaandanalumni->Point1_3 = $request->get('Point1_3');
            $koorkemahasiswaandanalumni->Point1_4 = $request->get('Point1_4');
            $koorkemahasiswaandanalumni->Point1_5 = $request->get('Point1_5');
            $koorkemahasiswaandanalumni->Point2_1 = $request->get('Point2_1');
            $koorkemahasiswaandanalumni->Point2_2 = $request->get('Point2_2');
            $koorkemahasiswaandanalumni->Point2_3 = $request->get('Point2_3');
            $koorkemahasiswaandanalumni->Point2_4 = $request->get('Point2_4');
            $koorkemahasiswaandanalumni->Point2_5 = $request->get('Point2_5');
            $koorkemahasiswaandanalumni->Point3_1 = $request->get('Point3_1');
            $koorkemahasiswaandanalumni->Point3_2 = $request->get('Point3_2');
            $koorkemahasiswaandanalumni->Point3_3 = $request->get('Point3_3');
            $koorkemahasiswaandanalumni->Point3_4 = $request->get('Point3_4');
            $koorkemahasiswaandanalumni->Point3_5 = $request->get('Point3_5');
            $koorkemahasiswaandanalumni->Point4_1 = $request->get('Point4_1');
            $koorkemahasiswaandanalumni->Point4_2 = $request->get('Point4_2');
            $koorkemahasiswaandanalumni->Point4_3 = $request->get('Point4_3');
            $koorkemahasiswaandanalumni->Point4_4 = $request->get('Point4_4');
            $koorkemahasiswaandanalumni->Point4_5 = $request->get('Point4_5');
            $koorkemahasiswaandanalumni->Point5_1 = $request->get('Point5_1');
            $koorkemahasiswaandanalumni->Point5_2 = $request->get('Point5_2');
            $koorkemahasiswaandanalumni->Point5_3 = $request->get('Point5_3');
            $koorkemahasiswaandanalumni->Point5_4 = $request->get('Point5_4');
            $koorkemahasiswaandanalumni->Point5_5 = $request->get('Point5_5');
            $koorkemahasiswaandanalumni->Point6_1 = $request->get('Point6_1');
            $koorkemahasiswaandanalumni->Point6_2 = $request->get('Point6_2');
            $koorkemahasiswaandanalumni->Point6_3 = $request->get('Point6_3');
            $koorkemahasiswaandanalumni->Point6_4 = $request->get('Point6_4');
            $koorkemahasiswaandanalumni->Point6_5 = $request->get('Point6_5');
            $koorkemahasiswaandanalumni->output_point_1 = $request->get('output_point_1');
            $koorkemahasiswaandanalumni->output_point_2 = $request->get('output_point_2');
            $koorkemahasiswaandanalumni->output_point_3 = $request->get('output_point_3');
            $koorkemahasiswaandanalumni->output_point_4 = $request->get('output_point_4');
            $koorkemahasiswaandanalumni->output_point_5 = $request->get('output_point_5');
            $koorkemahasiswaandanalumni->output_total_point_kinerja_perilaku = $request->get('output_total_point_kinerja_perilaku');
            $koorkemahasiswaandanalumni->output_total_nilai_rata_rata_kinerja_perilaku = $request->get('output_total_nilai_rata_rata_kinerja_perilaku');
            $koorkemahasiswaandanalumni->output_total_sementara_kinerja_perilaku = $request->get('output_total_sementara_kinerja_perilaku');

            $koorkemahasiswaandanalumni->kinerja_kompetensi_1 = $request->get('kinerja_kompetensi_1');
            if ($request->hasFile('file_kinerja_kompetensi_1')) {
                $fileName = $request->file('file_kinerja_kompetensi_1')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
                $koorkemahasiswaandanalumni->file_kinerja_kompetensi_1 = $fileName;
            }
            $koorkemahasiswaandanalumni->kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                $fileName = $request->file('file_kinerja_kompetensi_2')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
                $koorkemahasiswaandanalumni->file_kinerja_kompetensi_2 = $fileName;
            }
            $koorkemahasiswaandanalumni->kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                $fileName = $request->file('file_kinerja_kompetensi_3')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
                $koorkemahasiswaandanalumni->file_kinerja_kompetensi_3 = $fileName;
            }
            $koorkemahasiswaandanalumni->kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                $fileName = $request->file('file_kinerja_kompetensi_4')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
                $koorkemahasiswaandanalumni->file_kinerja_kompetensi_4 = $fileName;
            }
            $koorkemahasiswaandanalumni->kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                $fileName = $request->file('file_kinerja_kompetensi_5')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
                $koorkemahasiswaandanalumni->file_kinerja_kompetensi_5 = $fileName;
            }
            $koorkemahasiswaandanalumni->kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                $fileName = $request->file('file_kinerja_kompetensi_6')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
                $koorkemahasiswaandanalumni->file_kinerja_kompetensi_6 = $fileName;
            }
            $koorkemahasiswaandanalumni->kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                $fileName = $request->file('file_kinerja_kompetensi_7')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
                $koorkemahasiswaandanalumni->file_kinerja_kompetensi_7 = $fileName;
            }
            $koorkemahasiswaandanalumni->kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('file_kinerja_kompetensi_8')) {
                $fileName = $request->file('file_kinerja_kompetensi_8')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
                $koorkemahasiswaandanalumni->file_kinerja_kompetensi_8 = $fileName;
            }
            $koorkemahasiswaandanalumni->kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('file_kinerja_kompetensi_9')) {
                $fileName = $request->file('file_kinerja_kompetensi_9')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
                $koorkemahasiswaandanalumni->file_kinerja_kompetensi_9 = $fileName;
            }
            $koorkemahasiswaandanalumni->kinerja_kompetensi_10 = $request->get('kinerja_kompetensi_10');
            if ($request->hasFile('file_kinerja_kompetensi_10')) {
                $fileName = $request->file('file_kinerja_kompetensi_10')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
                $koorkemahasiswaandanalumni->file_kinerja_kompetensi_10 = $fileName;
            }
            $koorkemahasiswaandanalumni->kinerja_kompetensi_11 = $request->get('kinerja_kompetensi_11');
            if ($request->hasFile('file_kinerja_kompetensi_11')) {
                $fileName = $request->file('file_kinerja_kompetensi_11')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
                $koorkemahasiswaandanalumni->file_kinerja_kompetensi_11 = $fileName;
            }
            $koorkemahasiswaandanalumni->kinerja_kompetensi_12 = $request->get('kinerja_kompetensi_12');
            if ($request->hasFile('file_kinerja_kompetensi_12')) {
                $fileName = $request->file('file_kinerja_kompetensi_12')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
                $koorkemahasiswaandanalumni->file_kinerja_kompetensi_12 = $fileName;
            }
            $koorkemahasiswaandanalumni->kinerja_kompetensi_13 = $request->get('kinerja_kompetensi_13');
            if ($request->hasFile('file_kinerja_kompetensi_13')) {
                $fileName = $request->file('file_kinerja_kompetensi_13')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
                $koorkemahasiswaandanalumni->file_kinerja_kompetensi_13 = $fileName;
            }
            $koorkemahasiswaandanalumni->kinerja_kompetensi_14 = $request->get('kinerja_kompetensi_14');
            if ($request->hasFile('file_kinerja_kompetensi_14')) {
                $fileName = $request->file('file_kinerja_kompetensi_14')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
                $koorkemahasiswaandanalumni->file_kinerja_kompetensi_14 = $fileName;
            }
            $koorkemahasiswaandanalumni->kinerja_kompetensi_15 = $request->get('kinerja_kompetensi_15');
            if ($request->hasFile('file_kinerja_kompetensi_15')) {
                $fileName = $request->file('file_kinerja_kompetensi_15')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
                $koorkemahasiswaandanalumni->file_kinerja_kompetensi_15 = $fileName;
            }
            $koorkemahasiswaandanalumni->kinerja_kompetensi_16 = $request->get('kinerja_kompetensi_16');
            if ($request->hasFile('file_kinerja_kompetensi_16')) {
                $fileName = $request->file('file_kinerja_kompetensi_16')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
                $koorkemahasiswaandanalumni->file_kinerja_kompetensi_16 = $fileName;
            }
            $koorkemahasiswaandanalumni->kinerja_kompetensi_17 = $request->get('kinerja_kompetensi_17');
            if ($request->hasFile('file_kinerja_kompetensi_17')) {
                $fileName = $request->file('file_kinerja_kompetensi_17')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
                $koorkemahasiswaandanalumni->file_kinerja_kompetensi_17 = $fileName;
            }

            $koorkemahasiswaandanalumni->output_point_kinerja_kompetensi_1 = $request->get('output_point_kinerja_kompetensi_1');
            $koorkemahasiswaandanalumni->output_point_kinerja_kompetensi_2 = $request->get('output_point_kinerja_kompetensi_2');
            $koorkemahasiswaandanalumni->output_point_kinerja_kompetensi_3 = $request->get('output_point_kinerja_kompetensi_3');
            $koorkemahasiswaandanalumni->output_point_kinerja_kompetensi_4 = $request->get('output_point_kinerja_kompetensi_4');
            $koorkemahasiswaandanalumni->output_point_kinerja_kompetensi_5 = $request->get('output_point_kinerja_kompetensi_5');
            $koorkemahasiswaandanalumni->output_total_point_kinerja_kompetensi = $request->get('output_total_point_kinerja_kompetensi');
            $koorkemahasiswaandanalumni->output_total_nilai_rata_rata_kinerja_kompetensi = $request->get('output_total_nilai_rata_rata_kinerja_kompetensi');
            $koorkemahasiswaandanalumni->output_total_sementara_kinerja_kompetensi = $request->get('output_total_sementara_kinerja_kompetensi');

            $koorkemahasiswaandanalumni->user_id = $request->get('UserId');
            $koorkemahasiswaandanalumni->save();

            DB::commit();
            toast('Create Point Koor. Kemahasiswaan dan Alumni successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point Koor. Kemahasiswaan dan Alumni fail :)', 'error');
            return redirect()->back();
        }
    }

    public function edit()
    {
        $dataMenu = Menu::first();
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm',
        ])->get();

        if (empty($dataMenu)) {
            return redirect()->back();
        } elseif ($dataMenu->control_menu == 0) {
            return view('menu.disabled');
        }
        return view('itisar.WarekSatu.KoorKemahasiswaanDanAlumni.searchdata', compact('users'));
    }

    public function dataSearch(Request $request)
    {
        $data = KoorKemahasiswaanDanAlumni::where('user_id', '=', $request->id)->firstOrFail();

        return view('itisar.WarekSatu.KoorKemahasiswaanDanAlumni.edit', ['data' => $data]);
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
            'file_kinerja_kompetensi_16' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_17' => 'mimes:pdf|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $RecordData =  KoorKemahasiswaanDanAlumni::where('user_id', $PointId)->firstOrFail();

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
                if ($RecordData->file_kinerja_kompetensi_1 && file_exists(storage_path('app/public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_1))) {
                    \Storage::delete('public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_1);
                }
                $file_kinerja_kompetensi_1 = $request->file('file_kinerja_kompetensi_1')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
            } else {
                $file_kinerja_kompetensi_1 = $RecordData->file_kinerja_kompetensi_1;
            }

            $kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                if ($RecordData->file_kinerja_kompetensi_2 && file_exists(storage_path('app/public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_2))) {
                    \Storage::delete('public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_2);
                }
                $file_kinerja_kompetensi_2 = $request->file('file_kinerja_kompetensi_2')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
            } else {
                $file_kinerja_kompetensi_2 = $RecordData->file_kinerja_kompetensi_2;
            }

            $kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                if ($RecordData->file_kinerja_kompetensi_3 && file_exists(storage_path('app/public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_3))) {
                    \Storage::delete('public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_3);
                }
                $file_kinerja_kompetensi_3 = $request->file('file_kinerja_kompetensi_3')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
            } else {
                $file_kinerja_kompetensi_3 = $RecordData->file_kinerja_kompetensi_3;
            }

            $kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                if ($RecordData->file_kinerja_kompetensi_4 && file_exists(storage_path('app/public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_4))) {
                    \Storage::delete('public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_4);
                }
                $file_kinerja_kompetensi_4 = $request->file('file_kinerja_kompetensi_4')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
            } else {
                $file_kinerja_kompetensi_4 = $RecordData->file_kinerja_kompetensi_4;
            }

            $kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                if ($RecordData->file_kinerja_kompetensi_5 && file_exists(storage_path('app/public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_5))) {
                    \Storage::delete('public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_5);
                }
                $file_kinerja_kompetensi_5 = $request->file('file_kinerja_kompetensi_5')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
            } else {
                $file_kinerja_kompetensi_5 = $RecordData->file_kinerja_kompetensi_5;
            }

            $kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                if ($RecordData->file_kinerja_kompetensi_6 && file_exists(storage_path('app/public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_6))) {
                    \Storage::delete('public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_6);
                }
                $file_kinerja_kompetensi_6 = $request->file('file_kinerja_kompetensi_6')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
            } else {
                $file_kinerja_kompetensi_6 = $RecordData->file_kinerja_kompetensi_6;
            }

            $kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                if ($RecordData->file_kinerja_kompetensi_7 && file_exists(storage_path('app/public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_7))) {
                    \Storage::delete('public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_7);
                }
                $file_kinerja_kompetensi_7 = $request->file('file_kinerja_kompetensi_7')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
            } else {
                $file_kinerja_kompetensi_7 = $RecordData->file_kinerja_kompetensi_7;
            }

            $kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('file_kinerja_kompetensi_8')) {
                if ($RecordData->file_kinerja_kompetensi_8 && file_exists(storage_path('app/public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_8))) {
                    \Storage::delete('public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_8);
                }
                $file_kinerja_kompetensi_8 = $request->file('file_kinerja_kompetensi_8')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
            } else {
                $file_kinerja_kompetensi_8 = $RecordData->file_kinerja_kompetensi_8;
            }

            $kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('file_kinerja_kompetensi_9')) {
                if ($RecordData->file_kinerja_kompetensi_9 && file_exists(storage_path('app/public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_9))) {
                    \Storage::delete('public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_9);
                }
                $file_kinerja_kompetensi_9 = $request->file('file_kinerja_kompetensi_9')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
            } else {
                $file_kinerja_kompetensi_9 = $RecordData->file_kinerja_kompetensi_9;
            }

            $kinerja_kompetensi_10 = $request->get('kinerja_kompetensi_10');
            if ($request->hasFile('file_kinerja_kompetensi_10')) {
                if ($RecordData->file_kinerja_kompetensi_10 && file_exists(storage_path('app/public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_10))) {
                    \Storage::delete('public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_10);
                }
                $file_kinerja_kompetensi_10 = $request->file('file_kinerja_kompetensi_10')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
            } else {
                $file_kinerja_kompetensi_10 = $RecordData->file_kinerja_kompetensi_10;
            }

            $kinerja_kompetensi_11 = $request->get('kinerja_kompetensi_11');
            if ($request->hasFile('file_kinerja_kompetensi_11')) {
                if ($RecordData->file_kinerja_kompetensi_11 && file_exists(storage_path('app/public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_11))) {
                    \Storage::delete('public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_11);
                }
                $file_kinerja_kompetensi_11 = $request->file('file_kinerja_kompetensi_11')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
            } else {
                $file_kinerja_kompetensi_11 = $RecordData->file_kinerja_kompetensi_11;
            }

            $kinerja_kompetensi_12 = $request->get('kinerja_kompetensi_12');
            if ($request->hasFile('file_kinerja_kompetensi_12')) {
                if ($RecordData->file_kinerja_kompetensi_12 && file_exists(storage_path('app/public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_12))) {
                    \Storage::delete('public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_12);
                }
                $file_kinerja_kompetensi_12 = $request->file('file_kinerja_kompetensi_12')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
            } else {
                $file_kinerja_kompetensi_12 = $RecordData->file_kinerja_kompetensi_12;
            }

            $kinerja_kompetensi_13 = $request->get('kinerja_kompetensi_13');
            if ($request->hasFile('file_kinerja_kompetensi_13')) {
                if ($RecordData->file_kinerja_kompetensi_13 && file_exists(storage_path('app/public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_13))) {
                    \Storage::delete('public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_13);
                }
                $file_kinerja_kompetensi_13 = $request->file('file_kinerja_kompetensi_13')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
            } else {
                $file_kinerja_kompetensi_13 = $RecordData->file_kinerja_kompetensi_13;
            }

            $kinerja_kompetensi_14 = $request->get('kinerja_kompetensi_14');
            if ($request->hasFile('file_kinerja_kompetensi_14')) {
                if ($RecordData->file_kinerja_kompetensi_14 && file_exists(storage_path('app/public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_14))) {
                    \Storage::delete('public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_14);
                }
                $file_kinerja_kompetensi_14 = $request->file('file_kinerja_kompetensi_14')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
            } else {
                $file_kinerja_kompetensi_14 = $RecordData->file_kinerja_kompetensi_14;
            }

            $kinerja_kompetensi_15 = $request->get('kinerja_kompetensi_15');
            if ($request->hasFile('file_kinerja_kompetensi_15')) {
                if ($RecordData->file_kinerja_kompetensi_15 && file_exists(storage_path('app/public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_15))) {
                    \Storage::delete('public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_15);
                }
                $file_kinerja_kompetensi_15 = $request->file('file_kinerja_kompetensi_15')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
            } else {
                $file_kinerja_kompetensi_15 = $RecordData->file_kinerja_kompetensi_15;
            }

            $kinerja_kompetensi_16 = $request->get('kinerja_kompetensi_16');
            if ($request->hasFile('file_kinerja_kompetensi_16')) {
                if ($RecordData->file_kinerja_kompetensi_16 && file_exists(storage_path('app/public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_16))) {
                    \Storage::delete('public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_16);
                }
                $file_kinerja_kompetensi_16 = $request->file('file_kinerja_kompetensi_16')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
            } else {
                $file_kinerja_kompetensi_16 = $RecordData->file_kinerja_kompetensi_16;
            }
            $kinerja_kompetensi_17 = $request->get('kinerja_kompetensi_17');
            if ($request->hasFile('file_kinerja_kompetensi_17')) {
                if ($RecordData->file_kinerja_kompetensi_17 && file_exists(storage_path('app/public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_17))) {
                    \Storage::delete('public/uploads/wareksatu/koorkemahasiswaandanalumni/' . $RecordData->file_kinerja_kompetensi_17);
                }
                $file_kinerja_kompetensi_17 = $request->file('file_kinerja_kompetensi_17')->store('uploads/wareksatu/koorkemahasiswaandanalumni', 'public');
            } else {
                $file_kinerja_kompetensi_17 = $RecordData->file_kinerja_kompetensi_17;
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
                'kinerja_kompetensi_15' => $kinerja_kompetensi_15,
                'file_kinerja_kompetensi_15' => $file_kinerja_kompetensi_15,
                'kinerja_kompetensi_16' => $kinerja_kompetensi_16,
                'file_kinerja_kompetensi_16' => $file_kinerja_kompetensi_16,
                'kinerja_kompetensi_17' => $kinerja_kompetensi_17,
                'file_kinerja_kompetensi_17' => $file_kinerja_kompetensi_17,
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
            toast('Update Point Koor. Kemahasiswaan dan Alumni successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point Koor. Kemahasiswaan dan Alumni fail :)', 'error');
            return redirect()->back();
        }
    }

    public function raport($user_id)
    {
        $DataUser = DB::table('users')
            ->leftJoin('koor_kemahasiswaan_dan_alumni', 'users.id', '=', 'koor_kemahasiswaan_dan_alumni.user_id')
            ->select(
                'users.name',
                'users.email',
                'koor_kemahasiswaan_dan_alumni.user_id',
                'koor_kemahasiswaan_dan_alumni.output_total_sementara_kinerja_perilaku',
                'koor_kemahasiswaan_dan_alumni.output_total_sementara_kinerja_kompetensi',
            )
            ->where('koor_kemahasiswaan_dan_alumni.user_id', $user_id)
            ->first();

        // dd($DataUser);
        if (!empty($DataUser->user_id)) {
            return view('itisar.WarekSatu.KoorKemahasiswaanDanAlumni.raport', compact('DataUser'));
        } else {
            return view('menu.menu-empty');
        }
    }
}
