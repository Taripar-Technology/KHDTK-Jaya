<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Sensor model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sensorLogs()
{
    return $this->hasMany(SensorLog::class);
}
}
