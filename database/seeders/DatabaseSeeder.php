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
  
        
        \App\Models\User::factory(10)->create();
        \App\Models\Color::factory(4)->create();
       
        $this->call([
            GenderSeeder::class,
            SizeSeeder::class,
            ProductsSeeder::class
        ]);
        \App\Models\Inventory::factory(5)->create();
    }
}
