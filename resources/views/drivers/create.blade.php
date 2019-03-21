@extends('layouts.home_details')

@section('content')

<div class="row">
<div class="col-md-4">
    
</div>
<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            Dodaj kierowcę
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>'driver.store']) !!}
            @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="btn btn-danger" style="width: 100%; margin-top: 10px; margin-bottom: 10px;">{{ $error }}</div>
                @endforeach
            @endif
            
            <div class="form-group">
            {!! Form::label('title', 'Imię') !!}
            {!! Form::text('imie', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('title', 'Nazwisko') !!}
            {!! Form::text('nazwisko',null,['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('title', 'Samochód') !!}
            {!! Form::select('car_id', $cars, ['class' => 'form-control']) !!}
            </div>

            
            <div class="form-group">
            {!! Form::label('title', 'Delegatura') !!}
            {!! Form::select('place_id',$places,['class'=>'form-control']) !!}
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
