<?php

namespace App\Http\Controllers\Itisar\BiroAdministrasiAkademik;

use App\Http\Controllers\Controller;
use App\Models\BiroAdministrasiAkademik\BaakFkBisnis;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaakFkBisnisController extends Controller
{
    public function create()
    {
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm', 'warek2', 'upt', 'baak', 'keuangan', 'lpm', 'risbang', 'gizi', 'perawat', 'bidan', 'manajemen', 'akuntansi', 'bau', 'warek1', 'rektor', 'ypsdmit', 'dosen', 'tendik'
        ])->get();
        return view('itisar.BiroAdministrasi.BaakFkBisnis.create', compact('users'));
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
            'file_kinerja_kompetensi_38' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_39' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_40' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_41' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_42' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_43' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_44' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_45' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_46' => 'mimes:pdf|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $baakbisnis = new BaakFkBisnis();
            $baakbisnis->Point1_1 = $request->get('Point1_1');
            $baakbisnis->Point1_2 = $request->get('Point1_2');
            $baakbisnis->Point1_3 = $request->get('Point1_3');
            $baakbisnis->Point1_4 = $request->get('Point1_4');
            $baakbisnis->Point1_5 = $request->get('Point1_5');
            $baakbisnis->Point2_1 = $request->get('Point2_1');
            $baakbisnis->Point2_2 = $request->get('Point2_2');
            $baakbisnis->Point2_3 = $request->get('Point2_3');
            $baakbisnis->Point2_4 = $request->get('Point2_4');
            $baakbisnis->Point2_5 = $request->get('Point2_5');
            $baakbisnis->Point3_1 = $request->get('Point3_1');
            $baakbisnis->Point3_2 = $request->get('Point3_2');
            $baakbisnis->Point3_3 = $request->get('Point3_3');
            $baakbisnis->Point3_4 = $request->get('Point3_4');
            $baakbisnis->Point3_5 = $request->get('Point3_5');
            $baakbisnis->Point4_1 = $request->get('Point4_1');
            $baakbisnis->Point4_2 = $request->get('Point4_2');
            $baakbisnis->Point4_3 = $request->get('Point4_3');
            $baakbisnis->Point4_4 = $request->get('Point4_4');
            $baakbisnis->Point4_5 = $request->get('Point4_5');
            $baakbisnis->Point5_1 = $request->get('Point5_1');
            $baakbisnis->Point5_2 = $request->get('Point5_2');
            $baakbisnis->Point5_3 = $request->get('Point5_3');
            $baakbisnis->Point5_4 = $request->get('Point5_4');
            $baakbisnis->Point5_5 = $request->get('Point5_5');
            $baakbisnis->Point6_1 = $request->get('Point6_1');
            $baakbisnis->Point6_2 = $request->get('Point6_2');
            $baakbisnis->Point6_3 = $request->get('Point6_3');
            $baakbisnis->Point6_4 = $request->get('Point6_4');
            $baakbisnis->Point6_5 = $request->get('Point6_5');
            $baakbisnis->output_point_1 = $request->get('output_point_1');
            $baakbisnis->output_point_2 = $request->get('output_point_2');
            $baakbisnis->output_point_3 = $request->get('output_point_3');
            $baakbisnis->output_point_4 = $request->get('output_point_4');
            $baakbisnis->output_point_5 = $request->get('output_point_5');
            $baakbisnis->output_total_point_kinerja_perilaku = $request->get('output_total_point_kinerja_perilaku');
            $baakbisnis->output_total_nilai_rata_rata_kinerja_perilaku = $request->get('output_total_nilai_rata_rata_kinerja_perilaku');
            $baakbisnis->output_total_sementara_kinerja_perilaku = $request->get('output_total_sementara_kinerja_perilaku');

            $baakbisnis->kinerja_kompetensi_1 = $request->get('kinerja_kompetensi_1');
            if ($request->hasFile('file_kinerja_kompetensi_1')) {
                $fileName = $request->file('file_kinerja_kompetensi_1')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_1 = $fileName;
            }
            $baakbisnis->kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                $fileName = $request->file('file_kinerja_kompetensi_2')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_2 = $fileName;
            }
            $baakbisnis->kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                $fileName = $request->file('file_kinerja_kompetensi_3')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_3 = $fileName;
            }
            $baakbisnis->kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                $fileName = $request->file('file_kinerja_kompetensi_4')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_4 = $fileName;
            }
            $baakbisnis->kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                $fileName = $request->file('file_kinerja_kompetensi_5')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_5 = $fileName;
            }
            $baakbisnis->kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                $fileName = $request->file('file_kinerja_kompetensi_6')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_6 = $fileName;
            }
            $baakbisnis->kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                $fileName = $request->file('file_kinerja_kompetensi_7')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_7 = $fileName;
            }
            $baakbisnis->kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('file_kinerja_kompetensi_8')) {
                $fileName = $request->file('file_kinerja_kompetensi_8')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_8 = $fileName;
            }
            $baakbisnis->kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('file_kinerja_kompetensi_9')) {
                $fileName = $request->file('file_kinerja_kompetensi_9')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_9 = $fileName;
            }
            $baakbisnis->kinerja_kompetensi_10 = $request->get('kinerja_kompetensi_10');
            if ($request->hasFile('file_kinerja_kompetensi_10')) {
                $fileName = $request->file('file_kinerja_kompetensi_10')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_10 = $fileName;
            }
            $baakbisnis->kinerja_kompetensi_11 = $request->get('kinerja_kompetensi_11');
            if ($request->hasFile('file_kinerja_kompetensi_11')) {
                $fileName = $request->file('file_kinerja_kompetensi_11')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_11 = $fileName;
            }
            $baakbisnis->kinerja_kompetensi_12 = $request->get('kinerja_kompetensi_12');
            if ($request->hasFile('file_kinerja_kompetensi_12')) {
                $fileName = $request->file('file_kinerja_kompetensi_12')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_12 = $fileName;
            }
            $baakbisnis->kinerja_kompetensi_13 = $request->get('kinerja_kompetensi_13');
            if ($request->hasFile('file_kinerja_kompetensi_13')) {
                $fileName = $request->file('file_kinerja_kompetensi_13')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_13 = $fileName;
            }
            $baakbisnis->kinerja_kompetensi_14 = $request->get('kinerja_kompetensi_14');
            if ($request->hasFile('file_kinerja_kompetensi_14')) {
                $fileName = $request->file('file_kinerja_kompetensi_14')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_14 = $fileName;
            }
            $baakbisnis->kinerja_kompetensi_15 = $request->get('kinerja_kompetensi_15');
            if ($request->hasFile('file_kinerja_kompetensi_15')) {
                $fileName = $request->file('file_kinerja_kompetensi_15')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_15 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_16 = $request->get('kinerja_kompetensi_16');
            if ($request->hasFile('file_kinerja_kompetensi_16')) {
                $fileName = $request->file('file_kinerja_kompetensi_16')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_16 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_17 = $request->get('kinerja_kompetensi_17');
            if ($request->hasFile('file_kinerja_kompetensi_17')) {
                $fileName = $request->file('file_kinerja_kompetensi_17')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_17 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_18 = $request->get('kinerja_kompetensi_18');
            if ($request->hasFile('file_kinerja_kompetensi_18')) {
                $fileName = $request->file('file_kinerja_kompetensi_18')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_18 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_19 = $request->get('kinerja_kompetensi_19');
            if ($request->hasFile('file_kinerja_kompetensi_19')) {
                $fileName = $request->file('file_kinerja_kompetensi_19')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_19 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_20 = $request->get('kinerja_kompetensi_20');
            if ($request->hasFile('file_kinerja_kompetensi_20')) {
                $fileName = $request->file('file_kinerja_kompetensi_20')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_20 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_21 = $request->get('kinerja_kompetensi_21');
            if ($request->hasFile('file_kinerja_kompetensi_21')) {
                $fileName = $request->file('file_kinerja_kompetensi_21')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_21 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_22 = $request->get('kinerja_kompetensi_22');
            if ($request->hasFile('file_kinerja_kompetensi_22')) {
                $fileName = $request->file('file_kinerja_kompetensi_22')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_22 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_23 = $request->get('kinerja_kompetensi_23');
            if ($request->hasFile('file_kinerja_kompetensi_23')) {
                $fileName = $request->file('file_kinerja_kompetensi_23')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_23 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_24 = $request->get('kinerja_kompetensi_24');
            if ($request->hasFile('file_kinerja_kompetensi_24')) {
                $fileName = $request->file('file_kinerja_kompetensi_24')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_24 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_25 = $request->get('kinerja_kompetensi_25');
            if ($request->hasFile('file_kinerja_kompetensi_25')) {
                $fileName = $request->file('file_kinerja_kompetensi_25')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_25 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_26 = $request->get('kinerja_kompetensi_26');
            if ($request->hasFile('file_kinerja_kompetensi_26')) {
                $fileName = $request->file('file_kinerja_kompetensi_26')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_26 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_27 = $request->get('kinerja_kompetensi_27');
            if ($request->hasFile('file_kinerja_kompetensi_27')) {
                $fileName = $request->file('file_kinerja_kompetensi_27')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_27 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_28 = $request->get('kinerja_kompetensi_28');
            if ($request->hasFile('file_kinerja_kompetensi_28')) {
                $fileName = $request->file('file_kinerja_kompetensi_28')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_28 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_29 = $request->get('kinerja_kompetensi_29');
            if ($request->hasFile('file_kinerja_kompetensi_29')) {
                $fileName = $request->file('file_kinerja_kompetensi_29')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_29 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_30 = $request->get('kinerja_kompetensi_30');
            if ($request->hasFile('file_kinerja_kompetensi_30')) {
                $fileName = $request->file('file_kinerja_kompetensi_30')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_30 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_31 = $request->get('kinerja_kompetensi_31');
            if ($request->hasFile('file_kinerja_kompetensi_31')) {
                $fileName = $request->file('file_kinerja_kompetensi_31')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_31 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_32 = $request->get('kinerja_kompetensi_32');
            if ($request->hasFile('file_kinerja_kompetensi_32')) {
                $fileName = $request->file('file_kinerja_kompetensi_32')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_32 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_33 = $request->get('kinerja_kompetensi_33');
            if ($request->hasFile('file_kinerja_kompetensi_33')) {
                $fileName = $request->file('file_kinerja_kompetensi_33')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_33 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_34 = $request->get('kinerja_kompetensi_34');
            if ($request->hasFile('file_kinerja_kompetensi_34')) {
                $fileName = $request->file('file_kinerja_kompetensi_34')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_34 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_35 = $request->get('kinerja_kompetensi_35');
            if ($request->hasFile('file_kinerja_kompetensi_35')) {
                $fileName = $request->file('file_kinerja_kompetensi_35')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_35 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_36 = $request->get('kinerja_kompetensi_36');
            if ($request->hasFile('file_kinerja_kompetensi_36')) {
                $fileName = $request->file('file_kinerja_kompetensi_36')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_36 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_37 = $request->get('kinerja_kompetensi_37');
            if ($request->hasFile('file_kinerja_kompetensi_37')) {
                $fileName = $request->file('file_kinerja_kompetensi_37')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_37 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_38 = $request->get('kinerja_kompetensi_38');
            if ($request->hasFile('file_kinerja_kompetensi_38')) {
                $fileName = $request->file('file_kinerja_kompetensi_38')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_38 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_39 = $request->get('kinerja_kompetensi_39');
            if ($request->hasFile('file_kinerja_kompetensi_39')) {
                $fileName = $request->file('file_kinerja_kompetensi_39')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_39 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_40 = $request->get('kinerja_kompetensi_40');
            if ($request->hasFile('file_kinerja_kompetensi_40')) {
                $fileName = $request->file('file_kinerja_kompetensi_40')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_40 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_41 = $request->get('kinerja_kompetensi_41');
            if ($request->hasFile('file_kinerja_kompetensi_41')) {
                $fileName = $request->file('file_kinerja_kompetensi_41')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_41 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_42 = $request->get('kinerja_kompetensi_42');
            if ($request->hasFile('file_kinerja_kompetensi_42')) {
                $fileName = $request->file('file_kinerja_kompetensi_42')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_42 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_43 = $request->get('kinerja_kompetensi_43');
            if ($request->hasFile('file_kinerja_kompetensi_43')) {
                $fileName = $request->file('file_kinerja_kompetensi_43')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_43 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_44 = $request->get('kinerja_kompetensi_44');
            if ($request->hasFile('file_kinerja_kompetensi_44')) {
                $fileName = $request->file('file_kinerja_kompetensi_44')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_44 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_45 = $request->get('kinerja_kompetensi_45');
            if ($request->hasFile('file_kinerja_kompetensi_45')) {
                $fileName = $request->file('file_kinerja_kompetensi_45')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_45 = $fileName;
            }

            $baakbisnis->kinerja_kompetensi_46 = $request->get('kinerja_kompetensi_46');
            if ($request->hasFile('file_kinerja_kompetensi_46')) {
                $fileName = $request->file('file_kinerja_kompetensi_46')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
                $baakbisnis->file_kinerja_kompetensi_46 = $fileName;
            }

            $baakbisnis->output_point_kinerja_kompetensi_1 = $request->get('output_point_kinerja_kompetensi_1');
            $baakbisnis->output_point_kinerja_kompetensi_2 = $request->get('output_point_kinerja_kompetensi_2');
            $baakbisnis->output_point_kinerja_kompetensi_3 = $request->get('output_point_kinerja_kompetensi_3');
            $baakbisnis->output_point_kinerja_kompetensi_4 = $request->get('output_point_kinerja_kompetensi_4');
            $baakbisnis->output_point_kinerja_kompetensi_5 = $request->get('output_point_kinerja_kompetensi_5');
            $baakbisnis->output_total_point_kinerja_kompetensi = $request->get('output_total_point_kinerja_kompetensi');
            $baakbisnis->output_total_nilai_rata_rata_kinerja_kompetensi = $request->get('output_total_nilai_rata_rata_kinerja_kompetensi');
            $baakbisnis->output_total_sementara_kinerja_kompetensi = $request->get('output_total_sementara_kinerja_kompetensi');

            $baakbisnis->user_id = $request->get('UserId');
            $baakbisnis->save();

            DB::commit();
            toast('Create Point Baak FK Bisnis successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point Baak FK Bisnis fail :)', 'error');
            return redirect()->back();
        }
    }

    public function edit()
    {
        $dataMenu = Menu::first();
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm', 'warek2', 'upt', 'baak', 'keuangan', 'lpm', 'risbang', 'gizi', 'perawat', 'bidan', 'manajemen', 'akuntansi', 'bau', 'warek1', 'rektor', 'ypsdmit', 'dosen', 'tendik'
        ])->get();

        if (empty($dataMenu)) {
            return redirect()->back();
        } elseif ($dataMenu->control_menu == 0) {
            return view('menu.disabled');
        }
        return view('itisar.BiroAdministrasi.BaakFkBisnis.searchdata', compact('users'));
    }

public function dataSearch(Request $request)
    {
        $data = BaakFkBisnis::where('user_id', '=', $request->id)->first();

        return view('itisar.BiroAdministrasi.BaakFkBisnis.edit', ['data' => $data]);
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
            'file_kinerja_kompetensi_38' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_39' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_40' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_41' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_42' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_43' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_44' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_45' => 'mimes:pdf|max:2048',
            'file_kinerja_kompetensi_46' => 'mimes:pdf|max:2048',
        ]);
        DB::beginTransaction();
        try {
            $RecordData =  BaakFkBisnis::where('user_id', $PointId)->firstOrFail();

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
                if ($RecordData->file_kinerja_kompetensi_1 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_1))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_1);
                }
                $file_kinerja_kompetensi_1 = $request->file('file_kinerja_kompetensi_1')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_1 = $RecordData->file_kinerja_kompetensi_1;
            }

            $kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                if ($RecordData->file_kinerja_kompetensi_2 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_2))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_2);
                }
                $file_kinerja_kompetensi_2 = $request->file('file_kinerja_kompetensi_2')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_2 = $RecordData->file_kinerja_kompetensi_2;
            }

            $kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                if ($RecordData->file_kinerja_kompetensi_3 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_3))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_3);
                }
                $file_kinerja_kompetensi_3 = $request->file('file_kinerja_kompetensi_3')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_3 = $RecordData->file_kinerja_kompetensi_3;
            }

            $kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                if ($RecordData->file_kinerja_kompetensi_4 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_4))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_4);
                }
                $file_kinerja_kompetensi_4 = $request->file('file_kinerja_kompetensi_4')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_4 = $RecordData->file_kinerja_kompetensi_4;
            }

            $kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                if ($RecordData->file_kinerja_kompetensi_5 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_5))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_5);
                }
                $file_kinerja_kompetensi_5 = $request->file('file_kinerja_kompetensi_5')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_5 = $RecordData->file_kinerja_kompetensi_5;
            }

            $kinerja_kompetensi_6 = $request->get('kinerja_kompetensi_6');
            if ($request->hasFile('file_kinerja_kompetensi_6')) {
                if ($RecordData->file_kinerja_kompetensi_6 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_6))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_6);
                }
                $file_kinerja_kompetensi_6 = $request->file('file_kinerja_kompetensi_6')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_6 = $RecordData->file_kinerja_kompetensi_6;
            }

            $kinerja_kompetensi_7 = $request->get('kinerja_kompetensi_7');
            if ($request->hasFile('file_kinerja_kompetensi_7')) {
                if ($RecordData->file_kinerja_kompetensi_7 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_7))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_7);
                }
                $file_kinerja_kompetensi_7 = $request->file('file_kinerja_kompetensi_7')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_7 = $RecordData->file_kinerja_kompetensi_7;
            }

            $kinerja_kompetensi_8 = $request->get('kinerja_kompetensi_8');
            if ($request->hasFile('file_kinerja_kompetensi_8')) {
                if ($RecordData->file_kinerja_kompetensi_8 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_8))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_8);
                }
                $file_kinerja_kompetensi_8 = $request->file('file_kinerja_kompetensi_8')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_8 = $RecordData->file_kinerja_kompetensi_8;
            }

            $kinerja_kompetensi_9 = $request->get('kinerja_kompetensi_9');
            if ($request->hasFile('file_kinerja_kompetensi_9')) {
                if ($RecordData->file_kinerja_kompetensi_9 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_9))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_9);
                }
                $file_kinerja_kompetensi_9 = $request->file('file_kinerja_kompetensi_9')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_9 = $RecordData->file_kinerja_kompetensi_9;
            }

            $kinerja_kompetensi_10 = $request->get('kinerja_kompetensi_10');
            if ($request->hasFile('file_kinerja_kompetensi_10')) {
                if ($RecordData->file_kinerja_kompetensi_10 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_10))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_10);
                }
                $file_kinerja_kompetensi_10 = $request->file('file_kinerja_kompetensi_10')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_10 = $RecordData->file_kinerja_kompetensi_10;
            }

            $kinerja_kompetensi_11 = $request->get('kinerja_kompetensi_11');
            if ($request->hasFile('file_kinerja_kompetensi_11')) {
                if ($RecordData->file_kinerja_kompetensi_11 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_11))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_11);
                }
                $file_kinerja_kompetensi_11 = $request->file('file_kinerja_kompetensi_11')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_11 = $RecordData->file_kinerja_kompetensi_11;
            }

            $kinerja_kompetensi_12 = $request->get('kinerja_kompetensi_12');
            if ($request->hasFile('file_kinerja_kompetensi_12')) {
                if ($RecordData->file_kinerja_kompetensi_12 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_12))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_12);
                }
                $file_kinerja_kompetensi_12 = $request->file('file_kinerja_kompetensi_12')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_12 = $RecordData->file_kinerja_kompetensi_12;
            }

            $kinerja_kompetensi_13 = $request->get('kinerja_kompetensi_13');
            if ($request->hasFile('file_kinerja_kompetensi_13')) {
                if ($RecordData->file_kinerja_kompetensi_13 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_13))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_13);
                }
                $file_kinerja_kompetensi_13 = $request->file('file_kinerja_kompetensi_13')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_13 = $RecordData->file_kinerja_kompetensi_13;
            }

            $kinerja_kompetensi_14 = $request->get('kinerja_kompetensi_14');
            if ($request->hasFile('file_kinerja_kompetensi_14')) {
                if ($RecordData->file_kinerja_kompetensi_14 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_14))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_14);
                }
                $file_kinerja_kompetensi_14 = $request->file('file_kinerja_kompetensi_14')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_14 = $RecordData->file_kinerja_kompetensi_14;
            }

            $kinerja_kompetensi_15 = $request->get('kinerja_kompetensi_15');
            if ($request->hasFile('file_kinerja_kompetensi_15')) {
                if ($RecordData->file_kinerja_kompetensi_15 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_15))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_15);
                }
                $file_kinerja_kompetensi_15 = $request->file('file_kinerja_kompetensi_15')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_15 = $RecordData->file_kinerja_kompetensi_15;
            }

            $kinerja_kompetensi_16 = $request->get('kinerja_kompetensi_16');
            if ($request->hasFile('file_kinerja_kompetensi_16')) {
                if ($RecordData->file_kinerja_kompetensi_16 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_16))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_16);
                }
                $file_kinerja_kompetensi_16 = $request->file('file_kinerja_kompetensi_16')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_16 = $RecordData->file_kinerja_kompetensi_16;
            }

            $kinerja_kompetensi_17 = $request->get('kinerja_kompetensi_17');
            if ($request->hasFile('file_kinerja_kompetensi_17')) {
                if ($RecordData->file_kinerja_kompetensi_17 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_17))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_17);
                }
                $file_kinerja_kompetensi_17 = $request->file('file_kinerja_kompetensi_17')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_17 = $RecordData->file_kinerja_kompetensi_17;
            }

            $kinerja_kompetensi_18 = $request->get('kinerja_kompetensi_18');
            if ($request->hasFile('file_kinerja_kompetensi_18')) {
                if ($RecordData->file_kinerja_kompetensi_18 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_18))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_18);
                }
                $file_kinerja_kompetensi_18 = $request->file('file_kinerja_kompetensi_18')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_18 = $RecordData->file_kinerja_kompetensi_18;
            }

            $kinerja_kompetensi_19 = $request->get('kinerja_kompetensi_19');
            if ($request->hasFile('file_kinerja_kompetensi_19')) {
                if ($RecordData->file_kinerja_kompetensi_19 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_19))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_19);
                }
                $file_kinerja_kompetensi_19 = $request->file('file_kinerja_kompetensi_19')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_19 = $RecordData->file_kinerja_kompetensi_19;
            }

            $kinerja_kompetensi_20 = $request->get('kinerja_kompetensi_20');
            if ($request->hasFile('file_kinerja_kompetensi_20')) {
                if ($RecordData->file_kinerja_kompetensi_20 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_20))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_20);
                }
                $file_kinerja_kompetensi_20 = $request->file('file_kinerja_kompetensi_20')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_20 = $RecordData->file_kinerja_kompetensi_20;
            }

            $kinerja_kompetensi_21 = $request->get('kinerja_kompetensi_21');
            if ($request->hasFile('file_kinerja_kompetensi_21')) {
                if ($RecordData->file_kinerja_kompetensi_21 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_21))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_21);
                }
                $file_kinerja_kompetensi_21 = $request->file('file_kinerja_kompetensi_21')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_21 = $RecordData->file_kinerja_kompetensi_21;
            }

            $kinerja_kompetensi_22 = $request->get('kinerja_kompetensi_122');
            if ($request->hasFile('file_kinerja_kompetensi_22')) {
                if ($RecordData->file_kinerja_kompetensi_22 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_22))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_22);
                }
                $file_kinerja_kompetensi_22 = $request->file('file_kinerja_kompetensi_22')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_22 = $RecordData->file_kinerja_kompetensi_22;
            }

            $kinerja_kompetensi_23 = $request->get('kinerja_kompetensi_23');
            if ($request->hasFile('file_kinerja_kompetensi_23')) {
                if ($RecordData->file_kinerja_kompetensi_23 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_23))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_23);
                }
                $file_kinerja_kompetensi_23 = $request->file('file_kinerja_kompetensi_23')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_23 = $RecordData->file_kinerja_kompetensi_23;
            }

            $kinerja_kompetensi_24 = $request->get('kinerja_kompetensi_24');
            if ($request->hasFile('file_kinerja_kompetensi_24')) {
                if ($RecordData->file_kinerja_kompetensi_24 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_24))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_24);
                }
                $file_kinerja_kompetensi_24 = $request->file('file_kinerja_kompetensi_24')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_24 = $RecordData->file_kinerja_kompetensi_24;
            }

            $kinerja_kompetensi_25 = $request->get('kinerja_kompetensi_25');
            if ($request->hasFile('file_kinerja_kompetensi_25')) {
                if ($RecordData->file_kinerja_kompetensi_25 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_25))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_25);
                }
                $file_kinerja_kompetensi_25 = $request->file('file_kinerja_kompetensi_25')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_25 = $RecordData->file_kinerja_kompetensi_25;
            }

            $kinerja_kompetensi_26 = $request->get('kinerja_kompetensi_26');
            if ($request->hasFile('file_kinerja_kompetensi_26')) {
                if ($RecordData->file_kinerja_kompetensi_26 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_26))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_26);
                }
                $file_kinerja_kompetensi_26 = $request->file('file_kinerja_kompetensi_26')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_26 = $RecordData->file_kinerja_kompetensi_26;
            }

            $kinerja_kompetensi_27 = $request->get('kinerja_kompetensi_27');
            if ($request->hasFile('file_kinerja_kompetensi_27')) {
                if ($RecordData->file_kinerja_kompetensi_27 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_27))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_27);
                }
                $file_kinerja_kompetensi_27 = $request->file('file_kinerja_kompetensi_27')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_27 = $RecordData->file_kinerja_kompetensi_27;
            }

            $kinerja_kompetensi_28 = $request->get('kinerja_kompetensi_28');
            if ($request->hasFile('file_kinerja_kompetensi_28')) {
                if ($RecordData->file_kinerja_kompetensi_28 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_28))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_28);
                }
                $file_kinerja_kompetensi_28 = $request->file('file_kinerja_kompetensi_28')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_28 = $RecordData->file_kinerja_kompetensi_28;
            }

            $kinerja_kompetensi_29 = $request->get('kinerja_kompetensi_29');
            if ($request->hasFile('file_kinerja_kompetensi_29')) {
                if ($RecordData->file_kinerja_kompetensi_29 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_29))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_29);
                }
                $file_kinerja_kompetensi_29 = $request->file('file_kinerja_kompetensi_29')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_29 = $RecordData->file_kinerja_kompetensi_29;
            }

            $kinerja_kompetensi_30 = $request->get('kinerja_kompetensi_30');
            if ($request->hasFile('file_kinerja_kompetensi_30')) {
                if ($RecordData->file_kinerja_kompetensi_30 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_30))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_30);
                }
                $file_kinerja_kompetensi_30 = $request->file('file_kinerja_kompetensi_30')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_30 = $RecordData->file_kinerja_kompetensi_30;
            }

            $kinerja_kompetensi_31 = $request->get('kinerja_kompetensi_31');
            if ($request->hasFile('file_kinerja_kompetensi_31')) {
                if ($RecordData->file_kinerja_kompetensi_31 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_31))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_31);
                }
                $file_kinerja_kompetensi_31 = $request->file('file_kinerja_kompetensi_31')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_31 = $RecordData->file_kinerja_kompetensi_31;
            }

            $kinerja_kompetensi_32 = $request->get('kinerja_kompetensi_32');
            if ($request->hasFile('file_kinerja_kompetensi_32')) {
                if ($RecordData->file_kinerja_kompetensi_32 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_32))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_32);
                }
                $file_kinerja_kompetensi_32 = $request->file('file_kinerja_kompetensi_32')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_32 = $RecordData->file_kinerja_kompetensi_32;
            }

            $kinerja_kompetensi_33 = $request->get('kinerja_kompetensi_33');
            if ($request->hasFile('file_kinerja_kompetensi_33')) {
                if ($RecordData->file_kinerja_kompetensi_33 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_33))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_33);
                }
                $file_kinerja_kompetensi_33 = $request->file('file_kinerja_kompetensi_33')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_33 = $RecordData->file_kinerja_kompetensi_33;
            }

            $kinerja_kompetensi_34 = $request->get('kinerja_kompetensi_34');
            if ($request->hasFile('file_kinerja_kompetensi_34')) {
                if ($RecordData->file_kinerja_kompetensi_34 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_34))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_34);
                }
                $file_kinerja_kompetensi_34 = $request->file('file_kinerja_kompetensi_34')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_34 = $RecordData->file_kinerja_kompetensi_34;
            }

            $kinerja_kompetensi_35 = $request->get('kinerja_kompetensi_35');
            if ($request->hasFile('file_kinerja_kompetensi_35')) {
                if ($RecordData->file_kinerja_kompetensi_35 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_35))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_35);
                }
                $file_kinerja_kompetensi_35 = $request->file('file_kinerja_kompetensi_35')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_35 = $RecordData->file_kinerja_kompetensi_35;
            }

            $kinerja_kompetensi_36 = $request->get('kinerja_kompetensi_36');
            if ($request->hasFile('file_kinerja_kompetensi_36')) {
                if ($RecordData->file_kinerja_kompetensi_36 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_36))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_36);
                }
                $file_kinerja_kompetensi_36 = $request->file('file_kinerja_kompetensi_36')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_36 = $RecordData->file_kinerja_kompetensi_36;
            }

            $kinerja_kompetensi_37 = $request->get('kinerja_kompetensi_37');
            if ($request->hasFile('file_kinerja_kompetensi_37')) {
                if ($RecordData->file_kinerja_kompetensi_37 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_37))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_37);
                }
                $file_kinerja_kompetensi_37 = $request->file('file_kinerja_kompetensi_37')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_37 = $RecordData->file_kinerja_kompetensi_37;
            }

            $kinerja_kompetensi_38 = $request->get('kinerja_kompetensi_38');
            if ($request->hasFile('file_kinerja_kompetensi_38')) {
                if ($RecordData->file_kinerja_kompetensi_38 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_38))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_38);
                }
                $file_kinerja_kompetensi_38 = $request->file('file_kinerja_kompetensi_38')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_38 = $RecordData->file_kinerja_kompetensi_38;
            }

            $kinerja_kompetensi_39 = $request->get('kinerja_kompetensi_39');
            if ($request->hasFile('file_kinerja_kompetensi_39')) {
                if ($RecordData->file_kinerja_kompetensi_39 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_39))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_39);
                }
                $file_kinerja_kompetensi_39 = $request->file('file_kinerja_kompetensi_39')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_39 = $RecordData->file_kinerja_kompetensi_39;
            }

            $kinerja_kompetensi_40 = $request->get('kinerja_kompetensi_40');
            if ($request->hasFile('file_kinerja_kompetensi_40')) {
                if ($RecordData->file_kinerja_kompetensi_40 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_40))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_40);
                }
                $file_kinerja_kompetensi_40 = $request->file('file_kinerja_kompetensi_40')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_40 = $RecordData->file_kinerja_kompetensi_40;
            }

            $kinerja_kompetensi_41 = $request->get('kinerja_kompetensi_41');
            if ($request->hasFile('file_kinerja_kompetensi_41')) {
                if ($RecordData->file_kinerja_kompetensi_41 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_41))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_41);
                }
                $file_kinerja_kompetensi_41 = $request->file('file_kinerja_kompetensi_41')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_41 = $RecordData->file_kinerja_kompetensi_41;
            }

            $kinerja_kompetensi_42 = $request->get('kinerja_kompetensi_42');
            if ($request->hasFile('file_kinerja_kompetensi_42')) {
                if ($RecordData->file_kinerja_kompetensi_42 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_42))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_42);
                }
                $file_kinerja_kompetensi_42 = $request->file('file_kinerja_kompetensi_42')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_42 = $RecordData->file_kinerja_kompetensi_42;
            }

            $kinerja_kompetensi_43 = $request->get('kinerja_kompetensi_43');
            if ($request->hasFile('file_kinerja_kompetensi_43')) {
                if ($RecordData->file_kinerja_kompetensi_43 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_43))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_43);
                }
                $file_kinerja_kompetensi_43 = $request->file('file_kinerja_kompetensi_43')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_43 = $RecordData->file_kinerja_kompetensi_43;
            }

            $kinerja_kompetensi_44 = $request->get('kinerja_kompetensi_44');
            if ($request->hasFile('file_kinerja_kompetensi_44')) {
                if ($RecordData->file_kinerja_kompetensi_44 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_44))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_44);
                }
                $file_kinerja_kompetensi_44 = $request->file('file_kinerja_kompetensi_44')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_44 = $RecordData->file_kinerja_kompetensi_44;
            }

            $kinerja_kompetensi_45 = $request->get('kinerja_kompetensi_45');
            if ($request->hasFile('file_kinerja_kompetensi_45')) {
                if ($RecordData->file_kinerja_kompetensi_45 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_45))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_45);
                }
                $file_kinerja_kompetensi_45 = $request->file('file_kinerja_kompetensi_45')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_45 = $RecordData->file_kinerja_kompetensi_45;
            }

            $kinerja_kompetensi_46 = $request->get('kinerja_kompetensi_46');
            if ($request->hasFile('file_kinerja_kompetensi_46')) {
                if ($RecordData->file_kinerja_kompetensi_46 && file_exists(storage_path('app/public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_46))) {
                    \Storage::delete('public/uploads/AdministrasiAkademik/baak-bisnis/' . $RecordData->file_kinerja_kompetensi_46);
                }
                $file_kinerja_kompetensi_46 = $request->file('file_kinerja_kompetensi_46')->store('uploads/AdministrasiAkademik/baak-bisnis', 'public');
            } else {
                $file_kinerja_kompetensi_46 = $RecordData->file_kinerja_kompetensi_46;
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
            toast('Update Point Baak Bisnis successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point Baak Bisnis fail :)', 'error');
            return redirect()->back();
        }
    }

    public function raport($user_id)
    {
        $DataUser = DB::table('users')
            ->leftJoin('baak_bisnis', 'users.id', '=', 'baak_bisnis.user_id')
            ->select(
                'users.name',
                'users.email',
                'baak_bisnis.user_id',
                'baak_bisnis.output_total_sementara_kinerja_perilaku',
                'baak_bisnis.output_total_sementara_kinerja_kompetensi',
            )
            ->where('baak_bisnis.user_id', $user_id)
            ->first();

        // dd($DataUser);
        if (!empty($DataUser->user_id)) {
            return view('itisar.BiroAdministrasi.BaakFkBisnis.raport', compact('DataUser'));
        } else {
            return view('menu.menu-empty');
        }
    }
}
