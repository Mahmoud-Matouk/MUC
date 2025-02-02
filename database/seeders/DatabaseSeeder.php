<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(TagSeeder::class);
        // $this->call(PostSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(ServiceSeeder::class);
        // $this->call(TeamSeeder::class);
        // $this->call(OfferSeeder::class);
        // $this->call(ImprovementSeeder::class);
        // $this->call(NewsSeeder::class);
        // $this->call(BrandSeeder::class);
        // $this->call(AnalysisSeeder::class);
        // $this->call(BundleSeeder::class);
    }
}
