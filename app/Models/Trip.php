<?php

namespace App\Models;

use App\Models\Bus;
use App\Models\Location;
use App\Models\SeatAllocation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'bus_id',
        'departure_location_id',
        'arrival_location_id',
        'trip_date'
    ];
    public function bus(){
        return $this->belongsTo(Bus::class);
    }
    public function departureLocation(){
        return $this->belongsTo(Location::class, 'departure_location_id');
    }
    public function arrivalLocation(){
        return $this->belongsTo(Location::class, 'arrival_location_id');
    }
    public function seatAllocations(){
        return $this->hasMany(SeatAllocation::class);

    }



}
