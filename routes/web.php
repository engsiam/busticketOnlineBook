<?php

use App\Models\SeatAllocation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\SeatAllocationController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buses',[BusController::class,'index']);
Route::get('/tip',[TripController::class,'index']);
Route::get('/seat', [SeatAllocationController::class, 'home']);
Route::get('/seat/{trip_id}', [SeatAllocationController::class, 'singleId']);