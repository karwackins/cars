@extends('layouts.home')

@section('content')
<table class="table table-hover">
    @foreach($cars as $car)
    <tr>
        <td><a href='{{route('cars.show', $car)}}'>{{$car->marka}}<br />{{$car->nr_rej }}</a></td>
        
    </tr>
    @endforeach
</table>
<a class="btn btn-primary" href="{{route('cars.add')}}">Dodaj samochód</a>

@endsection

@section('content_shopping')
<table class="table table-hover">
    @foreach($shoppings as $shopping)
    <tr>
        
        <td>{{$shopping->data_zakupu}}</td>
        <td><a href='{{route('shopping.show', $shopping)}}'>{{$shopping->produkt}}</a></td>
        <td>{{$shopping->car->marka.' '.$shopping->car->nr_rej}}</td>
  
    </tr>
    @endforeach
</table>
<a class="btn btn-primary" href="{{route('shopping.create')}}">Dodaj zakup</a>

@endsection

@section('content_repair')
<table class="table table-hover">
    @foreach($repairs as $repair)
    <tr>
        
        <td>{{$repair->data_naprawy}}</td>
        <td><a href='{{route('repair.show', $repair)}}'>{{$repair->przedmiot}}</a></td>
        <td>{{$repair->car->marka.' '.$repair->car->nr_rej}}</td>
  
    </tr>
    @endforeach
</table>
<a class="btn btn-primary" href="{{route('repair.create')}}">Dodaj naprawę</a>

@endsection