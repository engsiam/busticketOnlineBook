<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bus_id' => $this->faker->numberBetween(1, 10),
            'departure_location_id' => $this->faker->numberBetween(1, 10),
            'arrival_location_id' => $this->faker->numberBetween(1, 10),
            'trip_date' => $this->faker->dateTimeBetween('now', '+1 week'),
            

        ];
    }
}