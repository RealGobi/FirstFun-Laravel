

@extends('plants.layout')
​
@section('main')
​
  <div>
    @foreach ($plants as $plant)
      <li>{{$plant->name}}</li>
      {!! Form::open(['route' => ['plants.destroy', $plant->plant_id], 'method' => 'post']) !!}
      {{ method_field('DELETE') }}
      @csrf
      <div>
        <input type="submit" value="Delete">
      </div>
​
      {!! Form::close()!!}
    @endforeach
  </div>
​
​
@endsection