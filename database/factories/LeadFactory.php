<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Country;
use App\Enums\LeadStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeadFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            // 'email' => fake()->unique()->safeEmail(),
            'mobile' => fake()->phoneNumber(),
            // 'mobile_code' => Country::inRandomOrder()->first()->mobile_code,
            'service_id' => Service::inRandomOrder()->first()->id,
            'category_id' => Service::inRandomOrder()->first()->id,
            'note' => fake()->text(300),
        ];
    }
}
