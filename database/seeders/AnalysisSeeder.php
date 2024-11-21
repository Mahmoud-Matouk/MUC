<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Analysis;

class AnalysisSeeder extends Seeder
{
    public function run(): void
    {
        Analysis::factory(20)->create();
    }
}
