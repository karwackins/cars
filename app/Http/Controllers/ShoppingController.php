<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ShoppingRequest;
use App\Shopping;
use App\Car;

class ShoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //$cars = Cars::all();
         $shoppings = Shopping::all();
         return view('cars.list', compact('shoppings'));
    }
    
    public function showList() {
        $zakupy = Shopping::orderBy('data_zakupu', 'desc')->paginate(5);
        $rok = new Shopping();
        $year = $rok->getYear();
        $cars = Car::pluck('nr_rej', 'id');
        return view('shopping.list', compact('zakupy', 'year', 'cars'));
        //dd($year);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::pluck('nr_rej', 'id');
        return view('shopping.create', compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShoppingRequest $request)
    {
        $shopping = new Shopping();
        
        Shopping::create($request->all());
        return redirect('/');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shooping $shoppings
     * @return \Illuminate\Http\Response
     */
    public function show(Shopping $shopping)
    {   
        
        return view('shopping.show', compact('shopping'));
    }
    
    public function search(Request $request)
    {
        $shopping = new Shopping();
        $nr = $request->nr_rej;
        $cos = $shopping->shoppingSearch($request->nr_rej, $request->data_zakupu, $request->produkt);
        $kwota = 0;
        foreach ($cos as $value) {
            $kwota = $kwota + $value->kwota;
        }
        return view('shopping.list_det', compact('cos', 'nr', 'kwota', 'request'));
    }
    
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Shopping $shopping)
    {
        $cars = Car::pluck('nr_rej', 'marka', 'id');
        return view('shopping.edit', compact('shopping', 'cars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shopping $shopping )
    {
        $shopping->update($request->all());
        //return redirect()->route('shopping.show', $shopping);
        return redirect()->route('shopping.show', $shopping);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shopping $shopping)
    {
        $shopping->delete();
        return redirect('/');
    }
}
