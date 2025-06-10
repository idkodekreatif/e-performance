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
            ['name' => 'asisten ahli', 'description' => 'asisten ahli'],
            ['name' => 'lektor', 'description' => 'lektor'],
            ['name' => 'lektor kepala', 'description' => 'lektor kepala'],
            ['name' => 'guru besar', 'description' => 'lektor kepala'],
            ['name' => 'profesor', 'description' => 'profesor'],
        ];

        foreach ($jabatan as $pos) {
            Jabatan::create($pos);
        }
    }
}
