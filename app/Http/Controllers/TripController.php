<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index(){
        $trips = Trip::with('bus')->with('departureLocation')->with('arrivalLocation')->get();
        return $trips;
    }
}