<?php

namespace Database\Factories;

use App\Models\Child;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SafetyInfo>
 */
class SafetyInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'height' => $this->faker->randomFloat(2, 1, 2),
            'weight' => $this->faker->randomFloat(2, 50, 100),
            'heart_rate' => $this->faker->numberBetween(60, 100),
            'blood_type' => $this->faker->randomElement(['A', 'B', 'AB', 'O']),
            'diseases' => $this->faker->sentence,
            'allergies' => $this->faker->sentence,
            'child_id' => Child::factory(),
        ];
    }
}
