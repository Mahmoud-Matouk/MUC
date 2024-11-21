<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    public function definition(): array
    {
        $date = fake()->dateTimeBetween(startDate: '-12 months', endDate: 'now')->format(format: 'Y-m-d H:i:s');

        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'logo' => fake()->imageUrl(),
            'primary_color' => '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT),
            'secondary_color' => '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT),
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
