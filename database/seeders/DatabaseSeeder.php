<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserRolePermissionSeeder::class);
        $this->call(UsersIktikadTableSeeder::class);
        $this->call(UsersKaSubBaakSeeder::class);
        $this->call(UsersDekanTableSeeder::class);
        $this->call(MarketingTableSeeder::class);
    }
}
