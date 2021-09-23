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
        //by this call method we call seed data of many seeding class
        $this->call([
            employerSeeder::class,
            workFieldSeeder::class
        ]);
    }
}
