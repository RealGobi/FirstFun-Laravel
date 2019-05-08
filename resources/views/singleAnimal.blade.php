@extends('animals')

@section('main')

<div>
    <h1>{{ $animal -> name }}</h1>
    <p>{{ $animal -> species }}</p>
</div>

@endsection