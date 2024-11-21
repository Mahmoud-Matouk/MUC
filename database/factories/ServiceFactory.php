<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class ServiceFactory extends Factory
{

    public function definition(): array
    {
        $date = fake()->dateTimeBetween('-12 months', 'now')->format('Y-m-d H:i:s');

        return [
            'name' => fake()->name(),
            'description' => fake()->sentence(100),
            'category_id' => Category::inRandomOrder()->first()->id,
            'icon' => fake()->imageUrl(),
            'active' => fake()->boolean(),
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
