<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tasks>
 */
class TasksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->paragraph(1),
            'task' => $this->faker->sentence,
            'priority' => 'High',
            'department' => $this->faker->company(),
            'responsible' => $this->faker->name(),
            'status' => 'In Progress'
        ];
    }
}
