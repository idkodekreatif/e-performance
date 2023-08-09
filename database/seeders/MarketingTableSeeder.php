<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class MarketingTableSeeder extends Seeder
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
        $marketing = User::create(array_merge([
            'email' => 'marketing@ikbis.ac.id',
            'name' => 'marketing',
            'password' => bcrypt('8o2Kh*F^g4Zo')
        ], $default_user_value));

        $role_marketing = Role::create(['name' => 'marketing']);

        $role_marketing->givePermissionTo('read role');
        $role_marketing->givePermissionTo('create role');
        $role_marketing->givePermissionTo('update role');
        $role_marketing->givePermissionTo('delete role');
        $role_marketing->givePermissionTo('read konfigurasi');

        $marketing->assignRole('marketing');
    }
}
