@extends('layout')

@section('title', 'Editar Cuenta')

@section('content')
    <form action="{{ route('miembros.update', $usuario->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <label for="name">Nombre:</label> <br>
        <input type="text" name="name" id="name" disabled value="{{ $usuario->name }}"> <br><br>

        <label for="avatar">
            Cambiar avatar: <br>
            @if (File::exists(public_path('/storage/avatars/avatar' . $usuario->id . '.png')))
                <img class="foto-cuenta foto-cuenta-edit" src="{{ asset('storage/avatars/avatar' . $usuario->id . '.png') }}"
                    alt="Foto de {{ $usuario->name }}">
            @else
                <img class="foto-cuenta foto-cuenta-edit" src="/storage/avatars/default.png" alt="foto">
            @endif
        </label>
        <input type="file" name="avatar" id="avatar" style="display: none;">
        <br>

        <label for="email">Email:</label> <br>
        <input type="text" name="email" id="email" disabled value="{{ $usuario->email }}"> <br>

        <label for="birthday">Fecha de nacimiento:</label> <br>
        <input type="date" name="birthday" id="birthday" value="{{ $usuario->birthday }}"  max="{{ date('Y-m-d') }}"> <br>

        <label for="twitter">Twitter:</label> <br>
        <input type="text" name="twitter" id="twitter" value="{{ $usuario->twitter }}"> <br>

        <label for="instagram">Instagram:</label> <br>
        <input type="text" name="instagram" id="instagram" value="{{ $usuario->instagram }}"> <br>

        <label for="twitch">Twitch:</label> <br>
        <input type="text" name="twitch" id="twitch" value="{{ $usuario->twitch }}"> <br>

        <label for="password">Cambiar Contraseña:</label> <br>
        <input type="password" name="password" id="password"> <br>

        <label for="password_confirmation">Repite Contraseña:</label> <br>
        <input type="password" name="password_confirmation" id="password_confirmation"> <br>
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
