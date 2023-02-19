@extends('layout')

@section('title', $mensaje->subject)

@section('content')
    <div class="container-mensajes">
        <div>
            <form method="POST" action="{{ route('mensajes.destroy', $mensaje->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="eliminar">Eliminar mensaje</button>
            </form>

            <p><strong>Asunto:</strong> {{ $mensaje->subject }}</p>
            <p><strong>Nombre:</strong> {{ $mensaje->name }}</p>
            <p><strong>Texto:</strong> {{ $mensaje->text }}</p>
        </div>
    </div>
@endsection
