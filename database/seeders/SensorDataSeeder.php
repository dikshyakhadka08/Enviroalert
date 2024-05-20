<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SensorDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert rows of data into the 'sensor_data' table
        DB::table('sensor_data')->insert([
            // Row 1
            [
                'temperature' => rand(0, 100) / 10,
                'humidity' => rand(0, 100) / 10,
                'rain' => rand(0, 100) / 10,
                'water_level' => rand(0, 100) / 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Row 2
            [
                'temperature' => rand(0, 100) / 10,
                'humidity' => rand(0, 100) / 10,
                'rain' => rand(0, 100) / 10,
                'water_level' => rand(0, 100) / 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more rows as needed
            // Row 3
            [
                'temperature' => rand(0, 100) / 10,
                'humidity' => rand(0, 100) / 10,
                'rain' => rand(0, 100) / 10,
                'water_level' => rand(0, 100) / 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more rows as needed
            [
                'temperature' => rand(0, 100) / 10,
                'humidity' => rand(0, 100) / 10,
                'rain' => rand(0, 100) / 10,
                'water_level' => rand(0, 100) / 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'temperature' => rand(0, 100) / 10,
                'humidity' => rand(0, 100) / 10,
                'rain' => rand(0, 100) / 10,
                'water_level' => rand(0, 100) / 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'temperature' => rand(0, 100) / 10,
                'humidity' => rand(0, 100) / 10,
                'rain' => rand(0, 100) / 10,
                'water_level' => rand(0, 100) / 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
