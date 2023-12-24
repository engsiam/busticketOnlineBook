<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Trip;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\SeatAllocation;

class TripController extends Controller
{
    public function index(){
        $trips = Trip::get();
        $buses = Bus::get();
        $locations = Location::get();
        $seats = SeatAllocation::get();
        return view('trip.index',compact('trips','buses','locations','seats'));
    }
    // TripController.php

public function store(Request $request)
{
    // Validate the form data
    $request->validate([
        'bus_id' => 'required',
        'departure_location_id' => 'required',
        'arrival_location_id' => 'required',
        'seat_number' => 'required|numeric|min:1|max:36',
        // Add other validation rules as needed
    ]);

    // Create a new trip
    Trip::create($request->all());

    // Redirect to the index page or show a success message
    return redirect()->route('trips.index')->with('success', 'Trip created successfully!');
}

}