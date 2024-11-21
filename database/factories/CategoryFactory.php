<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    public function definition(): array
    {
        $date = fake()->dateTimeBetween(startDate: '-12 months', endDate: 'now')->format(format: 'Y-m-d H:i:s');

        return [
            'name' => fake()->name(),
            'slug' => fn (array $attributes) => Str::slug($attributes['name']),
            'description' => fake()->sentence(10),
            'icon' => fake()->imageUrl(),
            'active' => fake()->boolean(),
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
