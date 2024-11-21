<?php

namespace Database\Factories;

use App\Models\User;
use App\Enums\PostStatus;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $date = fake()->dateTimeBetween('-12 months', 'now')->format('Y-m-d H:i:s');
        $published_at = fn (array $attributes) => $attributes['status'] === PostStatus::Published ? $date : null;
        $hidden_at = fn (array $attributes) => $attributes['status'] === PostStatus::Hidden ? $date : null;

        return [
            'status' => fake()->randomElement([PostStatus::Draft, PostStatus::Scheduled, PostStatus::Published, PostStatus::Hidden]),
            'title' => fake()->sentence(4),
            'slug' => fn (array $attributes) => Str::slug($attributes['title']),
            'image' => '01J62918884TJVJZ9J22H41XY5.png',
            'author_id' => User::inRandomOrder()->first()->id,
            'summary' => fake()->sentence(10),
            'content' => fake()->sentence(30),
            'published_at' => $published_at,
            'hidden_at' => $hidden_at,
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
