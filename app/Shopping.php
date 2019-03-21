<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Shopping extends Model
{
    protected $fillable = [
    'data_zakupu', 'produkt', 'kwota', 'description','stan_licznika', 'car_id'
];
    
    public function car() {
    
        return $this->belongsTo('App\Car');
}
    
    public function shoppingSearch($nr_rej, $data_zakupu, $produkt) {
        $query = Shopping::query();
        if (isset($nr_rej))
        {
            $car = Car::where('nr_rej', $nr_rej)->first()->id;
            $query->where('car_id',$car);
        }
        if (isset($data_zakupu))
        {
            $query->where('data_zakupu', 'LIKE', $data_zakupu. '%');
        }
        if (isset($produkt))
        {
            $query->where('produkt', 'LIKE', '%' .$produkt. '%');
        }
        return $query->orderBy('data_zakupu', 'desc')->get();
    }
    
    public function getYear() {
        //$year = Shopping::pluck('data_zakupu')->year;	
        return $year = DB::table('shoppings')->selectRaw('distinct year(data_zakupu) as year')->get();
        //return $year = Shopping::select('distinct year(data_zakupu) as year')->get();
    }
    

}
