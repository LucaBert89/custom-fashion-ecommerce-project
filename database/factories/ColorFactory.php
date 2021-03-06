<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Color;

class ColorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Color::class;
    public function definition()
    {
        return [
                'color' => $this->faker->unique()->colorName(),
                'sku' => $this->faker->unique()->hexColor(),
                'created_at' => now(),
        ];
    }
}
