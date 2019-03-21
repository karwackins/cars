@extends('layouts.home_details')

@section('content')
<p><h1>Zakupy</h1></p>

<table class="table table-hover">
    <th>Data zakupu</th>
    <th>Produkt</th>
    <th>Kwota</th>
    <th>Samochód</th>
    <th>Stan licznika</th>
    <th>Opis</th>
        <tr>
        <td>{{ $shopping->data_zakupu }}</td>
        <td>{{ $shopping->produkt }}</td>
        <td>{{ $shopping->kwota }}</td>
        <td>{{ $shopping->car->marka .' '.$shopping->car->nr_rej }}</td>
        <td>{{ $shopping->stan_licznika }}</td>
        <td>{{ $shopping->description }}</td>
        <td><a class="btn btn-info" href="{{route('shopping.edit', $shopping)}}">Edytuj</a></td>
        <td><a class="btn btn-danger" href="{{route('shopping.delete', $shopping)}}">Usuń</a></td>
        <td><a class="btn btn-success" href="{{route('shopping.list')}}">Powrót</a></td>
    </tr>
</table>

@endsection