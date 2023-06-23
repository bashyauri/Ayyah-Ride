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
        $adminRecords = [
            ['id' => 2, 'name' => 'Bashar',
            'type' => 'admin',
            'email' => 'basharu@ymail.com','password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'status' => 1 ],


        ];
        Admin::insert($adminRecords);
    }
}