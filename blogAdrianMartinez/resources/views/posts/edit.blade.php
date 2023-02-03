@extends('layout')

@section('title', 'Edit Post')

@section('content')
    <p>Edición del post: {{ $post->id }}</p>
    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('put')

        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
        <br>
        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10">{{ $post->content }}</textarea>
        <br>
        <label for="visibility">Visible</label>
        <input type="checkbox" name="visibility" id="visibility" {{ $post->visibility == 1 ? 'checked' : '' }}>
        <br>
        <label for="autor">Autor</label>
        <select class="form-control" name="autor" id="autor">
            @foreach ($autores as $autor)
                <option value="{{ $autor->id }}" {{ $autor->id == $post->writer_id ? 'selected' : '' }}>
                    {{ $autor->nick }}</option>
            @endforeach
        </select>
        <br><br>
        @if ($errors->any())
            Hay errores en el formulario: <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <input type="submit" value="Guardar">
    </form>
@endsection
