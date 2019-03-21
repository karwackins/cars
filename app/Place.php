<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
        'short', 'fullName'
    ];
    
    public function car()
    {
        return $this->hasMany('App\Car');
    }
    
    public function driver() 
    {
        return $this->hasMany('App\Driver');
    }
}
