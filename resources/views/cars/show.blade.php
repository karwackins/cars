@extends('layouts.home_details')

@section('content')

<table id="car_table" class="table table-hover table-bordered">
    <thead>
        <th>{{$car->marka .' '.$car->nr_rej }}</th>
        <th><a class="btn btn-success" href="{{route('cars.edit', $car)}}">Edytuj</a></th>
    </thead>
    <tbody>
        <tr><td>Nr Vin</td><td>{{$car->nr_vin}}</td></tr>
        <tr><td>Model</td><td>{{$car->model}}</td></tr>
        <tr><td>Rodzaj pojazdu</td><td>{{$car->rodzaj}}</td></tr>
        <tr><td>Liczba miejsc</td><td>{{$car->liczba_miejsc}}</td></tr>
        <tr><td>Zabezpieczenia</td><td>{{$car->zabezpieczenia}}</td></tr>
        <tr><td>Data ubezpieczenia</td><td>{{$car->insurance->last()->ubezp_do}}</td><td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Informacje o ubezpieczeniu</a></td></tr>
        <tr><td>Rok rodukcji</td><td>{{$car->rok_prod}}</td></tr>
        <tr><td>Rok zakupu</td><td>{{$car->rok_zakupu}}</td></tr>
        <tr><td>Pojemność</td><td>{{$car->pojemnosc}}</td></tr>
        <tr><td>Data pierwszej rejestracji</td><td>{{$car->data_pierw_rejestracji}}</td></tr>
        <tr><td>Data przeglądu technicznego</td><td>{{$car->data_przegladu_tech}}</td></tr>
        <tr><td>Data przeglądu okresowego</td><td>{{$car->data_przegladu_okres}}</td></tr>
        <tr><td>Norma spalania - letnia</td><td>{{$car->norma_letnia}}</td></tr>
        <tr><td>Norma spalania - zimowa</td><td>{{$car->norma_zimowa}}</td></tr>
        <tr><td>Miejsce użytkowania</td><td>{{$car->place->fullName}}</td></tr>
    </tbody>
</table>
<h3>Zakupy</h3>
<table class="table table-hover">
    <thead class="table-primary">
        <th>Data zakupu</th>
        <th>Produkt</th>
        <th>Kwota</th>
        <th>Stan licznika</th>
        <th><a class="btn btn-primary" href="{{route('shopping.create')}}">Dodaj</a></th>
    </thead>
    <tbody>
        @foreach($car->shopping as $shopping)
        <tr>
                <td>{{ $shopping->data_zakupu }}</td>
                <td>{{ $shopping->produkt }}</td>
                <td>{{ $shopping->kwota }}</td>
                <td>{{ $shopping->stan_licznika }}</td>
            </tr>
        @endforeach
    <tbody>    
</table>

<h3>Naprawy</h3>
<table class="table table-hover">
    <thead class="table-primary">
        <th>Data naprawy</th>
        <th>Przedmiot</th>
        <th>Koszt</th>
        <th>Stan licznika</th>
        <th>Wykonawca</th>
        <th><a class="btn btn-primary" href="{{route('shopping.create')}}">Dodaj</a></th>
    </thead>
@foreach($car->repairs as $repair)
        <tr>
        <td>{{ $repair->data_naprawy }}</td>
        <td>{{ $repair->przedmiot }}</td>
        <td>{{ $repair->koszt }}</td>
        <td>{{ $repair->stan_licznika }}</td>
        <td>{{ $repair->wykonawca }}</td>
    </tr>
@endforeach
</table>
@endsection

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubezpieczenie {{$car->marka .' '.$car->nr_rej }} </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <table style="width:100%">
              <tbody>
                    <tr><td style="strong">Samochód: </td><td> {{$car->marka .' '.$car->nr_rej }}</td></tr>
                    <tr><td>Ubezpieczenie od: </td><td> {{$car->insurance->last()->ubezp_od}}</td></tr>
                    <tr><td>Ubezpieczenie do: </td><td> {{$car->insurance->last()->ubezp_do}}</td></tr>
                    <tr><td>Zakres: </td><td> {{$car->insurance->last()->zakres}}</td></tr>
                    <tr><td>Kwota: </td><td> {{$car->insurance->last()->koszt}}</td></tr>
                    <tr><td>Ubezpieczyciel</td><td> {{$car->insurance->last()->firma}}</td></tr>
                    <tr><td>Informacje dodatkowe</td><td> {{$car->insurance->last()->description}}</td></tr>
              </tbody>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
      </div>
    </div>
  </div>
</div>


<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>