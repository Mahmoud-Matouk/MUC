<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;


class NewsFactory extends Factory
{
    public function definition(): array
    {
        $date = fake()->dateTimeBetween(startDate: '-12 months', endDate: 'now')->format(format: 'Y-m-d H:i:s');

        return [
            'title' => fake()->sentence(3),
            'slug' => fn (array $attributes) => Str::slug($attributes['title']),
            'content' => fake()->sentence(100),
            'description' => fake()->sentence(15),
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
