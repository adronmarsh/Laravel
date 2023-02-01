@extends('layout')

@section('title', 'New Post')

@section('content')
    <p>Nuevo Post</p>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <label for="title">Título</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <br>
        <label for="visibility">Visible</label>
        <input type="checkbox" name="visibility" id="visibility">
        <br>
        <label for="autor">Autor:</label>
        <select class="form-control" name="autor" id="autor">
            @foreach ($autores as $autor)
                <option value="{{ $autor->id }}">{{ $autor->apodo }}</option>
            @endforeach
        </select>
        <br><br>
        <input type="submit" value="Guardar">

    </form>

@endsection
