<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit_kerja')->insert([
            ['name' => 'Universitas', 'type' => 'Akademik', 'description' => 'Level Universitas', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fakultas Teknik', 'type' => 'Akademik', 'description' => 'Fakultas Teknik', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fakultas Ekonomi', 'type' => 'Akademik', 'description' => 'Fakultas Ekonomi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Prodi Informatika', 'type' => 'Akademik', 'description' => 'Program Studi Informatika', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Prodi Sistem Informasi', 'type' => 'Akademik', 'description' => 'Program Studi Sistem Informasi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'UPT IT', 'type' => 'Non-akademik', 'description' => 'Unit Pelaksana Teknis bidang TI', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BAAK', 'type' => 'Non-akademik', 'description' => 'Biro Administrasi Akademik', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Perpustakaan', 'type' => 'Non-akademik', 'description' => 'Perpustakaan Kampus', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
