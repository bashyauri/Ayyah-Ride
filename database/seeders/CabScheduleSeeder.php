<?php

namespace Database\Seeders;

use App\Models\CabSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CabScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CabSchedule::factory()->count(100)->create();
    }
}