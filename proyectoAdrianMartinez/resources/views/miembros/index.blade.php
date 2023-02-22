@extends('layout')

@section('title', 'Miembros')

@section('content')
    <div class="miembros-container">
        <h2>Miembros</h2>
        @if ($usuarios->isEmpty())
            <div>No hay miembros que mostrar</div>
        @else
            <div class="users">
                @foreach ($usuarios as $usuario)
                    <div class="profile">
                        @auth
                            <a href="{{ route('miembros.show', $usuario->id) }}">
                            @endauth
                            @if (File::exists(public_path('/storage/avatars/avatar' . $usuario->id . '.png')))
                                <img class="profile-picture" src="{{ asset('storage/avatars/avatar' . $usuario->id . '.png') }}"
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
        @endif
    </div>
@endsection
