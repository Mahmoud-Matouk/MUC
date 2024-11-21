<?php

namespace Database\Seeders;

use App\Enums\PostStatus;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => '1',
                'name' => 'tag1',
                'status' => PostStatus::Published,
                'author_id' => User::first()->id,
                'tobe_published_at' => time(),
                'published_at' => time(),
            ],
            [
                'id' => '2',
                'name' => 'tag2',
                'status' => PostStatus::Published,
                'author_id' => User::first()->id,
                'tobe_published_at' => time(),
                'published_at' => time(),
            ],
            [
                'id' => '3',
                'name' => 'tag2',
                'author_id' => User::first()->id,
                'tobe_published_at' => time(),
                'published_at' => time(),
            ]
        ];

        foreach ($data as $item) {
            Tag::create($item);
        }
    }
}
