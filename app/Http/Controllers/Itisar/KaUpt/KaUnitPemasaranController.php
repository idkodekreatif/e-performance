<?php

namespace App\Http\Controllers\Itisar\KaUpt;

use App\Http\Controllers\Controller;
use App\Models\KaPemasaran;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaUnitPemasaranController extends Controller
{
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm', 'warek2', 'upt', 'baak', 'keuangan', 'lpm', 'risbang', 'gizi', 'perawat', 'bidan', 'manajemen', 'akuntansi', 'bau', 'warek1', 'rektor', 'ypsdmit'
        ])->get();
        return view('itisar.ka-upt.ka-unit-pemasaran.create', compact('users'));
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
            'file_kinerja_kompetensi_1' => 'mimes:pdf',
            'file_kinerja_kompetensi_2' => 'mimes:pdf',
            'file_kinerja_kompetensi_3' => 'mimes:pdf',
            'file_kinerja_kompetensi_4' => 'mimes:pdf',
            'file_kinerja_kompetensi_5' => 'mimes:pdf',
        ]);

        DB::beginTransaction();
        try {
            $kaPemasaran = new KaPemasaran();
            $kaPemasaran->q1 = $request->get('q1');
            $kaPemasaran->q2 = $request->get('q2');
            $kaPemasaran->q3 = $request->get('q3');
            $kaPemasaran->q4 = $request->get('q4');
            $kaPemasaran->q5 = $request->get('q5');
            $kaPemasaran->q6 = $request->get('q6');
            $kaPemasaran->output_point_1 = $request->get('output_point_1');
            $kaPemasaran->output_point_2 = $request->get('output_point_2');
            $kaPemasaran->output_point_3 = $request->get('output_point_3');
            $kaPemasaran->output_point_4 = $request->get('output_point_4');
            $kaPemasaran->output_point_5 = $request->get('output_point_5');
            $kaPemasaran->output_total_point_kinerja_perilaku = $request->get('output_total_point_kinerja_perilaku');
            $kaPemasaran->output_total_nilai_rata_rata_kinerja_perilaku = $request->get('output_total_nilai_rata_rata_kinerja_perilaku');
            $kaPemasaran->output_total_sementara_kinerja_perilaku = $request->get('output_total_sementara_kinerja_perilaku');

            $kaPemasaran->kinerja_kompetensi_1 = $request->get('kinerja_kompetensi_1');
            if ($request->hasFile('file_kinerja_kompetensi_1')) {
                $fileName = $request->file('file_kinerja_kompetensi_1')->store('uploads/KaUpt/KaPemasaran', 'public');
                $kaPemasaran->file_kinerja_kompetensi_1 = $fileName;
            }
            $kaPemasaran->kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                $fileName = $request->file('file_kinerja_kompetensi_2')->store('uploads/KaUpt/KaPemasaran', 'public');
                $kaPemasaran->file_kinerja_kompetensi_2 = $fileName;
            }
            $kaPemasaran->kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                $fileName = $request->file('file_kinerja_kompetensi_3')->store('uploads/KaUpt/KaPemasaran', 'public');
                $kaPemasaran->file_kinerja_kompetensi_3 = $fileName;
            }
            $kaPemasaran->kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                $fileName = $request->file('file_kinerja_kompetensi_4')->store('uploads/KaUpt/KaPemasaran', 'public');
                $kaPemasaran->file_kinerja_kompetensi_4 = $fileName;
            }
            $kaPemasaran->kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                $fileName = $request->file('file_kinerja_kompetensi_5')->store('uploads/KaUpt/KaPemasaran', 'public');
                $kaPemasaran->file_kinerja_kompetensi_5 = $fileName;
            }

            $kaPemasaran->output_point_kinerja_kompetensi_1 = $request->get('output_point_kinerja_kompetensi_1');
            $kaPemasaran->output_point_kinerja_kompetensi_2 = $request->get('output_point_kinerja_kompetensi_2');
            $kaPemasaran->output_point_kinerja_kompetensi_3 = $request->get('output_point_kinerja_kompetensi_3');
            $kaPemasaran->output_point_kinerja_kompetensi_4 = $request->get('output_point_kinerja_kompetensi_4');
            $kaPemasaran->output_point_kinerja_kompetensi_5 = $request->get('output_point_kinerja_kompetensi_5');
            $kaPemasaran->output_total_point_kinerja_kompetensi = $request->get('output_total_point_kinerja_kompetensi');
            $kaPemasaran->output_total_nilai_rata_rata_kinerja_kompetensi = $request->get('output_total_nilai_rata_rata_kinerja_kompetensi');
            $kaPemasaran->output_total_sementara_kinerja_kompetensi = $request->get('output_total_sementara_kinerja_kompetensi');

            $kaPemasaran->user_id = $request->get('UserId');
            $kaPemasaran->save();

            DB::commit();
            toast('Create Point Ka. Pemasaran successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point Ka. Pemasaran fail :)', 'error');
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kaPemasaran  $kaPemasaran
     * @return \Illuminate\Http\Response
     */
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
        return view('itisar.ka-upt.ka-unit-pemasaran.searchdata', compact('users'));
    }

    public function dataSearch(Request $request)
    {
        $data = KaPemasaran::where('user_id', '=', $request->id)->first();

        return view('itisar.ka-upt.ka-unit-pemasaran.edit', ['data' => $data]);
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
        ]);
        DB::beginTransaction();
        try {
            $RecordData =  KaPemasaran::where('user_id', $PointId)->firstOrFail();

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
                if ($RecordData->file_kinerja_kompetensi_1 && file_exists(storage_path('app/public/uploads/KaUpt/KaPemasaran/' . $RecordData->file_kinerja_kompetensi_1))) {
                    \Storage::delete('public/uploads/KaUpt/KaPemasaran/' . $RecordData->file_kinerja_kompetensi_1);
                }
                $file_kinerja_kompetensi_1 = $request->file('file_kinerja_kompetensi_1')->store('uploads/KaUpt/KaPemasaran', 'public');
            } else {
                $file_kinerja_kompetensi_1 = $RecordData->file_kinerja_kompetensi_1;
            }

            $kinerja_kompetensi_2 = $request->get('kinerja_kompetensi_2');
            if ($request->hasFile('file_kinerja_kompetensi_2')) {
                if ($RecordData->file_kinerja_kompetensi_2 && file_exists(storage_path('app/public/uploads/KaUpt/KaPemasaran/' . $RecordData->file_kinerja_kompetensi_2))) {
                    \Storage::delete('public/uploads/KaUpt/KaPemasaran/' . $RecordData->file_kinerja_kompetensi_2);
                }
                $file_kinerja_kompetensi_2 = $request->file('file_kinerja_kompetensi_2')->store('uploads/KaUpt/KaPemasaran', 'public');
            } else {
                $file_kinerja_kompetensi_2 = $RecordData->file_kinerja_kompetensi_2;
            }

            $kinerja_kompetensi_3 = $request->get('kinerja_kompetensi_3');
            if ($request->hasFile('file_kinerja_kompetensi_3')) {
                if ($RecordData->file_kinerja_kompetensi_3 && file_exists(storage_path('app/public/uploads/KaUpt/KaPemasaran/' . $RecordData->file_kinerja_kompetensi_3))) {
                    \Storage::delete('public/uploads/KaUpt/KaPemasaran/' . $RecordData->file_kinerja_kompetensi_3);
                }
                $file_kinerja_kompetensi_3 = $request->file('file_kinerja_kompetensi_3')->store('uploads/KaUpt/KaPemasaran', 'public');
            } else {
                $file_kinerja_kompetensi_3 = $RecordData->file_kinerja_kompetensi_3;
            }

            $kinerja_kompetensi_4 = $request->get('kinerja_kompetensi_4');
            if ($request->hasFile('file_kinerja_kompetensi_4')) {
                if ($RecordData->file_kinerja_kompetensi_4 && file_exists(storage_path('app/public/uploads/KaUpt/KaPemasaran/' . $RecordData->file_kinerja_kompetensi_4))) {
                    \Storage::delete('public/uploads/KaUpt/KaPemasaran/' . $RecordData->file_kinerja_kompetensi_4);
                }
                $file_kinerja_kompetensi_4 = $request->file('kinerja_kompetensi_4')->store('uploads/KaUpt/KaPemasaran', 'public');
            } else {
                $file_kinerja_kompetensi_4 = $RecordData->file_kinerja_kompetensi_4;
            }

            $kinerja_kompetensi_5 = $request->get('kinerja_kompetensi_5');
            if ($request->hasFile('file_kinerja_kompetensi_5')) {
                if ($RecordData->file_kinerja_kompetensi_5 && file_exists(storage_path('app/public/uploads/KaUpt/KaPemasaran/' . $RecordData->file_kinerja_kompetensi_5))) {
                    \Storage::delete('public/ploads/KaUpt/KaPemasaran/' . $RecordData->file_kinerja_kompetensi_5);
                }
                $file_kinerja_kompetensi_5 = $request->file('file_kinerja_kompetensi_5')->store('uploads/KaUpt/KaPemasaran', 'public');
            } else {
                $file_kinerja_kompetensi_5 = $RecordData->file_kinerja_kompetensi_5;
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
            toast('Update Point Ka. Pemasaran successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point Ka. Pemasaran fail :)', 'error');
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
            ->leftJoin('ikbis_ka_pemasaran', 'users.id', '=', 'ikbis_ka_pemasaran.user_id')
            ->select(
                'users.name',
                'users.email',
                'ikbis_ka_pemasaran.user_id',
                'ikbis_ka_pemasaran.output_total_sementara_kinerja_perilaku',
                'ikbis_ka_pemasaran.output_total_sementara_kinerja_kompetensi',
            )
            ->where('ikbis_ka_pemasaran.user_id', $user_id)
            ->first();

        // dd($DataUser);
        if (!empty($DataUser->user_id)) {
            return view('itisar.ka-upt.ka-unit-pemasaran.raport', compact('DataUser'));
        } else {
            return view('menu.menu-empty');
        }
    }

    public function detailPoin($userId)
    {
        $data = KaPemasaran::where('user_id', '=', $userId)->first();

        return view('itisar.ka-upt.ka-unit-pemasaran.detailPoin', ['data' => $data]);
    }

    public function searchRaport()
    {
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm', 'warek2', 'upt', 'baak', 'keuangan', 'lpm', 'risbang', 'gizi', 'perawat', 'bidan', 'manajemen', 'akuntansi', 'bau', 'warek1', 'rektor', 'ypsdmit'
        ])->get();
        return view('itisar.ka-upt.ka-unit-pemasaran.searchRaport', compact('users'));
    }

    public function resultRaport(Request $request)
    {
        $DataUser = DB::table('users')
            ->leftJoin('ikbis_ka_pemasaran', 'users.id', '=', 'ikbis_ka_pemasaran.user_id')
            ->select(
                'users.name',
                'users.email',
                'ikbis_ka_pemasaran.user_id',
                'ikbis_ka_pemasaran.output_total_sementara_kinerja_perilaku',
                'ikbis_ka_pemasaran.output_total_sementara_kinerja_kompetensi',
            )
            ->where('ikbis_ka_pemasaran.user_id', '=', $request->id)
            ->first();

        // dd($DataUser);
        if (!empty($DataUser)) {
            return view('itisar.ka-upt.ka-unit-pemasaran.raport', compact('DataUser'));
        } else {
            return view('menu.menu-empty');
        }
    }
}
