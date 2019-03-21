@extends('layouts.home_details')

@section('content')
<p><h1>Kierowcy</h1></p>
<div class="row">
<div class="col-md-4">
    
</div>
<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            Edytuj szkodę
        </div>
        <div class="card-body">
            {!! Form::model($detriment, ['route' => ['detriment.update', $detriment], 'method' => 'PUT']) !!}
            
            
            <div class="form-group">
            {!! Form::label('title', 'Samochód') !!}
            {!! Form::select('cars_id',$cars, $detriment->car_id,['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('title', 'Data szkody') !!}
            {!! Form::date('data_szkody', $detriment->data_szkody,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('title', 'Opis szkody') !!}
            {!! Form::textarea('opis', $detriment->opis, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('title', 'Koszt') !!}
            {!! Form::text('koszt',$detriment->koszt,['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('title', 'Wina') !!}
            {!! Form::select('wina',['obcy' => 'obcy', 'własna' => 'własna'], $detriment->wina ,['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('title', 'Kierowca biorący udział') !!}
            {!! Form::select('driver_id',$drivers, $detriment->driver_id ,['class'=>'form-control']) !!}
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