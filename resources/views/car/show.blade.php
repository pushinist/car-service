@extends('layouts.main')
@section('content')
    <div>
        <p>Make: {{ $car->make }}</p>
        <p>Model: {{ $car->model }}</p>
        <p>Year: {{ $car->year }}</p>
        <p>VIN: {{ $car->VIN }}</p>
        <p>Govern number: {{ $car->govern_number }}</p>
        <p>Mileage: {{ $car->mileage }}</p>
        <a href="{{ route('clients.show', $car->client->id) }}">Owner: {{ $car->client->name }}</a>
        <br>
        <a href="{{ route('cars.edit', $car->id) }}">Change client</a>
        <br>
        <a href="{{ route('cars.index') }}"> Back</a>

    </div>
@endsection
