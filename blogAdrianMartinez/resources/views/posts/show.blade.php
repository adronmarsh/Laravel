@extends('layout')

@section('title', )
    {{ $post->slug }}
@endsection

@section('content')
        {{$post->writer->nick}} <br>
        Id: {{ $post->slug }} <br>
        @if ($post->visibility == 0)
            Oculto
        @else
            Visible
        @endif
        <br>
        <a href="{{ $post->slug }}/edit">Editar post</a> <br>
        <form action="{{ route('posts.destroy', ['post' => $post->slug]) }}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Eliminar Post">
        </form>
        <h2>{{ $post->title }} </h2>
        <p> {{ $post->content }} </p>
        <div>Creado en: {{ $post->created_at }} </div>
        <div>Última edición: {{ $post->updated_at }} </div>
@endsection
