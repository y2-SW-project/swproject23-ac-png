<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diet>
 */
class DietFactory extends Factory
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
            'name' => $this->faker->word(),
            'description' => $this->faker->text(1000),
            'created_at' => $this->faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
            'updated_at' => $this->faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now')
        ];
    }
}
