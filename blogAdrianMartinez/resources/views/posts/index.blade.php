@extends('layout')

@section('title', 'Listado')

@section('content')
    <h1>Listado de posts</h1>

    @forelse($posts as $post)
        <h4>- {{ $post->title }}</h4>
    @empty
        No hay posts que mostrar.
    @endforelse
    {{ $posts->links() }}

@endsection
