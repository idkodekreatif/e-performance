<?php

namespace App\Http\Controllers\InputPoint;

use App\Http\Controllers\Controller;
use App\Models\PointE;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PointEController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input-point.point-E');
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
            'fileE1_1' => 'required|mimes:pdf|max:2048',
            'fileE1_2' => 'required|mimes:pdf|max:2048',
            'fileE1_3' => 'required|mimes:pdf|max:2048',
            'fileE1_4' => 'required|mimes:pdf|max:2048',
            'fileE1_5' => 'required|mimes:pdf|max:2048',
            'fileE1_6' => 'required|mimes:pdf|max:2048',
            'fileE2_1' => 'required|mimes:pdf|max:2048',
            'fileE2_2' => 'required|mimes:pdf|max:2048',
            'fileE2_3' => 'required|mimes:pdf|max:2048',
            'fileE2_4' => 'required|mimes:pdf|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $pointE = new PointE();
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
            $pointE->user_id = Auth()->id();
            $pointE->save();

            DB::commit();
            toast('Create new Point E successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point E fail :)', 'error');
            return redirect()->back();
        }


        // toast('Berhasil menambahkan Point E', 'success');
        // return redirect()->route('point-E');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PointE  $pointE
     * @return \Illuminate\Http\Response
     */
    public function show(PointE $pointE)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PointE  $pointE
     * @return \Illuminate\Http\Response
     */
    public function edit(PointE $pointE)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PointE  $pointE
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointE $pointE)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PointE  $pointE
     * @return \Illuminate\Http\Response
     */
    public function destroy(PointE $pointE)
    {
        //
    }
}
