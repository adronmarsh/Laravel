@extends('layout')

@section('title', 'Register')

@section('content')
    <form action="{{ route('registro') }}" method="POST">
        @csrf

        <label for="name">Nombre</label> <br>
        <input type="text" name="name" id="name"> <br>

        <label for="email">Email:</label> <br>
        <input type="email" name="email" id="email"> <br>

        <label for="birthday">Fecha de nacimiento:</label> <br>
        <input type="birthday" name="birthday" id="birthday"> <br>

        <label for="password">Contraseña:</label> <br>
        <input type="password" name="password" id="password"> <br>

        <label for="password_confirmation">Repite Contraseña:</label> <br>
        <input type="password" name="password_confirmation" id="password_confirmation"> <br>

        <input type="submit" name="enviar" value="Enviar">
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection
