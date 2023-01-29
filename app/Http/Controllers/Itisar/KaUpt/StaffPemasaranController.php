<?php

namespace App\Http\Controllers\Itisar\KaUpt;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\StaffPemasaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffPemasaranController extends Controller
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
        return view('itisar.ka-upt.StaffPemasaran.create', compact('users'));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
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
        ]);

        DB::beginTransaction();
        try {
            $staffpemasaran = new StaffPemasaran();
            $staffpemasaran->Point1_1 = $request->get('Point1_1');
            $staffpemasaran->Point1_2 = $request->get('Point1_2');
            $staffpemasaran->Point1_3 = $request->get('Point1_3');
            $staffpemasaran->Point1_4 = $request->get('Point1_4');
            $staffpemasaran->Point1_5 = $request->get('Point1_5');
            $staffpemasaran->Point2_1 = $request->get('Point2_1');
            $staffpemasaran->Point2_2 = $request->get('Point2_2');
            $staffpemasaran->Point2_3 = $request->get('Point2_3');
            $staffpemasaran->Point2_4 = $request->get('Point2_4');
            $staffpemasaran->Point2_5 = $request->get('Point2_5');
            $staffpemasaran->Point3_1 = $request->get('Point3_1');
            $staffpemasaran->Point3_2 = $request->get('Point3_2');
            $staffpemasaran->Point3_3 = $request->get('Point3_3');
            $staffpemasaran->Point3_4 = $request->get('Point3_4');
            $staffpemasaran->Point3_5 = $request->get('Point3_5');
            $staffpemasaran->Point4_1 = $request->get('Point4_1');
            $staffpemasaran->Point4_2 = $request->get('Point4_2');
            $staffpemasaran->Point4_3 = $request->get('Point4_3');
            $staffpemasaran->Point4_4 = $request->get('Point4_4');
            $staffpemasaran->Point4_5 = $request->get('Point4_5');
            $staffpemasaran->Point5_1 = $request->get('Point5_1');
            $staffpemasaran->Point5_2 = $request->get('Point5_2');
            $staffpemasaran->Point5_3 = $request->get('Point5_3');
            $staffpemasaran->Point5_4 = $request->get('Point5_4');
            $staffpemasaran->Point5_5 = $request->get('Point5_5');
            $staffpemasaran->Point6_1 = $request->get('Point6_1');
            $staffpemasaran->Point6_2 = $request->get('Point6_2');
            $staffpemasaran->Point6_3 = $request->get('Point6_3');
            $staffpemasaran->Point6_4 = $request->get('Point6_4');
            $staffpemasaran->Point6_5 = $request->get('Point6_5');
            $staffpemasaran->output_point_1 = $request->get('output_point_1');
            $staffpemasaran->output_point_2 = $request->get('output_point_2');
            $staffpemasaran->output_point_3 = $request->get('output_point_3');
            $staffpemasaran->output_point_4 = $request->get('output_point_4');
            $staffpemasaran->output_point_5 = $request->get('output_point_5');
            $staffpemasaran->output_total_point_kinerja_perilaku = $request->get('output_total_point_kinerja_perilaku');
            $staffpemasaran->output_total_nilai_rata_rata_kinerja_perilaku = $request->get('output_total_nilai_rata_rata_kinerja_perilaku');
            $staffpemasaran->output_total_sementara_kinerja_perilaku = $request->get('output_total_sementara_kinerja_perilaku');

            $staffpemasaran->kinerja_kompetensi_1 = $request->get('kinerja_kompetensi_1');
            if ($request->hasFile('file_kinerja_kompetensi_1')) {
                $fileName = $request->file('file_kinerja_kompetensi_1')->store('uploads/KaUpt/staffpemasaran', 'public');
                $staffpemasaran->file_kinerja_kompetensi_1 = $fileName;
            }
            $staffpemasaran->kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                $fileName = $request->file('file_kinerja_kompetensi_2')->store('uploads/KaUpt/staffpemasaran', 'public');
                $staffpemasaran->file_kinerja_kompetensi_2 = $fileName;
            }
            $staffpemasaran->kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                $fileName = $request->file('file_kinerja_kompetensi_3')->store('uploads/KaUpt/staffpemasaran', 'public');
                $staffpemasaran->file_kinerja_kompetensi_3 = $fileName;
            }
            $staffpemasaran->kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                $fileName = $request->file('file_kinerja_kompetensi_4')->store('uploads/KaUpt/staffpemasaran', 'public');
                $staffpemasaran->file_kinerja_kompetensi_4 = $fileName;
            }
            $staffpemasaran->kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                $fileName = $request->file('file_kinerja_kompetensi_5')->store('uploads/KaUpt/staffpemasaran', 'public');
                $staffpemasaran->file_kinerja_kompetensi_5 = $fileName;
            }
            $staffpemasaran->kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                $fileName = $request->file('file_kinerja_kompetensi_6')->store('uploads/KaUpt/staffpemasaran', 'public');
                $staffpemasaran->file_kinerja_kompetensi_6 = $fileName;
            }

            $staffpemasaran->output_point_kinerja_kompetensi_1 = $request->get('output_point_kinerja_kompetensi_1');
            $staffpemasaran->output_point_kinerja_kompetensi_2 = $request->get('output_point_kinerja_kompetensi_2');
            $staffpemasaran->output_point_kinerja_kompetensi_3 = $request->get('output_point_kinerja_kompetensi_3');
            $staffpemasaran->output_point_kinerja_kompetensi_4 = $request->get('output_point_kinerja_kompetensi_4');
            $staffpemasaran->output_point_kinerja_kompetensi_5 = $request->get('output_point_kinerja_kompetensi_5');
            $staffpemasaran->output_total_point_kinerja_kompetensi = $request->get('output_total_point_kinerja_kompetensi');
            $staffpemasaran->output_total_nilai_rata_rata_kinerja_kompetensi = $request->get('output_total_nilai_rata_rata_kinerja_kompetensi');
            $staffpemasaran->output_total_sementara_kinerja_kompetensi = $request->get('output_total_sementara_kinerja_kompetensi');

            $staffpemasaran->user_id = $request->get('UserId');
            $staffpemasaran->save();

            DB::commit();
            toast('Create Point Staff Pemasaran successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point Staff Pemasaran fail :)', 'error');
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
        } elseif (StaffPemasaran::where('user_id', '=', $PointId)->first() == "") {
            return view('menu.menu-empty');
        } else {
            $data = StaffPemasaran::where('user_id', '=', $PointId)->first();
        }

        return view('itisar.ka-upt.StaffPemasaran.edit', ['data' => $data]);
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $PointId
     * @return void
     */
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
        ]);
        DB::beginTransaction();
        try {
            $RecordData =  StaffPemasaran::where('user_id', $PointId)->firstOrFail();

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
                if ($RecordData->kinerja_kompetensi_1 && file_exists(storage_path('app/public/uploads/KaUpt/staffpemasaran' . $RecordData->kinerja_kompetensi_1))) {
                    \Storage::delete('public/uploads/KaUpt/staffpemasaran' . $RecordData->kinerja_kompetensi_1);
                }
                $file_kinerja_kompetensi_1 = $request->file('kinerja_kompetensi_1')->store('uploads/KaUpt/staffpemasaran', 'public');
            } else {
                $file_kinerja_kompetensi_1 = $RecordData->kinerja_kompetensi_1;
            }

            $kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                if ($RecordData->file_kinerja_kompetensi_2 && file_exists(storage_path('app/public/uploads/KaUpt/staffpemasaran' . $RecordData->file_kinerja_kompetensi_2))) {
                    \Storage::delete('public/uploads/KaUpt/staffpemasaran' . $RecordData->file_kinerja_kompetensi_2);
                }
                $file_kinerja_kompetensi_2 = $request->file('file_kinerja_kompetensi_2')->store('uploads/KaUpt/staffpemasaran', 'public');
            } else {
                $file_kinerja_kompetensi_2 = $RecordData->file_kinerja_kompetensi_2;
            }

            $kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                if ($RecordData->file_kinerja_kompetensi_3 && file_exists(storage_path('app/public/uploads/KaUpt/staffpemasaran' . $RecordData->file_kinerja_kompetensi_3))) {
                    \Storage::delete('public/uploads/KaUpt/staffpemasaran' . $RecordData->file_kinerja_kompetensi_3);
                }
                $file_kinerja_kompetensi_3 = $request->file('file_kinerja_kompetensi_3')->store('uploads/KaUpt/staffpemasaran', 'public');
            } else {
                $file_kinerja_kompetensi_3 = $RecordData->file_kinerja_kompetensi_3;
            }

            $kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('kinerja_kompetensi_4')) {
                if ($RecordData->kinerja_kompetensi_4 && file_exists(storage_path('app/public/uploads/KaUpt/staffpemasaran' . $RecordData->kinerja_kompetensi_4))) {
                    \Storage::delete('public/uploads/KaUpt/staffpemasaran' . $RecordData->kinerja_kompetensi_4);
                }
                $file_kinerja_kompetensi_4 = $request->file('kinerja_kompetensi_4')->store('uploads/KaUpt/staffpemasaran', 'public');
            } else {
                $file_kinerja_kompetensi_4 = $RecordData->kinerja_kompetensi_4;
            }

            $kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                if ($RecordData->file_kinerja_kompetensi_5 && file_exists(storage_path('app/public/uploads/KaUpt/staffpemasaran' . $RecordData->file_kinerja_kompetensi_5))) {
                    \Storage::delete('public/uploads/KaUpt/staffpemasaran' . $RecordData->file_kinerja_kompetensi_5);
                }
                $file_kinerja_kompetensi_5 = $request->file('file_kinerja_kompetensi_5')->store('uploads/KaUpt/staffpemasaran', 'public');
            } else {
                $file_kinerja_kompetensi_5 = $RecordData->file_kinerja_kompetensi_5;
            }

            $kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                if ($RecordData->file_kinerja_kompetensi_6 && file_exists(storage_path('app/public/uploads/KaUpt/staffpemasaran' . $RecordData->file_kinerja_kompetensi_6))) {
                    \Storage::delete('public/uploads/KaUpt/staffpemasaran' . $RecordData->file_kinerja_kompetensi_6);
                }
                $file_kinerja_kompetensi_6 = $request->file('file_kinerja_kompetensi_6')->store('uploads/KaUpt/staffpemasaran', 'public');
            } else {
                $file_kinerja_kompetensi_6 = $RecordData->file_kinerja_kompetensi_6;
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
            toast('Update Point Ka. Baak successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point Ka. Baak fail :)', 'error');
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
            ->leftJoin('staff_pemasaran', 'users.id', '=', 'staff_pemasaran.user_id')
            ->select(
                'users.name',
                'users.email',
                'staff_pemasaran.user_id',
                'staff_pemasaran.output_total_sementara_kinerja_perilaku',
                'staff_pemasaran.output_total_sementara_kinerja_kompetensi',
            )
            ->where('staff_pemasaran.user_id', $user_id)
            ->first();

        if (!empty($DataUser->user_id)) {
            return view('itisar.ka-upt.StaffPemasaran.raport', compact('DataUser'));
        } else {
            return view('menu.menu-empty');
        }
    }
}
