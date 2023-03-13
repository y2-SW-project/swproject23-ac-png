<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            'name' => $this->faker->word,
            'description' => $this->faker->text(50),
            // 'diet' => $this->faker->word,
            'price' => $this->faker->randomDigit(),
            'created_at' => $this->faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
            'updated_at' => $this->faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now')
        ];
    }
}
