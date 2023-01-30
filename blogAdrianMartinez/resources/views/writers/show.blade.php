@extends('layout')

@section('title', $writer->nick)

@section('content')
    <h2>Info</h2>
    <ul>
        <li> Nick: {{ $writer->nick }}</li>
        <li> eMail: {{ $writer->email }}</li>
    </ul>
    <h2>Posts</h2>
    <ul>
        @forelse ($writer->posts as $post)
            @if ($post->visibility == 0)
                <li>{{ $post->title }} - Post no visible </li>
            @else
                <a href="/posts/{{$post->id}}"><li>{{ $post->title }}</li></a>
            @endif
        @empty
            No hay posts.
        @endforelse
    </ul>

@endsection
