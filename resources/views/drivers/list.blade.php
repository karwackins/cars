@extends('layouts.home_details')

@section('content')

<h3>Moduł kierowcy</h3> <a class="btn btn-info" href="{{route('driver.create')}}">Dodaj</a>

<table class="table table-hover">
    <thead>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Samochód</th>
        <th>Delegatura</th>
    </thead>
    <tbody>
        @foreach($drivers as $driver)
            <tr>
                <td>{{$driver->imie}}</td>
                <td>{{$driver->nazwisko}}</td>
                <td>{{$driver->car->marka.' '.$driver->car->nr_rej}}</td>
                <td>{{$driver->place->fullName}}</td>
                <td><a class="btn btn-info" href="{{route('driver.edit', $driver)}}">Edytuj</a></td>
                <td><a class="btn btn-danger" href="{{route('driver.delete', $driver)}}">Usuń</a></td>
            </tr>    
        @endforeach
    
    </tbody>
</table>


@endsection