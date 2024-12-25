@extends('layouts.main')
@section('content')
    <div>
        <p>Name: {{ $client->name }}</p>
        <p>Phone: {{ $client->phone }}</p>
        <p>Email: {{ $client->name }}</p>
        <p>Registered at: {{ $client->registered_at }}</p>
        <div>Cars: @foreach($client->cars as $car)
                <a href="{{ route('cars.show', $car->id) }}">{{ $car->make }}   {{ $car->model }}, </a>
            @endforeach
        </div>
        <div>Maintain history: @foreach($client->orders as $order)
                <div>
                    <a href="{{ route('orders.show', $order->id) }}">Заказ №{{ $order->id }},
                        машина: {{ $order->car->make . $order->car->model }}, владелец: {{ $order->client->name }},
                        механик: {{ $order->mechanic->name }}</a>
                </div>
            @endforeach</div>
        <br>
        <a href="{{ route('clients.index') }}"> Back</a>
    </div>
@endsection
