@extends('layouts.home_details')

@section('content')
<p><h1>Naprawy</h1></p>

<table class="table table-hover">
    <thead>
    <th>Data naprawy</th>
    <th>Przedmiot</th>
    <th>Koszt</th>
    <th>Samochód</th>
    <th>Stan licznika</th>
    <th>Wykonawca</th>
    <th>Opis</th>
    </thead>
    <tbody>
        <tr>
        <td>{{ $repair->data_naprawy }}</td>
        <td>{{ $repair->przedmiot }}</td>
        <td>{{ $repair->koszt }}</td>
        <td>{{ $repair->car->marka .' '.$repair->car->nr_rej }}</td>
        <td>{{ $repair->stan_licznika }}</td>
        <td>{{ $repair->wykonawca }}</td>
        <td>{{ $repair->description }}</td>
        <td><a class="btn btn-info" href="{{route('repair.edit', $repair)}}">Edytuj</a></td>
        <td><a class="btn btn-danger" href="{{route('repair.delete', $repair)}}">Usuń</a></td>
        <td><a class="btn btn-success" href="{{route('repairs.list')}}">Powrót</a></td> 
        </tr>
    <tbody>
</table>

@endsection