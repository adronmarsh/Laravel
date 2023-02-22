@extends('layout')

@section('title', $evento->name)

@section('content')
    <div class="container-eventos">
        <div class="botones-eventos">
            @if (Auth::check() && Auth::user()->rol == 'admin')
                <a class="modificar" href="{{ route('eventos.edit', $evento->id) }}">Modificar</a>
                <br>
                <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="eliminar">Eliminar</button>
                </form>
                <form action="{{ route('eventos.visible', $evento->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="visible" value="{{ $evento->visible }}">
                    <button class="mostrar-ocultar" type="submit">
                        @if ($evento->visible)
                            Ocultar
                        @else
                            Mostrar
                        @endif
                    </button>
                </form>


            @endif
        </div>
        <h1>{{ $evento->name }}</h1>
        <p>{{ $evento->description }}</p>
        <p>{{ $evento->location }}</p>
        <p>{{ $evento->hour }}</p>
        <p>{{ $evento->date }}</p>
        <p>{{ $evento->tag }}</p>
        <form action="{{ route('eventos.apuntados', $evento) }}" method="POST">
            @csrf
            @method('PUT')
            <button class="boton-evento" type="submit">
                @if ($evento->miembros->contains(Auth::user()))
                    Abandonar
                @else
                    Unirse
                @endif
            </button>
        </form>
        <hr>
        <h2>Apuntados</h2>
        Total de apuntados: {{ $evento->miembros->count() }}
        <div class="apuntados">
            @foreach ($evento->miembros as $usuario)
                <div class="profile">
                    @auth
                        <a href="{{ route('miembros.show', $usuario->id) }}">
                        @endauth
                        @if (File::exists(public_path('/storage/avatars/avatar' . $usuario->id . '.png')))
                            <img class="profile-picture"
                                src="{{ asset('storage/avatars/avatar' . $usuario->id . '.png') }}"
                                alt="Foto de {{ $usuario->name }}">
                        @else
                            <img class="profile-picture" src="/storage/avatars/default.png" alt="foto">
                        @endif
                        {{ $usuario->name }}
                        @auth
                        </a>
                    @endauth
                </div>
            @endforeach
        </div>
    </div>
@endsection
