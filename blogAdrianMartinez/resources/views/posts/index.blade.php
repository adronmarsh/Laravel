@extends('layout')

@section('title', 'Listado')

@section('content')
    <h1>Listado de posts</h1>

    @forelse($posts as $post)
        <a href="posts/{{ $post->slug }}">
            <h4>- {{ $post->title }} | by {{ $post->writer->nick }}</h4>
        </a>

    @empty
        No hay posts que mostrar.
    @endforelse
    {{ $posts->links() }}

@endsection
