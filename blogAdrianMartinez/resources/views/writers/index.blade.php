@extends('layout')

@section('title', 'Writers')

@section('content')
    <h1>Lista de writers</h1>
    <ul>
        @forelse($writers as $writer)
            <li><a href="writers/{{$writer->id}}">{{ $writer->nick }}</a></li>
        @empty
        @endforelse
    </ul>
@endsection
