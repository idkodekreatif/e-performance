<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\profile;
use App\Models\Profile as ModelsProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class profileController extends Controller
{
    public function index()
    {
        $data = User::findOrFail(Auth::id());

        // dd($data);
        return view('users.profile.index', compact('data'));
    }

    public function update(Request $request, $profile)
    {
        $request->validate([
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $user = profile::findOrFail($profile);

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

            // activity()->log('Update profile User');
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
