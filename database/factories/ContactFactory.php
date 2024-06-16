<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'nim' => $this->faker->unique()->numerify('#######'),
            'type'=> $this->faker->randomElement(['Medis', 'Alkes']),
            'phone' => $this->faker->phoneNumber(),
            'line' => $this->faker->unique()->userName(),
            'organization' => $this->faker->company(),
            'title' => $this->faker->jobTitle(),
            'event_name' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'date' => $this->faker->date(),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time(),
            'location' => $this->faker->address(),
            'person' => $this->faker->numberBetween(1, 20),
            'note' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['Pending', 'On Progress', 'Completed', 'Canceled']),
        ];
    }
}
