<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * ImpersonateController
 */
class ImpersonateController extends Controller
{
    /**
     * impersonate
     *
     * @param  mixed $id
     * @return void
     */
    public function impersonate($id)
    {
        $user = User::findOrFail($id);

        Auth::user()->impersonate($user);

        return redirect()->intended();
    }

    /**
     * stopImpersonate
     *
     * @return void
     */
    public function stopImpersonate()
    {
        Auth::user()->leaveImpersonation();

        return redirect()->intended();
    }
}
