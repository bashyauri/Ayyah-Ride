<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\DriverDetails;
use Faker\Provider\Fakecar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cab>
 */
class CabFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new Fakecar($this->faker));
        $vehicle = $this->faker->vehicleArray();
        return [
            'driver_details_id' =>  function () {
                return  DriverDetails::inRandomOrder()->first()->id;
            },
            'brand' => $vehicle['brand'],
            'model' => $vehicle['model'],
            'vin' =>$this->faker->vin,
            'registration_no' =>  $this->faker->vehicleRegistration,
            'chassis_number' =>  str_replace(' ', '_', $this->faker->vehicleType),
            'no_of_seats' =>fake()->randomElement(['7', '8', '10']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}