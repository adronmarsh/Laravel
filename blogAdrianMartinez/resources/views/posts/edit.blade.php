@extends('layout')

@section('title', 'Edit Post')

@section('content')
    <p>Edición del post: {{ $post->id }}</p>
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('put')

        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
        <br>
        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10">{{ $post->contenido }}</textarea>
        <br>
        <label for="visibility">Visible</label>
        <input type="checkbox" name="visibility" id="visibility" {{ $post->visibility == 1 ? 'checked' : '' }}>
        <br>
        <label for="autor">Autor</label>
        <select class="form-control" name="autor" id="autor">
            @foreach ($autores as $autor)
                <option value="{{ $autor->id }}" {{ $autor->id == $post->writer_id ? 'selected' : '' }}>{{ $autor->apodo }}</option>
            @endforeach
        </select>
        <br><br>
        <input type="submit" value="Guardar">
    </form>
@endsection
