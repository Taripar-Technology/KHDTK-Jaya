<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;
<<<<<<< Updated upstream

    protected $guarded = ['id'];

    // Sensor model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
=======
>>>>>>> Stashed changes
}
