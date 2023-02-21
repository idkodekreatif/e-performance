<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsersIktikadTableSeeder extends Seeder
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
         $warek2 = User::create(array_merge([
            'email' => 'warek2@ikbis.ac.id',
            'name' => 'warek2',
            'password' => bcrypt('8o2Kh*F^g4Zo')
        ], $default_user_value));

        $upt = User::create(array_merge([
            'email' => 'upt@ikbis.ac.id',
            'name' => 'upt',
            'password' => bcrypt('ADl0N%5i66lY')
        ], $default_user_value));


        $baak = User::create(array_merge([
            'email' => 'baak@ikbis.ac.id',
            'name' => 'baak',
            'password' => bcrypt('&3w665pF5Tl8')
        ], $default_user_value));

        $keuangan = User::create(array_merge([
            'email' => 'keuangan@ikbis.ac.id',
            'name' => 'keuangan',
            'password' => bcrypt('2*S23aI09ekk')
        ], $default_user_value));

        $lpm = User::create(array_merge([
            'email' => 'lpm@ikbis.ac.id',
            'name' => 'lpm',
            'password' => bcrypt('iiX826d0*PXo')
        ], $default_user_value));

        $risbang = User::create(array_merge([
            'email' => 'risbang@ikbis.ac.id',
            'name' => 'risbang',
            'password' => bcrypt('516hT1%Ha2w!')
        ], $default_user_value));

         $gizi = User::create(array_merge([
            'email' => 'gizi@ikbis.ac.id',
            'name' => 'gizi',
            'password' => bcrypt('dx6V$NtMOh44')
        ], $default_user_value));

         $bidan = User::create(array_merge([
            'email' => 'bidan@ikbis.ac.id',
            'name' => 'bidan',
            'password' => bcrypt('GfK1Y5F7F0C*')
        ], $default_user_value));

         $perawat = User::create(array_merge([
            'email' => 'perawat@ikbis.ac.id',
            'name' => 'perawat',
            'password' => bcrypt('9J5*Dq!8gA&l')
        ], $default_user_value));

         $akuntansi = User::create(array_merge([
            'email' => 'akuntansi@ikbis.ac.id',
            'name' => 'akuntansi',
            'password' => bcrypt('lp^F87Zc^W61')
        ], $default_user_value));

         $manajemen = User::create(array_merge([
            'email' => 'manajemen@ikbis.ac.id',
            'name' => 'manajemen',
            'password' => bcrypt('6U%#9oz@*3L0')
        ], $default_user_value));

        $bau = User::create(array_merge([
            'email' => 'bau@ikbis.ac.id',
            'name' => 'bau',
            'password' => bcrypt('8mb^5Hv21*2N')
        ], $default_user_value));

        $warek1 = User::create(array_merge([
            'email' => 'warek1@ikbis.ac.id',
            'name' => 'warek1',
            'password' => bcrypt('*H7z1G3r0Vkj')
        ], $default_user_value));

        $rektor = User::create(array_merge([
            'email' => 'rektor@ikbis.ac.id',
            'name' => 'rektor',
            'password' => bcrypt('7qg^OVY9R*c1')
        ], $default_user_value));

         $ypsdmit = User::create(array_merge([
            'email' => 'ypsdmit@ikbis.ac.id',
            'name' => 'ypsdmit',
            'password' => bcrypt('qOR#w79WbN1D')
        ], $default_user_value));

        $role_warek2 = Role::create(['name' => 'warek2']);
        $role_upt = Role::create(['name' => 'upt']);
        $role_baak = Role::create(['name' => 'baak']);
        $role_keuangan = Role::create(['name' => 'keuangan']);
        $role_lpm = Role::create(['name' => 'lpm']);
        $role_risbang = Role::create(['name' => 'risbang']);
        $role_gizi = Role::create(['name' => 'gizi']);
        $role_perawat = Role::create(['name' => 'perawat']);
        $role_bidan = Role::create(['name' => 'bidan']);
        $role_manajemen = Role::create(['name' => 'manajemen']);
        $role_akuntansi = Role::create(['name' => 'akuntansi']);
        $role_bau = Role::create(['name' => 'bau']);
        $role_warek1 = Role::create(['name' => 'warek1']);
        $role_rektor = Role::create(['name' => 'rektor']);
        $role_ypsdmit = Role::create(['name' => 'ypsdmit']);

        $role_warek2->givePermissionTo('read role');
        $role_warek2->givePermissionTo('create role');
        $role_warek2->givePermissionTo('update role');
        $role_warek2->givePermissionTo('delete role');
        $role_warek2->givePermissionTo('read konfigurasi');

        $role_upt->givePermissionTo('read role');
        $role_upt->givePermissionTo('create role');
        $role_upt->givePermissionTo('update role');
        $role_upt->givePermissionTo('delete role');
        $role_upt->givePermissionTo('read konfigurasi');

        $role_baak->givePermissionTo('read role');
        $role_baak->givePermissionTo('create role');
        $role_baak->givePermissionTo('update role');
        $role_baak->givePermissionTo('delete role');
        $role_baak->givePermissionTo('read konfigurasi');

        $role_keuangan->givePermissionTo('read role');
        $role_keuangan->givePermissionTo('create role');
        $role_keuangan->givePermissionTo('update role');
        $role_keuangan->givePermissionTo('delete role');
        $role_keuangan->givePermissionTo('read konfigurasi');

        $role_lpm->givePermissionTo('read role');
        $role_lpm->givePermissionTo('create role');
        $role_lpm->givePermissionTo('update role');
        $role_lpm->givePermissionTo('delete role');
        $role_lpm->givePermissionTo('read konfigurasi');

        $role_risbang->givePermissionTo('read role');
        $role_risbang->givePermissionTo('create role');
        $role_risbang->givePermissionTo('update role');
        $role_risbang->givePermissionTo('delete role');
        $role_risbang->givePermissionTo('read konfigurasi');

        $role_gizi->givePermissionTo('read role');
        $role_gizi->givePermissionTo('create role');
        $role_gizi->givePermissionTo('update role');
        $role_gizi->givePermissionTo('delete role');
        $role_gizi->givePermissionTo('read konfigurasi');

        $role_perawat->givePermissionTo('read role');
        $role_perawat->givePermissionTo('create role');
        $role_perawat->givePermissionTo('update role');
        $role_perawat->givePermissionTo('delete role');
        $role_perawat->givePermissionTo('read konfigurasi');

        $role_bidan->givePermissionTo('read role');
        $role_bidan->givePermissionTo('create role');
        $role_bidan->givePermissionTo('update role');
        $role_bidan->givePermissionTo('delete role');
        $role_bidan->givePermissionTo('read konfigurasi');

        $role_manajemen->givePermissionTo('read role');
        $role_manajemen->givePermissionTo('create role');
        $role_manajemen->givePermissionTo('update role');
        $role_manajemen->givePermissionTo('delete role');
        $role_manajemen->givePermissionTo('read konfigurasi');

        $role_akuntansi->givePermissionTo('read role');
        $role_akuntansi->givePermissionTo('create role');
        $role_akuntansi->givePermissionTo('update role');
        $role_akuntansi->givePermissionTo('delete role');
        $role_akuntansi->givePermissionTo('read konfigurasi');

        $role_bau->givePermissionTo('read role');
        $role_bau->givePermissionTo('create role');
        $role_bau->givePermissionTo('update role');
        $role_bau->givePermissionTo('delete role');
        $role_bau->givePermissionTo('read konfigurasi');

        $role_warek1->givePermissionTo('read role');
        $role_warek1->givePermissionTo('create role');
        $role_warek1->givePermissionTo('update role');
        $role_warek1->givePermissionTo('delete role');
        $role_warek1->givePermissionTo('read konfigurasi');

        $role_rektor->givePermissionTo('read role');
        $role_rektor->givePermissionTo('create role');
        $role_rektor->givePermissionTo('update role');
        $role_rektor->givePermissionTo('delete role');
        $role_rektor->givePermissionTo('read konfigurasi');

        $role_ypsdmit->givePermissionTo('read role');
        $role_ypsdmit->givePermissionTo('create role');
        $role_ypsdmit->givePermissionTo('update role');
        $role_ypsdmit->givePermissionTo('delete role');
        $role_ypsdmit->givePermissionTo('read konfigurasi');

        $warek2->assignRole('warek2');
        $upt->assignRole('upt');
        $baak->assignRole('baak');
        $keuangan->assignRole('keuangan');
        $lpm->assignRole('lpm');
        $risbang->assignRole('risbang');
        $gizi->assignRole('gizi');
        $perawat->assignRole('perawat');
        $bidan->assignRole('bidan');
        $manajemen->assignRole('manajemen');
        $akuntansi->assignRole('akuntansi');
        $bau->assignRole('bau');
        $warek1->assignRole('warek1');
        $rektor->assignRole('rektor');
        $ypsdmit->assignRole('ypsdmit');
    }
}
