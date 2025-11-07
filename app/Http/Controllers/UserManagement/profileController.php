<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * profileController
 */
class profileController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $user = User::with(['jabfung', 'jabstruk', 'unitKerja'])->findOrFail(Auth::id());

        return view('users.profile.index', [
            'user'      => $user,
            'jabfung'   => $user->jabfung,
            'jabstruk'  => $user->jabstruk,
            'unitKerja' => $user->unitKerja,
        ]);
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $profile
     * @return void
     */
    public function update(Request $request, $profile)
    {
        $request->validate([
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $user = Profile::findOrFail($profile);

            $user->about_me = $request->about_me;

            if (request()->hasFile('avatar')) {
                if ($user->avatar && file_exists(storage_path('app/public/photos/' . $user->avatar))) {
                    \Storage::delete('app/public/photos/' . $user->avatar);
                }

                $file = $request->file('avatar');
                $fileName = $file->hashName() . '.' . $file->getClientOriginalExtension();
                $request->avatar->move(storage_path('app/public/photos'), $fileName);
                $user->avatar = $fileName;
            }

            $user->email = $request->email;
            $user->fakultas = $request->fakultas;
            $user->prodi = $request->prodi;
            $user->save();

            DB::commit();
            toast('Update Profile successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Profile fail :)', 'error');
            return redirect()->back();
        }
    }
}
