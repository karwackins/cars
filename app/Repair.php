<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Repair extends Model
{
    protected $fillable = [
        'data_naprawy', 'przedmiot', 'koszt', 'wykonawca', 'stan_licznika', 'description', 'car_id'
    ];
    public function car() {
        return $this->belongsTo('App\Car');
    }
    
    
    public function repairSearch($nr_rej, $data_naprawy, $przedmiot) {
    //$param = 'SK 603FJ';
    $query = Repair::query();
    if (isset($nr_rej))
    {
        $car = Car::where('nr_rej', $nr_rej)->first()->id;
        $query->where('car_id',$car);
    }
    if (isset($data_naprawy))
    {
        $query->where('data_naprawy', 'LIKE', $data_naprawy. '%');
    }
    if (isset($przedmiot))
    {
        $query->where('przedmiot', 'LIKE', '%' .$przedmiot. '%');
    }
    //return Shopping::where('cars_id',$car)->where('data_zakupu', $data_zakupu)->get();
    return $query->orderBy('data_naprawy', 'desc')->get();
    }
    
    public function getYear() {
    //$year = Shopping::pluck('data_zakupu')->year;	
    return $year = DB::table('repairs')->selectRaw('distinct year(data_naprawy) as year')->get();
    //return $year = Shopping::select('distinct year(data_zakupu) as year')->get();
    }
}


