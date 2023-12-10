<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use App\Models\Location;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function getDataSensorLobby()
    {
        $sensors = Sensor::where('location_id', '1')->with('location')
        ->orderBy('id', 'desc')
        ->get();
        $nsensors = $sensors->toArray();

        return view('lobby', ['sensors'=> $nsensors]);
    }

    public function getDataSensorPos1()
    {
        $sensors = Sensor::where('location_id', '2')->with('location')
        ->orderBy('id', 'desc')
        ->get();
        $nsensors = $sensors->toArray();

        return view('pos1', ['sensors'=> $nsensors]);
    }
    public function temp($locationId) {

        $location = Location::findOrFail($locationId);
        $sensors = Sensor::where('location_id', $location['id'])->with('location')
        ->orderBy('id', 'desc')
        ->get();
        $sensors = $sensors->toArray();
        if ($sensors) {
            $nsensor = $sensors[0]['temp'];
            return view('sensors.temp', ['nsensor' => $nsensor]);
        }  
    }

    public function hum($locationId) {

        $location = Location::findOrFail($locationId);
        $sensors = Sensor::where('location_id', $location['id'])->with('location')
        ->orderBy('id', 'desc')
        ->get();
        $sensors = $sensors->toArray();
        if ($sensors) {
            $nsensor = $sensors[0]['hum'];
            return view('sensors.hum', ['nsensor' => $nsensor]);
        } 
    }

    public function co($locationId) {

        $location = Location::findOrFail($locationId);
        $sensors = Sensor::where('location_id', $location['id'])->with('location')
        ->orderBy('id', 'desc')
        ->get();
        $sensors = $sensors->toArray();
        if ($sensors) {
            $nsensor = $sensors[0]['co'];
            return view('sensors.co', ['nsensor' => $nsensor]);
        } 
    }

    public function so2($locationId) {

        $location = Location::findOrFail($locationId);
        $sensors = Sensor::where('location_id', $location['id'])->with('location')
        ->orderBy('id', 'desc')
        ->get();
        $sensors = $sensors->toArray();
        if ($sensors) {
            $nsensor = $sensors[0]['so2'];
            return view('sensors.so2', ['nsensor' => $nsensor]);
        } 
    }

    public function no2($locationId) {
        
        $location = Location::findOrFail($locationId);
        $sensors = Sensor::where('location_id', $location['id'])->with('location')
        ->orderBy('id', 'desc')
        ->get();
        $sensors = $sensors->toArray();
        if ($sensors) {
            $nsensor = $sensors[0]['no2'];
            return view('sensors.no2', ['nsensor' => $nsensor]);
        } 
    }

    public function pm25($locationId) {
        
        $location = Location::findOrFail($locationId);
        $sensors = Sensor::where('location_id', $location['id'])->with('location')
        ->orderBy('id', 'desc')
        ->get();
        $sensors = $sensors->toArray();
        if ($sensors) {
            $nsensor = $sensors[0]['pm25'];
            return view('sensors.pm25', ['nsensor' => $nsensor]);
        } 
    }
}
