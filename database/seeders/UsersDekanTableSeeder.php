<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;

class UsersDekanTableSeeder extends Seeder
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
        $dekan = User::create(array_merge([
            'email' => 'dekan@ikbis.ac.id',
            'name' => 'ka. Sub. Baak',
            'password' => bcrypt('8o2Kh*F^g4Zo')
        ], $default_user_value));

        $role_dekan = Role::create(['name' => 'dekan']);

        $role_dekan->givePermissionTo('read role');
        $role_dekan->givePermissionTo('create role');
        $role_dekan->givePermissionTo('update role');
        $role_dekan->givePermissionTo('delete role');
        $role_dekan->givePermissionTo('read konfigurasi');

        $dekan->assignRole('dekan');
    }
}
