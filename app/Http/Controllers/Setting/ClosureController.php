<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\Closure;
use App\Models\Setting\Period;
use Illuminate\Http\Request;

class ClosureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $closures = Closure::with('period')->orderBy('closure_date', 'desc')->get();
        return view('admin.closure.index', compact('closures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periods = Period::where('is_closed', false)->get();
        return view('admin.closure.create', compact('periods'));
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
            'period_id' => 'required|exists:periods,id',
            'closure_date' => 'required|date',
            'description' => 'required|string',
        ]);

        Closure::create($request->all());

        toast('Create Penutupan Periode successfully :)', 'success');
        return redirect()->route('closure.index');
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
    public function destroy(Closure $closure)
    {
        $closure->delete();

        toast('Create Penutupan Periode successfully :)', 'success');
        return redirect()->route('closure.index');
    }
}
