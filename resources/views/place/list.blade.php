@extends('layouts.home_details')

@section('content')

<h3>Moduł delegatura</h3> <a class="btn btn-info" href="{{route('place.create')}}">Dodaj</a>

<table class="table table-hover">
    <thead>
        <th>Nazwa skrótowa</th>
        <th>Pełna nazwa</th>
    </thead>
    <tbody>
        @foreach($places as $place)
            <tr>
                <td>{{$place->short}}</td>
                <td>{{$place->fullName}}</td>
                <td><a class="btn btn-info" href="{{route('place.edit', $place)}}">Edytuj</a></td>
                <td><a class="btn btn-danger" href="{{route('place.delete', $place)}}">Usuń</a></td>
            </tr>    
        @endforeach
    
    </tbody>
</table>


@endsection