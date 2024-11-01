<?php

namespace App\Http\Controllers\InputPoint;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\PointD;
use App\Models\PointE;
use App\Models\Setting\Period;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PointEController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Cek apakah ada periode yang sedang aktif dan belum ditutup
        $activePeriod = Period::where('is_closed', 1)
            ->where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->first();

        if (!$activePeriod) {
            // Tidak ada periode aktif yang belum ditutup, redirect ke halaman menu.disabled
            return view('menu.disabled');
        }

        // Periode aktif ditemukan, cek apakah data PointA untuk periode aktif dan user saat ini sudah ada
        $resultData = PointE::where('new_user_id', Auth::user()->id)
            ->where('period_id', $activePeriod->id)
            ->first();

        if (!$resultData) {
            // Data PointB belum ada, tampilkan halaman input
            return view('input-point.point-E');
        } else {
            // Data PointB sudah ada, redirect ke halaman edit
            $userId = $resultData->new_user_id;
            return redirect()->route('edit.Point-E', ['PointId' => $userId]);
        }
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
            'fileE1_1' => 'mimes:pdf',
            'fileE1_2' => 'mimes:pdf',
            'fileE1_3' => 'mimes:pdf',
            'fileE1_4' => 'mimes:pdf',
            'fileE1_5' => 'mimes:pdf',
            'fileE1_6' => 'mimes:pdf',
            'fileE2_1' => 'mimes:pdf',
            'fileE2_2' => 'mimes:pdf',
            'fileE2_3' => 'mimes:pdf',
            'fileE2_4' => 'mimes:pdf',
        ]);

        $activePeriod = Period::where('is_closed', 1)
            ->where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->first();

        if (!$activePeriod) {
            throw new \Exception('Periode aktif tidak ditemukan.');
        }

        DB::beginTransaction();
        try {
            $pointE = new PointE();
            $pointE->new_user_id = Auth()->id();
            $pointE->period_id = $activePeriod->id;

            $pointE->E1_1 = $request->get('E1_1');
            $pointE->scorE1_1 = $request->get('scorE1_1');
            $pointE->scorMaxE1_1 = $request->get('scorMaxE1_1');
            $pointE->scorSubItemE1_1 = $request->get('scorSubItemE1_1');

            if ($request->hasFile('fileE1_1')) {
                $fileName = $request->file('fileE1_1')->store('uploads/Point-e', 'public');
                $pointE->fileE1_1 = $fileName;
            }

            $pointE->E1_2 = $request->get('E1_2');
            $pointE->scorE1_2 = $request->get('scorE1_2');
            $pointE->scorMaxE1_2 = $request->get('scorMaxE1_2');
            $pointE->scorSubItemE1_2 = $request->get('scorSubItemE1_2');

            if ($request->hasFile('fileE1_2')) {
                $fileName = $request->file('fileE1_2')->store('uploads/Point-e', 'public');
                $pointE->fileE1_2 = $fileName;
            }

            $pointE->E1_3 = $request->get('E1_3');
            $pointE->scorE1_3 = $request->get('scorE1_3');
            $pointE->scorMaxE1_3 = $request->get('scorMaxE1_3');
            $pointE->scorSubItemE1_3 = $request->get('scorSubItemE1_3');

            if ($request->hasFile('fileE1_3')) {
                $fileName = $request->file('fileE1_3')->store('uploads/Point-e', 'public');
                $pointE->fileE1_3 = $fileName;
            }

            $pointE->E1_4 = $request->get('E1_4');
            $pointE->scorE1_4 = $request->get('scorE1_4');
            $pointE->scorMaxE1_4 = $request->get('scorMaxE1_4');
            $pointE->scorSubItemE1_4 = $request->get('scorSubItemE1_4');

            if ($request->hasFile('fileE1_4')) {
                $fileName = $request->file('fileE1_4')->store('uploads/Point-e', 'public');
                $pointE->fileE1_4 = $fileName;
            }

            $pointE->E1_5 = $request->get('E1_5');
            $pointE->scorE1_5 = $request->get('scorE1_5');
            $pointE->scorMaxE1_5 = $request->get('scorMaxE1_5');
            $pointE->scorSubItemE1_5 = $request->get('scorSubItemE1_5');

            if ($request->hasFile('fileE1_5')) {
                $fileName = $request->file('fileE1_5')->store('uploads/Point-e', 'public');
                $pointE->fileE1_5 = $fileName;
            }

            $pointE->E1_6 = $request->get('E1_6');
            $pointE->scorE1_6 = $request->get('scorE1_6');
            $pointE->scorMaxE1_6 = $request->get('scorMaxE1_6');
            $pointE->scorSubItemE1_6 = $request->get('scorSubItemE1_6');

            if ($request->hasFile('fileE1_6')) {
                $fileName = $request->file('fileE1_6')->store('uploads/Point-e', 'public');
                $pointE->fileE1_6 = $fileName;
            }

            $pointE->E2_1 = $request->get('E2_1');
            $pointE->scorE2_1 = $request->get('scorE2_1');
            $pointE->scorMaxE2_1 = $request->get('scorMaxE2_1');
            $pointE->scorSubItemE2_1 = $request->get('scorSubItemE2_1');

            if ($request->hasFile('fileE2_1')) {
                $fileName = $request->file('fileE2_1')->store('uploads/Point-e', 'public');
                $pointE->fileE2_1 = $fileName;
            }

            $pointE->E2_2 = $request->get('E2_2');
            $pointE->scorE2_2 = $request->get('scorE2_2');
            $pointE->scorMaxE2_2 = $request->get('scorMaxE2_2');
            $pointE->scorSubItemE2_2 = $request->get('scorSubItemE2_2');

            if ($request->hasFile('fileE2_2')) {
                $fileName = $request->file('fileE2_2')->store('uploads/Point-e', 'public');
                $pointE->fileE2_2 = $fileName;
            }

            $pointE->E2_3 = $request->get('E2_3');
            $pointE->scorE2_3 = $request->get('scorE2_3');
            $pointE->scorMaxE2_3 = $request->get('scorMaxE2_3');
            $pointE->scorSubItemE2_3 = $request->get('scorSubItemE2_3');

            if ($request->hasFile('fileE2_3')) {
                $fileName = $request->file('fileE2_3')->store('uploads/Point-e', 'public');
                $pointE->fileE2_3 = $fileName;
            }

            $pointE->E2_4 = $request->get('E2_4');
            $pointE->scorE2_4 = $request->get('scorE2_4');
            $pointE->scorMaxE2_4 = $request->get('scorMaxE2_4');
            $pointE->scorSubItemE2_4 = $request->get('scorSubItemE2_4');

            if ($request->hasFile('fileE2_4')) {
                $fileName = $request->file('fileE2_4')->store('uploads/Point-e', 'public');
                $pointE->fileE2_4 = $fileName;
            }

            $pointE->SumSkor = $request->get('SumSkor');
            $pointE->NilaiUnsurPengabdian = $request->get('NilaiUnsurPengabdian');

            $pointE->save();

            DB::commit();
            toast('Create new Point E successfully :)', 'success');
            return redirect()->route('preview.point', ['new_user_id' => Auth::user()->id]);
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Create Point E fail :)', 'error');
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PointE  $pointE
     * @return \Illuminate\Http\Response
     */
    public function edit(PointE $pointE, $PointId)
    {
        $activePeriod = Period::where('is_closed', 1)
            ->where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->first();

        if (!$activePeriod) {
            return view('menu.disabled');
        }

        $data = PointE::where('new_user_id', '=', $PointId)
            ->where('period_id', $activePeriod->id)
            ->first();

        return view('edit-point.EditPointE', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PointE  $pointE
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointE $pointE, $PointId)
    {
        $fields = [
            'E1_1',
            'E1_2',
            'E1_3',
            'E1_4',
            'E1_5',
            'E1_6',
            'E2_1',
            'E2_2',
            'E2_3',
            'E2_4'
        ];

        // Validate file uploads
        foreach ($fields as $field) {
            $request->validate([
                "file{$field}" => 'mimes:pdf'
            ]);
        }

        // Retrieve active period
        $activePeriod = Period::where('is_closed', 1)
            ->where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->first();

        if (!$activePeriod) {
            return view('menu.disabled');
        }

        // Get existing record data
        $recordData = PointE::where('new_user_id', $PointId)
            ->where('period_id', $activePeriod->id)
            ->firstOrFail();

        // Initialize update data array
        $update = [];

        // Loop through each field to handle scores and files
        foreach ($fields as $field) {
            // Handle score and sub-item data
            $update[$field] = $request->input($field);
            $update["scor{$field}"] = $request->input("scor{$field}");
            $update["scorMax{$field}"] = $request->input("scorMax{$field}");
            $update["scorSubItem{$field}"] = $request->input("scorSubItem{$field}");

            // Handle file uploads and deletions
            if ($request->hasFile("file{$field}")) {
                if ($recordData["file{$field}"] && file_exists(storage_path("app/public/uploads/Point-e/{$recordData['file' .$field]}"))) {
                    \Storage::delete("public/uploads/Point-e/{$recordData['file' .$field]}");
                }
                $update["file{$field}"] = $request->file("file{$field}")->store('uploads/Point-e', 'public');
            } else {
                $update["file{$field}"] = $recordData["file{$field}"];
            }
        }

        // Additional fields
        $update['SumSkor'] = $request->input('SumSkor');
        $update['NilaiUnsurPengabdian'] = $request->input('NilaiUnsurPengabdian');

        // Update the record
        $recordData->update($update);
        toast('Update Point E successfully :)', 'success');
        return redirect()->back();
    }

    // functuin mencari data page search
    public function searchPoin()
    {
        // Mendapatkan semua periode dari database
        $allPeriods = Period::all();

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

        return view('edit-point.hrd.search.searchDataPoinE', compact('users', 'allPeriods'));
    }

    // return view ke edit
    public function resultSearchPoin(Request $request)
    {
        $period_id = $request->input('period_id'); // Mendapatkan period_id dari input form

        $resultData = DB::table('users')
            ->leftJoin('point_e', 'point_e.new_user_id', '=', 'users.id')
            ->select('users.name', 'users.email', 'point_e.*')
            ->where('new_user_id', '=', $request->id)
            ->where('point_e.period_id', '=', $period_id) // Filter berdasarkan period_id
            ->first();

        if ($resultData == null) {
            return view('menu.menu-empty');
        }

        return view('edit-point.hrd.update.EditPointEhrd', ['data' => $resultData]);
    }

    public function updateHrd(Request $request, PointE $pointE, $PointId)
    {
        $request->validate([
            'fileE1_1' => 'mimes:pdf',
            'fileE1_2' => 'mimes:pdf',
            'fileE1_3' => 'mimes:pdf',
            'fileE1_4' => 'mimes:pdf',
            'fileE1_5' => 'mimes:pdf',
            'fileE1_6' => 'mimes:pdf',
            'fileE2_1' => 'mimes:pdf',
            'fileE2_2' => 'mimes:pdf',
            'fileE2_3' => 'mimes:pdf',
            'fileE2_4' => 'mimes:pdf',
        ]);

        DB::beginTransaction();
        try {
            $period_id = $request->input('period_id'); // Mendapatkan period_id dari input form
            // Menggunakan findOrFail untuk mencari data PointA berdasarkan new_user_id dan period_id
            $RecordData = PointE::where('new_user_id', $PointId)
                ->where('period_id', $period_id)
                ->firstOrFail();

            // Request put data update
            $E1_1 = $request->E1_1;
            $scorE1_1 = $request->scorE1_1;
            $scorMaxE1_1 = $request->scorMaxE1_1;
            $scorSubItemE1_1 = $request->scorSubItemE1_1;

            if ($request->hasFile('fileE1_1')) {
                if ($RecordData->fileE1_1 && file_exists(storage_path('app/public/uploads/Point-e/' . $RecordData->fileE1_1))) {
                    \Storage::delete('public/uploads/Point-e/' . $RecordData->fileE1_1);
                }
                $fileE1_1 = $request->file('fileE1_1')->store('uploads/Point-e', 'public');
            } else {
                $fileE1_1 = $RecordData->fileE1_1;
            }

            $E1_2 = $request->E1_2;
            $scorE1_2 = $request->scorE1_2;
            $scorMaxE1_2 = $request->scorMaxE1_2;
            $scorSubItemE1_2 = $request->scorSubItemE1_2;

            if ($request->hasFile('fileE1_2')) {
                if ($RecordData->fileE1_2 && file_exists(storage_path('app/public/uploads/Point-e/' . $RecordData->fileE1_2))) {
                    \Storage::delete('public/uploads/Point-e/' . $RecordData->fileE1_2);
                }
                $fileE1_2 = $request->file('fileE1_2')->store('uploads/Point-e', 'public');
            } else {
                $fileE1_2 = $RecordData->fileE1_2;
            }

            $E1_3 = $request->E1_3;
            $scorE1_3 = $request->scorE1_3;
            $scorMaxE1_3 = $request->scorMaxE1_3;
            $scorSubItemE1_3 = $request->scorSubItemE1_3;

            if ($request->hasFile('fileE1_3')) {
                if ($RecordData->fileE1_3 && file_exists(storage_path('app/public/uploads/Point-e/' . $RecordData->fileE1_3))) {
                    \Storage::delete('public/uploads/Point-e/' . $RecordData->fileE1_3);
                }
                $fileE1_3 = $request->file('fileE1_3')->store('uploads/Point-e', 'public');
            } else {
                $fileE1_3 = $RecordData->fileE1_3;
            }

            $E1_4 = $request->E1_4;
            $scorE1_4 = $request->scorE1_4;
            $scorMaxE1_4 = $request->scorMaxE1_4;
            $scorSubItemE1_4 = $request->scorSubItemE1_4;

            if ($request->hasFile('fileE1_4')) {
                if ($RecordData->fileE1_4 && file_exists(storage_path('app/public/uploads/Point-e/' . $RecordData->fileE1_4))) {
                    \Storage::delete('public/uploads/Point-e/' . $RecordData->fileE1_4);
                }
                $fileE1_4 = $request->file('fileE1_4')->store('uploads/Point-e', 'public');
            } else {
                $fileE1_4 = $RecordData->fileE1_4;
            }

            $E1_5 = $request->E1_5;
            $scorE1_5 = $request->scorE1_5;
            $scorMaxE1_5 = $request->scorMaxE1_5;
            $scorSubItemE1_5 = $request->scorSubItemE1_5;

            if ($request->hasFile('fileE1_5')) {
                if ($RecordData->fileE1_5 && file_exists(storage_path('app/public/uploads/Point-e/' . $RecordData->fileE1_5))) {
                    \Storage::delete('public/uploads/Point-e/' . $RecordData->fileE1_5);
                }
                $fileE1_5 = $request->file('fileE1_5')->store('uploads/Point-e', 'public');
            } else {
                $fileE1_5 = $RecordData->fileE1_5;
            }

            $E1_6 = $request->E1_6;
            $scorE1_6 = $request->scorE1_6;
            $scorMaxE1_6 = $request->scorMaxE1_6;
            $scorSubItemE1_6 = $request->scorSubItemE1_6;

            if ($request->hasFile('fileE1_6')) {
                if ($RecordData->fileE1_6 && file_exists(storage_path('app/public/uploads/Point-e/' . $RecordData->fileE1_6))) {
                    \Storage::delete('public/uploads/Point-e/' . $RecordData->fileE1_6);
                }
                $fileE1_6 = $request->file('fileE1_6')->store('uploads/Point-e', 'public');
            } else {
                $fileE1_6 = $RecordData->fileE1_6;
            }

            $E2_1 = $request->E2_1;
            $scorE2_1 = $request->scorE2_1;
            $scorMaxE2_1 = $request->scorMaxE2_1;
            $scorSubItemE2_1 = $request->scorSubItemE2_1;

            if ($request->hasFile('fileE2_1')) {
                if ($RecordData->fileE2_1 && file_exists(storage_path('app/public/uploads/Point-e/' . $RecordData->fileE2_1))) {
                    \Storage::delete('public/uploads/Point-e/' . $RecordData->fileE2_1);
                }
                $fileE2_1 = $request->file('fileE2_1')->store('uploads/Point-e', 'public');
            } else {
                $fileE2_1 = $RecordData->fileE2_1;
            }

            $E2_2 = $request->E2_2;
            $scorE2_2 = $request->scorE2_2;
            $scorMaxE2_2 = $request->scorMaxE2_2;
            $scorSubItemE2_2 = $request->scorSubItemE2_2;

            if ($request->hasFile('fileE2_2')) {
                if ($RecordData->fileE2_2 && file_exists(storage_path('app/public/uploads/Point-e/' . $RecordData->fileE2_2))) {
                    \Storage::delete('public/uploads/Point-e/' . $RecordData->fileE2_2);
                }
                $fileE2_2 = $request->file('fileE2_2')->store('uploads/Point-e', 'public');
            } else {
                $fileE2_2 = $RecordData->fileE2_2;
            }

            $E2_3 = $request->E2_3;
            $scorE2_3 = $request->scorE2_3;
            $scorMaxE2_3 = $request->scorMaxE2_3;
            $scorSubItemE2_3 = $request->scorSubItemE2_3;

            if ($request->hasFile('fileE2_3')) {
                if ($RecordData->fileE2_3 && file_exists(storage_path('app/public/uploads/Point-e/' . $RecordData->fileE2_3))) {
                    \Storage::delete('public/uploads/Point-e/' . $RecordData->fileE2_3);
                }
                $fileE2_3 = $request->file('fileE2_3')->store('uploads/Point-e', 'public');
            } else {
                $fileE2_3 = $RecordData->fileE2_3;
            }

            $E2_4 = $request->E2_4;
            $scorE2_4 = $request->scorE2_4;
            $scorMaxE2_4 = $request->scorMaxE2_4;
            $scorSubItemE2_4 = $request->scorSubItemE2_4;

            if ($request->hasFile('fileE2_4')) {
                if ($RecordData->fileE2_4 && file_exists(storage_path('app/public/uploads/Point-e/' . $RecordData->fileE2_4))) {
                    \Storage::delete('public/uploads/Point-e/' . $RecordData->fileE2_4);
                }
                $fileE2_4 = $request->file('fileE2_4')->store('uploads/Point-e', 'public');
            } else {
                $fileE2_4 = $RecordData->fileE2_4;
            }

            $SumSkor = $request->SumSkor;
            $NilaiUnsurPengabdian = $request->NilaiUnsurPengabdian;

            $update = [
                'E1_1' => $E1_1,
                'scorE1_1' => $scorE1_1,
                'scorMaxE1_1' => $scorMaxE1_1,
                'scorSubItemE1_1' => $scorSubItemE1_1,
                'fileE1_1' => $fileE1_1,

                'E1_2' => $E1_2,
                'scorE1_2' => $scorE1_2,
                'scorMaxE1_2' => $scorMaxE1_2,
                'scorSubItemE1_2' => $scorSubItemE1_2,
                'fileE1_2' => $fileE1_2,

                'E1_3' => $E1_3,
                'scorE1_3' => $scorE1_3,
                'scorMaxE1_3' => $scorMaxE1_3,
                'scorSubItemE1_3' => $scorSubItemE1_3,
                'fileE1_3' => $fileE1_3,

                'E1_4' => $E1_4,
                'scorE1_4' => $scorE1_4,
                'scorMaxE1_4' => $scorMaxE1_4,
                'scorSubItemE1_4' => $scorSubItemE1_4,
                'fileE1_4' => $fileE1_4,

                'E1_5' => $E1_5,
                'scorE1_5' => $scorE1_5,
                'scorMaxE1_5' => $scorMaxE1_5,
                'scorSubItemE1_5' => $scorSubItemE1_5,
                'fileE1_5' => $fileE1_5,

                'E1_6' => $E1_6,
                'scorE1_6' => $scorE1_6,
                'scorMaxE1_6' => $scorMaxE1_6,
                'scorSubItemE1_6' => $scorSubItemE1_6,
                'fileE1_6' => $fileE1_6,

                'E2_1' => $E2_1,
                'scorE2_1' => $scorE2_1,
                'scorMaxE2_1' => $scorMaxE2_1,
                'scorSubItemE2_1' => $scorSubItemE2_1,
                'fileE2_1' => $fileE2_1,

                'E2_2' => $E2_2,
                'scorE2_2' => $scorE2_2,
                'scorMaxE2_2' => $scorMaxE2_2,
                'scorSubItemE2_2' => $scorSubItemE2_2,
                'fileE2_2' => $fileE2_2,

                'E2_3' => $E2_3,
                'scorE2_3' => $scorE2_3,
                'scorMaxE2_3' => $scorMaxE2_3,
                'scorSubItemE2_3' => $scorSubItemE2_3,
                'fileE2_3' => $fileE2_3,

                'E2_4' => $E2_4,
                'scorE2_4' => $scorE2_4,
                'scorMaxE2_4' => $scorMaxE2_4,
                'scorSubItemE2_4' => $scorSubItemE2_4,
                'fileE2_4' => $fileE2_4,

                'SumSkor' => $SumSkor,
                'NilaiUnsurPengabdian' => $NilaiUnsurPengabdian,
            ];

            $RecordData->update($update);
            DB::commit();
            toast('Update Point E successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point E fail :)', 'error');
            return redirect()->back();
        }
    }
}
