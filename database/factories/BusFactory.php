<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bus>
 */
class BusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->randomElement(['Hanif Ac','Syamoli','Shohag Paribahan','Alhamra','Orin Travels','Janata Bus','Kyeya Paribahan','ALom Bus','Hanif Paribahan']),
            'registration_number'=>$this->faker->unique()->numerify('Bus-#####'),
        ];
    }
}