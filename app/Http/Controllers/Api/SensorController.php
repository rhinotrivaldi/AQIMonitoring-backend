<?php

namespace App\Http\Controllers\Api;

use App\Models\Sensor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Auth\Events\Validated;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sensors = Sensor::all();

        return response()->json([
            "status" => "success",
            "message" => "data retrieved successfully",
            'data' => $sensors
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $locationId = $request->input('locationId');
        $location = Location::find($locationId);

        if (!$location) {
            return response()->json(['error' => 'Invalid LocationId'], 404);
        }

        $token = $request->input('token');

        if ($location->tokenhardware->token !== $token) {
            return response()->json(['error' => 'Invalid token for the specified location.'], 403);
        }

        $validatedData = $request->validate([
            'temp' => 'required',
            'temp_m' => 'required',
            'hum' => 'required',
            'co' => 'required',
            'so2' => 'required',
            'no2' => 'required',
            'pm01' => 'required',
            'pm25' => 'required',
            'pm25_m' => 'required',
            'pm10' => 'required',
            'pm10_m' => 'required'
        ]);

        $sensorData = [
            'location_id' => $locationId,
            'temp' => $validatedData['temp'],
            'temp_m' => $validatedData['temp_m'],
            'hum' => $validatedData['hum'],
            'co' => $validatedData['co'],
            'so2' => $validatedData['so2'],
            'no2' => $validatedData['no2'],
            'pm01' => $validatedData['pm01'],
            'pm25' => $validatedData['pm25'],
            'pm25_m' => $validatedData['pm25_m'],
            'pm10' => $validatedData['pm10'],
            'pm10_m' => $validatedData['pm10_m'],
        ];

        Sensor::create($sensorData);

        return response()->json(['success' => 'Sensor data stored successfully.'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sensor = Sensor::findOrFail($id);

        return response()->json([
            "status" => "success",
            "message" => "data retrieved successfully",
            'data' => $sensor
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
{
    $locationId = $request->input('locationId');
    $location = Location::find($locationId);

    if ($location) {
        $token = $request->input('token');

        if ($location->tokenhardware->token !== $token) {
            return response()->json(['error' => 'Invalid token for the specified location.'], 403);
        }
    }

    $validatedData = $request->validate([
        'temp' => 'required',
        'temp_m' => 'required',
        'hum' => 'required',
        'co' => 'nullable',
        'so2' => 'required',
        'no2' => 'required',
        'pm01' => 'required',
        'pm25' => 'required',
        'pm25_m' => 'required',
        'pm10' => 'required',
        'pm10_m' => 'required'
    ]);

    $latestSensor = Sensor::latest('id')->first();

    if ($latestSensor) {
        $updateData = array_filter($validatedData, function ($value) {
            return $value !== null;
        });

        $latestSensor->update($updateData);

        return response()->json(['success' => 'Sensor data updated successfully.'], 200);
    } else {
        return response()->json(['error' => 'No sensor data found.'], 404);
    }
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
