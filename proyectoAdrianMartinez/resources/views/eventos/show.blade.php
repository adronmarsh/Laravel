@extends('layout')

@section('title', $evento->name)

@section('content')
    <div class="container-eventos">
        <h1>{{$evento->name}}</h1>
        <p>{{$evento->description}}</p>
        <p>{{$evento->location}}</p>
        <p>{{$evento->hour}}</p>
        <p>{{$evento->date}}</p>
        <p>{{$evento->tag}}</p>
    </div>
@endsection
