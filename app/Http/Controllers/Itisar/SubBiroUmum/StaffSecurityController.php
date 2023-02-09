<?php

namespace App\Http\Controllers\Itisar\SubBiroUmum;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\SubBiroUmum\StaffSecurity;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffSecurityController extends Controller
{
    public function create()
    {
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm',
        ])->get();
        return view('itisar.KaSubBiroUmum.StaffSecurity.create', compact('users'));
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
            'file_kinerja_kompetensi_18' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_19' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_20' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_21' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_22' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_23' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_24' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_25' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_26' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_27' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_28' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_29' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_30' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_31' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_32' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_33' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_34' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_35' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_36' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_37' => 'mimes:pdf|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $staffsecurity = new StaffSecurity();
            $staffsecurity->Point1_1 = $request->get('Point1_1');
            $staffsecurity->Point1_2 = $request->get('Point1_2');
            $staffsecurity->Point1_3 = $request->get('Point1_3');
            $staffsecurity->Point1_4 = $request->get('Point1_4');
            $staffsecurity->Point1_5 = $request->get('Point1_5');
            $staffsecurity->Point2_1 = $request->get('Point2_1');
            $staffsecurity->Point2_2 = $request->get('Point2_2');
            $staffsecurity->Point2_3 = $request->get('Point2_3');
            $staffsecurity->Point2_4 = $request->get('Point2_4');
            $staffsecurity->Point2_5 = $request->get('Point2_5');
            $staffsecurity->Point3_1 = $request->get('Point3_1');
            $staffsecurity->Point3_2 = $request->get('Point3_2');
            $staffsecurity->Point3_3 = $request->get('Point3_3');
            $staffsecurity->Point3_4 = $request->get('Point3_4');
            $staffsecurity->Point3_5 = $request->get('Point3_5');
            $staffsecurity->Point4_1 = $request->get('Point4_1');
            $staffsecurity->Point4_2 = $request->get('Point4_2');
            $staffsecurity->Point4_3 = $request->get('Point4_3');
            $staffsecurity->Point4_4 = $request->get('Point4_4');
            $staffsecurity->Point4_5 = $request->get('Point4_5');
            $staffsecurity->Point5_1 = $request->get('Point5_1');
            $staffsecurity->Point5_2 = $request->get('Point5_2');
            $staffsecurity->Point5_3 = $request->get('Point5_3');
            $staffsecurity->Point5_4 = $request->get('Point5_4');
            $staffsecurity->Point5_5 = $request->get('Point5_5');
            $staffsecurity->Point6_1 = $request->get('Point6_1');
            $staffsecurity->Point6_2 = $request->get('Point6_2');
            $staffsecurity->Point6_3 = $request->get('Point6_3');
            $staffsecurity->Point6_4 = $request->get('Point6_4');
            $staffsecurity->Point6_5 = $request->get('Point6_5');
            $staffsecurity->output_point_1 = $request->get('output_point_1');
            $staffsecurity->output_point_2 = $request->get('output_point_2');
            $staffsecurity->output_point_3 = $request->get('output_point_3');
            $staffsecurity->output_point_4 = $request->get('output_point_4');
            $staffsecurity->output_point_5 = $request->get('output_point_5');
            $staffsecurity->output_total_point_kinerja_perilaku = $request->get('output_total_point_kinerja_perilaku');
            $staffsecurity->output_total_nilai_rata_rata_kinerja_perilaku = $request->get('output_total_nilai_rata_rata_kinerja_perilaku');
            $staffsecurity->output_total_sementara_kinerja_perilaku = $request->get('output_total_sementara_kinerja_perilaku');

            $staffsecurity->kinerja_kompetensi_1 = $request->get('kinerja_kompetensi_1');
            if ($request->hasFile('file_kinerja_kompetensi_1')) {
                $fileName = $request->file('file_kinerja_kompetensi_1')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_1 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                $fileName = $request->file('file_kinerja_kompetensi_2')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_2 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                $fileName = $request->file('file_kinerja_kompetensi_3')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_3 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                $fileName = $request->file('file_kinerja_kompetensi_4')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_4 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                $fileName = $request->file('file_kinerja_kompetensi_5')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_5 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                $fileName = $request->file('file_kinerja_kompetensi_6')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_6 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                $fileName = $request->file('file_kinerja_kompetensi_7')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_7 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('file_kinerja_kompetensi_8')) {
                $fileName = $request->file('file_kinerja_kompetensi_8')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_8 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('file_kinerja_kompetensi_9')) {
                $fileName = $request->file('file_kinerja_kompetensi_9')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_9 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_10 = $request->get('kinerja_kompetensi_10');
            if ($request->hasFile('file_kinerja_kompetensi_10')) {
                $fileName = $request->file('file_kinerja_kompetensi_10')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_10 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_11 = $request->get('kinerja_kompetensi_11');
            if ($request->hasFile('file_kinerja_kompetensi_11')) {
                $fileName = $request->file('file_kinerja_kompetensi_11')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_11 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_12 = $request->get('kinerja_kompetensi_12');
            if ($request->hasFile('file_kinerja_kompetensi_12')) {
                $fileName = $request->file('file_kinerja_kompetensi_12')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_12 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_13 = $request->get('kinerja_kompetensi_13');
            if ($request->hasFile('file_kinerja_kompetensi_13')) {
                $fileName = $request->file('file_kinerja_kompetensi_13')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_13 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_14 = $request->get('kinerja_kompetensi_14');
            if ($request->hasFile('file_kinerja_kompetensi_14')) {
                $fileName = $request->file('file_kinerja_kompetensi_14')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_14 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_15 = $request->get('kinerja_kompetensi_15');
            if ($request->hasFile('file_kinerja_kompetensi_15')) {
                $fileName = $request->file('file_kinerja_kompetensi_15')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_15 = $fileName;
            }

            $staffsecurity->kinerja_kompetensi_16 = $request->get('kinerja_kompetensi_16');
            if ($request->hasFile('file_kinerja_kompetensi_16')) {
                $fileName = $request->file('file_kinerja_kompetensi_16')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_16 = $fileName;
            }

            $staffsecurity->kinerja_kompetensi_17 = $request->get('kinerja_kompetensi_17');
            if ($request->hasFile('file_kinerja_kompetensi_17')) {
                $fileName = $request->file('file_kinerja_kompetensi_17')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_17 = $fileName;
            }

            $staffsecurity->kinerja_kompetensi_18 = $request->get('kinerja_kompetensi_18');
            if ($request->hasFile('file_kinerja_kompetensi_18')) {
                $fileName = $request->file('file_kinerja_kompetensi_18')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_18 = $fileName;
            }

            $staffsecurity->kinerja_kompetensi_19 = $request->get('kinerja_kompetensi_19');
            if ($request->hasFile('file_kinerja_kompetensi_19')) {
                $fileName = $request->file('file_kinerja_kompetensi_19')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_19 = $fileName;
            }

            $staffsecurity->kinerja_kompetensi_20 = $request->get('kinerja_kompetensi_20');
            if ($request->hasFile('file_kinerja_kompetensi_20')) {
                $fileName = $request->file('file_kinerja_kompetensi_20')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_20 = $fileName;
            }

            $staffsecurity->kinerja_kompetensi_21 = $request->get('kinerja_kompetensi_21');
            if ($request->hasFile('file_kinerja_kompetensi_21')) {
                $fileName = $request->file('file_kinerja_kompetensi_21')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_21 = $fileName;
            }

            $staffsecurity->kinerja_kompetensi_22 = $request->get('kinerja_kompetensi_22');
            if ($request->hasFile('file_kinerja_kompetensi_22')) {
                $fileName = $request->file('file_kinerja_kompetensi_22')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_22 = $fileName;
            }

            $staffsecurity->kinerja_kompetensi_23 = $request->get('kinerja_kompetensi_23');
            if ($request->hasFile('file_kinerja_kompetensi_23')) {
                $fileName = $request->file('file_kinerja_kompetensi_23')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_23 = $fileName;
            }

            $staffsecurity->kinerja_kompetensi_24 = $request->get('kinerja_kompetensi_24');
            if ($request->hasFile('file_kinerja_kompetensi_24')) {
                $fileName = $request->file('file_kinerja_kompetensi_24')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_24 = $fileName;
            }

            $staffsecurity->kinerja_kompetensi_25 = $request->get('kinerja_kompetensi_25');
            if ($request->hasFile('file_kinerja_kompetensi_25')) {
                $fileName = $request->file('file_kinerja_kompetensi_25')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_25 = $fileName;
            }

            $staffsecurity->kinerja_kompetensi_26 = $request->get('kinerja_kompetensi_26');
            if ($request->hasFile('file_kinerja_kompetensi_26')) {
                $fileName = $request->file('file_kinerja_kompetensi_26')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_26 = $fileName;
            }

            $staffsecurity->kinerja_kompetensi_27 = $request->get('kinerja_kompetensi_27');
            if ($request->hasFile('file_kinerja_kompetensi_27')) {
                $fileName = $request->file('file_kinerja_kompetensi_27')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_27 = $fileName;
            }

            $staffsecurity->kinerja_kompetensi_28 = $request->get('kinerja_kompetensi_28');
            if ($request->hasFile('file_kinerja_kompetensi_28')) {
                $fileName = $request->file('file_kinerja_kompetensi_28')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_28 = $fileName;
            }

            $staffsecurity->kinerja_kompetensi_29 = $request->get('kinerja_kompetensi_29');
            if ($request->hasFile('file_kinerja_kompetensi_29')) {
                $fileName = $request->file('file_kinerja_kompetensi_29')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_29 = $fileName;
            }

            $staffsecurity->kinerja_kompetensi_30 = $request->get('kinerja_kompetensi_30');
            if ($request->hasFile('file_kinerja_kompetensi_30')) {
                $fileName = $request->file('file_kinerja_kompetensi_30')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_30 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_31 = $request->get('kinerja_kompetensi_30');
            if ($request->hasFile('file_kinerja_kompetensi_31')) {
                $fileName = $request->file('file_kinerja_kompetensi_31')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_31 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_32 = $request->get('kinerja_kompetensi_30');
            if ($request->hasFile('file_kinerja_kompetensi_32')) {
                $fileName = $request->file('file_kinerja_kompetensi_32')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_32 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_33 = $request->get('kinerja_kompetensi_30');
            if ($request->hasFile('file_kinerja_kompetensi_33')) {
                $fileName = $request->file('file_kinerja_kompetensi_33')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_33 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_34 = $request->get('kinerja_kompetensi_30');
            if ($request->hasFile('file_kinerja_kompetensi_34')) {
                $fileName = $request->file('file_kinerja_kompetensi_34')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_34 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_35 = $request->get('kinerja_kompetensi_30');
            if ($request->hasFile('file_kinerja_kompetensi_35')) {
                $fileName = $request->file('file_kinerja_kompetensi_35')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_35 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_36 = $request->get('kinerja_kompetensi_30');
            if ($request->hasFile('file_kinerja_kompetensi_36')) {
                $fileName = $request->file('file_kinerja_kompetensi_36')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_36 = $fileName;
            }
            $staffsecurity->kinerja_kompetensi_37 = $request->get('kinerja_kompetensi_30');
            if ($request->hasFile('file_kinerja_kompetensi_37')) {
                $fileName = $request->file('file_kinerja_kompetensi_37')->store('uploads/biro-umum/staff-security', 'public');
                $staffsecurity->file_kinerja_kompetensi_37 = $fileName;
            }

            $staffsecurity->output_point_kinerja_kompetensi_1 = $request->get('output_point_kinerja_kompetensi_1');
            $staffsecurity->output_point_kinerja_kompetensi_2 = $request->get('output_point_kinerja_kompetensi_2');
            $staffsecurity->output_point_kinerja_kompetensi_3 = $request->get('output_point_kinerja_kompetensi_3');
            $staffsecurity->output_point_kinerja_kompetensi_4 = $request->get('output_point_kinerja_kompetensi_4');
            $staffsecurity->output_point_kinerja_kompetensi_5 = $request->get('output_point_kinerja_kompetensi_5');
            $staffsecurity->output_total_point_kinerja_kompetensi = $request->get('output_total_point_kinerja_kompetensi');
            $staffsecurity->output_total_nilai_rata_rata_kinerja_kompetensi = $request->get('output_total_nilai_rata_rata_kinerja_kompetensi');
            $staffsecurity->output_total_sementara_kinerja_kompetensi = $request->get('output_total_sementara_kinerja_kompetensi');

            $staffsecurity->user_id = $request->get('UserId');
            $staffsecurity->save();

            DB::commit();
            toast('Create Point Staff Secirity successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point Staff Secirity fail :)', 'error');
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
        } elseif (StaffSecurity::where('user_id', '=', $PointId)->first() == "") {
            return view('menu.menu-empty');
        } else {
            $data = StaffSecurity::where('user_id', '=', $PointId)->first();
        }

        return view('itisar.KaSubBiroUmum.StaffSecurity.edit', ['data' => $data]);
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
            'file_kinerja_kompetensi_18' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_19' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_20' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_21' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_22' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_23' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_24' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_25' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_26' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_27' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_28' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_29' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_30' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_31' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_32' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_33' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_34' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_35' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_36' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_37' => 'mimes:pdf|max:2048',
        ]);
        DB::beginTransaction();
        try {
            $RecordData =  StaffSecurity::where('user_id', $PointId)->firstOrFail();

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
                if ($RecordData->file_kinerja_kompetensi_1 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_1))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_1);
                }
                $file_kinerja_kompetensi_1 = $request->file('file_kinerja_kompetensi_1')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_1 = $RecordData->file_kinerja_kompetensi_1;
            }

            $kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                if ($RecordData->file_kinerja_kompetensi_2 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_2))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_2);
                }
                $file_kinerja_kompetensi_2 = $request->file('file_kinerja_kompetensi_2')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_2 = $RecordData->file_kinerja_kompetensi_2;
            }

            $kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                if ($RecordData->file_kinerja_kompetensi_3 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_3))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_3);
                }
                $file_kinerja_kompetensi_3 = $request->file('file_kinerja_kompetensi_3')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_3 = $RecordData->file_kinerja_kompetensi_3;
            }

            $kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                if ($RecordData->file_kinerja_kompetensi_4 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_4))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_4);
                }
                $file_kinerja_kompetensi_4 = $request->file('file_kinerja_kompetensi_4')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_4 = $RecordData->file_kinerja_kompetensi_4;
            }

            $kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                if ($RecordData->file_kinerja_kompetensi_5 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_5))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_5);
                }
                $file_kinerja_kompetensi_5 = $request->file('file_kinerja_kompetensi_5')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_5 = $RecordData->file_kinerja_kompetensi_5;
            }

            $kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                if ($RecordData->file_kinerja_kompetensi_6 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_6))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_6);
                }
                $file_kinerja_kompetensi_6 = $request->file('file_kinerja_kompetensi_6')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_6 = $RecordData->file_kinerja_kompetensi_6;
            }

            $kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                if ($RecordData->file_kinerja_kompetensi_7 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_7))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_7);
                }
                $file_kinerja_kompetensi_7 = $request->file('file_kinerja_kompetensi_7')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_7 = $RecordData->file_kinerja_kompetensi_7;
            }

            $kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('file_kinerja_kompetensi_8')) {
                if ($RecordData->file_kinerja_kompetensi_8 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_8))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_8);
                }
                $file_kinerja_kompetensi_8 = $request->file('file_kinerja_kompetensi_8')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_8 = $RecordData->file_kinerja_kompetensi_8;
            }

            $kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('file_kinerja_kompetensi_9')) {
                if ($RecordData->file_kinerja_kompetensi_9 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_9))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_9);
                }
                $file_kinerja_kompetensi_9 = $request->file('file_kinerja_kompetensi_9')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_9 = $RecordData->file_kinerja_kompetensi_9;
            }

            $kinerja_kompetensi_10 = $request->get('kinerja_kompetensi_10');
            if ($request->hasFile('file_kinerja_kompetensi_10')) {
                if ($RecordData->file_kinerja_kompetensi_10 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_10))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_10);
                }
                $file_kinerja_kompetensi_10 = $request->file('file_kinerja_kompetensi_10')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_10 = $RecordData->file_kinerja_kompetensi_10;
            }

            $kinerja_kompetensi_11 = $request->get('kinerja_kompetensi_11');
            if ($request->hasFile('file_kinerja_kompetensi_11')) {
                if ($RecordData->file_kinerja_kompetensi_11 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_11))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_11);
                }
                $file_kinerja_kompetensi_11 = $request->file('file_kinerja_kompetensi_11')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_11 = $RecordData->file_kinerja_kompetensi_11;
            }

            $kinerja_kompetensi_12 = $request->get('kinerja_kompetensi_12');
            if ($request->hasFile('file_kinerja_kompetensi_12')) {
                if ($RecordData->file_kinerja_kompetensi_12 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_12))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_12);
                }
                $file_kinerja_kompetensi_12 = $request->file('file_kinerja_kompetensi_12')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_12 = $RecordData->file_kinerja_kompetensi_12;
            }

            $kinerja_kompetensi_13 = $request->get('kinerja_kompetensi_13');
            if ($request->hasFile('file_kinerja_kompetensi_13')) {
                if ($RecordData->file_kinerja_kompetensi_13 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_13))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_13);
                }
                $file_kinerja_kompetensi_13 = $request->file('file_kinerja_kompetensi_13')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_13 = $RecordData->file_kinerja_kompetensi_13;
            }

            $kinerja_kompetensi_14 = $request->get('kinerja_kompetensi_14');
            if ($request->hasFile('file_kinerja_kompetensi_14')) {
                if ($RecordData->file_kinerja_kompetensi_14 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_14))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_14);
                }
                $file_kinerja_kompetensi_14 = $request->file('file_kinerja_kompetensi_14')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_14 = $RecordData->file_kinerja_kompetensi_14;
            }

            $kinerja_kompetensi_15 = $request->get('kinerja_kompetensi_15');
            if ($request->hasFile('file_kinerja_kompetensi_15')) {
                if ($RecordData->file_kinerja_kompetensi_15 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_15))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_15);
                }
                $file_kinerja_kompetensi_15 = $request->file('file_kinerja_kompetensi_15')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_15 = $RecordData->file_kinerja_kompetensi_15;
            }

            $kinerja_kompetensi_16 = $request->get('kinerja_kompetensi_16');
            if ($request->hasFile('file_kinerja_kompetensi_16')) {
                if ($RecordData->file_kinerja_kompetensi_16 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_16))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_16);
                }
                $file_kinerja_kompetensi_16 = $request->file('file_kinerja_kompetensi_16')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_16 = $RecordData->file_kinerja_kompetensi_16;
            }

            $kinerja_kompetensi_17 = $request->get('kinerja_kompetensi_17');
            if ($request->hasFile('file_kinerja_kompetensi_17')) {
                if ($RecordData->file_kinerja_kompetensi_17 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_17))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_17);
                }
                $file_kinerja_kompetensi_17 = $request->file('file_kinerja_kompetensi_17')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_17 = $RecordData->file_kinerja_kompetensi_17;
            }

            $kinerja_kompetensi_18 = $request->get('kinerja_kompetensi_18');
            if ($request->hasFile('file_kinerja_kompetensi_18')) {
                if ($RecordData->file_kinerja_kompetensi_18 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_18))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_18);
                }
                $file_kinerja_kompetensi_18 = $request->file('file_kinerja_kompetensi_18')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_18 = $RecordData->file_kinerja_kompetensi_18;
            }

            $kinerja_kompetensi_19 = $request->get('kinerja_kompetensi_19');
            if ($request->hasFile('file_kinerja_kompetensi_19')) {
                if ($RecordData->file_kinerja_kompetensi_19 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_19))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_19);
                }
                $file_kinerja_kompetensi_19 = $request->file('file_kinerja_kompetensi_19')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_19 = $RecordData->file_kinerja_kompetensi_19;
            }

            $kinerja_kompetensi_20 = $request->get('kinerja_kompetensi_20');
            if ($request->hasFile('file_kinerja_kompetensi_20')) {
                if ($RecordData->file_kinerja_kompetensi_20 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_20))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_20);
                }
                $file_kinerja_kompetensi_20 = $request->file('file_kinerja_kompetensi_20')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_20 = $RecordData->file_kinerja_kompetensi_20;
            }

            $kinerja_kompetensi_21 = $request->get('kinerja_kompetensi_21');
            if ($request->hasFile('file_kinerja_kompetensi_21')) {
                if ($RecordData->file_kinerja_kompetensi_21 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_21))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_21);
                }
                $file_kinerja_kompetensi_21 = $request->file('file_kinerja_kompetensi_21')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_21 = $RecordData->file_kinerja_kompetensi_21;
            }

            $kinerja_kompetensi_22 = $request->get('kinerja_kompetensi_122');
            if ($request->hasFile('file_kinerja_kompetensi_22')) {
                if ($RecordData->file_kinerja_kompetensi_22 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_22))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_22);
                }
                $file_kinerja_kompetensi_22 = $request->file('file_kinerja_kompetensi_22')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_22 = $RecordData->file_kinerja_kompetensi_22;
            }

            $kinerja_kompetensi_23 = $request->get('kinerja_kompetensi_23');
            if ($request->hasFile('file_kinerja_kompetensi_23')) {
                if ($RecordData->file_kinerja_kompetensi_23 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_23))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_23);
                }
                $file_kinerja_kompetensi_23 = $request->file('file_kinerja_kompetensi_23')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_23 = $RecordData->file_kinerja_kompetensi_23;
            }

            $kinerja_kompetensi_24 = $request->get('kinerja_kompetensi_24');
            if ($request->hasFile('file_kinerja_kompetensi_24')) {
                if ($RecordData->file_kinerja_kompetensi_24 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_24))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_24);
                }
                $file_kinerja_kompetensi_24 = $request->file('file_kinerja_kompetensi_24')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_24 = $RecordData->file_kinerja_kompetensi_24;
            }

            $kinerja_kompetensi_25 = $request->get('kinerja_kompetensi_25');
            if ($request->hasFile('file_kinerja_kompetensi_25')) {
                if ($RecordData->file_kinerja_kompetensi_25 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_25))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_25);
                }
                $file_kinerja_kompetensi_25 = $request->file('file_kinerja_kompetensi_25')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_25 = $RecordData->file_kinerja_kompetensi_25;
            }

            $kinerja_kompetensi_26 = $request->get('kinerja_kompetensi_26');
            if ($request->hasFile('file_kinerja_kompetensi_26')) {
                if ($RecordData->file_kinerja_kompetensi_26 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_26))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_26);
                }
                $file_kinerja_kompetensi_26 = $request->file('file_kinerja_kompetensi_26')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_26 = $RecordData->file_kinerja_kompetensi_26;
            }

            $kinerja_kompetensi_27 = $request->get('kinerja_kompetensi_27');
            if ($request->hasFile('file_kinerja_kompetensi_27')) {
                if ($RecordData->file_kinerja_kompetensi_27 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_27))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_27);
                }
                $file_kinerja_kompetensi_27 = $request->file('file_kinerja_kompetensi_27')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_27 = $RecordData->file_kinerja_kompetensi_27;
            }

            $kinerja_kompetensi_28 = $request->get('kinerja_kompetensi_28');
            if ($request->hasFile('file_kinerja_kompetensi_28')) {
                if ($RecordData->file_kinerja_kompetensi_28 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_28))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_28);
                }
                $file_kinerja_kompetensi_28 = $request->file('file_kinerja_kompetensi_28')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_28 = $RecordData->file_kinerja_kompetensi_28;
            }

            $kinerja_kompetensi_29 = $request->get('kinerja_kompetensi_29');
            if ($request->hasFile('file_kinerja_kompetensi_29')) {
                if ($RecordData->file_kinerja_kompetensi_29 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_29))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_29);
                }
                $file_kinerja_kompetensi_29 = $request->file('file_kinerja_kompetensi_29')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_29 = $RecordData->file_kinerja_kompetensi_29;
            }

            $kinerja_kompetensi_30 = $request->get('kinerja_kompetensi_30');
            if ($request->hasFile('file_kinerja_kompetensi_30')) {
                if ($RecordData->file_kinerja_kompetensi_30 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_30))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_30);
                }
                $file_kinerja_kompetensi_30 = $request->file('file_kinerja_kompetensi_30')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_30 = $RecordData->file_kinerja_kompetensi_30;
            }

            $kinerja_kompetensi_31 = $request->get('kinerja_kompetensi_31');
            if ($request->hasFile('file_kinerja_kompetensi_31')) {
                if ($RecordData->file_kinerja_kompetensi_31 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_31))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_31);
                }
                $file_kinerja_kompetensi_31 = $request->file('file_kinerja_kompetensi_31')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_31 = $RecordData->file_kinerja_kompetensi_31;
            }

            $kinerja_kompetensi_32 = $request->get('kinerja_kompetensi_32');
            if ($request->hasFile('file_kinerja_kompetensi_32')) {
                if ($RecordData->file_kinerja_kompetensi_32 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_32))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_32);
                }
                $file_kinerja_kompetensi_32 = $request->file('file_kinerja_kompetensi_32')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_32 = $RecordData->file_kinerja_kompetensi_32;
            }

            $kinerja_kompetensi_33 = $request->get('kinerja_kompetensi_30');
            if ($request->hasFile('file_kinerja_kompetensi_33')) {
                if ($RecordData->file_kinerja_kompetensi_33 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_30))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_33);
                }
                $file_kinerja_kompetensi_33 = $request->file('file_kinerja_kompetensi_30')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_33 = $RecordData->file_kinerja_kompetensi_30;
            }

            $kinerja_kompetensi_34 = $request->get('kinerja_kompetensi_30');
            if ($request->hasFile('file_kinerja_kompetensi_34')) {
                if ($RecordData->file_kinerja_kompetensi_34 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_30))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_34);
                }
                $file_kinerja_kompetensi_34 = $request->file('file_kinerja_kompetensi_30')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_34 = $RecordData->file_kinerja_kompetensi_30;
            }

            $kinerja_kompetensi_35 = $request->get('kinerja_kompetensi_30');
            if ($request->hasFile('file_kinerja_kompetensi_35')) {
                if ($RecordData->file_kinerja_kompetensi_35 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_30))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_35);
                }
                $file_kinerja_kompetensi_35 = $request->file('file_kinerja_kompetensi_30')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_35 = $RecordData->file_kinerja_kompetensi_30;
            }

            $kinerja_kompetensi_36 = $request->get('kinerja_kompetensi_30');
            if ($request->hasFile('file_kinerja_kompetensi_36')) {
                if ($RecordData->file_kinerja_kompetensi_36 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_30))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_36);
                }
                $file_kinerja_kompetensi_36 = $request->file('file_kinerja_kompetensi_30')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_36 = $RecordData->file_kinerja_kompetensi_30;
            }

            $kinerja_kompetensi_37 = $request->get('kinerja_kompetensi_30');
            if ($request->hasFile('file_kinerja_kompetensi_37')) {
                if ($RecordData->file_kinerja_kompetensi_37 && file_exists(storage_path('app/public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_30))) {
                    \Storage::delete('public/uploads/biro-umum/staff-security/' . $RecordData->file_kinerja_kompetensi_37);
                }
                $file_kinerja_kompetensi_37 = $request->file('file_kinerja_kompetensi_30')->store('uploads/biro-umum/staff-security', 'public');
            } else {
                $file_kinerja_kompetensi_37 = $RecordData->file_kinerja_kompetensi_30;
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
                'kinerja_kompetensi_18' => $kinerja_kompetensi_18,
                'file_kinerja_kompetensi_18' => $file_kinerja_kompetensi_18,
                'kinerja_kompetensi_19' => $kinerja_kompetensi_19,
                'file_kinerja_kompetensi_19' => $file_kinerja_kompetensi_19,
                'kinerja_kompetensi_20' => $kinerja_kompetensi_20,
                'file_kinerja_kompetensi_20' => $file_kinerja_kompetensi_20,
                'kinerja_kompetensi_21' => $kinerja_kompetensi_21,
                'file_kinerja_kompetensi_21' => $file_kinerja_kompetensi_21,
                'kinerja_kompetensi_22' => $kinerja_kompetensi_22,
                'file_kinerja_kompetensi_22' => $file_kinerja_kompetensi_22,
                'kinerja_kompetensi_23' => $kinerja_kompetensi_23,
                'file_kinerja_kompetensi_23' => $file_kinerja_kompetensi_23,
                'kinerja_kompetensi_24' => $kinerja_kompetensi_24,
                'file_kinerja_kompetensi_24' => $file_kinerja_kompetensi_24,
                'kinerja_kompetensi_25' => $kinerja_kompetensi_25,
                'file_kinerja_kompetensi_25' => $file_kinerja_kompetensi_25,
                'kinerja_kompetensi_26' => $kinerja_kompetensi_26,
                'file_kinerja_kompetensi_26' => $file_kinerja_kompetensi_26,
                'kinerja_kompetensi_27' => $kinerja_kompetensi_27,
                'file_kinerja_kompetensi_27' => $file_kinerja_kompetensi_27,
                'kinerja_kompetensi_28' => $kinerja_kompetensi_28,
                'file_kinerja_kompetensi_28' => $file_kinerja_kompetensi_28,
                'kinerja_kompetensi_29' => $kinerja_kompetensi_29,
                'file_kinerja_kompetensi_29' => $file_kinerja_kompetensi_29,
                'kinerja_kompetensi_30' => $kinerja_kompetensi_30,
                'file_kinerja_kompetensi_30' => $file_kinerja_kompetensi_30,
                'kinerja_kompetensi_31' => $kinerja_kompetensi_31,
                'file_kinerja_kompetensi_31' => $file_kinerja_kompetensi_31,
                'kinerja_kompetensi_32' => $kinerja_kompetensi_32,
                'file_kinerja_kompetensi_32' => $file_kinerja_kompetensi_32,
                'kinerja_kompetensi_33' => $kinerja_kompetensi_33,
                'file_kinerja_kompetensi_33' => $file_kinerja_kompetensi_33,
                'kinerja_kompetensi_34' => $kinerja_kompetensi_34,
                'file_kinerja_kompetensi_34' => $file_kinerja_kompetensi_34,
                'kinerja_kompetensi_35' => $kinerja_kompetensi_35,
                'file_kinerja_kompetensi_35' => $file_kinerja_kompetensi_35,
                'kinerja_kompetensi_36' => $kinerja_kompetensi_36,
                'file_kinerja_kompetensi_36' => $file_kinerja_kompetensi_36,
                'kinerja_kompetensi_37' => $kinerja_kompetensi_37,
                'file_kinerja_kompetensi_37' => $file_kinerja_kompetensi_37,
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
            toast('Update Point Staff Security successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point Staff Security fail :)', 'error');
            return redirect()->back();
        }
    }

    public function raport($user_id)
    {
        $DataUser = DB::table('users')
            ->leftJoin('staff_security', 'users.id', '=', 'staff_security.user_id')
            ->select(
                'users.name',
                'users.email',
                'staff_security.user_id',
                'staff_security.output_total_sementara_kinerja_perilaku',
                'staff_security.output_total_sementara_kinerja_kompetensi',
            )
            ->where('staff_security.user_id', $user_id)
            ->first();

        // dd($DataUser);
        if (!empty($DataUser->user_id)) {
            return view('itisar.KaSubBiroUmum.StaffSecurity.raport', compact('DataUser'));
        } else {
            return view('menu.menu-empty');
        }
    }
}
