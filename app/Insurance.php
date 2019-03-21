<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Insurance extends Model
{
     protected $fillable = [
        'ubezp_od', 'ubezp_do', 'koszt', 'firma', 'zakres', 'stan_licznika', 'description', 'car_id'
    ];
    
        public function car() {
        return $this->belongsTo('App\Car');
    }
    
        public function getYear() {
        //$year = Shopping::pluck('data_zakupu')->year;	
        return $year = DB::table('insurances')->selectRaw('distinct year(ubezp_od) as year')->get();
        //return $year = Shopping::select('distinct year(data_zakupu) as year')->get();
    }
    
        public function insurancessForCar() {
        //return Cars::where('id', $this->cars_id)->first();
            return Insurance::orderBy('ubezp_od', 'DESC')->first();
    }
    
    
        public function insuranseSearch($nr_rej) {
        $query = Insurance::query();
        if (isset($nr_rej))
        {
            $car = Car::where('nr_rej', $nr_rej)->first()->id;
            $query->where('car_id',$car);
        }
        //return Shopping::where('cars_id',$car)->where('data_zakupu', $data_zakupu)->get();
        return $query->orderBy('ubezp_od', 'desc')->get();
    }
    
}
