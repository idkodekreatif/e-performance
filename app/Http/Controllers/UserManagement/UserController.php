<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;
use DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

/**
 * UserController
 */
class UserController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    // public function index()
    // {
    //     $users = User::whereNotIn('name', [
    //         'superuser', 'manajer', 'it', 'hrd', 'lppm', 'warek2', 'upt', 'baak', 'keuangan', 'lpm', 'risbang', 'gizi', 'perawat', 'bidan', 'manajemen', 'akuntansi', 'warek1', 'rektor', 'ypsdmit'
    //     ])->get();
    //     return view('admin.users.index', compact('users'));
    // }


    /**
     * index
     *
     * @param  mixed $request
     * @return void
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::whereNotIn('name', [
                'superuser',
                'manajer',
                'it',
                'hrd',
                'lppm',
                'warek2',
                'upt',
                'baak',
                'keuangan',
                'lpm',
                'risbang',
                'gizi',
                'perawat',
                'bidan',
                'manajemen',
                'akuntansi',
                'warek1',
                'rektor',
                'ypsdmit',
                'dosen',
                'tendik',
                'ka. Sub. Baak',
                'non JAD',
                'Asisten Ahli',
                'Lektor',
                'Lektor Kepala',
                // 'Guru Besar',
            ])->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . route('impersonate', $row->id) . '" class="btn btn-primary shadow btn-xs me-1">Impersonate</a>
                    <a href="' . route('users.show', $row->id) . '" class="btn btn-primary shadow btn-xs me-1">Roles</a>
                    <a href="' . route('users.destroy', $row->id) . '" class="btn btn-danger shadow btn-xs me-1" onclick="return confirm("Apakah Anda Yakin Menghapus Data?");">Delete</a>
                ';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.users.index');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'max:255',
                'unique:users',
                'email',
                function ($attribute, $value, $fail) {
                    if (!str_ends_with($value, '@ikbis.ac.id')) {
                        $fail('The email must end with @ikbis.ac.id.');
                    }
                },
            ],
            'password' => 'required|min:12|string|confirmed',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        // Validasi input jika diperlukan

        $user = User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'fakultas' => $request->fakultas,
                'prodi' => $request->prodi,
                'password' => Hash::make($request->password),
            ]
        );
        $user->assignRole($request->role);

        toast('User created. :)', 'success');
        return redirect()->back();
    }


    /**
     * show
     *
     * @param  mixed $user
     * @return void
     */
    public function show(User $user)
    {
        $roles = Role::all();
        $permissions = Permission::all();

        return view('admin.users.role', compact('user', 'roles', 'permissions'));
    }

    /**
     * assignRole
     *
     * @param  mixed $request
     * @param  mixed $user
     * @return void
     */
    public function assignRole(Request $request, User $user)
    {
        if ($user->hasRole($request->role)) {
            toast('Role exists. :)', 'warning');
            return redirect()->back();
        }

        $user->assignRole($request->role);
        toast('Role assigned. :)', 'success');
        return redirect()->back();
    }

    /**
     * removeRole
     *
     * @param  mixed $user
     * @param  mixed $role
     * @return void
     */
    public function removeRole(User $user, Role $role)
    {
        if ($user->hasRole($role)) {
            $user->removeRole($role);
            toast('Role removed. :)', 'success');
            return redirect()->back();
        }

        toast('Role removed. :)', 'warning');
        return redirect()->back();
    }

    /**
     * givePermission
     *
     * @param  mixed $request
     * @param  mixed $user
     * @return void
     */
    public function givePermission(Request $request, User $user)
    {
        if ($user->hasPermissionTo($request->permission)) {
            toast('Permission exists. :)', 'warning');
            return redirect()->back();
        }
        $user->givePermissionTo($request->permission);
        toast('Permission added. :)', 'success');
        return redirect()->back();
    }

    /**
     * revokePermission
     *
     * @param  mixed $user
     * @param  mixed $permission
     * @return void
     */
    public function revokePermission(User $user, Permission $permission)
    {
        if ($user->hasPermissionTo($permission)) {
            $user->revokePermissionTo($permission);
            toast('Permission revoked. :)', 'success');
            return redirect()->back();
        }
        toast('Permission does not exists. :)', 'warning');
        return redirect()->back();
    }


    /**
     * destroy
     *
     * @param  mixed $user
     * @return void
     */
    public function destroy(User $user)
    {
        if ($user->hasRole('admin')) {
            toast('you are admin. :)', 'warning');
            return redirect()->back();
        }
        $user->delete();

        toast('User deleted. :)', 'success');
        return redirect()->back();
    }
}
