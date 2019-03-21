<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'imie', 'nazwisko', 'place_id', 'car_id'
    ];
    
    public function car()
    {
        return $this->belongsTo('App\Car');
    }
    
    public function detriments()
    {
        return $this->hasMany('App\Detriments');
    }
    
    public function place()
    {
        return $this->belongsTo('App\Place');
    }
}
