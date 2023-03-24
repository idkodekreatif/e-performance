<?php

namespace App\Http\Controllers\Itisar\rektor;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\rektor\StaffSusBidKerjasama;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffSusBidKerjasamaController extends Controller
{
    public function create()
    {
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm', 'warek2', 'upt', 'baak', 'keuangan', 'lpm', 'risbang', 'gizi', 'perawat', 'bidan', 'manajemen', 'akuntansi', 'bau', 'warek1', 'rektor', 'ypsdmit'
        ])->get();
        return view('itisar.Rektor.StaffSusBidKerjasama.create', compact('users'));
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
        ]);

        DB::beginTransaction();
        try {
            $staffsusbidkerjasama = new StaffSusBidKerjasama();
            $staffsusbidkerjasama->q1 = $request->get('q1');
            $staffsusbidkerjasama->q2 = $request->get('q2');
            $staffsusbidkerjasama->q3 = $request->get('q3');
            $staffsusbidkerjasama->q4 = $request->get('q4');
            $staffsusbidkerjasama->q5 = $request->get('q5');
            $staffsusbidkerjasama->q6 = $request->get('q6');
            $staffsusbidkerjasama->output_point_1 = $request->get('output_point_1');
            $staffsusbidkerjasama->output_point_2 = $request->get('output_point_2');
            $staffsusbidkerjasama->output_point_3 = $request->get('output_point_3');
            $staffsusbidkerjasama->output_point_4 = $request->get('output_point_4');
            $staffsusbidkerjasama->output_point_5 = $request->get('output_point_5');
            $staffsusbidkerjasama->output_total_point_kinerja_perilaku = $request->get('output_total_point_kinerja_perilaku');
            $staffsusbidkerjasama->output_total_nilai_rata_rata_kinerja_perilaku = $request->get('output_total_nilai_rata_rata_kinerja_perilaku');
            $staffsusbidkerjasama->output_total_sementara_kinerja_perilaku = $request->get('output_total_sementara_kinerja_perilaku');

            $staffsusbidkerjasama->kinerja_kompetensi_1 = $request->get('kinerja_kompetensi_1');
            if ($request->hasFile('file_kinerja_kompetensi_1')) {
                $fileName = $request->file('file_kinerja_kompetensi_1')->store('uploads/rektor/staffsusbidkerjasama', 'public');
                $staffsusbidkerjasama->file_kinerja_kompetensi_1 = $fileName;
            }
            $staffsusbidkerjasama->kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                $fileName = $request->file('file_kinerja_kompetensi_2')->store('uploads/rektor/staffsusbidkerjasama', 'public');
                $staffsusbidkerjasama->file_kinerja_kompetensi_2 = $fileName;
            }
            $staffsusbidkerjasama->kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                $fileName = $request->file('file_kinerja_kompetensi_3')->store('uploads/rektor/staffsusbidkerjasama', 'public');
                $staffsusbidkerjasama->file_kinerja_kompetensi_3 = $fileName;
            }
            $staffsusbidkerjasama->kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                $fileName = $request->file('file_kinerja_kompetensi_4')->store('uploads/rektor/staffsusbidkerjasama', 'public');
                $staffsusbidkerjasama->file_kinerja_kompetensi_4 = $fileName;
            }
            $staffsusbidkerjasama->kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                $fileName = $request->file('file_kinerja_kompetensi_5')->store('uploads/rektor/staffsusbidkerjasama', 'public');
                $staffsusbidkerjasama->file_kinerja_kompetensi_5 = $fileName;
            }
            $staffsusbidkerjasama->kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                $fileName = $request->file('file_kinerja_kompetensi_6')->store('uploads/rektor/staffsusbidkerjasama', 'public');
                $staffsusbidkerjasama->file_kinerja_kompetensi_6 = $fileName;
            }
            $staffsusbidkerjasama->kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                $fileName = $request->file('file_kinerja_kompetensi_7')->store('uploads/rektor/staffsusbidkerjasama', 'public');
                $staffsusbidkerjasama->file_kinerja_kompetensi_7 = $fileName;
            }

            $staffsusbidkerjasama->output_point_kinerja_kompetensi_1 = $request->get('output_point_kinerja_kompetensi_1');
            $staffsusbidkerjasama->output_point_kinerja_kompetensi_2 = $request->get('output_point_kinerja_kompetensi_2');
            $staffsusbidkerjasama->output_point_kinerja_kompetensi_3 = $request->get('output_point_kinerja_kompetensi_3');
            $staffsusbidkerjasama->output_point_kinerja_kompetensi_4 = $request->get('output_point_kinerja_kompetensi_4');
            $staffsusbidkerjasama->output_point_kinerja_kompetensi_5 = $request->get('output_point_kinerja_kompetensi_5');
            $staffsusbidkerjasama->output_total_point_kinerja_kompetensi = $request->get('output_total_point_kinerja_kompetensi');
            $staffsusbidkerjasama->output_total_nilai_rata_rata_kinerja_kompetensi = $request->get('output_total_nilai_rata_rata_kinerja_kompetensi');
            $staffsusbidkerjasama->output_total_sementara_kinerja_kompetensi = $request->get('output_total_sementara_kinerja_kompetensi');

            $staffsusbidkerjasama->user_id = $request->get('UserId');
            $staffsusbidkerjasama->save();

            DB::commit();
            toast('Create Point Staffsus Bidang Kerjasama successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point Staffsus Bidang Kerjasama fail :)', 'error');
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
        return view('itisar.Rektor.StaffSusBidKerjasama.searchdata', compact('users'));
    }

    public function dataSearch(Request $request)
    {
        $data = StaffSusBidKerjasama::where('user_id', '=', $request->id)->firstOrFail();

        return view('itisar.Rektor.StaffSusBidKerjasama.edit', ['data' => $data]);
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
        ]);
        DB::beginTransaction();
        try {
            $RecordData =  StaffSusBidKerjasama::where('user_id', $PointId)->firstOrFail();

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
                if ($RecordData->file_kinerja_kompetensi_1 && file_exists(storage_path('app/public/rektor/staffsusbidkerjasama/' . $RecordData->file_kinerja_kompetensi_1))) {
                    \Storage::delete('public/rektor/staffsusbidkerjasama/' . $RecordData->file_kinerja_kompetensi_1);
                }
                $file_kinerja_kompetensi_1 = $request->file('file_kinerja_kompetensi_1')->store('rektor/staffsusbidkerjasama', 'public');
            } else {
                $file_kinerja_kompetensi_1 = $RecordData->file_kinerja_kompetensi_1;
            }

            $kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                if ($RecordData->file_kinerja_kompetensi_2 && file_exists(storage_path('app/public/rektor/staffsusbidkerjasama/' . $RecordData->file_kinerja_kompetensi_2))) {
                    \Storage::delete('public/rektor/staffsusbidkerjasama/' . $RecordData->file_kinerja_kompetensi_2);
                }
                $file_kinerja_kompetensi_2 = $request->file('file_kinerja_kompetensi_2')->store('rektor/staffsusbidkerjasama', 'public');
            } else {
                $file_kinerja_kompetensi_2 = $RecordData->file_kinerja_kompetensi_2;
            }

            $kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                if ($RecordData->file_kinerja_kompetensi_3 && file_exists(storage_path('app/public/rektor/staffsusbidkerjasama/' . $RecordData->file_kinerja_kompetensi_3))) {
                    \Storage::delete('public/rektor/staffsusbidkerjasama/' . $RecordData->file_kinerja_kompetensi_3);
                }
                $file_kinerja_kompetensi_3 = $request->file('file_kinerja_kompetensi_3')->store('rektor/staffsusbidkerjasama', 'public');
            } else {
                $file_kinerja_kompetensi_3 = $RecordData->file_kinerja_kompetensi_3;
            }

            $kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                if ($RecordData->file_kinerja_kompetensi_4 && file_exists(storage_path('app/public/rektor/staffsusbidkerjasama/' . $RecordData->file_kinerja_kompetensi_4))) {
                    \Storage::delete('public/rektor/staffsusbidkerjasama/' . $RecordData->file_kinerja_kompetensi_4);
                }
                $file_kinerja_kompetensi_4 = $request->file('file_kinerja_kompetensi_4')->store('rektor/staffsusbidkerjasama', 'public');
            } else {
                $file_kinerja_kompetensi_4 = $RecordData->file_kinerja_kompetensi_4;
            }

            $kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                if ($RecordData->file_kinerja_kompetensi_5 && file_exists(storage_path('app/public/rektor/staffsusbidkerjasama/' . $RecordData->file_kinerja_kompetensi_5))) {
                    \Storage::delete('public/rektor/staffsusbidkerjasama/' . $RecordData->file_kinerja_kompetensi_5);
                }
                $file_kinerja_kompetensi_5 = $request->file('file_kinerja_kompetensi_5')->store('rektor/staffsusbidkerjasama', 'public');
            } else {
                $file_kinerja_kompetensi_5 = $RecordData->file_kinerja_kompetensi_5;
            }

            $kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                if ($RecordData->file_kinerja_kompetensi_6 && file_exists(storage_path('app/public/rektor/staffsusbidkerjasama/' . $RecordData->file_kinerja_kompetensi_6))) {
                    \Storage::delete('public/rektor/staffsusbidkerjasama/' . $RecordData->file_kinerja_kompetensi_6);
                }
                $file_kinerja_kompetensi_6 = $request->file('file_kinerja_kompetensi_6')->store('rektor/staffsusbidkerjasama', 'public');
            } else {
                $file_kinerja_kompetensi_6 = $RecordData->file_kinerja_kompetensi_6;
            }

            $kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                if ($RecordData->file_kinerja_kompetensi_7 && file_exists(storage_path('app/public/rektor/staffsusbidkerjasama/' . $RecordData->file_kinerja_kompetensi_7))) {
                    \Storage::delete('public/rektor/staffsusbidkerjasama/' . $RecordData->file_kinerja_kompetensi_7);
                }
                $file_kinerja_kompetensi_7 = $request->file('file_kinerja_kompetensi_7')->store('rektor/staffsusbidkerjasama', 'public');
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
            toast('Update Point Staffsus bidang kerjasama successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point Staffsus bidang kerjasama fail :)', 'error');
            return redirect()->back();
        }
    }

    public function raport($user_id)
    {
        $DataUser = DB::table('users')
            ->leftJoin('ikbis_staffsusbid_kerjasama', 'users.id', '=', 'ikbis_staffsusbid_kerjasama.user_id')
            ->select(
                'users.name',
                'users.email',
                'ikbis_staffsusbid_kerjasama.user_id',
                'ikbis_staffsusbid_kerjasama.output_total_sementara_kinerja_perilaku',
                'ikbis_staffsusbid_kerjasama.output_total_sementara_kinerja_kompetensi',
            )
            ->where('ikbis_staffsusbid_kerjasama.user_id', $user_id)
            ->first();

        // dd($DataUser);
        if (!empty($DataUser->user_id)) {
            return view('itisar.Rektor.StaffSusBidKerjasama.raport', compact('DataUser'));
        } else {
            return view('menu.menu-empty');
        }
    }

    public function detailPoin($userId)
    {
        $data = StaffSusBidKerjasama::where('user_id', '=', $userId)->first();

        return view('itisar.Rektor.StaffSusBidKerjasama.detailPoin', ['data' => $data]);
    }

    public function searchRaport()
    {
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm', 'warek2', 'upt', 'baak', 'keuangan', 'lpm', 'risbang', 'gizi', 'perawat', 'bidan', 'manajemen', 'akuntansi', 'bau', 'warek1', 'rektor', 'ypsdmit'
        ])->get();
        return view('itisar.Rektor.StaffSusBidKerjasama.searchRaport', compact('users'));
    }

    public function resultRaport(Request $request)
    {
        $DataUser = DB::table('users')
            ->leftJoin('ikbis_staffsusbid_kerjasama', 'users.id', '=', 'ikbis_staffsusbid_kerjasama.user_id')
            ->select(
                'users.name',
                'users.email',
                'ikbis_staffsusbid_kerjasama.user_id',
                'ikbis_staffsusbid_kerjasama.output_total_sementara_kinerja_perilaku',
                'ikbis_staffsusbid_kerjasama.output_total_sementara_kinerja_kompetensi',
            )
            ->where('ikbis_staffsusbid_kerjasama.user_id', '=', $request->id)
            ->first();

        // dd($DataUser);
        if (!empty($DataUser)) {
            return view('itisar.Rektor.StaffSusBidKerjasama.raport', compact('DataUser'));
        } else {
            return view('menu.menu-empty');
        }
    }
}
