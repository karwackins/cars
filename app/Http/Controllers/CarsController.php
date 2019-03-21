<?php

namespace App\Http\Controllers;
 

use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Car;
use App\Shopping;
use App\Repair;
use App\Insurance;
use App\Place;

class CarsController extends Controller
{
    public function index(){
        $car = new Car();
        $cars = Car::all();
        $shoppings = Shopping::all()->sortByDesc('data_zakupu');
        $repairs = Repair::all()->sortByDesc('data_naprawy');
        $chkdate = $car->checkDate();
        return view('cars.list', compact('cars', 'shoppings', 'repairs', 'chkdate'));
       
    }
    
    public function add() {
        $places = Place::all();
        return view('cars.add', compact('places'));
        
    }
    
    public function save(CarRequest $request) {
        $car = new Car();
        $car->marka = $request->input('marka');
        $car->model = $request->input('model');
        $car->rodzaj = $request->input('rodzaj');
        $car->liczba_miejsc = $request->input('liczba_miejsc');
        $car->zabezpieczenia = implode(",", $request->get('zabezpieczenia'));
        $car->nr_rej = $request->input('nr_rej');
        $car->nr_vin = $request->input('nr_vin');
        $car->rok_prod = $request->input('rok_prod');
        $car->rok_zakupu = $request->input('rok_zakupu');
        $car->pojemnosc = $request->input('pojemnosc');
        $car->data_pierw_rejestracji = $request->input('data_pierw_rejestracji');
        $car->data_przegladu_tech = $request->input('data_przegladu_tech');
        $car->data_przegladu_okres = $request->input('data_przegladu_okres');
        $car->norma_letnia = $request->input('norma_letnia');
        $car->norma_zimowa = $request->input('norma_zimowa');
        $car->place_id = $request->input('place_id');            
        $car->save();
        return redirect()->route('insurance.create');
    }
    
    public function show(Car $car) {
        
       //$shoppings = Cars::find(1)->shopping;
        $insurances = new Insurance();
        $insurance = $insurances->insurancessForCar($car->id);
        return view('cars.show', compact('car', 'insurance'));
        
    }
    
    public function edit(Car $car) {
        $place = Place::pluck('short','id');
        $insurance = Insurance::all();
        return view('cars.edit', compact('car', 'place', 'insurance'));
    }
    
    public function update(Request $request, Car $car) {
        //$car->update($request->all());
        
        $car->update([
        'marka' => $request->get('marka'),
        'model' => $request->get('model'),
        'rodzaj' => $request->get('rodzaj'),
        'liczba_miejsc' => $request->get('liczba_miejsc'),
        'nr_rej' => $request->get('nr_rej'),
        'nr_vin' => $request->get('nr_vin'),
        'data_ubezp' => $request->get('data_ubezp'),
        'rok_prod' => $request->get('rok_prod'),
        'rok_zakupu' => $request->get('rok_zakupu'),
        'pojemnosc' => $request->get('pojemnosc'),
        'zabezpieczenia' => implode(",", $request->get('zabezpieczenia')),
        'data_pierw_rejestracji' => $request->get('data_pierw_rejestracji'),
        'data_przegladu_tech' => $request->get('data_przegladu_tech'),
        'data_przegladu_okres' => $request->get('data_przegladu_okres'),
        'norma_letnia' => $request->get('norma_letnia'),
        'norma_zimowa' => $request->get('norma_zimowa'),
        'place_id' => $request->get('place_id')    
        ]);
        return redirect()->route('cars.show', $car);
    }
    /*
    public function shopping() {
        $shoppings = \App\Shopping::all();
        return view('cars.shopping', compact('shoppings'));
    }
    */ 
}
