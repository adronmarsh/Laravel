@extends('layout')

@section('title', $evento->name)

@section('content')
    <div class="container-eventos">
        <form action="{{ route('eventos.update', $evento->id) }}" method="POST">
            @csrf
            @method('put')
            <h1>Editar evento</h1>
            <div class="editar-eventos">
                <label for="name">Nombre:</label>
                <input type="text" name="name" value="{{ $evento->name }}">

                <label for="description">Descripción:</label>
                <input type="text" name="description" value="{{ $evento->description }}">

                <label for="location">Ubicación:</label>
                <input type="text" name="location" value="{{ $evento->location }}">

                <label for="hour">Hora:</label>
                <input type="text" name="hour" value="{{ $evento->hour }}">

                <label for="date">Fecha:</label>
                <input type="date" name="date" value="{{ $evento->date }}">

                <label for="tags">Tags:</label>
                <input type="text" name="tags" value="{{ $evento->tags }}">

                <label for="tags">Visible:</label>
                <input type="number" name="visible" value="{{ $evento->visible }}">

                <div>
                    <input type="submit" class="button" value="Guardar">
                    <a href="{{ route('eventos.show', $evento->id) }}">Volver</a>
                </div>
            </div>
        </form>
    </div>
@endsection
