@extends('layouts.home_details')

@section('content')

{!! Form::open(array('method' => 'Get', 'route' => array('detriment.search'))) !!}
<div class="row" style="width: 50%">
    <div class="col">
        <label><b>Samochód</b></label>
        <select class="form-control" name="nr_rej">
            <option></option>
            @foreach($cars as $value)
            <option>{{$value}}</option>
            @endforeach
        </select>
    </div>
 {!! Form::submit('Szukaj') !!}
  </div>



{!! Form::close() !!}
<br />
<h3>Moduł szkody</h3> <a class="btn btn-info" href="{{route('detriment.create')}}">Dodaj</a>

<table class="table table-hover">
    <thead>
        <th>Samochód</th>
        <th>Data szkody</th>
        <th>Opis</th>
        <th>Koszt naprawy</th>
        <th>Wina</th>
        <th>Kierowca</th>
    </thead>
    <tbody>
    @foreach($detriments as $detriment)
    <tr>
        <td>{{$detriment->car->marka.' '.$detriment->car->nr_rej}}</td>
        <td>{{$detriment->data_szkody}}</td>
        <td>{{$detriment->opis}}</td>
        <td>{{$detriment->koszt}}</td>
        <td>{{$detriment->wina}}</td>
        <td>{{$detriment->driver->imie.' '.$detriment->driver->nazwisko}}</td>
        <td></td>
        <td><a class="btn btn-info" href="{{route('detriment.edit', $detriment)}}">Edytuj</a></td>
        <td><a class="btn btn-danger" href="{{route('deriment.delete', $detriment)}}">Usuń</a></td>
    </tr>
    @endforeach
    
    </tbody>
</table>
{{ $detriments->render('pagination::bootstrap-4') }}


@endsection