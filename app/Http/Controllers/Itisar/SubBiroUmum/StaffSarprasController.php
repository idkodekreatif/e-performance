<?php

namespace App\Http\Controllers\Itisar\SubBiroUmum;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\SubBiroUmum\StaffSarpras;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffSarprasController extends Controller
{
    public function create()
    {
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm', 'warek2', 'upt', 'baak', 'keuangan', 'lpm', 'risbang', 'gizi', 'perawat', 'bidan', 'manajemen', 'akuntansi', 'bau', 'warek1', 'rektor', 'ypsdmit'
        ])->get();
        return view('itisar.KaSubBiroUmum.StaffSarpras.create', compact('users'));
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
            'file_kinerja_kompetensi_12' => 'mimes:pdf',
            'file_kinerja_kompetensi_13' => 'mimes:pdf',
            'file_kinerja_kompetensi_14' => 'mimes:pdf',
            'file_kinerja_kompetensi_15' => 'mimes:pdf',
            'file_kinerja_kompetensi_16' => 'mimes:pdf',
            'file_kinerja_kompetensi_17' => 'mimes:pdf',
            'file_kinerja_kompetensi_18' => 'mimes:pdf',
            'file_kinerja_kompetensi_19' => 'mimes:pdf',
        ]);

        DB::beginTransaction();
        try {
            $staffsarpras = new StaffSarpras();
            $staffsarpras->q1 = $request->get('q1');
            $staffsarpras->q2 = $request->get('q2');
            $staffsarpras->q3 = $request->get('q3');
            $staffsarpras->q4 = $request->get('q4');
            $staffsarpras->q5 = $request->get('q5');
            $staffsarpras->q6 = $request->get('q6');
            $staffsarpras->output_point_1 = $request->get('output_point_1');
            $staffsarpras->output_point_2 = $request->get('output_point_2');
            $staffsarpras->output_point_3 = $request->get('output_point_3');
            $staffsarpras->output_point_4 = $request->get('output_point_4');
            $staffsarpras->output_point_5 = $request->get('output_point_5');
            $staffsarpras->output_total_point_kinerja_perilaku = $request->get('output_total_point_kinerja_perilaku');
            $staffsarpras->output_total_nilai_rata_rata_kinerja_perilaku = $request->get('output_total_nilai_rata_rata_kinerja_perilaku');
            $staffsarpras->output_total_sementara_kinerja_perilaku = $request->get('output_total_sementara_kinerja_perilaku');

            $staffsarpras->kinerja_kompetensi_1 = $request->get('kinerja_kompetensi_1');
            if ($request->hasFile('file_kinerja_kompetensi_1')) {
                $fileName = $request->file('file_kinerja_kompetensi_1')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_1 = $fileName;
            }
            $staffsarpras->kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                $fileName = $request->file('file_kinerja_kompetensi_2')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_2 = $fileName;
            }
            $staffsarpras->kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                $fileName = $request->file('file_kinerja_kompetensi_3')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_3 = $fileName;
            }
            $staffsarpras->kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                $fileName = $request->file('file_kinerja_kompetensi_4')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_4 = $fileName;
            }
            $staffsarpras->kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                $fileName = $request->file('file_kinerja_kompetensi_5')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_5 = $fileName;
            }
            $staffsarpras->kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                $fileName = $request->file('file_kinerja_kompetensi_6')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_6 = $fileName;
            }
            $staffsarpras->kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                $fileName = $request->file('file_kinerja_kompetensi_7')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_7 = $fileName;
            }
            $staffsarpras->kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('file_kinerja_kompetensi_8')) {
                $fileName = $request->file('file_kinerja_kompetensi_8')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_8 = $fileName;
            }
            $staffsarpras->kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('file_kinerja_kompetensi_9')) {
                $fileName = $request->file('file_kinerja_kompetensi_9')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_9 = $fileName;
            }
            $staffsarpras->kinerja_kompetensi_10 = $request->get('kinerja_kompetensi_10');
            if ($request->hasFile('file_kinerja_kompetensi_10')) {
                $fileName = $request->file('file_kinerja_kompetensi_10')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_10 = $fileName;
            }
            $staffsarpras->kinerja_kompetensi_11 = $request->get('kinerja_kompetensi_11');
            if ($request->hasFile('file_kinerja_kompetensi_11')) {
                $fileName = $request->file('file_kinerja_kompetensi_11')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_11 = $fileName;
            }
            $staffsarpras->kinerja_kompetensi_12 = $request->get('kinerja_kompetensi_12');
            if ($request->hasFile('file_kinerja_kompetensi_12')) {
                $fileName = $request->file('file_kinerja_kompetensi_12')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_12 = $fileName;
            }
            $staffsarpras->kinerja_kompetensi_13 = $request->get('kinerja_kompetensi_13');
            if ($request->hasFile('file_kinerja_kompetensi_13')) {
                $fileName = $request->file('file_kinerja_kompetensi_13')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_13 = $fileName;
            }
            $staffsarpras->kinerja_kompetensi_14 = $request->get('kinerja_kompetensi_14');
            if ($request->hasFile('file_kinerja_kompetensi_14')) {
                $fileName = $request->file('file_kinerja_kompetensi_14')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_14 = $fileName;
            }
            $staffsarpras->kinerja_kompetensi_15 = $request->get('kinerja_kompetensi_15');
            if ($request->hasFile('file_kinerja_kompetensi_15')) {
                $fileName = $request->file('file_kinerja_kompetensi_15')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_15 = $fileName;
            }

            $staffsarpras->kinerja_kompetensi_16 = $request->get('kinerja_kompetensi_16');
            if ($request->hasFile('file_kinerja_kompetensi_16')) {
                $fileName = $request->file('file_kinerja_kompetensi_16')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_16 = $fileName;
            }

            $staffsarpras->kinerja_kompetensi_17 = $request->get('kinerja_kompetensi_17');
            if ($request->hasFile('file_kinerja_kompetensi_17')) {
                $fileName = $request->file('file_kinerja_kompetensi_17')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_17 = $fileName;
            }

            $staffsarpras->kinerja_kompetensi_18 = $request->get('kinerja_kompetensi_18');
            if ($request->hasFile('file_kinerja_kompetensi_18')) {
                $fileName = $request->file('file_kinerja_kompetensi_18')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_18 = $fileName;
            }

            $staffsarpras->kinerja_kompetensi_19 = $request->get('kinerja_kompetensi_19');
            if ($request->hasFile('file_kinerja_kompetensi_19')) {
                $fileName = $request->file('file_kinerja_kompetensi_19')->store('uploads/biro-umum/staff-sarpras', 'public');
                $staffsarpras->file_kinerja_kompetensi_19 = $fileName;
            }

            $staffsarpras->output_point_kinerja_kompetensi_1 = $request->get('output_point_kinerja_kompetensi_1');
            $staffsarpras->output_point_kinerja_kompetensi_2 = $request->get('output_point_kinerja_kompetensi_2');
            $staffsarpras->output_point_kinerja_kompetensi_3 = $request->get('output_point_kinerja_kompetensi_3');
            $staffsarpras->output_point_kinerja_kompetensi_4 = $request->get('output_point_kinerja_kompetensi_4');
            $staffsarpras->output_point_kinerja_kompetensi_5 = $request->get('output_point_kinerja_kompetensi_5');
            $staffsarpras->output_total_point_kinerja_kompetensi = $request->get('output_total_point_kinerja_kompetensi');
            $staffsarpras->output_total_nilai_rata_rata_kinerja_kompetensi = $request->get('output_total_nilai_rata_rata_kinerja_kompetensi');
            $staffsarpras->output_total_sementara_kinerja_kompetensi = $request->get('output_total_sementara_kinerja_kompetensi');

            $staffsarpras->user_id = $request->get('UserId');
            $staffsarpras->save();

            DB::commit();
            toast('Create Point Staff Sarpras successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point Staff Sarpras fail :)', 'error');
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
        return view('itisar.KaSubBiroUmum.StaffSarpras.searchdata', compact('users'));
    }

    public function dataSearch(Request $request)
    {
        $data = StaffSarpras::where('user_id', '=', $request->id)->firstOrFail();

        return view('itisar.KaSubBiroUmum.StaffSarpras.edit', ['data' => $data]);
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
            'file_kinerja_kompetensi_12' => 'mimes:pdf',
            'file_kinerja_kompetensi_13' => 'mimes:pdf',
            'file_kinerja_kompetensi_14' => 'mimes:pdf',
            'file_kinerja_kompetensi_15' => 'mimes:pdf',
            'file_kinerja_kompetensi_16' => 'mimes:pdf',
            'file_kinerja_kompetensi_17' => 'mimes:pdf',
            'file_kinerja_kompetensi_18' => 'mimes:pdf',
            'file_kinerja_kompetensi_19' => 'mimes:pdf',
        ]);
        DB::beginTransaction();
        try {
            $RecordData =  StaffSarpras::where('user_id', $PointId)->firstOrFail();

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
                if ($RecordData->file_kinerja_kompetensi_1 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_1))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_1);
                }
                $file_kinerja_kompetensi_1 = $request->file('file_kinerja_kompetensi_1')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_1 = $RecordData->file_kinerja_kompetensi_1;
            }

            $kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                if ($RecordData->file_kinerja_kompetensi_2 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_2))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_2);
                }
                $file_kinerja_kompetensi_2 = $request->file('file_kinerja_kompetensi_2')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_2 = $RecordData->file_kinerja_kompetensi_2;
            }

            $kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                if ($RecordData->file_kinerja_kompetensi_3 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_3))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_3);
                }
                $file_kinerja_kompetensi_3 = $request->file('file_kinerja_kompetensi_3')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_3 = $RecordData->file_kinerja_kompetensi_3;
            }

            $kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                if ($RecordData->file_kinerja_kompetensi_4 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_4))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_4);
                }
                $file_kinerja_kompetensi_4 = $request->file('file_kinerja_kompetensi_4')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_4 = $RecordData->file_kinerja_kompetensi_4;
            }

            $kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                if ($RecordData->file_kinerja_kompetensi_5 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_5))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_5);
                }
                $file_kinerja_kompetensi_5 = $request->file('file_kinerja_kompetensi_5')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_5 = $RecordData->file_kinerja_kompetensi_5;
            }

            $kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                if ($RecordData->file_kinerja_kompetensi_6 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_6))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_6);
                }
                $file_kinerja_kompetensi_6 = $request->file('file_kinerja_kompetensi_6')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_6 = $RecordData->file_kinerja_kompetensi_6;
            }

            $kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                if ($RecordData->file_kinerja_kompetensi_7 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_7))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_7);
                }
                $file_kinerja_kompetensi_7 = $request->file('file_kinerja_kompetensi_7')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_7 = $RecordData->file_kinerja_kompetensi_7;
            }

            $kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('file_kinerja_kompetensi_8')) {
                if ($RecordData->file_kinerja_kompetensi_8 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_8))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_8);
                }
                $file_kinerja_kompetensi_8 = $request->file('file_kinerja_kompetensi_8')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_8 = $RecordData->file_kinerja_kompetensi_8;
            }

            $kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('file_kinerja_kompetensi_9')) {
                if ($RecordData->file_kinerja_kompetensi_9 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_9))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_9);
                }
                $file_kinerja_kompetensi_9 = $request->file('file_kinerja_kompetensi_9')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_9 = $RecordData->file_kinerja_kompetensi_9;
            }

            $kinerja_kompetensi_10 = $request->get('kinerja_kompetensi_10');
            if ($request->hasFile('file_kinerja_kompetensi_10')) {
                if ($RecordData->file_kinerja_kompetensi_10 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_10))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_10);
                }
                $file_kinerja_kompetensi_10 = $request->file('file_kinerja_kompetensi_10')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_10 = $RecordData->file_kinerja_kompetensi_10;
            }

            $kinerja_kompetensi_11 = $request->get('kinerja_kompetensi_11');
            if ($request->hasFile('file_kinerja_kompetensi_11')) {
                if ($RecordData->file_kinerja_kompetensi_11 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_11))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_11);
                }
                $file_kinerja_kompetensi_11 = $request->file('file_kinerja_kompetensi_11')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_11 = $RecordData->file_kinerja_kompetensi_11;
            }

            $kinerja_kompetensi_12 = $request->get('kinerja_kompetensi_12');
            if ($request->hasFile('file_kinerja_kompetensi_12')) {
                if ($RecordData->file_kinerja_kompetensi_12 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_12))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_12);
                }
                $file_kinerja_kompetensi_12 = $request->file('file_kinerja_kompetensi_12')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_12 = $RecordData->file_kinerja_kompetensi_12;
            }

            $kinerja_kompetensi_13 = $request->get('kinerja_kompetensi_13');
            if ($request->hasFile('file_kinerja_kompetensi_13')) {
                if ($RecordData->file_kinerja_kompetensi_13 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_13))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_13);
                }
                $file_kinerja_kompetensi_13 = $request->file('file_kinerja_kompetensi_13')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_13 = $RecordData->file_kinerja_kompetensi_13;
            }

            $kinerja_kompetensi_14 = $request->get('kinerja_kompetensi_14');
            if ($request->hasFile('file_kinerja_kompetensi_14')) {
                if ($RecordData->file_kinerja_kompetensi_14 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_14))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_14);
                }
                $file_kinerja_kompetensi_14 = $request->file('file_kinerja_kompetensi_14')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_14 = $RecordData->file_kinerja_kompetensi_14;
            }

            $kinerja_kompetensi_15 = $request->get('kinerja_kompetensi_15');
            if ($request->hasFile('file_kinerja_kompetensi_15')) {
                if ($RecordData->file_kinerja_kompetensi_15 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_15))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_15);
                }
                $file_kinerja_kompetensi_15 = $request->file('file_kinerja_kompetensi_15')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_15 = $RecordData->file_kinerja_kompetensi_15;
            }

            $kinerja_kompetensi_16 = $request->get('kinerja_kompetensi_16');
            if ($request->hasFile('file_kinerja_kompetensi_16')) {
                if ($RecordData->file_kinerja_kompetensi_16 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_16))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_16);
                }
                $file_kinerja_kompetensi_16 = $request->file('file_kinerja_kompetensi_16')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_16 = $RecordData->file_kinerja_kompetensi_16;
            }

            $kinerja_kompetensi_17 = $request->get('kinerja_kompetensi_17');
            if ($request->hasFile('file_kinerja_kompetensi_17')) {
                if ($RecordData->file_kinerja_kompetensi_17 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_17))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_17);
                }
                $file_kinerja_kompetensi_17 = $request->file('file_kinerja_kompetensi_17')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_17 = $RecordData->file_kinerja_kompetensi_17;
            }

            $kinerja_kompetensi_18 = $request->get('kinerja_kompetensi_18');
            if ($request->hasFile('file_kinerja_kompetensi_18')) {
                if ($RecordData->file_kinerja_kompetensi_18 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_18))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_18);
                }
                $file_kinerja_kompetensi_18 = $request->file('file_kinerja_kompetensi_18')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_18 = $RecordData->file_kinerja_kompetensi_18;
            }

            $kinerja_kompetensi_19 = $request->get('kinerja_kompetensi_19');
            if ($request->hasFile('file_kinerja_kompetensi_19')) {
                if ($RecordData->file_kinerja_kompetensi_19 && file_exists(storage_path('app/public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_19))) {
                    \Storage::delete('public/uploads/biro-umum/staff-sarpras/' . $RecordData->file_kinerja_kompetensi_19);
                }
                $file_kinerja_kompetensi_19 = $request->file('file_kinerja_kompetensi_19')->store('uploads/biro-umum/staff-sarpras', 'public');
            } else {
                $file_kinerja_kompetensi_19 = $RecordData->file_kinerja_kompetensi_19;
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
                'kinerja_kompetensi_18' => $kinerja_kompetensi_18,
                'file_kinerja_kompetensi_18' => $file_kinerja_kompetensi_18,
                'kinerja_kompetensi_19' => $kinerja_kompetensi_19,
                'file_kinerja_kompetensi_19' => $file_kinerja_kompetensi_19,
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
            toast('Update Point Staff Sarpras successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point Staff Sarpras fail :)', 'error');
            return redirect()->back();
        }
    }

    public function raport($user_id)
    {
        $DataUser = DB::table('users')
            ->leftJoin('ikbis_staff_sarpras', 'users.id', '=', 'ikbis_staff_sarpras.user_id')
            ->select(
                'users.name',
                'users.email',
                'ikbis_staff_sarpras.user_id',
                'ikbis_staff_sarpras.output_total_sementara_kinerja_perilaku',
                'ikbis_staff_sarpras.output_total_sementara_kinerja_kompetensi',
            )
            ->where('ikbis_staff_sarpras.user_id', $user_id)
            ->first();

        if (!empty($DataUser->user_id)) {
            return view('itisar.KaSubBiroUmum.StaffSarpras.raport', compact('DataUser'));
        } else {
            return view('menu.menu-empty');
        }
    }

    public function detailPoin($userId)
    {
        $data = StaffSarpras::where('user_id', '=', $userId)->first();

        return view('itisar.KaSubBiroUmum.StaffSarpras.detailPoin', ['data' => $data]);
    }
}
