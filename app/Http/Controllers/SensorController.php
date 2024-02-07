<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sensor;
use App\Models\SensorLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SensorController extends Controller
{
    public function index()
    {
        Carbon::setLocale('id');
        date_default_timezone_set('Asia/Jakarta');
        $currentTime = Carbon::now();

        $latestEntries = SensorLog::select('sensor_id', DB::raw('MAX(updated_at) as last_update'))
        ->whereHas('sensor', function ($query) {
            $query->where('user_id', Auth::id());
        })
        ->groupBy('sensor_id')
        ->get()
        ->keyBy('sensor_id');


        $sensors = SensorLog::whereHas('sensor', function ($query) {
            $query->where('user_id', Auth::id());
        })
        ->orderBy('created_at', 'asc')
        ->get();

        $sensorStatus = [];

        foreach ($latestEntries as $sensor_id => $entry) {
            $lastUpdateTime = Carbon::parse($entry->last_update);
            $sensorStatus[$sensor_id] = $lastUpdateTime->diffInHours($currentTime) <= 3 ? 'active' : 'inactive';
        }

        $chartData = [];
        foreach ($sensors as $sensor) {
            $chartData['nitrogen'][$sensor->sensor_id][] = $sensor->nitrogen;
            $chartData['kalium'][$sensor->sensor_id][] = $sensor->kalium;
            $chartData['phosphorus'][$sensor->sensor_id][] = $sensor->phosphorus;
            $chartData['temperature'][$sensor->sensor_id][] = $sensor->temperature;
            $chartData['humidity'][$sensor->sensor_id][] = $sensor->humidity;
            $chartData['ph'][$sensor->sensor_id][] = $sensor->ph;
            $chartData['electrical_conductivity'][$sensor->sensor_id][] = $sensor->electrical_conductivity;
            $chartData['created_at'][$sensor->sensor_id][] = strtotime($sensor->created_at) * 1000;
        }

        $seriesData = [];
        foreach ($chartData as $param => $sensorData) {
            if ($param !== 'created_at') {
                foreach ($sensorData as $id => $data) {
                    $dataPoints = [];
                    foreach ($data as $index => $value) {
                        $timestamp = $chartData['created_at'][$id][$index];
                        $dataPoints[] = [$timestamp, $value];
                    }
                    $seriesData[$param][] = [
                        'name' => 'Sensor ' . $id,
                        'data' => $dataPoints,
                    ];
                }
            }
        }

        return view('sensor.index', compact('seriesData', 'sensorStatus'));
    }

    public function store(Request $request)
    {
        Sensor::create([
            'user_id' => Auth::id()
        ]);
        return redirect('/sensor');
    }
}
