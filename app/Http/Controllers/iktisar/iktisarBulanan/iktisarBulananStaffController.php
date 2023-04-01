<?php

namespace App\Http\Controllers\iktisar\iktisarBulanan;

use App\Http\Controllers\Controller;
use App\Models\iktisar\iktisarBulananStaff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class iktisarBulananStaffController extends Controller
{
    public function create()
    {
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm', 'warek2', 'upt', 'baak', 'keuangan', 'lpm', 'risbang', 'gizi', 'perawat', 'bidan', 'manajemen', 'akuntansi', 'bau', 'warek1', 'rektor', 'ypsdmit'
        ])->get();
        return view('iktisar.iktisarBulananStaff.create', compact('users'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            // Insert data into iktisar_staff_bulanan_perilaku table
            $data1 = [
                'user_id' => $request->UserId,
                'q1' => $request->q1,
                'q2' => $request->q2,
                'q3' => $request->q3,
                'q4' => $request->q4,
                'q5' => $request->q5,
                'output_point_1' => $request->output_point_1,
                'output_point_2' => $request->output_point_2,
                'output_point_3' => $request->output_point_3,
                'output_point_4' => $request->output_point_4,
                'output_point_5' => $request->output_point_5,
                'output_total_point_kinerja_perilaku' => $request->output_total_point_kinerja_perilaku,
                'output_total_nilai_rata_rata_kinerja_perilaku' => $request->output_total_nilai_rata_rata_kinerja_perilaku,
                'output_total_sementara_kinerja_perilaku' => $request->output_total_sementara_kinerja_perilaku,

                'total_poin1' => $request->poin1,
                'total_poin2' => $request->poin2,
                'total_poin3' => $request->poin3,
                'total_poin4' => $request->poin4,
                'total_poin5' => $request->poin5,
                'total_bobot' => $request->totalBobot,
                'total_poin_kali_bobot' => $request->totalSum,
                'total_nilai_presentase' => $request->totalPresentase,
                'created_insert' => Carbon::now(),
            ];

            // Insert the data into the iktisar_staff_bulanan_perilaku table and get the inserted row ID
            $id1 = DB::table('iktisar_staff_bulanan_perilaku')->insertGetId($data1);

            // Insert data into iktisar_staff_bulanan_kompetensi table for each job type in the jenisPekerjaan array
            function saveData($jenisPekerjaan, $jumlahBobot, $question, $id1)
            {
                foreach ($jenisPekerjaan as $key => $value) {
                    $data2 = [
                        'id_staff_perilaku' => $id1,
                        'jenis_pekerjaan' => $value,
                        'nilai_bobot' => $jumlahBobot[$key],
                        'question' => $question[$key + 1] // modify the array index to start from 1 instead of 0
                    ];
                    DB::table('iktisar_staff_bulanan_kompetensi')->insert($data2);
                }
            }

            // Usage
            $jenisPekerjaan = $request->jenisPekerjaan;
            $jumlahBobot = $request->jumlahBobot;
            $question = $request->question;

            saveData($jenisPekerjaan, $jumlahBobot, $question, $id1);
            DB::commit();
            toast('Create Poin IKTISAR successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point IKTISAR fail :)', 'error');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        // Retrieve the row to be edited from the database
        $iktisarStaffBulananPerilaku = DB::table('iktisar_staff_bulanan_perilaku')
            ->where('id', $id)
            ->where('user_id', $id) // Only allow editing if user_id matches the currently authenticated user
            ->first();

        if ($iktisarStaffBulananPerilaku) {
            // Retrieve the corresponding rows from the iktisar_staff_bulanan_kompetensi table
            $iktisarStaffBulananKompetensi = DB::table('iktisar_staff_bulanan_kompetensi')
                ->where('id_staff_perilaku', $iktisarStaffBulananPerilaku->id)
                ->get();
        } else {
            // handle the case when $iktisarStaffBulananPerilaku is null
            return view('menu.menu-empty');
        }

        // dd($iktisarStaffBulananPerilaku, $iktisarStaffBulananKompetensi);
        // Display the data on a form
        return view('iktisar.iktisarBulananStaff.edit', [
            'iktisarStaffBulananPerilaku' => $iktisarStaffBulananPerilaku,
            'iktisarStaffBulananKompetensi' => $iktisarStaffBulananKompetensi
        ]);
    }
}
