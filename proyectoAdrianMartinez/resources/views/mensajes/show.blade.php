@extends('layout')

@section('title', $mensaje->subject)

@section('content')
    @if (Auth::check() && Auth::user()->rol == 'admin')
        <div class="container-mensaje">
            <div class="subcontainer-mensaje">
                <div class="header-mensaje">
                    <a class="volver" href="/mensajes">Volver</a>
                    <form method="POST" action="{{ route('mensajes.destroy', $mensaje->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="eliminar">Eliminar mensaje</button>
                    </form>
                </div>

                <p><strong>Asunto:</strong> {{ $mensaje->subject }}</p>
                <p><strong>Nombre:</strong> {{ $mensaje->name }}</p>
                <p><strong>Texto:</strong> {{ $mensaje->text }}</p>

            </div>
        </div>
    @else
        @php
            header('Location: ' . route('contacto'));
            exit();
        @endphp
    @endif
@endsection
