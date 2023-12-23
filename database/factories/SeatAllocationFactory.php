<?php

namespace Database\Factories;

use App\Models\Trip;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SeatAllocation>
 */
class SeatAllocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Get random trip and user IDs
        $user = User::inRandomOrder()->first() ?? User::factory()->create();
        $trip = Trip::inRandomOrder()->first() ?? Trip::factory()->create();
        // Generate seat numbers from 1 to 36
        $seatNumber ='#Seat'. $this->faker->numberBetween(1, 36);
        return [
            'trip_id' => $trip,
            'user_id' => $user,
            'seat_number' => $seatNumber
        ];
    }
}
