<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\Period;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodes = Period::orderBy('start_date', 'desc')->get();
        return view('admin.period.index', compact('periodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.period.create');
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
            'name' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        Period::create($request->all());

        toast('Create Periode successfully :)', 'success');
        return redirect()->route('period.index');
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
    public function edit(Period $period)
    {
        return view('admin.period.edit', compact('period'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Period $period)
    // {
    //     $request->validate([
    //         'name' => 'required|string',
    //         'start_date' => 'required|date',
    //         'end_date' => 'required|date|after_or_equal:start_date',
    //     ]);

    //     $period->update($request->all());

    //     toast('Update Periode successfully :)', 'success');
    //     return redirect()->route('period.index');
    // }




    public function update(Request $request, Period $period)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'is_closed' => 'boolean', // Validasi tipe data boolean
        ]);

        if ($validator->fails()) {
            return redirect()->route('period.edit', ['period' => $period->id])
                ->withErrors($validator)
                ->withInput();
        }

        // Konversi nilai is_closed ke tipe data boolean
        $is_closed = $request->has('is_closed') ? true : false;
        $data = $request->except(['_token', 'is_closed']);
        $data['is_closed'] = $is_closed;

        $period->update($data);

        toast('Update Periode successfully :)', 'success');
        return redirect()->route('period.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Period $period)
    {
        $period->delete();
        return redirect()->route('period.index')->with('success', 'Periode berhasil dihapus.');
    }
}
