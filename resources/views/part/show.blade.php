@extends('layouts.main')
@section('content')
    <div>
        <p>Part: {{ $part->name }}</p>
        <p>Price: {{ $part->price }}</p>
        <br>
        <a href="{{ route('parts.index') }}"> Back</a>
    </div>
@endsection

