<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->jobTitle(),
            "employer_id" => Employer::factory(),
            "description" => $this->faker->text(),
            "salary" => '$'.number_format($this->faker->numberBetween(30000, 100000)).'/year',
            "status" => $this->faker->randomElement(["Full-time", "Part-time", "Remote", "Contractual"]),
            "location" => $this->faker->city()
        ];
    }
}
