<?php

namespace Database\Seeders;


use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::factory()->count(100)->create();
        // $adminRecords = [
        //     [ 'name' => 'Bashar',
        //     'type' => 'admin',
        //     'mobile_no' =>'08038272560',
        //     'email' => 'basharu@ymail.com','password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        // 'status' => 1 ],


        // ];
        // Admin::insert($adminRecords);
    }
}