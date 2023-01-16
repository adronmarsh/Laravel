@extends('layout')

@section('title', 'Listado')

@section('content')
    {{-- <a href="{{route('posts.editar')}}">Editar post</a> --}}
    <a href="posts/{ {{ $id }} }/edit">Editar post</a>
@endsection
