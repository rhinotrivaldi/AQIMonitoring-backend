<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SensorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('index');
});

Route::get('/pos1', function(){
    return view('pos1');
});

Route::get('/lobby', function(){
    return view('lobby');
});

Route::get('/lobby', [SensorController::class, 'getDataSensorLobby']);
Route::get('/pos1', [SensorController::class, 'getDataSensorPos1']);

Route::get('{locationId}/temp', [SensorController::class,'temp']);
Route::get('{locationId}/hum', [SensorController::class,'hum']);
Route::get('{locationId}/co', [SensorController::class,'co']);
Route::get('{locationId}/so2', [SensorController::class,'so2']);
Route::get('{locationId}/no2', [SensorController::class,'no2']);
Route::get('{locationId}/pm25', [SensorController::class,'pm25']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
