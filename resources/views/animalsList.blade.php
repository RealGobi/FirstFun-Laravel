@extends('animals')

@section('main')
                <div>
                    @if (count($animals) > 0)
                        @foreach ($animals as $animal)
                            <p>This is {{ $animal->name }}</p>
                        @endforeach
                    @endif
                </div>
@endsection