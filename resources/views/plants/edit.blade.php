@extends('plants.layout')

@section('main')

{!! Form::open(['route' => ['plants.update', $plant->plant_id], 'method' => 'post']) !!}
{{method_field('patch')}}
@csrf
 
            <div class="form-group">
                {!! Form::label('name', 'Namn på planta?') !!}
                {!! Form::text('name', $plant->name, ['class' => 'form-control']) !!}
            </div>
 
    
 
            {!! Form::submit('Uppdatera planta.', ['class' => 'btn btn-info']) !!}
 
            {!! Form::close() !!}

@endsection