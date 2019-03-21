@extends('layouts.home_details')

@section('content')

<h3>Ubezpieczenia wg. {{$request->nr_rej}}</h3>

<table class="table table-hover">
    <thead>
        <th>Samochód</th>
        <th>Ubezpieczenie od</th>
        <th>Ubezpieczenie do</th>
        <th>Zakres</th>
        <th>Kwota</th>
        <th>Ubezpieczyciel</th>
    </thead>
    <tbody>
    @foreach($ubezp as $insurance)
    <tr>
        <td>{{$insurance->car->marka .' '.$insurance->car->nr_rej}}</td>
        <td>{{$insurance->ubezp_od}}</td>
        <td>{{$insurance->ubezp_do}}</td>
        <td>{{$insurance->zakres}}</td>
        <td>{{$insurance->koszt}}</td>
        <td>{{$insurance->firma}}</td>
    </tr>
    @endforeach
    
    </tbody>
</table>

   {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!} 
@endsection