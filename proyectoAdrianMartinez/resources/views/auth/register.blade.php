@extends('layout')

@section('title', 'Register')

@section('content')
    <form action="{{ route('registro') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Nombre:</label> <br>
        <input type="text" name="name" id="name"> <br>

        <label for="avatar">Foto de perfil:</label> <br>
        <input type="file" name="avatar" id="avatar"> <br>

        <label for="email">Email:</label> <br>
        <input type="email" name="email" id="email"> <br>

        <label for="birthday">Fecha de nacimiento:</label> <br>
        <input type="date" name="birthday" id="birthday"> <br>

        <label for="twitter">Twitter:</label> <br>
        <input type="text" name="twitter" id="twitter"> <br>

        <label for="instagram">Instagram:</label> <br>
        <input type="text" name="instagram" id="instagram"> <br>

        <label for="twitch">Twitch:</label> <br>
        <input type="text" name="twitch" id="twitch"> <br>

        <label for="password">Contraseña:</label> <br>
        <input type="password" name="password" id="password"> <br>

        <label for="password_confirmation">Repite Contraseña:</label> <br>
        <input type="password" name="password_confirmation" id="password_confirmation"> <br>
        <br>
        <input type="submit" name="enviar" class="button" value="Enviar">
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection
