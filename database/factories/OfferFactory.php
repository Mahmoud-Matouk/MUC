<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\OfferStatus;
use Carbon\Carbon;

class OfferFactory extends Factory
{
    public function definition(): array
    {
        $start_date = Carbon::createFromTimestamp(fake()->dateTimeBetween('-1 Months','now')->getTimeStamp())->format('Y-m-d H:i:s');
        $expiry_date = Carbon::createFromFormat('Y-m-d H:i:s', $start_date)->addDays( fake()->numberBetween( 10, 20) )->format('Y-m-d H:i:s');

        $code = '';
        for ($i = 0; $i < 9; $i++) {
            if ($i == 4) {
                $code .= '-';
            } else {
                if ($i >= 4) {
                    $code .= fake()->randomDigit();
                } else {
                    $code .= fake()->randomLetter();
                }
            }
        }

        $status = fn() => $expiry_date > now() ? OfferStatus::Valid : OfferStatus::Expired;

        return [
            'name' => fake()->sentence(3),
            'original_price' => fake()->numberBetween(500, 1000),
            'discount_percentage' => fake()->numberBetween(2, 50),
            'description' => fake()->sentence(15),
            'image' => fake()->imageUrl(),
            'icon' => fake()->imageUrl(),
            'code' => $code,
            'active'=>fake()->boolean(90),
            'start_date' => $start_date,
            'expiry_date' => $expiry_date,
            'created_at' => $start_date,
            'updated_at' => $start_date,
            'status' => $status,
        ];
    }
}
