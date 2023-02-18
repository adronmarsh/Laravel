@extends('layout')

@section('title', 'Mensajes')

@section('content')
    <div class="container-mensajes">
        @if ($mensajes->isEmpty())
            <div>No hay mensajes que mostrar</div>
        @else
            @foreach ($mensajes as $mensaje)
            <div class="mensaje">
                <p><strong>Nombre:</strong> {{ $mensaje->name }}</p>
                <p><strong>Asunto:</strong> {{ $mensaje->subject }}</p>
                <p><strong>Mensaje:</strong> <br> {{ $mensaje->text }}</p>
            </div>
            @endforeach
        @endif
    </div>

@endsection
