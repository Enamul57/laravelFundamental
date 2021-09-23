<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Hash;
class mySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        return DB::table('users')->insert([
            "name"=>"Goku",
            "email"=>"goku@email.com",
            "password"=>Hash::make('12345')
        ]);
    }
}
