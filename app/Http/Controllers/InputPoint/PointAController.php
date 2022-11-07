<?php

namespace App\Http\Controllers\InputPoint;

use App\Http\Controllers\Controller;
use App\Models\PointA;
use Illuminate\Http\Request;
use Alert;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PointAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   return view('input-point.point-A');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $user = User::find(1)->PointAId;
        // dd($user);
        return view('input-point.point-A');
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
            'fileA1' => 'required|mimes:pdf|max:2048',
            'fileA2' => 'required|mimes:pdf|max:2048',
            'fileA3' => 'required|mimes:pdf|max:2048',
            'fileA4' => 'required|mimes:pdf|max:2048',
            'fileA5' => 'required|mimes:pdf|max:2048',
            'fileA6' => 'required|mimes:pdf|max:2048',
            'fileA7' => 'required|mimes:pdf|max:2048',
            'fileA8' => 'required|mimes:pdf|max:2048',
            'fileA9' => 'required|mimes:pdf|max:2048',
            'fileA10' => 'required|mimes:pdf|max:2048',
            'fileA11' => 'required|mimes:pdf|max:2048',
            'fileA12' => 'required|mimes:pdf|max:2048',
            'fileA13' => 'required|mimes:pdf|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $pointA = new PointA();
            $pointA->A1 = $request->get('A1');
            $pointA->scorA1 = $request->get('scorA1');
            $pointA->scorMaxA1 = $request->get('scorMaxA1');
            $pointA->scorSubItemA1 = $request->get('scorSubItemA1');

            if ($request->hasFile('fileA1')) {
                $fileName = $request->file('fileA1')->store('uploads/Point-a', 'public');
                $pointA->fileA1 = $fileName;
            }


            $pointA->A2 = $request->get('A2');
            $pointA->scorA2 = $request->get('scorA2');
            $pointA->scorMaxA2 = $request->get('scorMaxA2');
            $pointA->scorSubItemA2 = $request->get('scorSubItemA2');

            if ($request->hasFile('fileA2')) {
                $fileName = $request->file('fileA2')->store('uploads/Point-a', 'public');
                $pointA->fileA2 = $fileName;
            }

            $pointA->A3 = $request->get('A3');
            $pointA->scorA3 = $request->get('scorA3');
            $pointA->scorMaxA3 = $request->get('scorMaxA3');
            $pointA->scorSubItemA3 = $request->get('scorSubItemA3');

            if ($request->hasFile('fileA3')) {
                $fileName = $request->file('fileA3')->store('uploads/Point-a', 'public');
                $pointA->fileA3 = $fileName;
            }

            $pointA->A4 = $request->get('A4');
            $pointA->scorA4 = $request->get('scorA4');
            $pointA->scorMaxA4 = $request->get('scorMaxA4');
            $pointA->scorSubItemA4 = $request->get('scorSubItemA4');

            if ($request->hasFile('fileA4')) {
                $fileName = $request->file('fileA4')->store('uploads/Point-a', 'public');
                $pointA->fileA4 = $fileName;
            }

            $pointA->A5 = $request->get('A5');
            $pointA->scorA5 = $request->get('scorA5');
            $pointA->scorMaxA5 = $request->get('scorMaxA5');
            $pointA->scorSubItemA5 = $request->get('scorSubItemA5');

            if ($request->hasFile('fileA5')) {
                $fileName = $request->file('fileA5')->store('uploads/Point-a', 'public');
                $pointA->fileA5 = $fileName;
            }

            $pointA->A6 = $request->get('A6');
            $pointA->scorA6 = $request->get('scorA6');
            $pointA->scorMaxA6 = $request->get('scorMaxA6');
            $pointA->scorSubItemA6 = $request->get('scorSubItemA6');

            if ($request->hasFile('fileA6')) {
                $fileName = $request->file('fileA6')->store('uploads/Point-a', 'public');
                $pointA->fileA6 = $fileName;
            }

            $pointA->A7 = $request->get('A7');
            $pointA->scorA7 = $request->get('scorA7');
            $pointA->scorMaxA7 = $request->get('scorMaxA7');
            $pointA->scorSubItemA7 = $request->get('scorSubItemA7');

            if ($request->hasFile('fileA7')) {
                $fileName = $request->file('fileA7')->store('uploads/Point-a', 'public');
                $pointA->fileA7 = $fileName;
            }

            $pointA->A8 = $request->get('A8');
            $pointA->scorA8 = $request->get('scorA8');
            $pointA->scorMaxA8 = $request->get('scorMaxA8');
            $pointA->scorSubItemA8 = $request->get('scorSubItemA8');

            if ($request->hasFile('fileA8')) {
                $fileName = $request->file('fileA8')->store('uploads/Point-a', 'public');
                $pointA->fileA8 = $fileName;
            }

            $pointA->A9 = $request->get('A9');
            $pointA->scorA9 = $request->get('scorA9');
            $pointA->scorMaxA9 = $request->get('scorMaxA9');
            $pointA->scorSubItemA9 = $request->get('scorSubItemA9');

            if ($request->hasFile('fileA9')) {
                $fileName = $request->file('fileA9')->store('uploads/Point-a', 'public');
                $pointA->fileA9 = $fileName;
            }

            $pointA->A10 = $request->get('A10');
            $pointA->scorA10 = $request->get('scorA10');
            $pointA->scorMaxA10 = $request->get('scorMaxA10');
            $pointA->scorSubItemA10 = $request->get('scorSubItemA10');

            if ($request->hasFile('fileA10')) {
                $fileName = $request->file('fileA10')->store('uploads/Point-a', 'public');
                $pointA->fileA10 = $fileName;
            }

            $pointA->A11 = $request->get('A11');
            $pointA->scorA11 = $request->get('scorA11');
            $pointA->scorMaxA11 = $request->get('scorMaxA11');
            $pointA->scorSubItemA11 = $request->get('scorSubItemA11');

            if ($request->hasFile('fileA11')) {
                $fileName = $request->file('fileA11')->store('uploads/Point-a', 'public');
                $pointA->fileA11 = $fileName;
            }

            $pointA->tambahan_a11_in = $request->get('JumlahYangDihasilkanA11_5');
            $pointA->SkorTambahanA11_5 = $request->get('SkorTambahanA11_5');
            $pointA->SkorTambahanJumlahA11_5 = $request->get('SkorTambahanJumlahA11_5');
            $pointA->JumlahSkorYangDiHasilkanA11_5 = $request->get('JumlahSkorYangDiHasilkanA11_5');
            $pointA->JumlahSkorYangDiHasilkanBobotSubItemA11_5 = $request->get('JumlahSkorYangDiHasilkanBobotSubItemA11_5');
            $pointA->SkorTambahanJumlahBobotSubItemA11_5 = $request->get('SkorTambahanJumlahBobotSubItemA11_5');

            $pointA->A12 = $request->get('A12');
            $pointA->scorA12 = $request->get('scorA12');
            $pointA->scorMaxA12 = $request->get('scorMaxA12');
            $pointA->scorSubItemA12 = $request->get('scorSubItemA12');

            if ($request->hasFile('fileA12')) {
                $fileName = $request->file('fileA12')->store('uploads/Point-a', 'public');
                $pointA->fileA12 = $fileName;
            }

            $pointA->JumlahYangDihasilkanA12_3_in = $request->get('JumlahYangDihasilkanA12_3');
            $pointA->SkorTambahanA12_3 = $request->get('SkorTambahanA12_3');
            $pointA->JumlahYangDihasilkanA12_4_in = $request->get('JumlahYangDihasilkanA12_4');
            $pointA->SkorTambahanA12_4 = $request->get('SkorTambahanA12_4');
            $pointA->JumlahYangDihasilkanA12_5_in = $request->get('JumlahYangDihasilkanA12_5');
            $pointA->SkorTambahanA12_5 = $request->get('SkorTambahanA12_5');
            $pointA->SkorTambahanJumlahA12 = $request->get('SkorTambahanJumlahA12');
            $pointA->JumlahSkorYangDiHasilkanA12 = $request->get('JumlahSkorYangDiHasilkanA12');
            $pointA->SkorTambahanJumlahSkorA12 = $request->get('SkorTambahanJumlahSkorA12');
            $pointA->SkorTambahanJumlahBobotSubItemA12 = $request->get('SkorTambahanJumlahBobotSubItemA12');

            $pointA->A13 = $request->get('A13');
            $pointA->scorA13 = $request->get('scorA13');
            $pointA->scorMaxA13 = $request->get('scorMaxA13');
            $pointA->scorSubItemA13 = $request->get('scorSubItemA13');

            if ($request->hasFile('fileA13')) {
                $fileName = $request->file('fileA13')->store('uploads/Point-a', 'public');
                $pointA->fileA13 = $fileName;
            }

            $pointA->TotalSkorPendidikanPointA = $request->get('TotalSkorPendidikanPointA');
            $pointA->TotalKelebihanA11 = $request->get('TotalKelebihanA11');
            $pointA->TotalKelebihanA12 = $request->get('TotalKelebihanA12');
            $pointA->TotalKelebihanSkor = $request->get('TotalKelebihanSkor');
            $pointA->nilaiPendidikandanPengajaran = $request->get('nilaiPendidikandanPengajaran');
            $pointA->NilaiTambahPendidikanDanPengajaran = $request->get('NilaiTambahPendidikanDanPengajaran');
            $pointA->NilaiTotalPendidikanDanPengajaran = $request->get('NilaiTotalPendidikanDanPengajaran');
            $pointA->user_id = Auth()->id();
            $pointA->save();


            DB::commit();
            toast('Create new Point A successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point A fail :)', 'error');
            return redirect()->back();
        }

        // PointA::create($request->all());

        // return redirect()->route('point-A')->with('status', 'Point A Telah di isi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PointA  $pointA
     * @return \Illuminate\Http\Response
     */
    public function show(PointA $pointA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PointA  $pointA
     * @return \Illuminate\Http\Response
     */
    public function edit(PointA $pointA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PointA  $pointA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointA $pointA)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PointA  $pointA
     * @return \Illuminate\Http\Response
     */
    public function destroy(PointA $pointA)
    {
        //
    }
}
