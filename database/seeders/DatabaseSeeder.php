<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bus;
use App\Models\Trip;
use App\Models\User;
use App\Models\Location;
use App\Models\SeatAllocation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Bus::factory(10)->create();
        Location::factory(10)->create();
        SeatAllocation::factory(10)->create();
        Trip::factory(10)->create();
        User::factory(10)->create();



   }
}