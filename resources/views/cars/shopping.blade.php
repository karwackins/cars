@extends('layouts.home')

@section('content')
<table class="table table-hover">
    <th>Data zakupu</th>
    <th>Produkt</th>
    <th>Kwota</th>
    @foreach($shoppings as $shopping)
    <tr>
        <td>{{ $shopping->data_zakupu }}</td>
        <td>{{ $shopping->produkt }}</td>
        <td>{{ $shopping->kwota }}</td>
    </tr>
    @endforeach
</table>
@endsection