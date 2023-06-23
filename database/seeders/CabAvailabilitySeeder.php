<?php

namespace Database\Seeders;

use App\Models\CabAvailabity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CabAvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CabAvailabity::factory()->count(100)->create();
    }
}