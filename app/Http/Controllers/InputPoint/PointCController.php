<?php

namespace App\Http\Controllers\InputPoint;

use App\Http\Controllers\Controller;
use App\Models\PointC;
use Illuminate\Http\Request;

class PointCController extends Controller
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
        return view('input-point.point-C');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PointC  $pointC
     * @return \Illuminate\Http\Response
     */
    public function show(PointC $pointC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PointC  $pointC
     * @return \Illuminate\Http\Response
     */
    public function edit(PointC $pointC)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PointC  $pointC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointC $pointC)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PointC  $pointC
     * @return \Illuminate\Http\Response
     */
    public function destroy(PointC $pointC)
    {
        //
    }
}
