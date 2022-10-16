<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // biar terverifikasi
        $default_user_value = [
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
        DB::beginTransaction();
        try {
            // membuat name user
            $superuser = User::create(array_merge([
                'email' => 'superuser@ikbis.ac.id',
                'name' => 'superuser',
                'password' => bcrypt('SuperUser276')
            ], $default_user_value));

            $it = User::create(array_merge([
                'email' => 'it@ikbis.ac.id',
                'name' => 'it',
                'password' => bcrypt('IT87654321')
            ], $default_user_value));

            $hrd = User::create(array_merge([
                'email' => 'hrd@ikbis.ac.id',
                'name' => 'hrd',
                'password' => bcrypt('hrd123456')
            ], $default_user_value));

            $lppm = User::create(array_merge([
                'email' => 'lppm@ikbis.ac.id',
                'name' => 'lppm',
                'password' => bcrypt('lppm123456')
            ], $default_user_value));

            $dosen = User::create(array_merge([
                'email' => 'dosen@ikbis.ac.id',
                'name' => 'dosen',
                'password' => bcrypt('dosen123456')
            ], $default_user_value));

            $tendik = User::create(array_merge([
                'email' => 'tendik@ikbis.ac.id',
                'name' => 'tendik',
                'password' => bcrypt('tendik123456')
            ], $default_user_value));





            // membuat role user
            $role_dosen = Role::create(['name' => 'dosen']);
            $role_tendik = Role::create(['name' => 'tendik']);
            $role_hrd = Role::create(['name' => 'hrd']);
            $role_lppm = Role::create(['name' => 'lppm']);
            $role_superuser = Role::create(['name' => 'superuser']);
            $role_it = Role::create(['name' => 'it']);

            // membuat permission
            $permission = Permission::create(['name' => 'read role']);
            $permission = Permission::create(['name' => 'create role']);
            $permission = Permission::create(['name' => 'update role']);
            $permission = Permission::create(['name' => 'delete role']);
            $permission = Permission::create(['name' => 'read konfigurasi']);

            $role_it->givePermissionTo('read role');
            $role_it->givePermissionTo('create role');
            $role_it->givePermissionTo('update role');
            $role_it->givePermissionTo('delete role');
            $role_it->givePermissionTo('read konfigurasi');

            $role_superuser->givePermissionTo('read role');
            $role_superuser->givePermissionTo('create role');
            $role_superuser->givePermissionTo('update role');
            $role_superuser->givePermissionTo('delete role');
            $role_superuser->givePermissionTo('read konfigurasi');

            $role_lppm->givePermissionTo('read role');
            $role_lppm->givePermissionTo('create role');
            $role_lppm->givePermissionTo('update role');
            $role_lppm->givePermissionTo('delete role');
            $role_lppm->givePermissionTo('read konfigurasi');

            $role_hrd->givePermissionTo('read role');
            $role_hrd->givePermissionTo('create role');
            $role_hrd->givePermissionTo('update role');
            $role_hrd->givePermissionTo('delete role');
            $role_hrd->givePermissionTo('read konfigurasi');

            $role_tendik->givePermissionTo('read role');
            $role_tendik->givePermissionTo('create role');
            $role_tendik->givePermissionTo('update role');
            $role_tendik->givePermissionTo('delete role');
            $role_tendik->givePermissionTo('read konfigurasi');

            $role_dosen->givePermissionTo('read role');
            $role_dosen->givePermissionTo('create role');
            $role_dosen->givePermissionTo('update role');
            $role_dosen->givePermissionTo('delete role');
            $role_dosen->givePermissionTo('read konfigurasi');

            $dosen->assignRole('dosen');
            $tendik->assignRole('tendik');
            $hrd->assignRole('hrd');
            $lppm->assignRole('lppm');
            $superuser->assignRole('superuser');
            $it->assignRole('it');

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
