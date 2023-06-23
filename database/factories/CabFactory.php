<?php

namespace Database\Factories;

use App\Models\Admin;
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
            'brand' => $vehicle['brand'],
            'model' => $vehicle['model'],
            'vin' =>$this->faker->vin,
            'registration_no' =>  $this->faker->vehicleRegistration,
            'chassis_number' =>  str_replace(' ', '_', $this->faker->vehicleType),
            'no_of_seats' =>fake()->randomElement(['4', '5', '6']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
