<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph(30),
            'goal_amount' => $this->faker->randomFloat(2, 100, 1000),
            'raised_amount' => $this->faker->randomFloat(2, 0, 100),
            'status' => 'active',
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->date,
            'created_by' => 1,
        ];
    }
}
