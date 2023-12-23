<?php

namespace App\Http\Controllers;

use App\Models\SeatAllocation;
use Illuminate\Http\Request;

class SeatAllocationController extends Controller
{
    public function index(){
        $seat = SeatAllocation::with('bus')->get();
        return $seat;
    }
}
