<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => "t-shirt",
                'sku' => "tsh"
            ],
            [
                'name' => "hoodie",
                'sku' => "hod"
            ],
            [
                'name' => "trousers",
                'sku' => "trs"
            ]
            ];
        DB::table('products')->insert($data);
    }
}
