@extends('layout')

@section('title', 'Miembro')

@section('content')

    <div class="container-cuenta">
        @auth
            <div class="info-cuenta">
                <h2>{{ $usuario->name }}</h2>
                <p>Fecha de nacimiento: {{ $usuario->birthday }}</p> <br>
                <p>Twitter: {{ $usuario->twitter }}</p> <br>
                <p>Instagram: {{ $usuario->instagram }}</p> <br>
                <p>Twitch: {{ $usuario->twitch }}</p> <br>
                <p>Cuenta creada en: {{ $usuario->created_at }}</p> <br>
            </div>
            @if (File::exists(public_path('/storage/avatars/avatar' . $usuario->id . '.png')))
                <img class="foto-cuenta" src="{{ asset('storage/avatars/avatar' . $usuario->id . '.png') }}"
                    alt="Foto de {{ $usuario->name }}">
            @else
                <img class="foto-cuenta" src="/storage/avatars/default.png" alt="foto">
            @endif
        @else
            <p>¡Vaya! ¡No deberías estar aquí! Inicia sesión para poder acceder a la información.</p>
        @endauth
    </div>

@endsection
