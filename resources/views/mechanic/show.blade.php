@extends('layouts.main')
@section('content')
    <div>
        <p>Name: {{ $mechanic->name }}</p>
        <p>Spec: {{ $mechanic->phone }}</p>
        <p>Active orders: {{ $mechanic->amount_of_orders }}</p>
        <p>Start time: {{ $mechanic->start_time }}</p>
        <p>End time: {{ $mechanic->end_time }}</p>
        <br>
        <a href="{{ route('mechanics.index') }}"> Back</a>
    </div>
@endsection
