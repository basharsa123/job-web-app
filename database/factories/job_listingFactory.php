<?php

namespace Database\Factories;

use App\Models\employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job_listing>
 */
class job_listingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return
        [
            'title' => fake()->jobTitle(),
            'employee_id' => employee::factory(),
            'salary' => fake()->numberBetween(10000 , 50000)
        ];
    }
}
