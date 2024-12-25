@extends('layouts.main')
@section('content')
    @foreach($clients as $client)
        <div>
            <a href="{{ route('clients.show', $client->id) }}">{{ $client->name }}</a>
        </div>
    @endforeach
@endsection
