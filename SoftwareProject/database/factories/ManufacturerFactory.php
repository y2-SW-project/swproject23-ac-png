<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manufacturer>
 */
class ManufacturerFactory extends Factory
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
            'name' => $this->faker->company(),
            'address' => $this->faker->address(),
            'email' => $this->faker->email(),
            'phone_number' => $this->faker->phoneNumber(),
            'created_at' => $this->faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
            'updated_at' => $this->faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now')
        ];
    }
}
