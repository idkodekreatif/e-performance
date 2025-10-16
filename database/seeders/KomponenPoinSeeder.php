<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomponenPoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('komponen_poin')->insert([
            [
                'nama_komponen' => 'Pendidikan',
                'Non-JAD' => 11.69,
                'AA' => 10.02,
                'Lektor' => 8.35,
                'LK' => 6.68,
                'GB' => 5.01,
            ],
            [
                'nama_komponen' => 'Penelitian',
                'Non-JAD' => 4.26,
                'AA' => 4.59,
                'Lektor' => 6.43,
                'LK' => 7.35,
                'GB' => 8.26,
            ],
            [
                'nama_komponen' => 'Pengabdian',
                'Non-JAD' => 1.20,
                'AA' => 1.92,
                'Lektor' => 1.92,
                'LK' => 1.92,
                'GB' => 1.92,
            ],
            [
                'nama_komponen' => 'Penunjang',
                'Non-JAD' => 2.17,
                'AA' => 1.84,
                'Lektor' => 1.84,
                'LK' => 1.84,
                'GB' => 1.84,
            ],
        ]);
    }
}
