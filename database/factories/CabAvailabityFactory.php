<?php

namespace Database\Factories;

use App\Models\Cab;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cabAvailabity>
 */
class CabAvailabityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cab_id' => function () {
                return  Cab::inRandomOrder()->first()->id;
            },
            'date' => Carbon::now()->format('Y-m-d'),
            'available' => fake()->boolean(),
        ];
    }
}
