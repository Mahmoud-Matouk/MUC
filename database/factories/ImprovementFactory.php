<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImprovementFactory extends Factory
{
    public function definition(): array
    {
        $date = fake()->dateTimeBetween('-12 months', 'now')->format('Y-m-d H:i:s');

        return [
            'before' => '01J97416CM1EWXA1SYEADZF5E1.png',
            'after' => '01J97416D9PMAMG5TVSPPVAKSA.png',
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
