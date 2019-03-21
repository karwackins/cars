@extends('layouts.home_details')

@section('content')

{!! Form::open(array('method' => 'Get', 'route' => array('shopping.search'))) !!}
  <div class="row">
      <div class="col-6 col-md-4">Samochód</div>
      <div class="col-6 col-md-1">Rok</div>
      <div class="col-6 col-md-6">Produkt</div>
      <div class="col-6 col-md-1"></div>
       <div class="w-100 d-none d-md-block"></div>
    <div class="col-6 col-md-4">
        <select class="form-control" name="nr_rej">
            <option></option>
            @foreach($cars as $value)
            <option>{{$value}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-6 col-md-1">
    <select class="form-control" name="data_zakupu">
        <option></option>
        @foreach($year as $value)
        <option value="{{$value->year}}">{{$value->year}}</option>
        @endforeach
    </select>
    </div>
      
    <div class="col-6 col-md-6">
      {!! Form::text('produkt', null, ['class'=>'form-control']) !!}
    </div>
      <div class="col-6 col-md-1">  
      {!! Form::submit('Szukaj', ['class'=>'btn btn-primary']) !!}
    </div>
  </div>



{!! Form::close() !!}
<br />
<h3>Moduł zakupy</h3>

<table class="table table-hover">
    <thead>
        <th>Data zakupu</th>
        <th>Data Produkt</th>
        <th>Kwota</th>
        <th>Opis</th>
        <th>Samochód</th>
    </thead>
    <tbody>
    @foreach($zakupy as $shopping)
    <tr>
        <td>{{$shopping->data_zakupu}}</td>
        <td><a href='{{route('shopping.show', $shopping)}}'>{{$shopping->produkt}}</a></td>
        <td>{{$shopping->kwota}}</td>
        <td>{{$shopping->description}}</td>
        <td>{{$shopping->car->marka.' '.$shopping->car->nr_rej}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
{{ $zakupy->render('pagination::bootstrap-4') }}

@endsection
