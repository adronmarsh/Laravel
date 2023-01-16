@extends('layout')

@section('title', 'Primos')

@section('content')
    @foreach ($primos as $primo)
        {{ $primo }}
        @if (!$loop->last)
            -
        @endif
    @endforeach
@endsection
