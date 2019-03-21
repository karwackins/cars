@extends('layouts.home_details')

@section('content')
<p><h1>Delegatury</h1></p>
<div class="row">
<div class="col-md-4">
    
</div>
<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            Edytuj delegature
        </div>
        <div class="card-body">
            {!! Form::model($place, ['route' => ['place.update', $place], 'method' => 'PUT']) !!}
            
            
            <div class="form-group">
            {!! Form::label('title', 'Nazwa skrótowa') !!}
            {!! Form::text('short',$place->short) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('title', 'Pełna nazwa') !!}
            {!! Form::text('fullName',$place->fullName) !!}
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