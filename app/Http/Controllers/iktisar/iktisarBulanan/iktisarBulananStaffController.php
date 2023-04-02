<?php

namespace App\Http\Controllers\iktisar\iktisarBulanan;

use App\Http\Controllers\Controller;
use App\Models\iktisar\iktisarBulananStaff;
use App\Models\iktisar\staff\iktisarBulananStaffKompetensi;
use App\Models\iktisar\staff\iktisarBulananStaffPerilaku;
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
                'created_insert' => Carbon::now()->format('Y-m-d'),
            ];

            // Insert the data into the iktisar_staff_bulanan_perilaku table and get the inserted row ID
            $iktisarStaffBulananPerilaku = iktisarBulananStaffPerilaku::create($data1);
            $id1 = $iktisarStaffBulananPerilaku->id;

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
                    iktisarBulananStaffKompetensi::create($data2);
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

    public function searchDataEdit()
    {
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm', 'warek2', 'upt', 'baak', 'keuangan', 'lpm', 'risbang', 'gizi', 'perawat', 'bidan', 'manajemen', 'akuntansi', 'bau', 'warek1', 'rektor', 'ypsdmit'
        ])->get();
        return view('iktisar.iktisarBulananStaff.searchdata', compact('users'));
    }

    public function edit(Request $request)
    {

        // Check if the input date is valid and contains year and month data
        if ($request->filled('tanggalInput')) {
            $date = Carbon::createFromFormat('Y-m-d', $request->input('tanggalInput'));
            $bulan = $date->month;
            $tahun = $date->year;
        } else {
            // Provide default values for month and year
            $bulan = date('m');
            $tahun = date('Y');
        }
        $users = DB::table('users')
            ->where('id', $request->id)
            ->first();

        // Retrieve the row to be edited from the database
        $iktisarStaffBulananPerilaku = DB::table('iktisar_staff_bulanan_perilaku')
            ->where('user_id', $request->id) // Only allow editing if user_id matches the currently authenticated user
            ->whereYear('created_insert', $tahun)
            ->whereMonth('created_insert', $bulan)
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

        // Display the data on a form
        return view('iktisar.iktisarBulananStaff.edit', [
            'users' => $users,
            'iktisarStaffBulananPerilaku' => $iktisarStaffBulananPerilaku,
            'iktisarStaffBulananKompetensi' => $iktisarStaffBulananKompetensi
        ]);
    }

    public function update(Request $request, $id)
    {
        $data1 = [
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
        ];

        $iktisarStaffBulananPerilaku = iktisarBulananStaffPerilaku::find($id);
        $iktisarStaffBulananPerilaku->update($data1);

        // Table 2
        $jenisPekerjaan = $request->jenisPekerjaan;
        $jumlahBobot = $request->jumlahBobot;
        $question = $request->question;

        // Ambil semua jenis pekerjaan untuk $id dari database dan ubah menjadi array
        $existingJenisPekerjaan = iktisarBulananStaffKompetensi::where('id_staff_perilaku', $id)->pluck('jenis_pekerjaan')->toArray();

        // Loop melalui jenis pekerjaan yang diterima dari form
        foreach ($jenisPekerjaan as $key => $value) {
            $iktisarStaffBulananKompetensi = iktisarBulananStaffKompetensi::where('id_staff_perilaku', $id)
                ->where('jenis_pekerjaan', $value)
                ->first();

            if (!$iktisarStaffBulananKompetensi) {
                // Jika tidak ada, tambahkan baris baru
                $data = [
                    'id_staff_perilaku' => $id,
                    'jenis_pekerjaan' => $value,
                    'nilai_bobot' => $jumlahBobot[$key],
                    'question' => isset($question[$key + 1]) ? $question[$key + 1] : null
                ];
                iktisarBulananStaffKompetensi::create($data);
            } else {
                // Jika ada, perbarui baris yang ada
                $data = [
                    'nilai_bobot' => $jumlahBobot[$key],
                    'question' => isset($question[$key + 1]) ? $question[$key + 1] : null
                ];
                iktisarBulananStaffKompetensi::where('id', $iktisarStaffBulananKompetensi->id)->update($data);
            }
        }

        // Loop melalui jenis pekerjaan yang ada di database
        foreach ($existingJenisPekerjaan as $existingJenis) {
            // Jika jenis pekerjaan tidak ada dalam $jenisPekerjaan yang diterima dari form, hapus baris tersebut dari database
            if (!in_array($existingJenis, $jenisPekerjaan)) {
                iktisarBulananStaffKompetensi::where('id_staff_perilaku', $id)->where('jenis_pekerjaan', $existingJenis)->delete();
            }
        }
    }
}
