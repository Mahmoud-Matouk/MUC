<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $mobile = '09'.fake()->numberBetween(1000000, 9999999);

        return [
            'gender' => fake()->randomElement([1, 2]),
            'name' => $name = str(fake()->name())->title()->toString(),
            'email' => fake()->unique()->safeEmail(),
            'username' => fake()->unique()->userName(),
            'locale' => config('app.locale'),
            'avatar' => 'https://i.pravatar.cc/300?u='.$name,

            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),

            'mobile_code' => '968',
            'mobile' => full_mobile($mobile),
            'locale_mobile' => $mobile,
        ];
    }
}
