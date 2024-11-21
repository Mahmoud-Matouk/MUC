<?php

namespace Database\Seeders;

use App\Models\Improvement;
use Illuminate\Database\Seeder;

class ImprovementSeeder extends Seeder
{
    public function run(): void
    {
        Improvement::factory(5)->create();
    }
}
