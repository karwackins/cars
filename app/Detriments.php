<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detriments extends Model
{
        protected $fillable = [
        'data_szkody', 'opis', 'koszt', 'driver_id', 'car_id', 'wina'
    ];
        
     public function car() {
        return $this->belongsTo('App\Car');
      
    } 
    
    public function driver()
    {
        return $this->belongsTo('App\Driver');
    }
}
