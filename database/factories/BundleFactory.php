<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Analysis;

class BundleFactory extends Factory
{
    public function definition(): array
    {
        $date = fake()->dateTimeBetween(startDate: '-12 months', endDate: 'now')->format(format: 'Y-m-d H:i:s');

        return [
            'name' => fake()->word(),
            'description' => fake()->text(),
            'original_price' => fake()->numberBetween(500, 1000),
            'discount_percentage' => fake()->numberBetween(2, 50),
            'image' => fake()->imageUrl(),
            'active' => fake()->boolean(90),
            'is_home_service' => fake()->boolean(),
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
