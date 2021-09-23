<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class employerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //inserting seeding data
        DB::table('employers')->insert([
            'username'=>Str::random(10),
            'email'=>Str::random(10).'@gmail.com',
            'phone'=>Str::random(10),
            'work_type'=>Str::random(10),
            'sallary'=>Str::random(10)
        ]);

    }
}
