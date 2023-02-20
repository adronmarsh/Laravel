@extends('layout')

@section('title', 'Eventos')

@section('content')
    <div class="container-eventos">
        @if ($eventos->isEmpty())
            <div>No hay eventos que mostrar</div>
        @else
            <h2>Eventos disponibles</h2>
            @foreach ($eventos as $evento)
                @if ($evento->visible !== 0)
                    <a class="eventos-link" href="{{ route('eventos.show', $evento->id) }}">
                        <div class="evento">
                            <h3>{{ $evento->name }}</h3>
                            <p>{{ $evento->location }}</p>
                            <p>{{ $evento->date }}</p>
                            <p>{{ $evento->hour }}</p>
                            <a href="">Apúntame</a>
                        </div>
                    </a>
                @endif
            @endforeach
            <hr>
            <h2>Eventos no visibles</h2>
            @foreach ($eventos as $evento)
                @if ($evento->visible == 0)
                    <a class="eventos-link" href="{{ route('eventos.show', $evento->id) }}">
                        <div class="evento novisible">
                            <h3>{{ $evento->name }}</h3>
                            <p>{{ $evento->location }}</p>
                            <p>{{ $evento->date }}</p>
                            <p>{{ $evento->hour }}</p>
                            <a href="">Apúntame</a>
                        </div>
                    </a>
                @endif
            @endforeach
        @endif
    </div>
@endsection
