<?php

namespace App\Http\Controllers\Itisar;

use App\Http\Controllers\Controller;
use App\Models\Warek2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class warek2Controller extends Controller
{
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('itisar.warek2.create');
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
            'file_kinerja_kompetensi_10' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_11' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_12' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_13' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_14' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_15' => 'mimes:pdf|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $warek2 = new Warek2();
            $warek2->Point1_1 = $request->get('Point1_1');
            $warek2->Point1_2 = $request->get('Point1_2');
            $warek2->Point1_3 = $request->get('Point1_3');
            $warek2->Point1_4 = $request->get('Point1_4');
            $warek2->Point1_5 = $request->get('Point1_5');
            $warek2->Point2_1 = $request->get('Point2_1');
            $warek2->Point2_2 = $request->get('Point2_2');
            $warek2->Point2_3 = $request->get('Point2_3');
            $warek2->Point2_4 = $request->get('Point2_4');
            $warek2->Point2_5 = $request->get('Point2_5');
            $warek2->Point3_1 = $request->get('Point3_1');
            $warek2->Point3_2 = $request->get('Point3_2');
            $warek2->Point3_3 = $request->get('Point3_3');
            $warek2->Point3_4 = $request->get('Point3_4');
            $warek2->Point3_5 = $request->get('Point3_5');
            $warek2->Point4_1 = $request->get('Point4_1');
            $warek2->Point4_2 = $request->get('Point4_2');
            $warek2->Point4_3 = $request->get('Point4_3');
            $warek2->Point4_4 = $request->get('Point4_4');
            $warek2->Point4_5 = $request->get('Point4_5');
            $warek2->Point5_1 = $request->get('Point5_1');
            $warek2->Point5_2 = $request->get('Point5_2');
            $warek2->Point5_3 = $request->get('Point5_3');
            $warek2->Point5_4 = $request->get('Point5_4');
            $warek2->Point5_5 = $request->get('Point5_5');
            $warek2->Point6_1 = $request->get('Point6_1');
            $warek2->Point6_2 = $request->get('Point6_2');
            $warek2->Point6_3 = $request->get('Point6_3');
            $warek2->Point6_4 = $request->get('Point6_4');
            $warek2->Point6_5 = $request->get('Point6_5');
            $warek2->output_point_1 = $request->get('output_point_1');
            $warek2->output_point_2 = $request->get('output_point_2');
            $warek2->output_point_3 = $request->get('output_point_3');
            $warek2->output_point_4 = $request->get('output_point_4');
            $warek2->output_point_5 = $request->get('output_point_5');
            $warek2->output_total_point_kinerja_perilaku = $request->get('output_total_point_kinerja_perilaku');
            $warek2->output_total_nilai_rata_rata_kinerja_perilaku = $request->get('output_total_nilai_rata_rata_kinerja_perilaku');
            $warek2->output_total_sementara_kinerja_perilaku = $request->get('output_total_sementara_kinerja_perilaku');

            $warek2->kinerja_kompetensi_1 = $request->get('kinerja_kompetensi_1');
            if ($request->hasFile('file_kinerja_kompetensi_1')) {
                $fileName = $request->file('file_kinerja_kompetensi_1')->store('uploads/warek2/ka-bau', 'public');
                $warek2->file_kinerja_kompetensi_1 = $fileName;
            }
            $warek2->kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                $fileName = $request->file('file_kinerja_kompetensi_2')->store('uploads/warek2/ka-bau', 'public');
                $warek2->file_kinerja_kompetensi_2 = $fileName;
            }
            $warek2->kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                $fileName = $request->file('file_kinerja_kompetensi_3')->store('uploads/warek2/ka-bau', 'public');
                $warek2->file_kinerja_kompetensi_3 = $fileName;
            }
            $warek2->kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                $fileName = $request->file('file_kinerja_kompetensi_4')->store('uploads/warek2/ka-bau', 'public');
                $warek2->file_kinerja_kompetensi_4 = $fileName;
            }
            $warek2->kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                $fileName = $request->file('file_kinerja_kompetensi_5')->store('uploads/warek2/ka-bau', 'public');
                $warek2->file_kinerja_kompetensi_5 = $fileName;
            }
            $warek2->kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                $fileName = $request->file('file_kinerja_kompetensi_6')->store('uploads/warek2/ka-bau', 'public');
                $warek2->file_kinerja_kompetensi_6 = $fileName;
            }
            $warek2->kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                $fileName = $request->file('file_kinerja_kompetensi_7')->store('uploads/warek2/ka-bau', 'public');
                $warek2->file_kinerja_kompetensi_7 = $fileName;
            }
            $warek2->kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('file_kinerja_kompetensi_8')) {
                $fileName = $request->file('file_kinerja_kompetensi_8')->store('uploads/warek2/ka-bau', 'public');
                $warek2->file_kinerja_kompetensi_8 = $fileName;
            }
            $warek2->kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('file_kinerja_kompetensi_9')) {
                $fileName = $request->file('file_kinerja_kompetensi_9')->store('uploads/warek2/ka-bau', 'public');
                $warek2->file_kinerja_kompetensi_9 = $fileName;
            }
            $warek2->kinerja_kompetensi_10 = $request->get('kinerja_kompetensi_10');
            if ($request->hasFile('file_kinerja_kompetensi_10')) {
                $fileName = $request->file('file_kinerja_kompetensi_10')->store('uploads/warek2/ka-bau', 'public');
                $warek2->file_kinerja_kompetensi_10 = $fileName;
            }
            $warek2->kinerja_kompetensi_11 = $request->get('kinerja_kompetensi_11');
            if ($request->hasFile('file_kinerja_kompetensi_11')) {
                $fileName = $request->file('file_kinerja_kompetensi_11')->store('uploads/warek2/ka-bau', 'public');
                $warek2->file_kinerja_kompetensi_11 = $fileName;
            }
            $warek2->kinerja_kompetensi_12 = $request->get('kinerja_kompetensi_12');
            if ($request->hasFile('file_kinerja_kompetensi_12')) {
                $fileName = $request->file('file_kinerja_kompetensi_12')->store('uploads/warek2/ka-bau', 'public');
                $warek2->file_kinerja_kompetensi_12 = $fileName;
            }
            $warek2->kinerja_kompetensi_13 = $request->get('kinerja_kompetensi_13');
            if ($request->hasFile('file_kinerja_kompetensi_13')) {
                $fileName = $request->file('file_kinerja_kompetensi_13')->store('uploads/warek2/ka-bau', 'public');
                $warek2->file_kinerja_kompetensi_13 = $fileName;
            }
            $warek2->kinerja_kompetensi_14 = $request->get('kinerja_kompetensi_14');
            if ($request->hasFile('file_kinerja_kompetensi_14')) {
                $fileName = $request->file('file_kinerja_kompetensi_14')->store('uploads/warek2/ka-bau', 'public');
                $warek2->file_kinerja_kompetensi_14 = $fileName;
            }
            $warek2->kinerja_kompetensi_15 = $request->get('kinerja_kompetensi_15');
            if ($request->hasFile('file_kinerja_kompetensi_15')) {
                $fileName = $request->file('file_kinerja_kompetensi_15')->store('uploads/warek2/ka-bau', 'public');
                $warek2->file_kinerja_kompetensi_15 = $fileName;
            }

            $warek2->output_point_kinerja_kompetensi_1 = $request->get('output_point_kinerja_kompetensi_1');
            $warek2->output_point_kinerja_kompetensi_2 = $request->get('output_point_kinerja_kompetensi_2');
            $warek2->output_point_kinerja_kompetensi_3 = $request->get('output_point_kinerja_kompetensi_3');
            $warek2->output_point_kinerja_kompetensi_4 = $request->get('output_point_kinerja_kompetensi_4');
            $warek2->output_point_kinerja_kompetensi_5 = $request->get('output_point_kinerja_kompetensi_5');
            $warek2->output_total_point_kinerja_kompetensi = $request->get('output_total_point_kinerja_kompetensi');
            $warek2->output_total_nilai_rata_rata_kinerja_kompetensi = $request->get('output_total_nilai_rata_rata_kinerja_kompetensi');
            $warek2->output_total_sementara_kinerja_kompetensi = $request->get('output_total_sementara_kinerja_kompetensi');

            $warek2->user_id = Auth()->id();
            $warek2->save();

            DB::commit();
            toast('Create Point Ka. Bau successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point Ka. Bau fail :)', 'error');
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
            ->leftJoin('warek_2', 'users.id', '=', 'warek_2.user_id')
            ->select(
                'users.name',
                'users.email',
                'warek_2.output_total_sementara_kinerja_perilaku',
                'warek_2.output_total_sementara_kinerja_kompetensi',
                'warek_2.user_id'
            )
            ->where('warek_2.user_id', $user_id)
            ->first();

        // dd($DataUser);
        if (!empty($DataUser->user_id)) {
            return view('itisar.warek2.raport', compact('DataUser'));
        } else {
            return view('menu.menu-empty');
        }
    }
}
