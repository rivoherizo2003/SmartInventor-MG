<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movement>
 */
class MovementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'movement_type' => $this->faker->randomElement(['in', 'out', 'transfer']),
            'movement_date' => $this->faker->dateTimeThisYear(),
            'description' => $this->faker->sentence()
        ];
    }
}
