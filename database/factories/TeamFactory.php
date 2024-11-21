<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    public function definition(): array
    {
        $date = fake()->dateTimeBetween('-12 months', 'now')->format('Y-m-d H:i:s');

        return [
            'name' => fake()->name(),
            'position' => fake()->sentence(2),
            'experience' => fake()->sentence(10),
            'avatar' => '01J988XRT4GEW4N93FGPW24WCD.png',
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
