<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanStrukturalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatan_struktural')->insert([
            ['name' => 'Rektor', 'level' => 'universitas', 'description' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Wakil Rektor', 'level' => 'universitas', 'description' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dekan', 'level' => 'fakultas', 'description' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Wakil Dekan', 'level' => 'fakultas', 'description' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kaprodi', 'level' => 'prodi', 'description' => 'Ketua Program Studi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sekretaris Prodi', 'level' => 'prodi', 'description' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kepala Laboratorium', 'level' => 'unit', 'description' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sekretaris Laboratorium', 'level' => 'unit', 'description' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
