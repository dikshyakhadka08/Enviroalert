<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnviroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      // Insert rows of data into the 'enviro' table
      DB::table('enviro')->insert([
        // Row 1
        [
            'year' => '2014',
            'death' => '300',
            'floodNo' => '1',
            'rainlvl' => '365',
            'region' => 'Jhapa',
            'floodtimes' => '5',
            'district' => 'Jhapa',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'year' => '2015',
            'death' => '200',
            'floodNo' => '9',
            'rainlvl' => '132',
            'region' => 'Morang',
            'floodtimes' => '8',
            'district' => 'Morang',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'year' => '2016',
            'death' => '98',
            'floodNo' => '6',
            'rainlvl' => '3200',
            'region' => 'Sunsari',
            'floodtimes' => '12',
            'district' => 'Sunsari',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'year' => '2017',
            'death' => '160',
            'floodNo' => '8',
            'rainlvl' => '160',
            'region' => 'Saptari',
            'floodtimes' => '6',
            'district' => 'Saptari',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'year' => '2018',
            'death' => '150',
            'floodNo' => '4',
            'rainlvl' => '325',
            'region' => 'Udayapur',
            'floodtimes' => '5',
            'district' => 'Udayapur',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'year' => '2019',
            'death' => '100',
            'floodNo' => '7',
            'rainlvl' => '261',
            'region' => 'Siraha',
            'floodtimes' => '8',
            'district' => 'Siraha',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'year' => '2020',
            'death' => '300',
            'floodNo' => '11',
            'rainlvl' => '254',
            'region' => 'Dhanusha',
            'floodtimes' => '8',
            'district' => 'Dhanusha',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'year' => '2021',
            'death' => '150',
            'floodNo' => '9',
            'rainlvl' => '139',
            'region' => 'Mahottari',
            'floodtimes' => '5',
            'district' => 'Mahottari',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'year' => '2022',
            'death' => '100',
            'floodNo' => '4',
            'rainlvl' => '130',
            'region' => 'Bara',
            'floodtimes' => '10',
            'district' => 'Bara',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'year' => '2023',
            'death' => '61',
            'floodNo' => '4',
            'rainlvl' => '1402',
            'region' => 'Parsa',
            'floodtimes' => '11',
            'district' => 'Parsa',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
