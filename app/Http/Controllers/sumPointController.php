<?php

namespace App\Http\Controllers;

use App\Models\sumPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class sumPointController extends Controller
{
    // public function __construct()
    // {
    //     $this->sumPoint = new sumPoint();
    // }

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function raportView($user_id)
    {
        // $data = [
        //     'data' => $this->sumPoint->allData(),
        // ];

        $users = DB::table('users')
            ->leftJoin('point_a', 'users.id', '=', 'point_a.id')
            ->leftJoin('point_b', 'users.id', '=', 'point_b.id')
            ->leftJoin('point_c', 'users.id', '=', 'point_c.id')
            ->leftJoin('point_d', 'users.id', '=', 'point_d.id')
            ->leftJoin('point_e', 'users.id', '=', 'point_e.id')
            ->select('users.*', 'point_a.*', 'point_b.*', 'point_c.*', 'point_d.*', 'point_e.*')
            ->where('point_a.user_id', $user_id)
            ->where('point_b.user_id', $user_id)
            ->where('point_c.user_id', $user_id)
            ->where('point_d.user_id', $user_id)
            ->where('point_e.user_id', $user_id)
            ->first();
        // dd($users);

        return view('input-point.raport', compact('users'));
    }
}
