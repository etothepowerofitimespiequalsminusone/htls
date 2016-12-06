<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomBooking extends Model
{
    public function roomBooking(){
        return $this->belongsTo('App/Booking');
    }

}
