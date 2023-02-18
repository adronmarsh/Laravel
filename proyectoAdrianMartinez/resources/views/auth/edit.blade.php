@extends('layout')

@section('title', 'Editar Cuenta')

@section('content')
    <form action="{{ route('miembros.update', $usuario->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <label for="name">Nombre:</label> <br>
        <input type="text" name="name" id="name" disabled value="{{ $usuario->name }}"> <br>

        {{-- <label for="avatar">Foto de perfil:</label> <br>
        <input type="file" name="avatar" id="avatar"> <br> --}}

        <label for="email">Email:</label> <br>
        <input type="email" name="email" id="email" disabled value="{{ $usuario->email }}"> <br>

        <label for="birthday">Fecha de nacimiento:</label> <br>
        <input type="birthday" name="birthday" id="birthday" value="{{ $usuario->birthday }}"> <br>

        <label for="twitter">Twitter:</label> <br>
        <input type="twitter" name="twitter" id="twitter" value="{{ $usuario->twitter }}"> <br>

        <label for="instagram">Instagram:</label> <br>
        <input type="instagram" name="instagram" id="instagram" value="{{ $usuario->instagram }}"> <br>

        <label for="twitch">Twitch:</label> <br>
        <input type="twitch" name="twitch" id="twitch" value="{{ $usuario->twitch }}"> <br>

        {{-- <label for="password">Contraseña:</label> <br>
            <input type="password" name="password" id="password"> <br>

            <label for="password_confirmation">Repite Contraseña:</label> <br>
            <input type="password" name="password_confirmation" id="password_confirmation"> <br> --}}
        <br>
        <input type="submit" name="enviar" class="button" value="Guardar">
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection
