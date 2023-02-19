@extends('layout')

@section('title', 'Login')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="name">Nombre de usuario:</label> <br>
        <input type="text" name="name" id="name"> <br>

        <label for="password">Contraseña:</label> <br>
        <input type="password" name="password" id="password"> <br><br>

        <input type="submit" name="enviar" class="button" value="Enviar">
    </form>

    @isset($error)
        {{ $error }}
    @endisset
@endsection
