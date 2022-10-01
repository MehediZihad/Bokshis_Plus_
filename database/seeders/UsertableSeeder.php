<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsertableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            //admin
            [
                'name' => 'SuperAdmin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'phone' => '01788115599',
                'role_id' => '1',
                'user_slug' => 'admin',
            ],

        ]);

    }
}
