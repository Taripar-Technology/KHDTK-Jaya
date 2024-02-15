<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalkulators extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // Tambahkan ini
        'komoditas',
        'varietas',
        'jarak',
        'luas',
        'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
