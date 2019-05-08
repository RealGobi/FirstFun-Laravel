@extends('plants.layout')

@section('main')

{!! Form::open(['route' => 'plants.store']) !!}
 
            <div class="form-group">
                {!! Form::label('name', 'Namn på planta?') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
 
    
 
            {!! Form::submit('Lägg till planta.', ['class' => 'btn btn-info']) !!}
 
            {!! Form::close() !!}


            <!-- Felhantering -->
            @if(count($errors) > 0) 
            <h3>Fel</h3>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
            @endif

@endsection