<?php

namespace Database\Seeders;

use App\Models\Setting\Jabatan;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabatan = [
            ['name' => 'Manager', 'description' => 'Bertanggung jawab atas operasional'],
            ['name' => 'HR', 'description' => 'Mengelola sumber daya manusia'],
            ['name' => 'Staff', 'description' => 'Melaksanakan tugas harian'],
            ['name' => 'Asisten Ahli', 'description' => 'Jabatan akademik dosen tingkat awal'],
            ['name' => 'Lektor', 'description' => 'Jabatan akademik dosen tingkat menengah'],
            ['name' => 'Lektor Kepala', 'description' => 'Jabatan akademik dosen tingkat atas'],
            ['name' => 'Guru Besar', 'description' => 'Jabatan akademik tertinggi'],
        ];

        foreach ($jabatan as $pos) {
            Jabatan::create($pos);
        }
    }
}
