<?php

namespace App\Http\Controllers\InputPoint;

use App\Http\Controllers\Controller;
use App\Models\PointE;
use Illuminate\Http\Request;

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
        $new_data = new PointE();
        $new_data->E1_1 = $request->get('E1_1');
        $new_data->scorE1_1 = $request->get('scorE1_1');
        $new_data->scorMaxE1_1 = $request->get('scorMaxE1_1');
        $new_data->scorSubItemE1_1 = $request->get('scorSubItemE1_1');

        $new_data->E1_2 = $request->get('E1_2');
        $new_data->scorE1_2 = $request->get('scorE1_2');
        $new_data->scorMaxE1_2 = $request->get('scorMaxE1_2');
        $new_data->scorSubItemE1_2 = $request->get('scorSubItemE1_2');

        $new_data->E1_3 = $request->get('E1_3');
        $new_data->scorE1_3 = $request->get('scorE1_3');
        $new_data->scorMaxE1_3 = $request->get('scorMaxE1_3');
        $new_data->scorSubItemE1_3 = $request->get('scorSubItemE1_3');

        $new_data->E1_4 = $request->get('E1_4');
        $new_data->scorE1_4 = $request->get('scorE1_4');
        $new_data->scorMaxE1_4 = $request->get('scorMaxE1_4');
        $new_data->scorSubItemE1_4 = $request->get('scorSubItemE1_4');

        $new_data->E1_5 = $request->get('E1_5');
        $new_data->scorE1_5 = $request->get('scorE1_5');
        $new_data->scorMaxE1_5 = $request->get('scorMaxE1_5');
        $new_data->scorSubItemE1_5 = $request->get('scorSubItemE1_5');

        $new_data->E1_6 = $request->get('E1_6');
        $new_data->scorE1_6 = $request->get('scorE1_6');
        $new_data->scorMaxE1_6 = $request->get('scorMaxE1_6');
        $new_data->scorSubItemE1_6 = $request->get('scorSubItemE1_6');

        $new_data->E2_1 = $request->get('E2_1');
        $new_data->scorE2_1 = $request->get('scorE2_1');
        $new_data->scorMaxE2_1 = $request->get('scorMaxE2_1');
        $new_data->scorSubItemE2_1 = $request->get('scorSubItemE2_1');

        $new_data->E2_2 = $request->get('E2_2');
        $new_data->scorE2_2 = $request->get('scorE2_2');
        $new_data->scorMaxE2_2 = $request->get('scorMaxE2_2');
        $new_data->scorSubItemE2_2 = $request->get('scorSubItemE2_2');

        $new_data->E2_3 = $request->get('E2_3');
        $new_data->scorE2_3 = $request->get('scorE2_3');
        $new_data->scorMaxE2_3 = $request->get('scorMaxE2_3');
        $new_data->scorSubItemE2_3 = $request->get('scorSubItemE2_3');

        $new_data->E2_4 = $request->get('E2_4');
        $new_data->scorE2_4 = $request->get('scorE2_4');
        $new_data->scorMaxE2_4 = $request->get('scorMaxE2_4');
        $new_data->scorSubItemE2_4 = $request->get('scorSubItemE2_4');

        $new_data->SumSkor = $request->get('SumSkor');
        $new_data->NilaiUnsurPengabdian = $request->get('NilaiUnsurPengabdian');

        $new_data->save();
        return redirect()->route('point-E');
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
