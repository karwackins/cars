@extends('layouts.home_details')

@section('content')

<h3>Naprawy wg: {{$request->nr_rej}} {{$request->data_naprawy}} {{$request->przedmiot}}</h3>

<table class="table table-hover">
    <thead>
        <th>Data naprawy</th>
        <th>Przedmiot</th>
        <th>Kwota</th>
        <th>Opis</th>
        <th>Samochód</th>
    </thead>
    <tbody>
    @foreach($cos as $repair)
    <tr>
        <td>{{$repair->data_naprawy}}</td>
        <td>{{$repair->przedmiot}}</td>
        <td>{{$repair->koszt}}</td>
        <td>{{$repair->description}}</td>
        <td>{{$repair->car->marka.' '.$repair->car->nr_rej}}</td>
        <td><a class="btn btn-info" href="{{route('repair.edit', $repair)}}">Edytuj</a></td>
        <td><a class="btn btn-danger" href="{{route('repair.delete', $repair)}}">Usuń</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
<h4>Łączny koszt: {{$kwota}} zł</h4>
   {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!} 
@endsection