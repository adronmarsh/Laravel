@extends('layout')

@section('title', 'Empresa')

@section('content')
    <h1>Empresa</h1>
    @forelse ($empresa as $data)
        Id: {{ $data->id }} <br>
        Oferta: {{$data->sale}} <br>
        Company: {{$data->price}} <br>
        Descuento: {{$data->discount}} <br>
        Fecha de expiración: {{$data->expires}} <br>
        Creada en {{$data->created_at}} <br>
        Subida en {{$data->updated_at}}

    @empty
        No hay ofertas que mostrar.
    @endforelse
@endsection
