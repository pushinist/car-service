@extends('layouts.main')
@section('content')
    <div>
        <p><a href="{{ route('cars.show', $order->car->id) }}">Car: {{ $order->car->make . $order->car->model}}</a></p>
        <p><a href="{{ route('clients.show', $order->client->id) }}">Client: {{ $order->client->name }}</a></p>
        @if($order->mechanic != null)
            <p>
                <a href="{{ route('mechanics.show', $order->mechanic->id) }}">Mechanic: {{ $order->mechanic->name }}</a>
                @endif
            </p>
            <p>Created: {{ $order->creation_time }}</p>
            <p>Planned to be
                completed: {{ $order->planned_completion_time }}</p>
            @if(!is_null($order->real_completion_time))
                <p>Completed: {{ $order->real_completion_time }}</p>
            @endif
            <p>Status: {{ $order->status }}</p>
            <p>Description: {{ $order->description }}</p>
            <p>Cost: {{ $order->cost }}</p>
            <p>Work to do: {{ $order->work_to_do }}</p>
            <p>Needed parts: @foreach($order->parts as $part)
                    {{$part->name}},
                @endforeach</p>

            <p>Changelog: @foreach($order->audits as $audit)
                <p>Old: {{ json_encode($audit->old_values) }}, New: {{ json_encode($audit->new_values) }}</p>
                @endforeach</p>

                <br>
                <a href="{{ route('orders.edit', $order->id) }}">Edit</a>
                <br>
                <a href="{{ route('orders.index') }}">Back</a>
    </div>
@endsection
