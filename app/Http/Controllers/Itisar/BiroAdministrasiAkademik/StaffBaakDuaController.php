<?php

namespace App\Http\Controllers\Itisar\BiroAdministrasiAkademik;

use App\Http\Controllers\Controller;
use App\Models\BiroAdministrasiAkademik\StaffBaakDua;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffBaakDuaController extends Controller
{
    public function create()
    {
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm', 'warek2', 'upt', 'baak', 'keuangan', 'lpm', 'risbang', 'gizi', 'perawat', 'bidan', 'manajemen', 'akuntansi', 'bau', 'warek1', 'rektor', 'ypsdmit'
        ])->get();
        return view('itisar.BiroAdministrasi.BaakDua.create', compact('users'));
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
            'file_kinerja_kompetensi_20' => 'mimes:pdf',
            'file_kinerja_kompetensi_21' => 'mimes:pdf',
            'file_kinerja_kompetensi_22' => 'mimes:pdf',
            'file_kinerja_kompetensi_23' => 'mimes:pdf',
            'file_kinerja_kompetensi_24' => 'mimes:pdf',
            'file_kinerja_kompetensi_25' => 'mimes:pdf',
            'file_kinerja_kompetensi_26' => 'mimes:pdf',
            'file_kinerja_kompetensi_27' => 'mimes:pdf',
            'file_kinerja_kompetensi_28' => 'mimes:pdf',
            'file_kinerja_kompetensi_29' => 'mimes:pdf',
            'file_kinerja_kompetensi_30' => 'mimes:pdf',
            'file_kinerja_kompetensi_31' => 'mimes:pdf',
            'file_kinerja_kompetensi_32' => 'mimes:pdf',
            'file_kinerja_kompetensi_33' => 'mimes:pdf',
            'file_kinerja_kompetensi_34' => 'mimes:pdf',
            'file_kinerja_kompetensi_35' => 'mimes:pdf',
            'file_kinerja_kompetensi_36' => 'mimes:pdf',
            'file_kinerja_kompetensi_37' => 'mimes:pdf',
            'file_kinerja_kompetensi_38' => 'mimes:pdf',
            'file_kinerja_kompetensi_39' => 'mimes:pdf',
            'file_kinerja_kompetensi_40' => 'mimes:pdf',
            'file_kinerja_kompetensi_41' => 'mimes:pdf',
            'file_kinerja_kompetensi_42' => 'mimes:pdf',
            'file_kinerja_kompetensi_43' => 'mimes:pdf',
            'file_kinerja_kompetensi_44' => 'mimes:pdf',
            'file_kinerja_kompetensi_45' => 'mimes:pdf',
            'file_kinerja_kompetensi_46' => 'mimes:pdf',
            'file_kinerja_kompetensi_47' => 'mimes:pdf',
            'file_kinerja_kompetensi_48' => 'mimes:pdf',
            'file_kinerja_kompetensi_49' => 'mimes:pdf',
        ]);

        DB::beginTransaction();
        try {
            $staffbaakdua = new StaffBaakDua();
            $staffbaakdua->q1 = $request->get('q1');
            $staffbaakdua->q2 = $request->get('q2');
            $staffbaakdua->q3 = $request->get('q3');
            $staffbaakdua->q4 = $request->get('q4');
            $staffbaakdua->q5 = $request->get('q5');
            $staffbaakdua->q6 = $request->get('q6');
            $staffbaakdua->output_point_1 = $request->get('output_point_1');
            $staffbaakdua->output_point_2 = $request->get('output_point_2');
            $staffbaakdua->output_point_3 = $request->get('output_point_3');
            $staffbaakdua->output_point_4 = $request->get('output_point_4');
            $staffbaakdua->output_point_5 = $request->get('output_point_5');
            $staffbaakdua->output_total_point_kinerja_perilaku = $request->get('output_total_point_kinerja_perilaku');
            $staffbaakdua->output_total_nilai_rata_rata_kinerja_perilaku = $request->get('output_total_nilai_rata_rata_kinerja_perilaku');
            $staffbaakdua->output_total_sementara_kinerja_perilaku = $request->get('output_total_sementara_kinerja_perilaku');

            $staffbaakdua->kinerja_kompetensi_1 = $request->get('kinerja_kompetensi_1');
            if ($request->hasFile('file_kinerja_kompetensi_1')) {
                $fileName = $request->file('file_kinerja_kompetensi_1')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_1 = $fileName;
            }
            $staffbaakdua->kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                $fileName = $request->file('file_kinerja_kompetensi_2')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_2 = $fileName;
            }
            $staffbaakdua->kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                $fileName = $request->file('file_kinerja_kompetensi_3')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_3 = $fileName;
            }
            $staffbaakdua->kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                $fileName = $request->file('file_kinerja_kompetensi_4')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_4 = $fileName;
            }
            $staffbaakdua->kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                $fileName = $request->file('file_kinerja_kompetensi_5')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_5 = $fileName;
            }
            $staffbaakdua->kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                $fileName = $request->file('file_kinerja_kompetensi_6')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_6 = $fileName;
            }
            $staffbaakdua->kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                $fileName = $request->file('file_kinerja_kompetensi_7')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_7 = $fileName;
            }
            $staffbaakdua->kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('file_kinerja_kompetensi_8')) {
                $fileName = $request->file('file_kinerja_kompetensi_8')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_8 = $fileName;
            }
            $staffbaakdua->kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('file_kinerja_kompetensi_9')) {
                $fileName = $request->file('file_kinerja_kompetensi_9')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_9 = $fileName;
            }
            $staffbaakdua->kinerja_kompetensi_10 = $request->get('kinerja_kompetensi_10');
            if ($request->hasFile('file_kinerja_kompetensi_10')) {
                $fileName = $request->file('file_kinerja_kompetensi_10')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_10 = $fileName;
            }
            $staffbaakdua->kinerja_kompetensi_11 = $request->get('kinerja_kompetensi_11');
            if ($request->hasFile('file_kinerja_kompetensi_11')) {
                $fileName = $request->file('file_kinerja_kompetensi_11')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_11 = $fileName;
            }
            $staffbaakdua->kinerja_kompetensi_12 = $request->get('kinerja_kompetensi_12');
            if ($request->hasFile('file_kinerja_kompetensi_12')) {
                $fileName = $request->file('file_kinerja_kompetensi_12')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_12 = $fileName;
            }
            $staffbaakdua->kinerja_kompetensi_13 = $request->get('kinerja_kompetensi_13');
            if ($request->hasFile('file_kinerja_kompetensi_13')) {
                $fileName = $request->file('file_kinerja_kompetensi_13')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_13 = $fileName;
            }
            $staffbaakdua->kinerja_kompetensi_14 = $request->get('kinerja_kompetensi_14');
            if ($request->hasFile('file_kinerja_kompetensi_14')) {
                $fileName = $request->file('file_kinerja_kompetensi_14')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_14 = $fileName;
            }
            $staffbaakdua->kinerja_kompetensi_15 = $request->get('kinerja_kompetensi_15');
            if ($request->hasFile('file_kinerja_kompetensi_15')) {
                $fileName = $request->file('file_kinerja_kompetensi_15')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_15 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_16 = $request->get('kinerja_kompetensi_16');
            if ($request->hasFile('file_kinerja_kompetensi_16')) {
                $fileName = $request->file('file_kinerja_kompetensi_16')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_16 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_17 = $request->get('kinerja_kompetensi_17');
            if ($request->hasFile('file_kinerja_kompetensi_17')) {
                $fileName = $request->file('file_kinerja_kompetensi_17')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_17 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_18 = $request->get('kinerja_kompetensi_18');
            if ($request->hasFile('file_kinerja_kompetensi_18')) {
                $fileName = $request->file('file_kinerja_kompetensi_18')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_18 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_19 = $request->get('kinerja_kompetensi_19');
            if ($request->hasFile('file_kinerja_kompetensi_19')) {
                $fileName = $request->file('file_kinerja_kompetensi_19')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_19 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_20 = $request->get('kinerja_kompetensi_20');
            if ($request->hasFile('file_kinerja_kompetensi_20')) {
                $fileName = $request->file('file_kinerja_kompetensi_20')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_20 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_21 = $request->get('kinerja_kompetensi_21');
            if ($request->hasFile('file_kinerja_kompetensi_21')) {
                $fileName = $request->file('file_kinerja_kompetensi_21')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_21 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_22 = $request->get('kinerja_kompetensi_22');
            if ($request->hasFile('file_kinerja_kompetensi_22')) {
                $fileName = $request->file('file_kinerja_kompetensi_22')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_22 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_23 = $request->get('kinerja_kompetensi_23');
            if ($request->hasFile('file_kinerja_kompetensi_23')) {
                $fileName = $request->file('file_kinerja_kompetensi_23')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_23 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_24 = $request->get('kinerja_kompetensi_24');
            if ($request->hasFile('file_kinerja_kompetensi_24')) {
                $fileName = $request->file('file_kinerja_kompetensi_24')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_24 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_25 = $request->get('kinerja_kompetensi_25');
            if ($request->hasFile('file_kinerja_kompetensi_25')) {
                $fileName = $request->file('file_kinerja_kompetensi_25')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_25 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_26 = $request->get('kinerja_kompetensi_26');
            if ($request->hasFile('file_kinerja_kompetensi_26')) {
                $fileName = $request->file('file_kinerja_kompetensi_26')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_26 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_27 = $request->get('kinerja_kompetensi_27');
            if ($request->hasFile('file_kinerja_kompetensi_27')) {
                $fileName = $request->file('file_kinerja_kompetensi_27')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_27 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_28 = $request->get('kinerja_kompetensi_28');
            if ($request->hasFile('file_kinerja_kompetensi_28')) {
                $fileName = $request->file('file_kinerja_kompetensi_28')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_28 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_29 = $request->get('kinerja_kompetensi_29');
            if ($request->hasFile('file_kinerja_kompetensi_29')) {
                $fileName = $request->file('file_kinerja_kompetensi_29')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_29 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_30 = $request->get('kinerja_kompetensi_30');
            if ($request->hasFile('file_kinerja_kompetensi_30')) {
                $fileName = $request->file('file_kinerja_kompetensi_30')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_30 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_31 = $request->get('kinerja_kompetensi_31');
            if ($request->hasFile('file_kinerja_kompetensi_31')) {
                $fileName = $request->file('file_kinerja_kompetensi_31')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_31 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_32 = $request->get('kinerja_kompetensi_32');
            if ($request->hasFile('file_kinerja_kompetensi_32')) {
                $fileName = $request->file('file_kinerja_kompetensi_32')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_32 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_33 = $request->get('kinerja_kompetensi_33');
            if ($request->hasFile('file_kinerja_kompetensi_33')) {
                $fileName = $request->file('file_kinerja_kompetensi_33')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_33 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_34 = $request->get('kinerja_kompetensi_34');
            if ($request->hasFile('file_kinerja_kompetensi_34')) {
                $fileName = $request->file('file_kinerja_kompetensi_34')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_34 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_35 = $request->get('kinerja_kompetensi_35');
            if ($request->hasFile('file_kinerja_kompetensi_35')) {
                $fileName = $request->file('file_kinerja_kompetensi_35')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_35 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_36 = $request->get('kinerja_kompetensi_36');
            if ($request->hasFile('file_kinerja_kompetensi_36')) {
                $fileName = $request->file('file_kinerja_kompetensi_36')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_36 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_37 = $request->get('kinerja_kompetensi_37');
            if ($request->hasFile('file_kinerja_kompetensi_37')) {
                $fileName = $request->file('file_kinerja_kompetensi_37')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_37 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_38 = $request->get('kinerja_kompetensi_38');
            if ($request->hasFile('file_kinerja_kompetensi_38')) {
                $fileName = $request->file('file_kinerja_kompetensi_38')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_38 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_39 = $request->get('kinerja_kompetensi_39');
            if ($request->hasFile('file_kinerja_kompetensi_39')) {
                $fileName = $request->file('file_kinerja_kompetensi_39')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_39 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_40 = $request->get('kinerja_kompetensi_40');
            if ($request->hasFile('file_kinerja_kompetensi_40')) {
                $fileName = $request->file('file_kinerja_kompetensi_40')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_40 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_41 = $request->get('kinerja_kompetensi_41');
            if ($request->hasFile('file_kinerja_kompetensi_41')) {
                $fileName = $request->file('file_kinerja_kompetensi_41')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_41 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_42 = $request->get('kinerja_kompetensi_42');
            if ($request->hasFile('file_kinerja_kompetensi_42')) {
                $fileName = $request->file('file_kinerja_kompetensi_42')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_42 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_43 = $request->get('kinerja_kompetensi_43');
            if ($request->hasFile('file_kinerja_kompetensi_43')) {
                $fileName = $request->file('file_kinerja_kompetensi_43')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_43 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_44 = $request->get('kinerja_kompetensi_44');
            if ($request->hasFile('file_kinerja_kompetensi_44')) {
                $fileName = $request->file('file_kinerja_kompetensi_44')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_44 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_45 = $request->get('kinerja_kompetensi_45');
            if ($request->hasFile('file_kinerja_kompetensi_45')) {
                $fileName = $request->file('file_kinerja_kompetensi_45')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_45 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_46 = $request->get('kinerja_kompetensi_46');
            if ($request->hasFile('file_kinerja_kompetensi_46')) {
                $fileName = $request->file('file_kinerja_kompetensi_46')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_46 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_47 = $request->get('kinerja_kompetensi_47');
            if ($request->hasFile('file_kinerja_kompetensi_47')) {
                $fileName = $request->file('file_kinerja_kompetensi_47')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_47 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_48 = $request->get('kinerja_kompetensi_48');
            if ($request->hasFile('file_kinerja_kompetensi_48')) {
                $fileName = $request->file('file_kinerja_kompetensi_48')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_48 = $fileName;
            }

            $staffbaakdua->kinerja_kompetensi_49 = $request->get('kinerja_kompetensi_49');
            if ($request->hasFile('file_kinerja_kompetensi_49')) {
                $fileName = $request->file('file_kinerja_kompetensi_49')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
                $staffbaakdua->file_kinerja_kompetensi_49 = $fileName;
            }

            $staffbaakdua->output_point_kinerja_kompetensi_1 = $request->get('output_point_kinerja_kompetensi_1');
            $staffbaakdua->output_point_kinerja_kompetensi_2 = $request->get('output_point_kinerja_kompetensi_2');
            $staffbaakdua->output_point_kinerja_kompetensi_3 = $request->get('output_point_kinerja_kompetensi_3');
            $staffbaakdua->output_point_kinerja_kompetensi_4 = $request->get('output_point_kinerja_kompetensi_4');
            $staffbaakdua->output_point_kinerja_kompetensi_5 = $request->get('output_point_kinerja_kompetensi_5');
            $staffbaakdua->output_total_point_kinerja_kompetensi = $request->get('output_total_point_kinerja_kompetensi');
            $staffbaakdua->output_total_nilai_rata_rata_kinerja_kompetensi = $request->get('output_total_nilai_rata_rata_kinerja_kompetensi');
            $staffbaakdua->output_total_sementara_kinerja_kompetensi = $request->get('output_total_sementara_kinerja_kompetensi');

            $staffbaakdua->user_id = $request->get('UserId');
            $staffbaakdua->save();

            DB::commit();
            toast('Create Point Staff Baak successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point Staff Baak fail :)', 'error');
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
        return view('itisar.BiroAdministrasi.BaakDua.searchdata', compact('users'));
    }

    public function dataSearch(Request $request)
    {
        $data = StaffBaakDua::where('user_id', '=', $request->id)->first();

        return view('itisar.BiroAdministrasi.BaakDua.edit', ['data' => $data]);
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
            'file_kinerja_kompetensi_20' => 'mimes:pdf',
            'file_kinerja_kompetensi_21' => 'mimes:pdf',
            'file_kinerja_kompetensi_22' => 'mimes:pdf',
            'file_kinerja_kompetensi_23' => 'mimes:pdf',
            'file_kinerja_kompetensi_24' => 'mimes:pdf',
            'file_kinerja_kompetensi_25' => 'mimes:pdf',
            'file_kinerja_kompetensi_26' => 'mimes:pdf',
            'file_kinerja_kompetensi_27' => 'mimes:pdf',
            'file_kinerja_kompetensi_28' => 'mimes:pdf',
            'file_kinerja_kompetensi_29' => 'mimes:pdf',
            'file_kinerja_kompetensi_30' => 'mimes:pdf',
            'file_kinerja_kompetensi_31' => 'mimes:pdf',
            'file_kinerja_kompetensi_32' => 'mimes:pdf',
            'file_kinerja_kompetensi_33' => 'mimes:pdf',
            'file_kinerja_kompetensi_34' => 'mimes:pdf',
            'file_kinerja_kompetensi_35' => 'mimes:pdf',
            'file_kinerja_kompetensi_36' => 'mimes:pdf',
            'file_kinerja_kompetensi_37' => 'mimes:pdf',
            'file_kinerja_kompetensi_38' => 'mimes:pdf',
            'file_kinerja_kompetensi_39' => 'mimes:pdf',
            'file_kinerja_kompetensi_40' => 'mimes:pdf',
            'file_kinerja_kompetensi_41' => 'mimes:pdf',
            'file_kinerja_kompetensi_42' => 'mimes:pdf',
            'file_kinerja_kompetensi_43' => 'mimes:pdf',
            'file_kinerja_kompetensi_44' => 'mimes:pdf',
            'file_kinerja_kompetensi_45' => 'mimes:pdf',
            'file_kinerja_kompetensi_46' => 'mimes:pdf',
            'file_kinerja_kompetensi_47' => 'mimes:pdf',
            'file_kinerja_kompetensi_48' => 'mimes:pdf',
            'file_kinerja_kompetensi_49' => 'mimes:pdf',
        ]);
        DB::beginTransaction();
        try {
            $RecordData =  StaffBaakDua::where('user_id', $PointId)->firstOrFail();

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
                if ($RecordData->file_kinerja_kompetensi_1 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_1))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_1);
                }
                $file_kinerja_kompetensi_1 = $request->file('file_kinerja_kompetensi_1')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_1 = $RecordData->file_kinerja_kompetensi_1;
            }

            $kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                if ($RecordData->file_kinerja_kompetensi_2 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_2))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_2);
                }
                $file_kinerja_kompetensi_2 = $request->file('file_kinerja_kompetensi_2')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_2 = $RecordData->file_kinerja_kompetensi_2;
            }

            $kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                if ($RecordData->file_kinerja_kompetensi_3 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_3))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_3);
                }
                $file_kinerja_kompetensi_3 = $request->file('file_kinerja_kompetensi_3')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_3 = $RecordData->file_kinerja_kompetensi_3;
            }

            $kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                if ($RecordData->file_kinerja_kompetensi_4 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_4))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_4);
                }
                $file_kinerja_kompetensi_4 = $request->file('file_kinerja_kompetensi_4')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_4 = $RecordData->file_kinerja_kompetensi_4;
            }

            $kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                if ($RecordData->file_kinerja_kompetensi_5 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_5))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_5);
                }
                $file_kinerja_kompetensi_5 = $request->file('file_kinerja_kompetensi_5')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_5 = $RecordData->file_kinerja_kompetensi_5;
            }

            $kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                if ($RecordData->file_kinerja_kompetensi_6 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_6))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_6);
                }
                $file_kinerja_kompetensi_6 = $request->file('file_kinerja_kompetensi_6')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_6 = $RecordData->file_kinerja_kompetensi_6;
            }

            $kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                if ($RecordData->file_kinerja_kompetensi_7 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_7))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_7);
                }
                $file_kinerja_kompetensi_7 = $request->file('file_kinerja_kompetensi_7')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_7 = $RecordData->file_kinerja_kompetensi_7;
            }

            $kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('file_kinerja_kompetensi_8')) {
                if ($RecordData->file_kinerja_kompetensi_8 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_8))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_8);
                }
                $file_kinerja_kompetensi_8 = $request->file('file_kinerja_kompetensi_8')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_8 = $RecordData->file_kinerja_kompetensi_8;
            }

            $kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('file_kinerja_kompetensi_9')) {
                if ($RecordData->file_kinerja_kompetensi_9 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_9))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_9);
                }
                $file_kinerja_kompetensi_9 = $request->file('file_kinerja_kompetensi_9')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_9 = $RecordData->file_kinerja_kompetensi_9;
            }

            $kinerja_kompetensi_10 = $request->get('kinerja_kompetensi_10');
            if ($request->hasFile('file_kinerja_kompetensi_10')) {
                if ($RecordData->file_kinerja_kompetensi_10 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_10))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_10);
                }
                $file_kinerja_kompetensi_10 = $request->file('file_kinerja_kompetensi_10')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_10 = $RecordData->file_kinerja_kompetensi_10;
            }

            $kinerja_kompetensi_11 = $request->get('kinerja_kompetensi_11');
            if ($request->hasFile('file_kinerja_kompetensi_11')) {
                if ($RecordData->file_kinerja_kompetensi_11 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_11))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_11);
                }
                $file_kinerja_kompetensi_11 = $request->file('file_kinerja_kompetensi_11')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_11 = $RecordData->file_kinerja_kompetensi_11;
            }

            $kinerja_kompetensi_12 = $request->get('kinerja_kompetensi_12');
            if ($request->hasFile('file_kinerja_kompetensi_12')) {
                if ($RecordData->file_kinerja_kompetensi_12 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_12))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_12);
                }
                $file_kinerja_kompetensi_12 = $request->file('file_kinerja_kompetensi_12')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_12 = $RecordData->file_kinerja_kompetensi_12;
            }

            $kinerja_kompetensi_13 = $request->get('kinerja_kompetensi_13');
            if ($request->hasFile('file_kinerja_kompetensi_13')) {
                if ($RecordData->file_kinerja_kompetensi_13 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_13))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_13);
                }
                $file_kinerja_kompetensi_13 = $request->file('file_kinerja_kompetensi_13')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_13 = $RecordData->file_kinerja_kompetensi_13;
            }

            $kinerja_kompetensi_14 = $request->get('kinerja_kompetensi_14');
            if ($request->hasFile('file_kinerja_kompetensi_14')) {
                if ($RecordData->file_kinerja_kompetensi_14 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_14))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_14);
                }
                $file_kinerja_kompetensi_14 = $request->file('file_kinerja_kompetensi_14')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_14 = $RecordData->file_kinerja_kompetensi_14;
            }

            $kinerja_kompetensi_15 = $request->get('kinerja_kompetensi_15');
            if ($request->hasFile('file_kinerja_kompetensi_15')) {
                if ($RecordData->file_kinerja_kompetensi_15 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_15))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_15);
                }
                $file_kinerja_kompetensi_15 = $request->file('file_kinerja_kompetensi_15')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_15 = $RecordData->file_kinerja_kompetensi_15;
            }

            $kinerja_kompetensi_16 = $request->get('kinerja_kompetensi_16');
            if ($request->hasFile('file_kinerja_kompetensi_16')) {
                if ($RecordData->file_kinerja_kompetensi_16 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_16))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_16);
                }
                $file_kinerja_kompetensi_16 = $request->file('file_kinerja_kompetensi_16')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_16 = $RecordData->file_kinerja_kompetensi_16;
            }

            $kinerja_kompetensi_17 = $request->get('kinerja_kompetensi_17');
            if ($request->hasFile('file_kinerja_kompetensi_17')) {
                if ($RecordData->file_kinerja_kompetensi_17 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_17))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_17);
                }
                $file_kinerja_kompetensi_17 = $request->file('file_kinerja_kompetensi_17')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_17 = $RecordData->file_kinerja_kompetensi_17;
            }

            $kinerja_kompetensi_18 = $request->get('kinerja_kompetensi_18');
            if ($request->hasFile('file_kinerja_kompetensi_18')) {
                if ($RecordData->file_kinerja_kompetensi_18 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_18))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_18);
                }
                $file_kinerja_kompetensi_18 = $request->file('file_kinerja_kompetensi_18')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_18 = $RecordData->file_kinerja_kompetensi_18;
            }

            $kinerja_kompetensi_19 = $request->get('kinerja_kompetensi_19');
            if ($request->hasFile('file_kinerja_kompetensi_19')) {
                if ($RecordData->file_kinerja_kompetensi_19 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_19))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_19);
                }
                $file_kinerja_kompetensi_19 = $request->file('file_kinerja_kompetensi_19')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_19 = $RecordData->file_kinerja_kompetensi_19;
            }

            $kinerja_kompetensi_20 = $request->get('kinerja_kompetensi_20');
            if ($request->hasFile('file_kinerja_kompetensi_20')) {
                if ($RecordData->file_kinerja_kompetensi_20 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_20))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_20);
                }
                $file_kinerja_kompetensi_20 = $request->file('file_kinerja_kompetensi_20')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_20 = $RecordData->file_kinerja_kompetensi_20;
            }

            $kinerja_kompetensi_21 = $request->get('kinerja_kompetensi_21');
            if ($request->hasFile('file_kinerja_kompetensi_21')) {
                if ($RecordData->file_kinerja_kompetensi_21 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_21))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_21);
                }
                $file_kinerja_kompetensi_21 = $request->file('file_kinerja_kompetensi_21')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_21 = $RecordData->file_kinerja_kompetensi_21;
            }

            $kinerja_kompetensi_22 = $request->get('kinerja_kompetensi_22');
            if ($request->hasFile('file_kinerja_kompetensi_22')) {
                if ($RecordData->file_kinerja_kompetensi_22 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_22))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_22);
                }
                $file_kinerja_kompetensi_22 = $request->file('file_kinerja_kompetensi_22')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_22 = $RecordData->file_kinerja_kompetensi_22;
            }

            $kinerja_kompetensi_23 = $request->get('kinerja_kompetensi_23');
            if ($request->hasFile('file_kinerja_kompetensi_23')) {
                if ($RecordData->file_kinerja_kompetensi_23 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_23))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_23);
                }
                $file_kinerja_kompetensi_23 = $request->file('file_kinerja_kompetensi_23')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_23 = $RecordData->file_kinerja_kompetensi_23;
            }

            $kinerja_kompetensi_24 = $request->get('kinerja_kompetensi_24');
            if ($request->hasFile('file_kinerja_kompetensi_24')) {
                if ($RecordData->file_kinerja_kompetensi_24 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_24))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_24);
                }
                $file_kinerja_kompetensi_24 = $request->file('file_kinerja_kompetensi_24')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_24 = $RecordData->file_kinerja_kompetensi_24;
            }

            $kinerja_kompetensi_25 = $request->get('kinerja_kompetensi_25');
            if ($request->hasFile('file_kinerja_kompetensi_25')) {
                if ($RecordData->file_kinerja_kompetensi_25 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_25))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_25);
                }
                $file_kinerja_kompetensi_25 = $request->file('file_kinerja_kompetensi_25')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_25 = $RecordData->file_kinerja_kompetensi_25;
            }

            $kinerja_kompetensi_26 = $request->get('kinerja_kompetensi_26');
            if ($request->hasFile('file_kinerja_kompetensi_26')) {
                if ($RecordData->file_kinerja_kompetensi_26 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_26))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_26);
                }
                $file_kinerja_kompetensi_26 = $request->file('file_kinerja_kompetensi_26')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_26 = $RecordData->file_kinerja_kompetensi_26;
            }

            $kinerja_kompetensi_27 = $request->get('kinerja_kompetensi_27');
            if ($request->hasFile('file_kinerja_kompetensi_27')) {
                if ($RecordData->file_kinerja_kompetensi_27 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_27))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_27);
                }
                $file_kinerja_kompetensi_27 = $request->file('file_kinerja_kompetensi_27')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_27 = $RecordData->file_kinerja_kompetensi_27;
            }

            $kinerja_kompetensi_28 = $request->get('kinerja_kompetensi_28');
            if ($request->hasFile('file_kinerja_kompetensi_28')) {
                if ($RecordData->file_kinerja_kompetensi_28 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_28))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_28);
                }
                $file_kinerja_kompetensi_28 = $request->file('file_kinerja_kompetensi_28')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_28 = $RecordData->file_kinerja_kompetensi_28;
            }

            $kinerja_kompetensi_29 = $request->get('kinerja_kompetensi_29');
            if ($request->hasFile('file_kinerja_kompetensi_29')) {
                if ($RecordData->file_kinerja_kompetensi_29 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_29))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_29);
                }
                $file_kinerja_kompetensi_29 = $request->file('file_kinerja_kompetensi_29')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_29 = $RecordData->file_kinerja_kompetensi_29;
            }

            $kinerja_kompetensi_30 = $request->get('kinerja_kompetensi_30');
            if ($request->hasFile('file_kinerja_kompetensi_30')) {
                if ($RecordData->file_kinerja_kompetensi_30 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_30))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_30);
                }
                $file_kinerja_kompetensi_30 = $request->file('file_kinerja_kompetensi_30')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_30 = $RecordData->file_kinerja_kompetensi_30;
            }

            $kinerja_kompetensi_31 = $request->get('kinerja_kompetensi_31');
            if ($request->hasFile('file_kinerja_kompetensi_31')) {
                if ($RecordData->file_kinerja_kompetensi_31 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_31))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_31);
                }
                $file_kinerja_kompetensi_31 = $request->file('file_kinerja_kompetensi_31')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_31 = $RecordData->file_kinerja_kompetensi_31;
            }

            $kinerja_kompetensi_32 = $request->get('kinerja_kompetensi_32');
            if ($request->hasFile('file_kinerja_kompetensi_32')) {
                if ($RecordData->file_kinerja_kompetensi_32 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_32))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_32);
                }
                $file_kinerja_kompetensi_32 = $request->file('file_kinerja_kompetensi_32')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_32 = $RecordData->file_kinerja_kompetensi_32;
            }

            $kinerja_kompetensi_33 = $request->get('kinerja_kompetensi_33');
            if ($request->hasFile('file_kinerja_kompetensi_33')) {
                if ($RecordData->file_kinerja_kompetensi_33 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_33))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_33);
                }
                $file_kinerja_kompetensi_33 = $request->file('file_kinerja_kompetensi_33')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_33 = $RecordData->file_kinerja_kompetensi_33;
            }

            $kinerja_kompetensi_34 = $request->get('kinerja_kompetensi_34');
            if ($request->hasFile('file_kinerja_kompetensi_34')) {
                if ($RecordData->file_kinerja_kompetensi_34 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_34))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_34);
                }
                $file_kinerja_kompetensi_34 = $request->file('file_kinerja_kompetensi_34')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_34 = $RecordData->file_kinerja_kompetensi_34;
            }

            $kinerja_kompetensi_35 = $request->get('kinerja_kompetensi_35');
            if ($request->hasFile('file_kinerja_kompetensi_35')) {
                if ($RecordData->file_kinerja_kompetensi_35 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_35))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_35);
                }
                $file_kinerja_kompetensi_35 = $request->file('file_kinerja_kompetensi_35')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_35 = $RecordData->file_kinerja_kompetensi_35;
            }

            $kinerja_kompetensi_36 = $request->get('kinerja_kompetensi_36');
            if ($request->hasFile('file_kinerja_kompetensi_36')) {
                if ($RecordData->file_kinerja_kompetensi_36 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_36))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_36);
                }
                $file_kinerja_kompetensi_36 = $request->file('file_kinerja_kompetensi_36')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_36 = $RecordData->file_kinerja_kompetensi_36;
            }

            $kinerja_kompetensi_37 = $request->get('kinerja_kompetensi_37');
            if ($request->hasFile('file_kinerja_kompetensi_37')) {
                if ($RecordData->file_kinerja_kompetensi_37 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_37))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_37);
                }
                $file_kinerja_kompetensi_37 = $request->file('file_kinerja_kompetensi_37')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_37 = $RecordData->file_kinerja_kompetensi_37;
            }

            $kinerja_kompetensi_38 = $request->get('kinerja_kompetensi_38');
            if ($request->hasFile('file_kinerja_kompetensi_38')) {
                if ($RecordData->file_kinerja_kompetensi_38 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_38))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_38);
                }
                $file_kinerja_kompetensi_38 = $request->file('file_kinerja_kompetensi_38')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_38 = $RecordData->file_kinerja_kompetensi_38;
            }

            $kinerja_kompetensi_39 = $request->get('kinerja_kompetensi_39');
            if ($request->hasFile('file_kinerja_kompetensi_39')) {
                if ($RecordData->file_kinerja_kompetensi_39 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_39))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_39);
                }
                $file_kinerja_kompetensi_39 = $request->file('file_kinerja_kompetensi_39')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_39 = $RecordData->file_kinerja_kompetensi_39;
            }

            $kinerja_kompetensi_40 = $request->get('kinerja_kompetensi_40');
            if ($request->hasFile('file_kinerja_kompetensi_40')) {
                if ($RecordData->file_kinerja_kompetensi_40 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_40))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_40);
                }
                $file_kinerja_kompetensi_40 = $request->file('file_kinerja_kompetensi_40')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_40 = $RecordData->file_kinerja_kompetensi_40;
            }

            $kinerja_kompetensi_41 = $request->get('kinerja_kompetensi_41');
            if ($request->hasFile('file_kinerja_kompetensi_41')) {
                if ($RecordData->file_kinerja_kompetensi_41 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_41))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_41);
                }
                $file_kinerja_kompetensi_41 = $request->file('file_kinerja_kompetensi_41')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_41 = $RecordData->file_kinerja_kompetensi_41;
            }

            $kinerja_kompetensi_42 = $request->get('kinerja_kompetensi_42');
            if ($request->hasFile('file_kinerja_kompetensi_42')) {
                if ($RecordData->file_kinerja_kompetensi_42 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_42))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_42);
                }
                $file_kinerja_kompetensi_42 = $request->file('file_kinerja_kompetensi_42')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_42 = $RecordData->file_kinerja_kompetensi_42;
            }

            $kinerja_kompetensi_43 = $request->get('kinerja_kompetensi_43');
            if ($request->hasFile('file_kinerja_kompetensi_43')) {
                if ($RecordData->file_kinerja_kompetensi_43 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_43))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_43);
                }
                $file_kinerja_kompetensi_43 = $request->file('file_kinerja_kompetensi_43')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_43 = $RecordData->file_kinerja_kompetensi_43;
            }

            $kinerja_kompetensi_44 = $request->get('kinerja_kompetensi_44');
            if ($request->hasFile('file_kinerja_kompetensi_44')) {
                if ($RecordData->file_kinerja_kompetensi_44 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_44))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_44);
                }
                $file_kinerja_kompetensi_44 = $request->file('file_kinerja_kompetensi_44')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_44 = $RecordData->file_kinerja_kompetensi_44;
            }

            $kinerja_kompetensi_45 = $request->get('kinerja_kompetensi_45');
            if ($request->hasFile('file_kinerja_kompetensi_45')) {
                if ($RecordData->file_kinerja_kompetensi_45 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_45))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_45);
                }
                $file_kinerja_kompetensi_45 = $request->file('file_kinerja_kompetensi_45')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_45 = $RecordData->file_kinerja_kompetensi_45;
            }

            $kinerja_kompetensi_46 = $request->get('kinerja_kompetensi_46');
            if ($request->hasFile('file_kinerja_kompetensi_46')) {
                if ($RecordData->file_kinerja_kompetensi_46 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_46))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_46);
                }
                $file_kinerja_kompetensi_46 = $request->file('file_kinerja_kompetensi_46')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_46 = $RecordData->file_kinerja_kompetensi_46;
            }

            $kinerja_kompetensi_47 = $request->get('kinerja_kompetensi_47');
            if ($request->hasFile('file_kinerja_kompetensi_47')) {
                if ($RecordData->file_kinerja_kompetensi_47 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_47))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_47);
                }
                $file_kinerja_kompetensi_47 = $request->file('file_kinerja_kompetensi_47')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_47 = $RecordData->file_kinerja_kompetensi_47;
            }

            $kinerja_kompetensi_48 = $request->get('kinerja_kompetensi_48');
            if ($request->hasFile('file_kinerja_kompetensi_48')) {
                if ($RecordData->file_kinerja_kompetensi_48 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_48))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_48);
                }
                $file_kinerja_kompetensi_48 = $request->file('file_kinerja_kompetensi_48')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_48 = $RecordData->file_kinerja_kompetensi_48;
            }

            $kinerja_kompetensi_49 = $request->get('kinerja_kompetensi_49');
            if ($request->hasFile('file_kinerja_kompetensi_49')) {
                if ($RecordData->file_kinerja_kompetensi_49 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_49))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/staff-baak-dua/' . $RecordData->file_kinerja_kompetensi_49);
                }
                $file_kinerja_kompetensi_49 = $request->file('file_kinerja_kompetensi_49')->store('uploads/AdministrasiAkademik/staff-baak-dua', 'public');
            } else {
                $file_kinerja_kompetensi_49 = $RecordData->file_kinerja_kompetensi_49;
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
                'kinerja_kompetensi_38' => $kinerja_kompetensi_38,
                'file_kinerja_kompetensi_38' => $file_kinerja_kompetensi_38,
                'kinerja_kompetensi_39' => $kinerja_kompetensi_39,
                'file_kinerja_kompetensi_39' => $file_kinerja_kompetensi_39,
                'kinerja_kompetensi_40' => $kinerja_kompetensi_40,
                'file_kinerja_kompetensi_40' => $file_kinerja_kompetensi_40,
                'kinerja_kompetensi_41' => $kinerja_kompetensi_41,
                'file_kinerja_kompetensi_41' => $file_kinerja_kompetensi_41,
                'kinerja_kompetensi_42' => $kinerja_kompetensi_42,
                'file_kinerja_kompetensi_42' => $file_kinerja_kompetensi_42,
                'kinerja_kompetensi_43' => $kinerja_kompetensi_43,
                'file_kinerja_kompetensi_43' => $file_kinerja_kompetensi_43,
                'kinerja_kompetensi_44' => $kinerja_kompetensi_44,
                'file_kinerja_kompetensi_44' => $file_kinerja_kompetensi_44,
                'kinerja_kompetensi_45' => $kinerja_kompetensi_45,
                'file_kinerja_kompetensi_45' => $file_kinerja_kompetensi_45,
                'kinerja_kompetensi_46' => $kinerja_kompetensi_46,
                'file_kinerja_kompetensi_46' => $file_kinerja_kompetensi_46,
                'kinerja_kompetensi_47' => $kinerja_kompetensi_47,
                'file_kinerja_kompetensi_47' => $file_kinerja_kompetensi_47,
                'kinerja_kompetensi_48' => $kinerja_kompetensi_48,
                'file_kinerja_kompetensi_48' => $file_kinerja_kompetensi_48,
                'kinerja_kompetensi_49' => $kinerja_kompetensi_49,
                'file_kinerja_kompetensi_49' => $file_kinerja_kompetensi_49,
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
            toast('Update Point staff baak successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point staff baak fail :)', 'error');
            return redirect()->back();
        }
    }

    public function raport($user_id)
    {
        $DataUser = DB::table('users')
            ->leftJoin('ikbis_staff_baak_dua', 'users.id', '=', 'ikbis_staff_baak_dua.user_id')
            ->select(
                'users.name',
                'users.email',
                'ikbis_staff_baak_dua.user_id',
                'ikbis_staff_baak_dua.output_total_sementara_kinerja_perilaku',
                'ikbis_staff_baak_dua.output_total_sementara_kinerja_kompetensi',
            )
            ->where('ikbis_staff_baak_dua.user_id', $user_id)
            ->first();

        // dd($DataUser);
        if (!empty($DataUser->user_id)) {
            return view('itisar.BiroAdministrasi.BaakDua.raport', compact('DataUser'));
        } else {
            return view('menu.menu-empty');
        }
    }

    public function detailPoin($userId)
    {
        $data = StaffBaakDua::where('user_id', '=', $userId)->first();

        return view('itisar.BiroAdministrasi.BaakDua.detailPoin', ['data' => $data]);
    }

    public function searchRaport()
    {
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm', 'warek2', 'upt', 'baak', 'keuangan', 'lpm', 'risbang', 'gizi', 'perawat', 'bidan', 'manajemen', 'akuntansi', 'bau', 'warek1', 'rektor', 'ypsdmit'
        ])->get();
        return view('itisar.BiroAdministrasi.BaakDua.searchRaport', compact('users'));
    }

    public function resultRaport(Request $request)
    {
        $DataUser = DB::table('users')
            ->leftJoin('ikbis_staff_baak_dua', 'users.id', '=', 'ikbis_staff_baak_dua.user_id')
            ->select(
                'users.name',
                'users.email',
                'ikbis_staff_baak_dua.user_id',
                'ikbis_staff_baak_dua.output_total_sementara_kinerja_perilaku',
                'ikbis_staff_baak_dua.output_total_sementara_kinerja_kompetensi',
            )
            ->where('ikbis_staff_baak_dua.user_id', '=', $request->id)
            ->first();

        // dd($DataUser);
        if (!empty($DataUser)) {
            return view('itisar.BiroAdministrasi.BaakDua.raport', compact('DataUser'));
        } else {
            return view('menu.menu-empty');
        }
    }
}
