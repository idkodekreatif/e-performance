<?php

namespace App\Http\Controllers\Itisar;

use App\Http\Controllers\Controller;
use App\Models\KasubRisbang;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KasubRisbangController extends Controller
{
    public function create()
    {
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm', 'warek2', 'upt', 'baak', 'keuangan', 'lpm', 'risbang', 'gizi', 'perawat', 'bidan', 'manajemen', 'akuntansi', 'bau', 'warek1', 'rektor', 'ypsdmit'
        ])->get();
        return view('itisar.kasubRisbang.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file_kinerja_kompetensi_1' => 'mimes:pdf',
            'file_kinerja_kompetensi_2' => 'mimes:pdf',
            'file_kinerja_kompetensi_3' => 'mimes:pdf',
            'file_kinerja_kompetensi_4' => 'mimes:pdf',
            'file_kinerja_kompetensi_5' => 'mimes:pdf',
            'file_kinerja_kompetensi_6' => 'mimes:pdf',
            'file_kinerja_kompetensi_7' => 'mimes:pdf',
            'file_kinerja_kompetensi_8' => 'mimes:pdf',
            'file_kinerja_kompetensi_9' => 'mimes:pdf',
            'file_kinerja_kompetensi_10' => 'mimes:pdf',
            'file_kinerja_kompetensi_11' => 'mimes:pdf',
        ]);

        DB::beginTransaction();
        try {
            $kasubrisbang = new KasubRisbang();
            $kasubrisbang->q1 = $request->get('q1');
            $kasubrisbang->q2 = $request->get('q2');
            $kasubrisbang->q3 = $request->get('q3');
            $kasubrisbang->q4 = $request->get('q4');
            $kasubrisbang->q5 = $request->get('q5');
            $kasubrisbang->q6 = $request->get('q6');
            $kasubrisbang->output_point_1 = $request->get('output_point_1');
            $kasubrisbang->output_point_2 = $request->get('output_point_2');
            $kasubrisbang->output_point_3 = $request->get('output_point_3');
            $kasubrisbang->output_point_4 = $request->get('output_point_4');
            $kasubrisbang->output_point_5 = $request->get('output_point_5');
            $kasubrisbang->output_total_point_kinerja_perilaku = $request->get('output_total_point_kinerja_perilaku');
            $kasubrisbang->output_total_nilai_rata_rata_kinerja_perilaku = $request->get('output_total_nilai_rata_rata_kinerja_perilaku');
            $kasubrisbang->output_total_sementara_kinerja_perilaku = $request->get('output_total_sementara_kinerja_perilaku');

            $kasubrisbang->kinerja_kompetensi_1 = $request->get('kinerja_kompetensi_1');
            if ($request->hasFile('file_kinerja_kompetensi_1')) {
                $fileName = $request->file('file_kinerja_kompetensi_1')->store('uploads/risbang/kasubrisbang', 'public');
                $kasubrisbang->file_kinerja_kompetensi_1 = $fileName;
            }
            $kasubrisbang->kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                $fileName = $request->file('file_kinerja_kompetensi_2')->store('uploads/risbang/kasubrisbang', 'public');
                $kasubrisbang->file_kinerja_kompetensi_2 = $fileName;
            }
            $kasubrisbang->kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                $fileName = $request->file('file_kinerja_kompetensi_3')->store('uploads/risbang/kasubrisbang', 'public');
                $kasubrisbang->file_kinerja_kompetensi_3 = $fileName;
            }
            $kasubrisbang->kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                $fileName = $request->file('file_kinerja_kompetensi_4')->store('uploads/risbang/kasubrisbang', 'public');
                $kasubrisbang->file_kinerja_kompetensi_4 = $fileName;
            }
            $kasubrisbang->kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                $fileName = $request->file('file_kinerja_kompetensi_5')->store('uploads/risbang/kasubrisbang', 'public');
                $kasubrisbang->file_kinerja_kompetensi_5 = $fileName;
            }
            $kasubrisbang->kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                $fileName = $request->file('file_kinerja_kompetensi_6')->store('uploads/risbang/kasubrisbang', 'public');
                $kasubrisbang->file_kinerja_kompetensi_6 = $fileName;
            }
            $kasubrisbang->kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                $fileName = $request->file('file_kinerja_kompetensi_7')->store('uploads/risbang/kasubrisbang', 'public');
                $kasubrisbang->file_kinerja_kompetensi_7 = $fileName;
            }
            $kasubrisbang->kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('file_kinerja_kompetensi_8')) {
                $fileName = $request->file('file_kinerja_kompetensi_8')->store('uploads/risbang/kasubrisbang', 'public');
                $kasubrisbang->file_kinerja_kompetensi_8 = $fileName;
            }
            $kasubrisbang->kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('file_kinerja_kompetensi_9')) {
                $fileName = $request->file('file_kinerja_kompetensi_9')->store('uploads/risbang/kasubrisbang', 'public');
                $kasubrisbang->file_kinerja_kompetensi_9 = $fileName;
            }
            $kasubrisbang->kinerja_kompetensi_10 = $request->get('kinerja_kompetensi_10');
            if ($request->hasFile('file_kinerja_kompetensi_10')) {
                $fileName = $request->file('file_kinerja_kompetensi_10')->store('uploads/risbang/kasubrisbang', 'public');
                $kasubrisbang->file_kinerja_kompetensi_10 = $fileName;
            }
            $kasubrisbang->kinerja_kompetensi_11 = $request->get('kinerja_kompetensi_11');
            if ($request->hasFile('file_kinerja_kompetensi_11')) {
                $fileName = $request->file('file_kinerja_kompetensi_11')->store('uploads/risbang/kasubrisbang', 'public');
                $kasubrisbang->file_kinerja_kompetensi_11 = $fileName;
            }

            $kasubrisbang->output_point_kinerja_kompetensi_1 = $request->get('output_point_kinerja_kompetensi_1');
            $kasubrisbang->output_point_kinerja_kompetensi_2 = $request->get('output_point_kinerja_kompetensi_2');
            $kasubrisbang->output_point_kinerja_kompetensi_3 = $request->get('output_point_kinerja_kompetensi_3');
            $kasubrisbang->output_point_kinerja_kompetensi_4 = $request->get('output_point_kinerja_kompetensi_4');
            $kasubrisbang->output_point_kinerja_kompetensi_5 = $request->get('output_point_kinerja_kompetensi_5');
            $kasubrisbang->output_total_point_kinerja_kompetensi = $request->get('output_total_point_kinerja_kompetensi');
            $kasubrisbang->output_total_nilai_rata_rata_kinerja_kompetensi = $request->get('output_total_nilai_rata_rata_kinerja_kompetensi');
            $kasubrisbang->output_total_sementara_kinerja_kompetensi = $request->get('output_total_sementara_kinerja_kompetensi');

            $kasubrisbang->user_id = $request->get('UserId');
            $kasubrisbang->save();

            DB::commit();
            toast('Create Point Kasub Risbang successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point Kasub Risbang fail :)', 'error');
            return redirect()->back();
        }
    }

    public function edit()
    {
        $dataMenu = Menu::first();
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm', 'warek2', 'upt', 'baak', 'keuangan', 'lpm', 'risbang', 'gizi', 'perawat', 'bidan', 'manajemen', 'akuntansi', 'bau', 'warek1', 'rektor', 'ypsdmit'
        ])->get();

        if (empty($dataMenu)) {
            return redirect()->back();
        } elseif ($dataMenu->control_menu == 0) {
            return view('menu.disabled');
        }
        return view('itisar.kasubRisbang.searchdata', compact('users'));
    }

    public function dataSearch(Request $request)
    {
        $data = KasubRisbang::where('user_id', '=', $request->id)->first();

        return view('itisar.kasubRisbang.edit', ['data' => $data]);
    }

    public function update(Request $request, $PointId)
    {
        // Validation file upload
        $request->validate([
            'file_kinerja_kompetensi_1' => 'mimes:pdf',
            'file_kinerja_kompetensi_2' => 'mimes:pdf',
            'file_kinerja_kompetensi_3' => 'mimes:pdf',
            'file_kinerja_kompetensi_4' => 'mimes:pdf',
            'file_kinerja_kompetensi_5' => 'mimes:pdf',
            'file_kinerja_kompetensi_6' => 'mimes:pdf',
            'file_kinerja_kompetensi_7' => 'mimes:pdf',
            'file_kinerja_kompetensi_8' => 'mimes:pdf',
            'file_kinerja_kompetensi_9' => 'mimes:pdf',
            'file_kinerja_kompetensi_10' => 'mimes:pdf',
            'file_kinerja_kompetensi_11' => 'mimes:pdf',
        ]);
        DB::beginTransaction();
        try {
            $RecordData =  KasubRisbang::where('user_id', $PointId)->firstOrFail();

            $q1 = $request->get('q1');
            $q2 = $request->get('q2');
            $q3 = $request->get('q3');
            $q4 = $request->get('q4');
            $q5 = $request->get('q5');
            $q6 = $request->get('q6');

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
                if ($RecordData->file_kinerja_kompetensi_1 && file_exists(storage_path('app/public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_1))) {
                    \Storage::delete('public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_1);
                }
                $file_kinerja_kompetensi_1 = $request->file('file_kinerja_kompetensi_1')->store('uploads/risbang/kasubrisbang', 'public');
            } else {
                $file_kinerja_kompetensi_1 = $RecordData->file_kinerja_kompetensi_1;
            }

            $kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                if ($RecordData->file_kinerja_kompetensi_2 && file_exists(storage_path('app/public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_2))) {
                    \Storage::delete('public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_2);
                }
                $file_kinerja_kompetensi_2 = $request->file('file_kinerja_kompetensi_2')->store('uploads/risbang/kasubrisbang', 'public');
            } else {
                $file_kinerja_kompetensi_2 = $RecordData->file_kinerja_kompetensi_2;
            }

            $kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                if ($RecordData->file_kinerja_kompetensi_3 && file_exists(storage_path('app/public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_3))) {
                    \Storage::delete('public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_3);
                }
                $file_kinerja_kompetensi_3 = $request->file('file_kinerja_kompetensi_3')->store('uploads/risbang/kasubrisbang', 'public');
            } else {
                $file_kinerja_kompetensi_3 = $RecordData->file_kinerja_kompetensi_3;
            }

            $kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                if ($RecordData->file_kinerja_kompetensi_4 && file_exists(storage_path('app/public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_4))) {
                    \Storage::delete('public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_4);
                }
                $file_kinerja_kompetensi_4 = $request->file('file_kinerja_kompetensi_4')->store('uploads/risbang/kasubrisbang', 'public');
            } else {
                $file_kinerja_kompetensi_4 = $RecordData->file_kinerja_kompetensi_4;
            }

            $kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                if ($RecordData->file_kinerja_kompetensi_5 && file_exists(storage_path('app/public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_5))) {
                    \Storage::delete('public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_5);
                }
                $file_kinerja_kompetensi_5 = $request->file('file_kinerja_kompetensi_5')->store('uploads/risbang/kasubrisbang', 'public');
            } else {
                $file_kinerja_kompetensi_5 = $RecordData->file_kinerja_kompetensi_5;
            }

            $kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                if ($RecordData->file_kinerja_kompetensi_6 && file_exists(storage_path('app/public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_6))) {
                    \Storage::delete('public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_6);
                }
                $file_kinerja_kompetensi_6 = $request->file('file_kinerja_kompetensi_6')->store('uploads/risbang/kasubrisbang', 'public');
            } else {
                $file_kinerja_kompetensi_6 = $RecordData->file_kinerja_kompetensi_6;
            }

            $kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                if ($RecordData->file_kinerja_kompetensi_7 && file_exists(storage_path('app/public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_7))) {
                    \Storage::delete('public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_7);
                }
                $file_kinerja_kompetensi_7 = $request->file('file_kinerja_kompetensi_7')->store('uploads/risbang/kasubrisbang', 'public');
            } else {
                $file_kinerja_kompetensi_7 = $RecordData->file_kinerja_kompetensi_7;
            }

            $kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('file_kinerja_kompetensi_8')) {
                if ($RecordData->file_kinerja_kompetensi_8 && file_exists(storage_path('app/public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_8))) {
                    \Storage::delete('public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_8);
                }
                $file_kinerja_kompetensi_8 = $request->file('file_kinerja_kompetensi_8')->store('uploads/risbang/kasubrisbang', 'public');
            } else {
                $file_kinerja_kompetensi_8 = $RecordData->file_kinerja_kompetensi_8;
            }

            $kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('file_kinerja_kompetensi_9')) {
                if ($RecordData->file_kinerja_kompetensi_9 && file_exists(storage_path('app/public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_9))) {
                    \Storage::delete('public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_9);
                }
                $file_kinerja_kompetensi_9 = $request->file('file_kinerja_kompetensi_9')->store('uploads/risbang/kasubrisbang', 'public');
            } else {
                $file_kinerja_kompetensi_9 = $RecordData->file_kinerja_kompetensi_9;
            }

            $kinerja_kompetensi_10 = $request->get('kinerja_kompetensi_10');
            if ($request->hasFile('file_kinerja_kompetensi_10')) {
                if ($RecordData->file_kinerja_kompetensi_10 && file_exists(storage_path('app/public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_10))) {
                    \Storage::delete('public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_10);
                }
                $file_kinerja_kompetensi_10 = $request->file('file_kinerja_kompetensi_10')->store('uploads/risbang/kasubrisbang', 'public');
            } else {
                $file_kinerja_kompetensi_10 = $RecordData->file_kinerja_kompetensi_10;
            }

            $kinerja_kompetensi_11 = $request->get('kinerja_kompetensi_11');
            if ($request->hasFile('file_kinerja_kompetensi_11')) {
                if ($RecordData->file_kinerja_kompetensi_11 && file_exists(storage_path('app/public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_11))) {
                    \Storage::delete('public/uploads/risbang/kasubrisbang/' . $RecordData->file_kinerja_kompetensi_11);
                }
                $file_kinerja_kompetensi_11 = $request->file('file_kinerja_kompetensi_11')->store('uploads/risbang/kasubrisbang', 'public');
            } else {
                $file_kinerja_kompetensi_11 = $RecordData->file_kinerja_kompetensi_11;
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
                'q1' => $q1,
                'q2' => $q2,
                'q3' => $q3,
                'q4' => $q4,
                'q5' => $q5,
                'q6' => $q6,
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
            toast('Update Point KaSub Risbang successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point KaSub Risbang fail :)', 'error');
            return redirect()->back();
        }
    }

    public function raport($user_id)
    {
        $DataUser = DB::table('users')
            ->leftJoin('ikbis_kasub_risbang', 'users.id', '=', 'ikbis_kasub_risbang.user_id')
            ->select(
                'users.name',
                'users.email',
                'ikbis_kasub_risbang.user_id',
                'ikbis_kasub_risbang.output_total_sementara_kinerja_perilaku',
                'ikbis_kasub_risbang.output_total_sementara_kinerja_kompetensi',
            )
            ->where('ikbis_kasub_risbang.user_id', $user_id)
            ->first();

        // dd($DataUser);
        if (!empty($DataUser->user_id)) {
            return view('itisar.kasubRisbang.raport', compact('DataUser'));
        } else {
            return view('menu.menu-empty');
        }
    }

    public function detailPoin($userId)
    {
        $data = KasubRisbang::where('user_id', '=', $userId)->first();

        return view('itisar.kasubRisbang.detailPoin', ['data' => $data]);
    }

    public function searchRaport()
    {
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm', 'warek2', 'upt', 'baak', 'keuangan', 'lpm', 'risbang', 'gizi', 'perawat', 'bidan', 'manajemen', 'akuntansi', 'bau', 'warek1', 'rektor', 'ypsdmit'
        ])->get();
        return view('itisar.kasubRisbang.searchRaport', compact('users'));
    }

    public function resultRaport(Request $request)
    {
        $DataUser = DB::table('users')
            ->leftJoin('ikbis_kasub_risbang', 'users.id', '=', 'ikbis_kasub_risbang.user_id')
            ->select(
                'users.name',
                'users.email',
                'ikbis_kasub_risbang.user_id',
                'ikbis_kasub_risbang.output_total_sementara_kinerja_perilaku',
                'ikbis_kasub_risbang.output_total_sementara_kinerja_kompetensi',
            )
            ->where('ikbis_kasub_risbang.user_id', '=', $request->id)
            ->first();

        // dd($DataUser);
        if (!empty($DataUser)) {
            return view('itisar.kasubRisbang.raport', compact('DataUser'));
        } else {
            return view('menu.menu-empty');
        }
    }
}
