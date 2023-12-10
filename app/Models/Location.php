<?php

namespace App\Models;

use App\Models\Sensor;
use App\Models\TokenHardware;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';

    protected $fillable = [
        'location',
        'coordinate',
    ];

    public function sensor() {
        return $this->hasOne(Sensor::class);
    }

    public function tokenhardware() {
        return $this->hasOne(Tokenhardware::class);
    }
}
