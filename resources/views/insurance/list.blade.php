@extends('layouts.home_details')

@section('content')

{!! Form::open(array('method' => 'Get', 'route' => array('insurance.search'))) !!}
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
<h3>Moduł ubezpieczenia</h3>

<table class="table table-hover">
    <thead>
        <th>Samochód</th>
        <th>Ubezpieczenie od</th>
        <th>Ubezpieczenie do</th>
        <th>Zakres</th>
        <th>Kwota</th>
        <th>Ubezpieczyciel</th>
        <th>Opis</th>
    </thead>
    <tbody>
    @foreach($ubezp as $insurance)
    <tr>
        <td>{{$insurance->car->marka .' '.$insurance->car->nr_rej}}</td>
        <td>{{$insurance->ubezp_od}}</td>
        <td>{{$insurance->ubezp_do}}</td>
        <td>{{$insurance->zakres}}</td>
        <td>{{$insurance->koszt}}</td>
        <td>{{$insurance->firma}}</td>
        <td>{{$insurance->description}}</td>
        <td><a class="btn btn-info" href="{{route('insurance.edit', $insurance)}}">Edytuj</a></td>
    </tr>
    @endforeach
    
    </tbody>
</table>
{{ $ubezp->render('pagination::bootstrap-4') }}

@endsection