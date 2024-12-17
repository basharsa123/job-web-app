<?php

namespace Database\Seeders;

use App\Models\job_listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class job_listingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        job_listing::factory()->create();
    }
}
