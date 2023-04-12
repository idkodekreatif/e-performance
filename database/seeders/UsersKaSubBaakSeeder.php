<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsersKaSubBaakSeeder extends Seeder
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

        // membuat name user
        $kasubbaak = User::create(array_merge([
            'email' => 'kasubbaak@ikbis.ac.id',
            'name' => 'ka. Sub. Baak',
            'password' => bcrypt('8o2Kh*F^g4Zo')
        ], $default_user_value));

        $role_kasubbaak = Role::create(['name' => 'kasubbaak']);

        $role_kasubbaak->givePermissionTo('read role');
        $role_kasubbaak->givePermissionTo('create role');
        $role_kasubbaak->givePermissionTo('update role');
        $role_kasubbaak->givePermissionTo('delete role');
        $role_kasubbaak->givePermissionTo('read konfigurasi');

        $kasubbaak->assignRole('kasubbaak');
    }
}
