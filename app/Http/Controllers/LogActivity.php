<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;

class LogActivity extends Controller
{
    public function index()
    {
        $activity_log = ActivityLog::with('user')->limit(15)->orderBy('id', 'DESC')->get();
        // dd($activity_log);
        return view('logs.index', compact('activity_log'));
    }
}
