<?php

namespace Database\Seeders;

use App\Models\SensorLog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SensorLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SensorLog::create([
            'sensor_id' => 1,
            'nitrogen' => 200,
            'kalium' => 300,
            'phosphorus' => 200,
            'temperature' => 30,
            'humidity' => 100,
            'ph' => 8,
            'electrical_conductivity' => 100
        ]);
        
        SensorLog::create([
            'sensor_id' => 2,
            'nitrogen' => 200,
            'kalium' => 300,
            'phosphorus' => 200,
            'temperature' => 30,
            'humidity' => 100,
            'ph' => 8,
            'electrical_conductivity' => 100
        ]);

        SensorLog::create([
            'sensor_id' => 1,
            'nitrogen' => 300,
            'kalium' => 450,
            'phosphorus' => 200,
            'temperature' => 20,
            'humidity' => 150,
            'ph' => 9,
            'electrical_conductivity' => 150
        ]);
        
        SensorLog::create([
            'sensor_id' => 2,
            'nitrogen' => 280,
            'kalium' => 340,
            'phosphorus' => 210,
            'temperature' => 24,
            'humidity' => 150,
            'ph' => 9,
            'electrical_conductivity' => 160
        ]);
        
        SensorLog::create([
            'sensor_id' => 3,
            'nitrogen' => 500,
            'kalium' => 500,
            'phosphorus' => 500,
            'temperature' => 35,
            'humidity' => 60,
            'ph' => 7,
            'electrical_conductivity' => 100
        ]);
    }
}
