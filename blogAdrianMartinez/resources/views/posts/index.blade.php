@extends('layout')

@section('title', 'Listado')

@section('content')
    <h1>Listado de posts</h1>

    @forelse($posts as $post)
        <a href="posts/{{$post->id}}"><h4>- {{ $post->title }}</h4></a>
    @empty
        No hay posts que mostrar.
    @endforelse
    {{ $posts->links() }}

@endsection
