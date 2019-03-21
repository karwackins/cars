@extends('layouts.home_details')

@section('content')

<div class="row">
<div class="col-md-4">
    
</div>
<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            Dodaj zakup
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>'shopping.store']) !!}
            @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="btn btn-danger" style="width: 100%; margin-top: 10px; margin-bottom: 10px;">{{ $error }}</div>
                @endforeach
            @endif
            <div class="form-group">
            {!! Form::label('title', 'Data zakupu') !!}
            {!! Form::date('data_zakupu', \Carbon\Carbon::now()) !!}
            </div>

            <div class="form-group">
            {!! Form::label('title', 'Produkt') !!}
            {!! Form::text('produkt',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('title', 'Kwota') !!}
            {!! Form::text('kwota',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('title', 'Stan licznika') !!}
            {!! Form::text('stan_licznika',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('title', 'Samochód') !!}
            {!! Form::select('car_id', $cars, ['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
            {!! Form::label('title', 'Dodatkowe informacje') !!}
            {!! Form::textarea('description',null, ['class' => 'form-control']) !!}
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
