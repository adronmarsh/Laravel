@extends('layout')

@section('title', 'Acount')

@section('content')
<div class="container-cuenta">
    <div class="info-cuenta">
        <h2>Mi Cuenta <a href="{{ route('miembros.edit', $usuario->id) }}">&#9999;</a></h2>
        <p>Nombre: {{ $usuario->name }}</p> <br>
        <p>Correo: {{ $usuario->email }}</p> <br>
        <p>Fecha de nacimiento: {{$usuario->birthday}}</p> <br>
        <p>Rol: {{$usuario->rol}}</p> <br>
        <p>Twitter: {{$usuario->twitter}}</p> <br>
        <p>Instagram: {{$usuario->instagram}}</p> <br>
        <p>Twitch: {{$usuario->twitch}}</p> <br>
        <p>Cuenta creada en: {{$usuario->created_at}}</p> <br>
    </div>
    <img class="foto-cuenta" src="{{ asset('storage/avatars/avatar' . $usuario->id . '.png') }}" alt="Foto de {{ $usuario->name }}">
</div>

@endsection
