<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    public function user(){
        return $this->belongsTo('App/User');
    }

    public function roomBooking(){
        return $this->hasMany('App/RoomBooking');
    }

    public function hotel(){
        return $this->belongsTo('App/Hotel');
    }
}
