<?php

namespace Database\Factories;
use App\Models\Products;
use App\Models\Size;
use App\Models\Color;
use App\Models\Gender;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "product_id" => Products::all()->random()->id,
            "size_id" => Size::all()->random()->id,
            "color_id" => Color::all()->random()->id,
            "gender_id" => Gender::all()->random()->id,
            "stock" => $this->faker->numberBetween($min = 50, $max = 100),
            "price" => $this->faker->randomNumber(2),
            "sku" => $this->faker->unique()->postcode
        ];
    }
}
