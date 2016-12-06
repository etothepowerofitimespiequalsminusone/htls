<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name', 'description', 'stars', 'price_single', 'price_double', 'price_triple'
    ];
    public function city() { 
        return $this->belongsTo('App\City');
    }

    public function images() {
        return array(
            'server_path' => public_path().'/uploads/',
            'asset_path' => 'uploads/',
            'image_small' => 'small_'.$this->id.'.jpg',
            'image_large' => 'large_'.$this->id.'.jpg',
        );
    }
    public function booking(){
        return $this->hasMany('App/Booking');
    }
}
