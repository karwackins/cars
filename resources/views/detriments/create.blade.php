@extends('layouts.home_details')

@section('content')

<div class="row">
<div class="col-md-4">
    
</div>
<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            Dodaj szkodę
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>'detriment.store']) !!}
            
            @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="btn btn-danger" style="width: 100%; margin-top: 10px; margin-bottom: 10px;">{{ $error }}</div>
                @endforeach
            @endif
            
            <div class="form-group">
            {!! Form::label('title', 'Samochód') !!}
            {!! Form::select('car_id', $cars, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('title', 'Data szkody') !!}
            {!! Form::date('data_szkody', \Carbon\Carbon::now()) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('title', 'Opis szkody') !!}
            {!! Form::textarea('opis', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('title', 'Koszt') !!}
            {!! Form::text('koszt',null,['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('title', 'Wina') !!}
            {!! Form::select('wina',['obcy' => 'obcy', 'własna' => 'własna'],['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('title', 'Kierowca biorący udział') !!}
            {!! Form::select('driver_id',$drivers,['class'=>'form-control']) !!}
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
