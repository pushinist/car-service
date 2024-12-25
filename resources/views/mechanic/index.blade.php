@extends('layouts.main')
@section('content')
    @foreach($mechanics as $mechanic)
        <div>
            <a href="{{ route('mechanics.show', $mechanic->id) }}">{{ $mechanic->name }}</a>
        </div>
    @endforeach
@endsection
