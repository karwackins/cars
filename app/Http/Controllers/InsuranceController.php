<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InsuranceRequest;
use App\Insurance;
use App\Car;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insurance = Insurance::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::pluck('nr_rej', 'id');
        return view('insurance.create', compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsuranceRequest $request)
    {
        $insurance = new Insurance();
        //Insurance::create($request->all());
            $insurance->ubezp_od = $request->input('ubezp_od');
            $insurance->ubezp_do = $request->input('ubezp_do');
            $insurance->zakres = implode(",", $request->get('zakres'));
            $insurance->koszt = $request->input('koszt');
            $insurance->firma = $request->input('firma');
            $insurance->car_id = $request->input('car_id');
            $insurance->stan_licznika = $request->input('stan_licznika');
            $insurance->description = $request->input('description');
            $insurance->save();
            return redirect()->route('index');
    }
    
    public function showList() {
        $ubezp = Insurance::orderBy('ubezp_od', 'desc')->paginate(5);
        $rok = new Insurance();
        $year = $rok->getYear();
        $cars = Car::pluck('nr_rej', 'id');
        return view('insurance.list', compact('ubezp', 'year', 'cars'));
        //dd($year);
    }
    
        public function search(Request $request)
    {
        $insurance = new Insurance();
        $nr = $request->nr_rej;
        $ubezp = $insurance->insuranseSearch($request->nr_rej);
        return view('insurance.list_det', compact('ubezp', 'request'));
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
    public function edit(Insurance $insurance)
    {
        $cars = Car::pluck('nr_rej', 'id');
        return view('insurance.edit', compact('insurance', 'cars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Insurance $insurance)
    {
        $insurance->update([
            'ubezp_od' => $request->get('ubezp_od'),
            'ubezp_do' => $request->get('ubezp_do'),
            'zakres' => implode(",", $request->get('zakres')),
            'koszt' => $request->get('koszt'),
            'firma' => $request->get('firma'),
            'car_id' => $request->get('car_id'),
            'stan_licznika' => $request->get('stan_licznika'),
            'description' => $request->get('description')
        ]);
        return redirect()->route('insurance.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {


    }
}
