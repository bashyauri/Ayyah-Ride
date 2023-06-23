<?php

namespace Database\Seeders;

use App\Models\Cab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cab::factory()->count(100)->create();
    }
}