<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DetrimentRequest;
use App\Car;
use App\Detriments;
use App\Driver;

class DetrimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::pluck('nr_rej', 'id');
        $detriments = Detriments::orderBy('data_szkody','desc')->paginate(5);
        return view('detriments.list', compact('detriments', 'cars'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::pluck('nr_rej', 'id');
        $drivers = Driver::pluck('nazwisko', 'id');
        return view('detriments.create', compact('cars', 'drivers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DetrimentRequest $request)
    {
        $detriment = new Detriments();
        Detriments::create($request->all());
        return redirect('/detriment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Detriments $detriment)
    {
        $cars = Car::pluck('nr_rej', 'id');
        $drivers = Driver::pluck('nazwisko', 'id');
        return view('detriments.edit', compact('detriment', 'drivers', 'cars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detriments $detriment)
    {
        $detriment->update($request->all());
        return redirect()->route('detriment.list');
    }
    
    
    public function search(Request $request)
    {
//        $insurance = new Insurance();
//        $nr = $request->nr_rej;
//        $ubezp = $insurance->insuranseSearch($request->nr_rej);
//        return view('insurance.list_det', compact('ubezp', 'request'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detriments $detriment)
    {
        $detriment->delete();
        return redirect('/detriment');
    }
}
