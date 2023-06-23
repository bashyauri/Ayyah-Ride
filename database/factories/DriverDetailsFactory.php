<?php

namespace Database\Factories;

use App\Models\Admin;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DriverDetails>
 */
class DriverDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $adminIds = Admin::pluck('id')->toArray();
        return [
            'admin_id' => fake()->randomElement($adminIds),
            'driver_license_no' =>fake()->numerify('######'),
            'plate_no' => fake()->regexify('[A-Z]{3}-\d{3}-[A-Z]{2}'),
            'no_of_seats' => fake()->numberBetween(1, 10),
            'bvn_no' => fake()->numerify('##########'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}