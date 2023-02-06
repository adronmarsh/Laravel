@extends('layout')

@section('title', 'Factorial')

@section('content')
    Cálculo del factorial de {{ $numero }} <br>
    {{ $numero }}!={{ $factorial }}
@endsection
