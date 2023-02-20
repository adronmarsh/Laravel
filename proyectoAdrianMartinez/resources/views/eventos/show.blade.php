@extends('layout')

@section('title', $evento->name)

@section('content')
    <div class="container-eventos">
        <div class="botones-eventos">
            @if (Auth::check() && Auth::user()->rol == 'admin')
                <a href="{{ route('eventos.edit', $evento->id) }}">Modificar</a>
                <br>
                <form method="POST" action="{{ route('eventos.destroy', $evento->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="eliminar">Eliminar</button>
                </form>
            @endif
        </div>
        <h1>{{ $evento->name }}</h1>
        <p>{{ $evento->description }}</p>
        <p>{{ $evento->location }}</p>
        <p>{{ $evento->hour }}</p>
        <p>{{ $evento->date }}</p>
        <p>{{ $evento->tag }}</p>

    </div>
@endsection
