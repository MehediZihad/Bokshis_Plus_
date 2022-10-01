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
        $this->call(UsertableSeeder::class);
        // \App\Models\User::factory(10)->create();
        \App\Models\FoodCategory::factory(5)->create();
        \App\Models\SubCategory::factory(30)->create();
        \App\Models\FoodItem::factory(150)->create();
    }
}
