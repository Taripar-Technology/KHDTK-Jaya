<?php

namespace Database\Seeders;

use App\Models\Sensor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sensor::create([
            'user_id' => 1,
        ]);
        
        Sensor::create([
            'user_id' => 2,
        ]);
        
        Sensor::create([
            'user_id' => 2,
        ]);
    }
}
