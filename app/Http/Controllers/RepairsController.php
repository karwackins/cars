<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Repair;
use App\Http\Requests\RepairRequest;

class RepairsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repairs = Repair::all();
        $cars = Car::all();
    }
    
    public function showList() {
    $naprawy = Repair::orderBy('data_naprawy', 'desc')->paginate(5);;
    $rok = new Repair();
    $year = $rok->getYear();
    $cars = Car::pluck('nr_rej', 'id');
    return view('repairs.list', compact('naprawy', 'year', 'cars'));
    //dd($year);
    }
    
    public function search(Request $request)
    {
    $repair = new Repair();
    $nr = $request->nr_rej;
    $cos = $repair->repairSearch($request->nr_rej, $request->data_naprawy, $request->przedmiot);
    $kwota = 0;
    foreach ($cos as $value) {
        $kwota = $kwota + $value->koszt;
    }
    return view('repairs.list_det', compact('cos', 'nr', 'kwota', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::pluck('nr_rej', 'id');
        return view('repairs.create', compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RepairRequest $request)
    {
        $repairs = new Repair();
        
        Repair::create($request->all());
        return redirect('/');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Repair $repair)
    {
        return view('repairs.show', compact('repair'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Repair $repair)
    {
        return view('repairs.edit', compact('repair'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Repair $repair)
    {
       $repair->update($request->all());
        return redirect()->route('repair.show', $repair);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repair $repair)
    {
        $repair->delete();
        return redirect('/');
    }
}
