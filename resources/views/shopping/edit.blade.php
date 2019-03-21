@extends('layouts.home_details')

@section('content')
<p><h1>Zakupy</h1></p>
{!! Form::model($shopping, ['route' => ['shopping.update', $shopping], 'method' => 'PUT']) !!}
<table class="table table-hover">
    <th>Data zakupu</th>
    <th>Produkt</th>
    <th>Kwota</th>
    <th>Stan licznika</th>
    <th>Opis</th>
    <th>Samochód</th>
        <tr>
        <td>{!! Form::date('data_zakupu', $shopping->data_zakupu, ['class'=>'form-control']) !!}</td>
        <td>{!! Form::text('produkt', $shopping->produkt, ['class'=>'form-control']) !!}</td>
        <td>{!! Form::text('kwota', $shopping->kwota, ['class'=>'form-control']) !!} </td>
        <td>{!! Form::text('stan_licznika', $shopping->stan_licznika, ['class'=>'form-control']) !!}</td>
        <td>{!! Form::text('description', $shopping->description, ['class'=>'form-control']) !!}</td>
        <td>{!! Form::select('car_id', $cars, $shopping->car->id, ['class'=>'form-control']) !!}</td>
      </tr>
</table>
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!} 

{{ Form::close() }}
@endsection