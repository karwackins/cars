@extends('layouts.home_details')
@section('content')


{!! Form::model($car, ['route' => ['cars.update', $car], 'method' => 'PUT']) !!}
<table id="car_table" class="table table-hover table-bordered">
    <th>{{$car->marka .' '.$car->nr_rej }}</th>
        <tr><td>Marka</td><td>{!! Form::text('marka', $car->marka, ['class'=>'form-control']) !!}</td></tr>
        <tr><td>Nr rejestracyjny</td><td>{!! Form::text('nr_rej', $car->nr_rej, ['class'=>'form-control']) !!}</td></tr>
        <tr><td>Model</td><td>{!! Form::text('model', $car->model, ['class'=>'form-control']) !!}</td></tr>
        <tr><td>Rodzaj pojazdu</td><td>{!! Form::text('rodzaj', $car->rodzaj, ['class'=>'form-control']) !!}</td></tr>
        <tr><td>Liczba miejsc</td><td>{!! Form::text('liczba_miejsc', $car->liczba_miejsc, ['class'=>'form-control']) !!}</td></tr>
        <tr><td>Zabezpieczenia</td><td><input type="checkbox" id="inlineCheckbox1" name="zabezpieczenia[]" value="imobilaiser"> imobilaiser
                                        <input type="checkbox" id="inlineCheckbox2" name="zabezpieczenia[]" value="autoalarm"> autoalarm
                                        <input type="checkbox" id="inlineCheckbox3" name="zabezpieczenia[]" value="blokada"> blokada</td></tr>
        <tr><td>Nr Vin</td><td>{!! Form::text('nr_vin', $car->nr_vin, ['class'=>'form-control']) !!}</td></tr>
        <tr><td>Data ubezpieczenia</td><td></td></tr>
        <tr><td>Rok rodukcji</td><td>{!! Form::text('rok_prod', $car->rok_prod, ['class'=>'form-control']) !!}</td></tr>
        <tr><td>Rok zakupu</td><td>{!! Form::text('rok_zakupu', $car->rok_zakupu, ['class'=>'form-control']) !!}</td></tr>
        <tr><td>Pojemność</td><td>{!! Form::text('pojemnosc', $car->pojemnosc, ['class'=>'form-control']) !!}</td></tr>
        <tr><td>Data pierwszej rejestracji</td><td>{!! Form::date('data_pierw_rejestracji', $car->data_pierw_rejestracji, ['class'=>'form-control']) !!}</td></tr>
        <tr><td>Data przeglądu technicznego</td><td>{!! Form::date('data_przegladu_tech', $car->data_przegladu_tech, ['class'=>'form-control']) !!}</td></tr>
        <tr><td>Data przeglądu okresowego</td><td>{!! Form::date('data_przegladu_okres', $car->data_przegladu_okres, ['class'=>'form-control']) !!}</td></tr>
        <tr><td>Norma spalania - letnia</td><td>{!! Form::text('norma_letnia', $car->norma_letnia, ['class'=>'form-control']) !!}</td></tr>
        <tr><td>Norma spalania - zimowa</td><td>{!! Form::text('norma_zimowa', $car->norma_zimowa, ['class'=>'form-control']) !!}</td></tr>
        <tr><td>Miejsce użytkoania</td><td>{!! Form::select('place_id', $place, $car->place_id, ['class'=>'form-control']) !!}</td></tr>
</table>
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!}

 
 {{ Form::close() }}

@endsection    
