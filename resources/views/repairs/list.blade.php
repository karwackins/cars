@extends('layouts.home_details')

@section('content')

{!! Form::open(array('method' => 'Get', 'route' => array('repair.search'))) !!}
  <div class="row">
    <div class="col">
        <label><b>Samochód</b></label>
        <select class="form-control" name="nr_rej">
            <option></option>
            @foreach($cars as $value)
            <option>{{$value}}</option>
            @endforeach
        </select>
    </div>
<div class="form-group">
     <label><b>Rok</b></label>
    <select class="form-control" name="data_naprawy">
        <option></option>
        @foreach($year as $value)
        <option value="{{$value->year}}">{{$value->year}}</option>
        @endforeach
    </select>
            </div>
    <div class="col">
        <label><b>Przedmiot naprawy</b></label>
      {!! Form::text('przedmiot', null, ['class'=>'form-control']) !!}
    </div>
      {!! Form::submit('Szukaj', ['class'=>'btn btn-primary']) !!}
  </div>



{!! Form::close() !!}
<br />
<h3>Moduł naprawy</h3>

<table class="table table-hover">
    <thead>
        <th>Data naprawy</th>
        <th>Przedmiot</th>
        <th>Kost</th>
        <th>Opis</th>
        <th>Samochód</th>
    </thead>
    <tbody>
    @foreach($naprawy as $repair)
    <tr>
        <td>{{$repair->data_naprawy}}</td>
        <td><a href='{{route('repair.show', $repair)}}'>{{$repair->przedmiot}}</a></td>
        <td>{{$repair->koszt}}</td>
        <td>{{$repair->description}}</td>
        <td>{{$repair->car->marka.' '.$repair->car->nr_rej}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
{{ $naprawy->render('pagination::bootstrap-4') }}

@endsection