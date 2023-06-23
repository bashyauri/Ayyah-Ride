<?php

namespace Database\Seeders;

use App\Models\DriverDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriverDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DriverDetails::factory()->count(100)->create();
    }
}