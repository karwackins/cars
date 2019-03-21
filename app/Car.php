<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Car extends Model
{
    public function shopping() {
       //return $this->hasMany(Shopping::class);
       return $this->hasMany('App\Shopping');
    }
    
    public function repairs() {
        //return $this->hasMany('Repairs');
        //return $this->hasMany(Repairs::class);
        return $this->hasMany('App\Repair');
    }
    
    public function insurance() {
        return $this->hasMany('App\Insurance');
        //return $this->hasMany(Insurance::class);
    }
    
    public function detriments() {
        //return $this->hasMany(Detriments::class);
        return $this->hasMany('App\Detriments');
    }
    
    public function driver()
    {
        return $this->hasOne('App\Driver');
    }
    
    public function place()
    {
        return $this->belongsTo('App\Place');
    }
    
    public function checkDate() {
        //$today = Date();
       // $query = Cars::query();
        
        return $comm = DB::table('cars')
               ->join('insurances', 'insurances.car_id', '=', 'cars.id')
                ->selectRaw(' `marka`, `nr_rej`, DATEDIFF(`ubezp_do`, CURDATE()) as uIloscDni, DATEDIFF(`data_przegladu_tech`, CURDATE()) as ptIloscDni, DATEDIFF(`data_przegladu_okres`, CURDATE()) as poIloscDni')
                ->whereRaw("(DATEDIFF(`ubezp_do`, CURDATE())) > 0 OR (DATEDIFF(`data_przegladu_tech`, CURDATE())) < 60 OR (DATEDIFF(`data_przegladu_okres`, CURDATE())) < 60")
                ->get();     
    }
    
//    
//    public function test()
//    {     
//    $comm = DB::table('cars')->selectRaw(' `marka`, `nr_rej`, DATEDIFF(`ubezp_do`, CURDATE()) as uIloscDni, insurances.id')
//                ->join('insurances', 'insurances.cars_id', '=', 'cars.id')
//                //->whereRaw('DATEDIFF(`data_ubezp`, CURDATE())','=11')
//                ->whereRaw("(DATEDIFF(`ubezp_do`, CURDATE())) < 60")
//                ->get();
//        return $comm;
//
//    }
    protected $fillable = [
    'marka', 'nr_rej', 'nr_vin', 'rok_prod', 'rok_zakupu', 'pojemnosc', 'data_pierw_rejestracji',
    'data_przegladu_tech', 'data_przegladu_okres', 'norma_letnia', 'norma_zimowa', 'model', 'liczba_miejsc', 'rodzaj', 'zabezpieczenia', 'place_id'    
];
}

