@extends('layout')

@section('title', 'Mensajes')

@section('content')
    @if (Auth::check() && Auth::user()->rol == 'admin')

        <div class="container-mensajes">
            @if ($mensajes->isEmpty())
                <div>No hay mensajes que mostrar</div>
            @else
                @foreach ($mensajes as $mensaje)
                    <a class="mensajes-link" href="{{ route('mensajes.show', $mensaje->id) }}">
                        <div class="mensaje">
                            @if ($mensaje->readed == 0)
                                <p class="noleido">*nuevo mensaje*</p>
                                <p><strong>Asunto:</strong> {{ $mensaje->subject }}</p>
                                <p><strong>Nombre:</strong> {{ $mensaje->name }}</p>
                            @else
                                <p><strong>Asunto:</strong> {{ $mensaje->subject }}</p>
                                <p><strong>Nombre:</strong> {{ $mensaje->name }}</p>
                            @endif
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
    @else
        @php
            header('Location: ' . route('contacto'));
            exit();
        @endphp
    @endif
@endsection
