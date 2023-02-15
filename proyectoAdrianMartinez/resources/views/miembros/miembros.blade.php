@extends('layout')

@section('title', 'Miembros')

@section('content')
    <div class="miembros-container">
        <h2>Miembros</h2>
        <div class="users">
            @foreach ($usuarios as $usuario)
                <div class="profile">
                    <a href="">
                        <img src="{{ asset('storage/avatars/avatar' . $usuario->id . '.jpeg') }}" alt="Foto de {{ $usuario->name }}">
                        {{ $usuario->name }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
