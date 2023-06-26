<?php

namespace Database\Factories;

use App\Models\Cab;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CabSchedule>
 */
class CabScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $cities = ['Kebbi', 'Sokoto','Abuja', 'Zamfara', 'Kano', 'Kaduna', 'Katsina', 'Jigawa'];
    public function definition(): array
    {
        $departures = $this->faker->randomElement($this->cities);
        $destination = $this->faker->randomElement(array_diff($this->cities, [$departures]));
        return [
            'cab_id' => function () {
                return  Cab::inRandomOrder()->first()->id;
            },
            'date' => Carbon::now()->addDays(rand(1, 5))->format('Y-m-d'),
            'city' => $departures,
            'destination' => $destination,
            'amount' => fake()->numberBetween(3000,1000),
            'time' => $this->faker->time('H:i:s'),
        ];
    }
}