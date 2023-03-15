<?php

namespace App\Http\Controllers\Itisar\Bau;

use App\Http\Controllers\Controller;
use App\Models\KasubBiroKepegawaian;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KasubBiroKepegawaianController extends Controller
{
    public function create()
    {
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm',
        ])->get();
        return view('itisar.bau.KasubBiroKepegawaian.create', compact('users'));
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
        ]);

        DB::beginTransaction();
        try {
            $kasubbirokepegawaian = new KasubBiroKepegawaian();
            $kasubbirokepegawaian->Point1_1 = $request->get('Point1_1');
            $kasubbirokepegawaian->Point1_2 = $request->get('Point1_2');
            $kasubbirokepegawaian->Point1_3 = $request->get('Point1_3');
            $kasubbirokepegawaian->Point1_4 = $request->get('Point1_4');
            $kasubbirokepegawaian->Point1_5 = $request->get('Point1_5');
            $kasubbirokepegawaian->Point2_1 = $request->get('Point2_1');
            $kasubbirokepegawaian->Point2_2 = $request->get('Point2_2');
            $kasubbirokepegawaian->Point2_3 = $request->get('Point2_3');
            $kasubbirokepegawaian->Point2_4 = $request->get('Point2_4');
            $kasubbirokepegawaian->Point2_5 = $request->get('Point2_5');
            $kasubbirokepegawaian->Point3_1 = $request->get('Point3_1');
            $kasubbirokepegawaian->Point3_2 = $request->get('Point3_2');
            $kasubbirokepegawaian->Point3_3 = $request->get('Point3_3');
            $kasubbirokepegawaian->Point3_4 = $request->get('Point3_4');
            $kasubbirokepegawaian->Point3_5 = $request->get('Point3_5');
            $kasubbirokepegawaian->Point4_1 = $request->get('Point4_1');
            $kasubbirokepegawaian->Point4_2 = $request->get('Point4_2');
            $kasubbirokepegawaian->Point4_3 = $request->get('Point4_3');
            $kasubbirokepegawaian->Point4_4 = $request->get('Point4_4');
            $kasubbirokepegawaian->Point4_5 = $request->get('Point4_5');
            $kasubbirokepegawaian->Point5_1 = $request->get('Point5_1');
            $kasubbirokepegawaian->Point5_2 = $request->get('Point5_2');
            $kasubbirokepegawaian->Point5_3 = $request->get('Point5_3');
            $kasubbirokepegawaian->Point5_4 = $request->get('Point5_4');
            $kasubbirokepegawaian->Point5_5 = $request->get('Point5_5');
            $kasubbirokepegawaian->Point6_1 = $request->get('Point6_1');
            $kasubbirokepegawaian->Point6_2 = $request->get('Point6_2');
            $kasubbirokepegawaian->Point6_3 = $request->get('Point6_3');
            $kasubbirokepegawaian->Point6_4 = $request->get('Point6_4');
            $kasubbirokepegawaian->Point6_5 = $request->get('Point6_5');
            $kasubbirokepegawaian->output_point_1 = $request->get('output_point_1');
            $kasubbirokepegawaian->output_point_2 = $request->get('output_point_2');
            $kasubbirokepegawaian->output_point_3 = $request->get('output_point_3');
            $kasubbirokepegawaian->output_point_4 = $request->get('output_point_4');
            $kasubbirokepegawaian->output_point_5 = $request->get('output_point_5');
            $kasubbirokepegawaian->output_total_point_kinerja_perilaku = $request->get('output_total_point_kinerja_perilaku');
            $kasubbirokepegawaian->output_total_nilai_rata_rata_kinerja_perilaku = $request->get('output_total_nilai_rata_rata_kinerja_perilaku');
            $kasubbirokepegawaian->output_total_sementara_kinerja_perilaku = $request->get('output_total_sementara_kinerja_perilaku');

            $kasubbirokepegawaian->kinerja_kompetensi_1 = $request->get('kinerja_kompetensi_1');
            if ($request->hasFile('file_kinerja_kompetensi_1')) {
                $fileName = $request->file('file_kinerja_kompetensi_1')->store('uploads/bau/kasubbirokepegawaian', 'public');
                $kasubbirokepegawaian->file_kinerja_kompetensi_1 = $fileName;
            }
            $kasubbirokepegawaian->kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                $fileName = $request->file('file_kinerja_kompetensi_2')->store('uploads/bau/kasubbirokepegawaian', 'public');
                $kasubbirokepegawaian->file_kinerja_kompetensi_2 = $fileName;
            }
            $kasubbirokepegawaian->kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                $fileName = $request->file('file_kinerja_kompetensi_3')->store('uploads/bau/kasubbirokepegawaian', 'public');
                $kasubbirokepegawaian->file_kinerja_kompetensi_3 = $fileName;
            }
            $kasubbirokepegawaian->kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                $fileName = $request->file('file_kinerja_kompetensi_4')->store('uploads/bau/kasubbirokepegawaian', 'public');
                $kasubbirokepegawaian->file_kinerja_kompetensi_4 = $fileName;
            }
            $kasubbirokepegawaian->kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                $fileName = $request->file('file_kinerja_kompetensi_5')->store('uploads/bau/kasubbirokepegawaian', 'public');
                $kasubbirokepegawaian->file_kinerja_kompetensi_5 = $fileName;
            }
            $kasubbirokepegawaian->kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                $fileName = $request->file('file_kinerja_kompetensi_6')->store('uploads/bau/kasubbirokepegawaian', 'public');
                $kasubbirokepegawaian->file_kinerja_kompetensi_6 = $fileName;
            }
            $kasubbirokepegawaian->kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                $fileName = $request->file('file_kinerja_kompetensi_7')->store('uploads/bau/kasubbirokepegawaian', 'public');
                $kasubbirokepegawaian->file_kinerja_kompetensi_7 = $fileName;
            }
            $kasubbirokepegawaian->kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('file_kinerja_kompetensi_8')) {
                $fileName = $request->file('file_kinerja_kompetensi_8')->store('uploads/bau/kasubbirokepegawaian', 'public');
                $kasubbirokepegawaian->file_kinerja_kompetensi_8 = $fileName;
            }
            $kasubbirokepegawaian->kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('file_kinerja_kompetensi_9')) {
                $fileName = $request->file('file_kinerja_kompetensi_9')->store('uploads/bau/kasubbirokepegawaian', 'public');
                $kasubbirokepegawaian->file_kinerja_kompetensi_9 = $fileName;
            }
            $kasubbirokepegawaian->kinerja_kompetensi_10 = $request->get('kinerja_kompetensi_10');
            if ($request->hasFile('file_kinerja_kompetensi_10')) {
                $fileName = $request->file('file_kinerja_kompetensi_10')->store('uploads/bau/kasubbirokepegawaian', 'public');
                $kasubbirokepegawaian->file_kinerja_kompetensi_10 = $fileName;
            }
            $kasubbirokepegawaian->kinerja_kompetensi_11 = $request->get('kinerja_kompetensi_11');
            if ($request->hasFile('file_kinerja_kompetensi_11')) {
                $fileName = $request->file('file_kinerja_kompetensi_11')->store('uploads/bau/kasubbirokepegawaian', 'public');
                $kasubbirokepegawaian->file_kinerja_kompetensi_11 = $fileName;
            }
            $kasubbirokepegawaian->kinerja_kompetensi_12 = $request->get('kinerja_kompetensi_12');
            if ($request->hasFile('file_kinerja_kompetensi_12')) {
                $fileName = $request->file('file_kinerja_kompetensi_12')->store('uploads/bau/kasubbirokepegawaian', 'public');
                $kasubbirokepegawaian->file_kinerja_kompetensi_12 = $fileName;
            }
            $kasubbirokepegawaian->kinerja_kompetensi_13 = $request->get('kinerja_kompetensi_13');
            if ($request->hasFile('file_kinerja_kompetensi_13')) {
                $fileName = $request->file('file_kinerja_kompetensi_13')->store('uploads/bau/kasubbirokepegawaian', 'public');
                $kasubbirokepegawaian->file_kinerja_kompetensi_13 = $fileName;
            }
            $kasubbirokepegawaian->kinerja_kompetensi_14 = $request->get('kinerja_kompetensi_14');
            if ($request->hasFile('file_kinerja_kompetensi_14')) {
                $fileName = $request->file('file_kinerja_kompetensi_14')->store('uploads/bau/kasubbirokepegawaian', 'public');
                $kasubbirokepegawaian->file_kinerja_kompetensi_14 = $fileName;
            }
            $kasubbirokepegawaian->kinerja_kompetensi_15 = $request->get('kinerja_kompetensi_15');
            if ($request->hasFile('file_kinerja_kompetensi_15')) {
                $fileName = $request->file('file_kinerja_kompetensi_15')->store('uploads/bau/kasubbirokepegawaian', 'public');
                $kasubbirokepegawaian->file_kinerja_kompetensi_15 = $fileName;
            }

            $kasubbirokepegawaian->output_point_kinerja_kompetensi_1 = $request->get('output_point_kinerja_kompetensi_1');
            $kasubbirokepegawaian->output_point_kinerja_kompetensi_2 = $request->get('output_point_kinerja_kompetensi_2');
            $kasubbirokepegawaian->output_point_kinerja_kompetensi_3 = $request->get('output_point_kinerja_kompetensi_3');
            $kasubbirokepegawaian->output_point_kinerja_kompetensi_4 = $request->get('output_point_kinerja_kompetensi_4');
            $kasubbirokepegawaian->output_point_kinerja_kompetensi_5 = $request->get('output_point_kinerja_kompetensi_5');
            $kasubbirokepegawaian->output_total_point_kinerja_kompetensi = $request->get('output_total_point_kinerja_kompetensi');
            $kasubbirokepegawaian->output_total_nilai_rata_rata_kinerja_kompetensi = $request->get('output_total_nilai_rata_rata_kinerja_kompetensi');
            $kasubbirokepegawaian->output_total_sementara_kinerja_kompetensi = $request->get('output_total_sementara_kinerja_kompetensi');

            $kasubbirokepegawaian->user_id = $request->get('UserId');
            $kasubbirokepegawaian->save();

            DB::commit();
            toast('Create Point Ka. Sub. Biro Kepegawaian successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point Ka. Sub. Biro Kepegawaian fail :)', 'error');
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
        return view('itisar.bau.KasubBiroKepegawaian.searchdata', compact('users'));
    }

    public function dataSearch(Request $request)
    {
        $data = KasubBirokepegawaian::where('user_id', '=', $request->id)->firstOrFail();

        return view('itisar.bau.KasubBiroKepegawaian.edit', ['data' => $data]);
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
            $RecordData =  KasubBirokepegawaian::where('user_id', $PointId)->firstOrFail();

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
                if ($RecordData->file_kinerja_kompetensi_1 && file_exists(storage_path('app/public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_1))) {
                    \Storage::delete('public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_1);
                }
                $file_kinerja_kompetensi_1 = $request->file('file_kinerja_kompetensi_1')->store('uploads/bau/kasubbirokepegawaian', 'public');
            } else {
                $file_kinerja_kompetensi_1 = $RecordData->file_kinerja_kompetensi_1;
            }

            $kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                if ($RecordData->file_kinerja_kompetensi_2 && file_exists(storage_path('app/public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_2))) {
                    \Storage::delete('public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_2);
                }
                $file_kinerja_kompetensi_2 = $request->file('file_kinerja_kompetensi_2')->store('uploads/bau/kasubbirokepegawaian', 'public');
            } else {
                $file_kinerja_kompetensi_2 = $RecordData->file_kinerja_kompetensi_2;
            }

            $kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                if ($RecordData->file_kinerja_kompetensi_3 && file_exists(storage_path('app/public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_3))) {
                    \Storage::delete('public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_3);
                }
                $file_kinerja_kompetensi_3 = $request->file('file_kinerja_kompetensi_3')->store('uploads/bau/kasubbirokepegawaian', 'public');
            } else {
                $file_kinerja_kompetensi_3 = $RecordData->file_kinerja_kompetensi_3;
            }

            $kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                if ($RecordData->file_kinerja_kompetensi_4 && file_exists(storage_path('app/public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_4))) {
                    \Storage::delete('public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_4);
                }
                $file_kinerja_kompetensi_4 = $request->file('file_kinerja_kompetensi_4')->store('uploads/bau/kasubbirokepegawaian', 'public');
            } else {
                $file_kinerja_kompetensi_4 = $RecordData->file_kinerja_kompetensi_4;
            }

            $kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                if ($RecordData->file_kinerja_kompetensi_5 && file_exists(storage_path('app/public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_5))) {
                    \Storage::delete('public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_5);
                }
                $file_kinerja_kompetensi_5 = $request->file('file_kinerja_kompetensi_5')->store('uploads/bau/kasubbirokepegawaian', 'public');
            } else {
                $file_kinerja_kompetensi_5 = $RecordData->file_kinerja_kompetensi_5;
            }

            $kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                if ($RecordData->file_kinerja_kompetensi_6 && file_exists(storage_path('app/public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_6))) {
                    \Storage::delete('public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_6);
                }
                $file_kinerja_kompetensi_6 = $request->file('file_kinerja_kompetensi_6')->store('uploads/bau/kasubbirokepegawaian', 'public');
            } else {
                $file_kinerja_kompetensi_6 = $RecordData->file_kinerja_kompetensi_6;
            }

            $kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                if ($RecordData->file_kinerja_kompetensi_7 && file_exists(storage_path('app/public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_7))) {
                    \Storage::delete('public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_7);
                }
                $file_kinerja_kompetensi_7 = $request->file('file_kinerja_kompetensi_7')->store('uploads/bau/kasubbirokepegawaian', 'public');
            } else {
                $file_kinerja_kompetensi_7 = $RecordData->file_kinerja_kompetensi_7;
            }

            $kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('file_kinerja_kompetensi_8')) {
                if ($RecordData->file_kinerja_kompetensi_8 && file_exists(storage_path('app/public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_8))) {
                    \Storage::delete('public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_8);
                }
                $file_kinerja_kompetensi_8 = $request->file('file_kinerja_kompetensi_8')->store('uploads/bau/kasubbirokepegawaian', 'public');
            } else {
                $file_kinerja_kompetensi_8 = $RecordData->file_kinerja_kompetensi_8;
            }

            $kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('file_kinerja_kompetensi_9')) {
                if ($RecordData->file_kinerja_kompetensi_9 && file_exists(storage_path('app/public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_9))) {
                    \Storage::delete('public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_9);
                }
                $file_kinerja_kompetensi_9 = $request->file('file_kinerja_kompetensi_9')->store('uploads/bau/kasubbirokepegawaian', 'public');
            } else {
                $file_kinerja_kompetensi_9 = $RecordData->file_kinerja_kompetensi_9;
            }

            $kinerja_kompetensi_10 = $request->get('kinerja_kompetensi_10');
            if ($request->hasFile('file_kinerja_kompetensi_10')) {
                if ($RecordData->file_kinerja_kompetensi_10 && file_exists(storage_path('app/public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_10))) {
                    \Storage::delete('public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_10);
                }
                $file_kinerja_kompetensi_10 = $request->file('file_kinerja_kompetensi_10')->store('uploads/bau/kasubbirokepegawaian', 'public');
            } else {
                $file_kinerja_kompetensi_10 = $RecordData->file_kinerja_kompetensi_10;
            }

            $kinerja_kompetensi_11 = $request->get('kinerja_kompetensi_11');
            if ($request->hasFile('file_kinerja_kompetensi_11')) {
                if ($RecordData->file_kinerja_kompetensi_11 && file_exists(storage_path('app/public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_11))) {
                    \Storage::delete('public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_11);
                }
                $file_kinerja_kompetensi_11 = $request->file('file_kinerja_kompetensi_11')->store('uploads/bau/kasubbirokepegawaian', 'public');
            } else {
                $file_kinerja_kompetensi_11 = $RecordData->file_kinerja_kompetensi_11;
            }

            $kinerja_kompetensi_12 = $request->get('kinerja_kompetensi_12');
            if ($request->hasFile('file_kinerja_kompetensi_12')) {
                if ($RecordData->file_kinerja_kompetensi_12 && file_exists(storage_path('app/public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_12))) {
                    \Storage::delete('public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_12);
                }
                $file_kinerja_kompetensi_12 = $request->file('file_kinerja_kompetensi_12')->store('uploads/bau/kasubbirokepegawaian', 'public');
            } else {
                $file_kinerja_kompetensi_12 = $RecordData->file_kinerja_kompetensi_12;
            }

            $kinerja_kompetensi_13 = $request->get('kinerja_kompetensi_13');
            if ($request->hasFile('file_kinerja_kompetensi_13')) {
                if ($RecordData->file_kinerja_kompetensi_13 && file_exists(storage_path('app/public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_13))) {
                    \Storage::delete('public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_13);
                }
                $file_kinerja_kompetensi_13 = $request->file('file_kinerja_kompetensi_13')->store('uploads/bau/kasubbirokepegawaian', 'public');
            } else {
                $file_kinerja_kompetensi_13 = $RecordData->file_kinerja_kompetensi_13;
            }

            $kinerja_kompetensi_14 = $request->get('kinerja_kompetensi_14');
            if ($request->hasFile('file_kinerja_kompetensi_14')) {
                if ($RecordData->file_kinerja_kompetensi_14 && file_exists(storage_path('app/public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_14))) {
                    \Storage::delete('public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_14);
                }
                $file_kinerja_kompetensi_14 = $request->file('file_kinerja_kompetensi_14')->store('uploads/bau/kasubbirokepegawaian', 'public');
            } else {
                $file_kinerja_kompetensi_14 = $RecordData->file_kinerja_kompetensi_14;
            }

            $kinerja_kompetensi_15 = $request->get('kinerja_kompetensi_15');
            if ($request->hasFile('file_kinerja_kompetensi_15')) {
                if ($RecordData->file_kinerja_kompetensi_15 && file_exists(storage_path('app/public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_15))) {
                    \Storage::delete('public/uploads/bau/kasubbirokepegawaian/' . $RecordData->file_kinerja_kompetensi_15);
                }
                $file_kinerja_kompetensi_15 = $request->file('file_kinerja_kompetensi_15')->store('uploads/bau/kasubbirokepegawaian', 'public');
            } else {
                $file_kinerja_kompetensi_15 = $RecordData->file_kinerja_kompetensi_15;
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
            toast('Update Point Ka. Sub. Biro Kepegawaian successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point Ka. Sub. Biro Kepegawaian fail :)', 'error');
            return redirect()->back();
        }
    }

    public function raport($user_id)
    {
        $DataUser = DB::table('users')
            ->leftJoin('kasub_biro_kepegawaian', 'users.id', '=', 'kasub_biro_kepegawaian.user_id')
            ->select(
                'users.name',
                'users.email',
                'kasub_biro_kepegawaian.user_id',
                'kasub_biro_kepegawaian.output_total_sementara_kinerja_perilaku',
                'kasub_biro_kepegawaian.output_total_sementara_kinerja_kompetensi',
            )
            ->where('kasub_biro_kepegawaian.user_id', $user_id)
            ->first();

        // dd($DataUser);
        if (!empty($DataUser->user_id)) {
            return view('itisar.bau.KasubBiroKepegawaian.raport', compact('DataUser'));
        } else {
            return view('menu.menu-empty');
        }
    }
}
