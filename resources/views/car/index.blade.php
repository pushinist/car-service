@extends('layouts.main')
@section('content')
    @foreach($cars as $car)
        <div>
            <a href="{{ route('cars.show', $car->id) }}">{{ $car->make }}   {{ $car->model }}</a>
        </div>
    @endforeach
@endsection
