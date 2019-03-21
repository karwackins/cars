@extends('layouts.home_details')

@section('content')
<p><h1>Ubezpieczenia</h1></p>
<div class="row">
<div class="col-md-4">
    
</div>
<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            Edytuj ubezpieczenie
        </div>
        <div class="card-body">
            {!! Form::model($insurance, ['route' => ['insurance.update', $insurance], 'method' => 'PUT']) !!}
            
            <div class="form-group">
            {!! Form::label('title', 'Samochód') !!}
            {!! Form::select('car_id', $cars, $insurance->car_id) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('title', 'Ubezpieczenie od') !!}
            {!! Form::date('ubezp_od',$insurance->ubezp_od) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('title', 'Ubezpieczenie do') !!}
            {!! Form::date('ubezp_do',$insurance->ubezp_do) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('title', 'Zakres ubezpieczenia: ') !!}
            {!! Form::label('title', 'OC') !!}
            {!! Form::checkbox('zakres[]', 'OC', true)!!}
            {!! Form::label('title', 'AC') !!}
            {!! Form::checkbox('zakres[]', 'AC')!!}
            {!! Form::label('title', 'NNW') !!}
            {!! Form::checkbox('zakres[]', 'NNW')!!}
            </div>


            <div class="form-group">
            {!! Form::label('title', 'Kwota') !!}
            {!! Form::text('koszt',$insurance->koszt,['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('title', 'Ubezpieczyciel') !!}
            {!! Form::text('firma',$insurance->firma,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('title', 'Stan licznika') !!}
            {!! Form::text('stan_licznika',$insurance->stan_licznika,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('title', 'Dodatkowe informacje') !!}
            {!! Form::textarea('description',$insurance->description, ['class' => 'form-control']) !!}
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