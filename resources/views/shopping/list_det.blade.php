@extends('layouts.home_details')

@section('content')

<h3>Zakupy wg. {{$request->nr_rej}} {{$request->data_zakupu}} {{$request->produkt}}</h3>

<table class="table table-hover">
    <thead>
        <th>Data zakupu</th>
        <th>Produkt</th>
        <th>Kwota</th>
        <th>Opis</th>
        <th>Samochód</th>
    </thead>
    <tbody>
    @foreach($cos as $shopping)
    <tr>
        <td>{{$shopping->data_zakupu}}</td>
        <td>{{$shopping->produkt}}</td>
        <td>{{$shopping->kwota}}</td>
        <td>{{$shopping->description}}</td>
        <td>{{$shopping->car->marka.' '.$shopping->car->nr_rej}}</td>
        <td><a class="btn btn-info" href="{{route('shopping.edit', $shopping)}}">Edytuj</a></td>
        <td><a class="btn btn-danger" href="{{route('shopping.delete', $shopping)}}">Usuń</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
<h4>Łączna kwota: {{$kwota}} zł</h4>
   {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!} 
@endsection