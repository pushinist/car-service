@extends('layouts.main')
@section('content')
    @foreach($parts as $part)
        <p><a href="{{ route('parts.show', $part->id) }}"> {{ $part->name }}</a></p>
    @endforeach
@endsection
