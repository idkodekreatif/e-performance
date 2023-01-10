<?php

namespace App\Http\Controllers\Itisar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class warek2Controller extends Controller
{
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('itisar.warek2.create');
    }

    /**
     * raport
     *
     * @return void
     */
    public function raport()
    {
        return view('itisar.warek2.raport');
    }
}
