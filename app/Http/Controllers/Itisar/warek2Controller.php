<?php

namespace App\Http\Controllers\Itisar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class warek2Controller extends Controller
{
    public function create()
    {
        return view('itisar.warek2.create');
    }
}
