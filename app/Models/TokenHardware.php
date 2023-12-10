<?php

namespace App\Models;

use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TokenHardware extends Model
{
    use HasFactory;

    protected $table = 'token_hardware';

    protected $fillable = [
        'token',
    ];

    public function location() {
        return $this->belongsTo(Location::class);
    }
}
