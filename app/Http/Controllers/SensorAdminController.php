<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Sensor;
use App\Models\User;

class SensorAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
// SensorAdminController
public function index()
{
    $perPage = 10;

    // Ambil semua user yang memiliki sensor dengan jumlah sensor yang mereka miliki
    $users_with_sensors = User::withCount('sensors') // Ini akan menambahkan kolom `sensors_count` ke hasil
        ->has('sensors') // Pastikan user memiliki setidaknya satu sensor
        ->paginate($perPage);

    return view('admin.sensor-admin', compact('users_with_sensors'));
}


    

    public function destroy(string $id)
    {
        $sensor_admin = Sensor::findOrFail($id);
        $sensor_admin->delete();
        
        return redirect()->route('sensor_admin.index');
    }
    
public function show($userId)
{
    $user = User::with(['sensors.sensorLogs' => function ($query) {
        $query->orderBy('created_at', 'asc');
    }])->findOrFail($userId);

    $seriesData = $this->prepareSeriesDataForUser($user->sensors);

    // Tampilkan view dengan seriesData dan user
    return view('admin.show-sensors', compact('seriesData', 'user'));
}

private function prepareSeriesDataForUser($sensors)
{
    $chartData = [];
    $sensorCounter = 1;

    foreach ($sensors as $sensor) {
        foreach ($sensor->sensorLogs as $log) {
            $chartData['nitrogen'][$sensor->id][] = [$log->created_at->timestamp * 1000, $log->nitrogen];
            $chartData['kalium'][$sensor->id][] = [$log->created_at->timestamp * 1000, $log->kalium];
            $chartData['phosphorus'][$sensor->id][] = [$log->created_at->timestamp * 1000, $log->phosphorus];
            $chartData['temperature'][$sensor->id][] = [$log->created_at->timestamp * 1000, $log->temperature];
            $chartData['humidity'][$sensor->id][] = [$log->created_at->timestamp * 1000, $log->humidity];
            $chartData['ph'][$sensor->id][] = [$log->created_at->timestamp * 1000, $log->ph];
            $chartData['electrical_conductivity'][$sensor->id][] = [$log->created_at->timestamp * 1000, $log->electrical_conductivity];
        }

        // Setiap sensor akan diberi nama berurutan mulai dari 'Sensor 1'
        $sensorNames[$sensor->id] = 'Sensor ' . $sensorCounter;
        $sensorCounter++;
    }

    $seriesData = [];
    foreach ($chartData as $param => $sensorsData) {
        foreach ($sensorsData as $sensorId => $dataPoints) {
            $seriesData[$param][] = [
                'name' => $sensorNames[$sensorId],
                'data' => $dataPoints
            ];
        }
    }

    return $seriesData;
}
}
