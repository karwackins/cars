@extends('layouts.home_details')

@section('content')
<p><h1>Kierowcy</h1></p>
<div class="row">
<div class="col-md-4">
    
</div>
<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            Edytuj kierowcę
        </div>
        <div class="card-body">
            {!! Form::model($driver, ['route' => ['driver.update', $driver], 'method' => 'PUT']) !!}
            
            
            <div class="form-group">
            {!! Form::label('title', 'Imię') !!}
            {!! Form::text('imie',$driver->imie) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('title', 'Nazwisko') !!}
            {!! Form::text('nazwisko',$driver->nazwisko) !!}
            </div>

            <div class="form-group">
            {!! Form::label('title', 'Samochód') !!}
            {!! Form::select('car_id', $cars, $driver->car_id ,['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('title', 'Delegatura') !!}
            {!! Form::select('place_id', $places, $driver->place_id,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
            {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<div class="col-md-4">
    
</div>
</div>

@endsection