<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeatAllocation;
use Illuminate\Routing\Controller;


class SeatAllocationController extends Controller
{
    public function home(){
        $seat = SeatAllocation::with('trip')->get();
        return $seat;
    }
    public function singleId($id){
        $seat = SeatAllocation::with('trip')->find($id);
        return $seat;
    }
}