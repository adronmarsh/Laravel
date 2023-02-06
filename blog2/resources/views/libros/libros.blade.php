@extends('layout')

@section('title', 'Libros')

@section('content')
    @each('partials.fichalibro', $libros, 'libro', 'partials.vacio')
@endsection

{{-- @forelse ($libros as $libro)
        @if ($loop->first)
            <ul>
        @endif
        {{ $libro['titulo'] }} ({{ $libro['autor'] }})
        @if ($loop->last)
            </ul>
        @endif
    @empty
        No libros
    @endforelse --}}

</body>

</html>
