@extends('layouts.main')
@section('content')
    @foreach($orders as $order)
        <div>
            <a href="{{ route('orders.show', $order->id) }}">Заказ №{{ $order->id }},
                машина: {{ $order->car->make . $order->car->model }}, владелец: {{ $order->client->name }},
                механик: {{ $order->mechanic?->name }}</a>
        </div>
    @endforeach
@endsection
