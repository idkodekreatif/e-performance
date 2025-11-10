<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class JabatanFungsionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatan_fungsional')->insert([
            [
                'name' => 'Non-JAD',
                'description' => 'Belum memiliki jabatan fungsional atau bukan jabatan fungsional dosen.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Asisten Ahli',
                'description' => 'Jabatan fungsional awal bagi dosen.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Lektor',
                'description' => 'Jabatan fungsional setelah Asisten Ahli.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Lektor Kepala',
                'description' => 'Jabatan fungsional madya tingkat tinggi.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Guru Besar',
                'description' => 'Jabatan fungsional tertinggi bagi dosen.',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
