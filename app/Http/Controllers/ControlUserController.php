<?php

namespace App\Http\Controllers;

use App\Models\UserControl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControlUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = DB::table('users')
        //     ->join('point_a', 'users.id', '=', 'point_a.id')
        //     ->join('point_b', 'users.id', '=', 'point_b.id')->get();
        // dd($users);
        return view('usermanagement.userControl');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\UserControl  $userControl
     * @return \Illuminate\Http\Response
     */
    public function show(UserControl $userControl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserControl  $userControl
     * @return \Illuminate\Http\Response
     */
    public function edit(UserControl $userControl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserControl  $userControl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserControl $userControl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserControl  $userControl
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserControl $userControl)
    {
        //
    }
}
