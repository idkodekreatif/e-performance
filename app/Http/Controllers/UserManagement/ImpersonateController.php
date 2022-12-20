<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImpersonateController extends Controller
{
    public function impersonate($id)
    {
        $user = User::findOrFail($id);

        Auth::user()->impersonate($user);

        return redirect()->intended();
    }

    public function stopImpersonate()
    {
        Auth::user()->leaveImpersonation();

        return redirect()->intended();
    }
}
