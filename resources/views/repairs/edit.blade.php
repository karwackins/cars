@extends('layouts.home_details')

@section('content')
<p><h1>Naprawy</h1></p>
{!! Form::model($repair, ['route' => ['repair.update', $repair], 'method' => 'PUT']) !!}
<table class="table table-hover">
    <th>Data naprawy</th>
    <th>Przedmiot</th>
    <th>Koszt</th>
    <th>Wykonawca</th>
    <th>Stan licznika</th>
    <th>Opis</th>
        <tr>
        <td>{!! Form::date('data_naprawy', $repair->data_naprawy, ['class'=>'form-control']) !!}</td>
        <td>{!! Form::textarea('przedmiot', $repair->przedmiot, ['class'=>'form-control']) !!}</td>
        <td>{!! Form::text('koszt', $repair->koszt, ['class'=>'form-control']) !!} </td>
        <td>{!! Form::text('wykonawca', $repair->wykonawca, ['class'=>'form-control']) !!}</td>
        <td>{!! Form::text('stan_licznika', $repair->stan_licznika, ['class'=>'form-control']) !!}</td>
        <td>{!! Form::textarea('description', $repair->description, ['class'=>'form-control']) !!}</td>       
    </tr>
</table>
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!} 

{{ Form::close() }}
@endsection