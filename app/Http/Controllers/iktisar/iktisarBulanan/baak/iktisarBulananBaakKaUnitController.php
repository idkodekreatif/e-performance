<?php

namespace App\Http\Controllers\iktisar\iktisarBulanan\baak;

use App\Http\Controllers\Controller;
use App\Models\iktisar\kaunit\baak\iktisarBaakBulananKompetensi;
use App\Models\iktisar\kaunit\baak\iktisarBaakBulananPerilaku;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class iktisarBulananBaakKaUnitController extends Controller
{
    // penilai
    public function create()
    {
        $users = User::whereNotIn('name', [
            'superuser',
            'manajer',
            'it',
            'hrd',
            'lppm',
            'warek2',
            'upt',
            'baak',
            'keuangan',
            'lpm',
            'risbang',
            'gizi',
            'perawat',
            'bidan',
            'manajemen',
            'akuntansi',
            'bau',
            'warek1',
            'rektor',
            'ypsdmit'
        ])->get();
        return view('iktisar.baak.iktisarBulananKaUnit.create', compact('users'));
    }
    // preses penilai
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
                'q6' => $request->q6,
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
            $iktisarStaffBulananPerilaku = iktisarBaakBulananPerilaku::create($data1);
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
                    iktisarBaakBulananKompetensi::create($data2);
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

    // proses penilai
    public function searchDataEdit()
    {
        $users = User::whereNotIn('name', [
            'superuser',
            'manajer',
            'it',
            'hrd',
            'lppm',
            'warek2',
            'upt',
            'baak',
            'keuangan',
            'lpm',
            'risbang',
            'gizi',
            'perawat',
            'bidan',
            'manajemen',
            'akuntansi',
            'bau',
            'warek1',
            'rektor',
            'ypsdmit'
        ])->get();
        return view('iktisar.baak.iktisarBulananKaUnit.searchdata', compact('users'));
    }
    // penilai
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
        $iktisarStaffBulananPerilaku = DB::table('iktisar_kaunit_baak_bulanan_perilaku')
            ->where('user_id', $request->id) // Only allow editing if user_id matches the currently authenticated user
            ->whereYear('created_insert', $tahun)
            ->whereMonth('created_insert', $bulan)
            ->first();

        if ($iktisarStaffBulananPerilaku) {
            // Retrieve the corresponding rows from the iktisar_kaunit_baak_bulanan_kompetensi table
            $iktisarStaffBulananKompetensi = DB::table('iktisar_kaunit_baak_bulanan_kompetensi')
                ->where('id_staff_perilaku', $iktisarStaffBulananPerilaku->id)
                ->get();
        } else {
            // handle the case when $iktisarStaffBulananPerilaku is null
            toast('Data Empty', 'error');
            return redirect()->back();
        }

        // Display the data on a form
        return view('iktisar.baak.iktisarBulananKaUnit.edit', [
            'users' => $users,
            'iktisarStaffBulananPerilaku' => $iktisarStaffBulananPerilaku,
            'iktisarStaffBulananKompetensi' => $iktisarStaffBulananKompetensi
        ]);
    }

    // proses penilai
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $data1 = [
                'q1' => $request->q1,
                'q2' => $request->q2,
                'q3' => $request->q3,
                'q4' => $request->q4,
                'q5' => $request->q5,
                'q6' => $request->q6,
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

            $iktisarStaffBulananPerilaku = iktisarBaakBulananPerilaku::find($id);
            $iktisarStaffBulananPerilaku->update($data1);

            // Table 2
            $jenisPekerjaan = $request->jenisPekerjaan;
            $jumlahBobot = $request->jumlahBobot;
            $question = $request->question;

            // Ambil semua jenis pekerjaan untuk $id dari database dan ubah menjadi array
            $existingJenisPekerjaan = iktisarBaakBulananKompetensi::where('id_staff_perilaku', $id)->pluck('jenis_pekerjaan')->toArray();

            // Loop melalui jenis pekerjaan yang diterima dari form
            foreach ($jenisPekerjaan as $key => $value) {
                $iktisarStaffBulananKompetensi = iktisarBaakBulananKompetensi::where('id_staff_perilaku', $id)
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
                    iktisarBaakBulananKompetensi::create($data);
                } else {
                    // Jika ada, perbarui baris yang ada
                    $data = [
                        'nilai_bobot' => $jumlahBobot[$key],
                        'question' => isset($question[$key + 1]) ? $question[$key + 1] : null
                    ];
                    iktisarBaakBulananKompetensi::where('id', $iktisarStaffBulananKompetensi->id)->update($data);
                }
            }

            // Loop melalui jenis pekerjaan yang ada di database
            foreach ($existingJenisPekerjaan as $existingJenis) {
                // Jika jenis pekerjaan tidak ada dalam $jenisPekerjaan yang diterima dari form, hapus baris tersebut dari database
                if (!in_array($existingJenis, $jenisPekerjaan)) {
                    iktisarBaakBulananKompetensi::where('id_staff_perilaku', $id)->where('jenis_pekerjaan', $existingJenis)->delete();
                }
            }

            DB::commit();
            toast('Update Poin IKTISAR successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point IKTISAR fail :)', 'error');
            return redirect()->back();
        }
    }

    // user melihat raport
    public function raportStaff(Request $request, $user_id)
    {
        $dataUser = DB::table('users');

        // set nilai default untuk variabel $date
        $date = Carbon::now();

        if ($request->filled('keyword')) {
            $date = Carbon::createFromFormat('Y-m-d', $request->input('keyword'));
            $users = $dataUser->whereExists(function ($query) use ($user_id, $date) {
                $query->select(DB::raw(1))
                    ->from('iktisar_kaunit_baak_bulanan_perilaku')
                    ->whereRaw('users.id = iktisar_kaunit_baak_bulanan_perilaku.user_id')
                    ->whereMonth('iktisar_kaunit_baak_bulanan_perilaku.created_insert', $date->month)
                    ->whereYear('iktisar_kaunit_baak_bulanan_perilaku.created_insert', $date->year)
                    ->where('iktisar_kaunit_baak_bulanan_perilaku.user_id', $user_id);
            });
        } else {
            $users = $dataUser;
        }

        $data = $users
            ->leftJoin('iktisar_kaunit_baak_bulanan_perilaku', 'users.id', '=', 'iktisar_kaunit_baak_bulanan_perilaku.user_id')
            ->select(
                'users.*',
                'iktisar_kaunit_baak_bulanan_perilaku.user_id',
                'iktisar_kaunit_baak_bulanan_perilaku.output_total_sementara_kinerja_perilaku',
                'iktisar_kaunit_baak_bulanan_perilaku.total_nilai_presentase',
            )
            ->where('iktisar_kaunit_baak_bulanan_perilaku.user_id', $user_id)
            ->whereMonth('iktisar_kaunit_baak_bulanan_perilaku.created_insert', $date->month)
            ->whereYear('iktisar_kaunit_baak_bulanan_perilaku.created_insert', $date->year)
            ->first();


        if (!empty($data->user_id)) {
            return view('iktisar.baak.iktisarBulananKaUnit.raport', compact('data'));
        } else {
            toast('Data Empty :(', 'error');
            return redirect()->back();
        }
    }

    // user mencari poin
    public function searchDataPoin()
    {
        return view('iktisar.baak.iktisarBulananKaUnit.searchdatapoin');
    }
    // return user data poin
    public function dataPoin(Request $request)
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
            ->where('id', Auth::user()->id)
            ->first();

        // Retrieve the row to be edited from the database
        $iktisarStaffBulananPerilaku = DB::table('iktisar_kaunit_baak_bulanan_perilaku')
            ->where('user_id', Auth::user()->id) // Only allow editing if user_id matches the currently authenticated user
            ->whereYear('created_insert', $tahun)
            ->whereMonth('created_insert', $bulan)
            ->first();

        if ($iktisarStaffBulananPerilaku) {
            // Retrieve the corresponding rows from the iktisar_kaunit_baak_bulanan_kompetensi table
            $iktisarStaffBulananKompetensi = DB::table('iktisar_kaunit_baak_bulanan_kompetensi')
                ->where('id_staff_perilaku', $iktisarStaffBulananPerilaku->id)
                ->get();
        } else {
            // handle the case when $iktisarStaffBulananPerilaku is null
            toast('Data Empty', 'error');
            return redirect()->back();
        }

        // Display the data on a form
        return view('iktisar.baak.iktisarBulananKaUnit.detailPoin', [
            'users' => $users,
            'iktisarStaffBulananPerilaku' => $iktisarStaffBulananPerilaku,
            'iktisarStaffBulananKompetensi' => $iktisarStaffBulananKompetensi
        ]);
    }

    public function searchRaportIktisar()
    {
        $users = User::whereNotIn('name', [
            'superuser',
            'manajer',
            'it',
            'hrd',
            'lppm',
            'warek2',
            'upt',
            'baak',
            'keuangan',
            'lpm',
            'risbang',
            'gizi',
            'perawat',
            'bidan',
            'manajemen',
            'akuntansi',
            'bau',
            'warek1',
            'rektor',
            'ypsdmit'
        ])->get();
        return view('iktisar.baak.iktisarBulananKaUnit.searchdataraport', compact('users'));
    }

    // public function staffRaportIktisar(Request $request)
    // {
    //     $tanggalInput = $request->input('tanggalInput');
    //     $id = $request->input('id');

    //     // Konversi format tanggal
    //     $tanggalInput = Carbon::createFromFormat('Y-m-d', $request->input('tanggalInput'));

    //     $data = DB::table('users')
    //         ->leftJoin('iktisar_kaunit_baak_bulanan_perilaku', 'users.id', '=', 'iktisar_kaunit_baak_bulanan_perilaku.user_id')
    //         ->select(
    //             'users.name',
    //             'users.email',
    //             'iktisar_kaunit_baak_bulanan_perilaku.user_id',
    //             'iktisar_kaunit_baak_bulanan_perilaku.output_total_sementara_kinerja_perilaku',
    //             'iktisar_kaunit_baak_bulanan_perilaku.total_nilai_presentase',
    //         )
    //         ->where('iktisar_kaunit_baak_bulanan_perilaku.user_id', $id)
    //         ->whereYear('iktisar_kaunit_baak_bulanan_perilaku.created_insert', $tanggalInput)
    //         ->whereMonth('iktisar_kaunit_baak_bulanan_perilaku.created_insert', $tanggalInput)
    //         ->first();

    //     // dd($data);
    //     if (!empty($data)) {
    //         return view('iktisar.baak.iktisarBulananKaUnit.cekraport', compact('data'));
    //     } else {
    //         toast('Data Empty', 'error');
    //         return redirect()->back();
    //     }
    // }

    public function staffRaportIktisar(Request $request)
    {
        $id = $request->input('id');
        $tanggalInput = Carbon::createFromFormat('Y-m-d', $request->input('tanggalInput'));

        $data = DB::table('users')
            ->leftJoin('iktisar_kaunit_baak_bulanan_perilaku', 'users.id', '=', 'iktisar_kaunit_baak_bulanan_perilaku.user_id')
            ->select(
                'users.name',
                'users.email',
                'iktisar_kaunit_baak_bulanan_perilaku.user_id',
                'iktisar_kaunit_baak_bulanan_perilaku.output_total_sementara_kinerja_perilaku',
                'iktisar_kaunit_baak_bulanan_perilaku.total_nilai_presentase',
            )
            ->where('iktisar_kaunit_baak_bulanan_perilaku.user_id', $id)
            ->whereYear('iktisar_kaunit_baak_bulanan_perilaku.created_insert', $tanggalInput)
            ->whereMonth('iktisar_kaunit_baak_bulanan_perilaku.created_insert', $tanggalInput)
            ->first();

        if (!empty($data)) {
            if ($request->input('type') === 'pdf') {
                $pdf = PDF::loadView('iktisar.baak.iktisarBulananKaUnit.raportPdf', compact('data', 'tanggalInput'))->setOptions(['defaultFont' => 'sans-serif'])->setPaper('A4', 'potrait');
                return $pdf->download('raport_' . $data->name . '_' . $tanggalInput->format('Y-m-d') . '.pdf');
            } else {
                return view('iktisar.baak.iktisarBulananKaUnit.cekraport', compact('data', 'tanggalInput'));
            }
        } else {
            toast('Data Empty', 'error');
            return redirect()->back();
        }
    }

    public function rekap()
    {
        $users = User::whereNotIn('name', [
            'superuser',
            'manajer',
            'it',
            'hrd',
            'lppm',
            'warek2',
            'upt',
            'baak',
            'keuangan',
            'lpm',
            'risbang',
            'gizi',
            'perawat',
            'bidan',
            'manajemen',
            'akuntansi',
            'bau',
            'warek1',
            'rektor',
            'ypsdmit'
        ])->get();
        return view('iktisar.baak.iktisarBulananKaUnit.rekap.index', compact('users'));
    }

    public function reportRaport(Request $request)
    {
        $id = $request->input('id');

        // Ambil semua data yang sesuai dengan user_id
        $data = DB::table('users')
            ->leftJoin('iktisar_kaunit_baak_bulanan_perilaku', 'users.id', '=', 'iktisar_kaunit_baak_bulanan_perilaku.user_id')
            ->select(
                'users.name',
                'users.email',
                'iktisar_kaunit_baak_bulanan_perilaku.user_id',
                'iktisar_kaunit_baak_bulanan_perilaku.output_total_sementara_kinerja_perilaku',
                'iktisar_kaunit_baak_bulanan_perilaku.total_nilai_presentase',
                'iktisar_kaunit_baak_bulanan_perilaku.created_insert'
            )
            ->where('iktisar_kaunit_baak_bulanan_perilaku.user_id', $id)
            ->orderBy('iktisar_kaunit_baak_bulanan_perilaku.created_insert', 'desc') // Urutkan dari terbaru ke lama
            ->get(); // Menggunakan get() agar mendapatkan semua data
        // dd($data);

        if ($data->isNotEmpty()) {
            return view('iktisar.warek1.iktisarBulananKaUnit.rekap.report', compact('data'));
        } else {
            toast('Data Empty', 'error');
            return redirect()->back();
        }
    }

    public function showDetail($user_id, $created_insert)
    {
        // Ambil data dari tabel iktisar_kaunit_baak_bulanan_perilaku
        $iktisarStaffBulananPerilaku = DB::table('iktisar_kaunit_baak_bulanan_perilaku')
            ->where('user_id', $user_id)
            ->where('created_insert', $created_insert)
            ->first(); // Ambil satu data saja

        // Jika data tidak ditemukan, kembalikan dengan pesan error
        if (!$iktisarStaffBulananPerilaku) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }

        // Ambil data dari tabel iktisar_kaunit_baak_bulanan_kompetensi berdasarkan id_staff_perilaku
        $iktisarStaffBulananKompetensi = DB::table('iktisar_kaunit_baak_bulanan_kompetensi')
            ->where('id_staff_perilaku', $iktisarStaffBulananPerilaku->id)
            ->get();

        // Kirim data ke view
        return view('iktisar.warek1.iktisarBulananKaUnit.rekap.show', compact('iktisarStaffBulananPerilaku', 'iktisarStaffBulananKompetensi'));
    }
}
