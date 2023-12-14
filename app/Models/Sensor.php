<?php

namespace App\Models;

use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sensor extends Model
{
    use HasFactory;

    protected $table = 'sensors';
    protected $fillable = [
        'location_id',
        'temp',
        'hum',
        'co',
        'so2',
        'no2',
        'pm01',
        'pm25',
        'pm10',
        'temp_c',
        'pm25_c',
        'pm10_c'
    ];

    public function location() {
        return $this->belongsTo('App\Models\Location');
    }
}
