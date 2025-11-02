<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true),
            'description' => $this->faker->paragraph(),
            'value' => $this->faker->randomFloat(2, 5, 500),
            'expiration_date' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'stock' => $this->faker->numberBetween(0, 1000),
        ];
    }
}
