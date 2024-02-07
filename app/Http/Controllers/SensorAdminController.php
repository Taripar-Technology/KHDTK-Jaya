<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Sensor;

class SensorAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Define how many items you want per page
        $perPage = 10; // Or any other number
    
        $sensor_admin = Sensor::with('user')
            ->where('user_id', auth()->id())
            ->paginate($perPage);
    
        return view('admin/sensor-admin', compact('sensor_admin'));
    }
    

    public function destroy(string $id)
    {
        $sensor_admin = Sensor::findOrFail($id);
        $sensor_admin->delete();
        
        return redirect()->route('Sensor');
    }
    
    public function show($id){
        $sensor_admin = Sensor::findOrFail($id);
        return view('sensor/index', compact('sensor_admin'));

    }


}
