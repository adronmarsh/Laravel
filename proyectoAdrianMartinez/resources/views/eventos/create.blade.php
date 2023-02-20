@extends('layout')

@section('title', 'Añadir Evento')

@section('content')
    <form action="{{ route('eventos.create') }}" method="POST">
        @csrf
        <div class="editar-eventos">

            <label for="name">Nombre:</label>
            <input type="text" name="name">

            <label for="description">Descripción:</label>
            <input type="text" name="description">

            <label for="location">Ubicación:</label>
            <input type="text" name="location">

            <label for="hour">Hora:</label>
            <input type="text" name="hour">

            <label for="date">Fecha:</label>
            <input type="date" name="date">

            <label for="tags">Tags:</label>
            <input type="text" name="tags">

            <label for="tags">Visible:</label>
            <input type="number" name="visible">

            <input type="submit" name="enviar" class="button" value="Enviar">
        </div>
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection
