<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index(){
        $buses = Bus::with('trips')->get();
        // Log::info($buses->trips);
        //dd($buses);
     return $buses;
    }
}