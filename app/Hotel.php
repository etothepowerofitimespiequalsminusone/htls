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
}
