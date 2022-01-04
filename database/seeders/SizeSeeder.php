<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            [
                'size' => "XS",
                'sku' => "xsm"
            ],
            [
                'size' => "S",
                'sku' => "sm"
            ],
            [
                'size' => "M",
                'sku' => "me"
            ],
            [
                'size' => "L",
                'sku' => "la"
            ],
            [
                'size' => "XL",
                'sku' => "xla"
            ]
        ]);
    }
}
