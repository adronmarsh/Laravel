@extends('layout')

@section('title', 'Descuentos')

@section('content')
    <h1>Vista de Sales</h1>

    @forelse($sales as $sale)
        <h4>- {{ $sale->sale }} -<br>
            Empresa: {{ $sale->company }} <br>
            Precio: {{ $sale->price }}€ <br>
            Descuento: {{ $sale->discount }}€ <br>
            Precio Final: {{$sale->price - $sale->discount}}€ <br>
            Fecha límite: {{$sale->expires}}
        </h4>
    @empty
        No hay ofertas que mostrar.
    @endforelse
    {{-- {{ $sales->links() }} --}}

@endsection
