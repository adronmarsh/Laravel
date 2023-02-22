@extends('layout')

@section('title', 'Eventos')

@section('content')
    <div class="container-eventos">
        <!--Si hay no eventos muestra un mensaje -->
        <!--Si hay eventos muestra todos los eventos y su información -->
        @if ($eventos->isEmpty())
            <div>No hay eventos que mostrar</div>
        @else
            <!--Eventos en los que participa el usuario-->
            <h2>Mis eventos</h2>
            @php $encontrado = false @endphp
            @foreach ($eventos as $evento)
                @if ($evento->visible !== 0)
                    <a class="eventos-link" href="{{ route('eventos.show', $evento->id) }}">
                        @if ($evento->miembros->contains(Auth::user()))
                            <div class="evento evento-unido">
                                <h3>{{ $evento->name }}</h3>
                                <p>{{ $evento->location }}</p>
                                <p>{{ $evento->date }}</p>
                                <p>{{ $evento->hour }}</p>
                                <form action="{{ route('eventos.apuntados', $evento) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button class="boton-evento" type="submit">
                                        @if ($evento->miembros->contains(Auth::user()))
                                            Abandonar
                                        @else
                                            Unirse
                                        @endif
                                    </button>
                                </form>
                            </div>
                            @php $encontrado = true @endphp
                        @endif
                    </a>
                @endif
            @endforeach

            @if (!$encontrado)
                <p>Apúntate a un evento para participar</p>
            @endif
            <!--Eventos en los que no participa el usuario y son visibles-->
            <h2>Eventos disponibles</h2>
            @foreach ($eventos as $evento)
                @if ($evento->visible !== 0)
                    <a class="eventos-link" href="{{ route('eventos.show', $evento->id) }}">
                        @if (!$evento->miembros->contains(Auth::user()))
                            <div class="evento">
                                <h3>{{ $evento->name }}</h3>
                                <p>{{ $evento->location }}</p>
                                <p>{{ $evento->date }}</p>
                                <p>{{ $evento->hour }}</p>
                                <form action="{{ route('eventos.apuntados', $evento) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button class="boton-evento" type="submit">
                                        @if ($evento->miembros->contains(Auth::user()))
                                            Abandonar
                                        @else
                                            Unirse
                                        @endif
                                    </button>
                                </form>
                            </div>
                        @endif
                    </a>
                @endif
            @endforeach

            <!--Solo los admin pueden acceder-->
            @if (Auth::check() && Auth::user()->rol == 'admin')
                <hr>
                <!--Eventos no visibles por los usuarios sin el rol admin-->
                <h2>Eventos no visibles</h2>
                @foreach ($eventos as $evento)
                    @if ($evento->visible == 0)
                        <a class="eventos-link" href="{{ route('eventos.show', $evento->id) }}">
                            <div class="evento novisible">
                                <h3>{{ $evento->name }}</h3>
                                <p>{{ $evento->location }}</p>
                                <p>{{ $evento->date }}</p>
                                <p>{{ $evento->hour }}</p>
                            </div>
                        </a>
                    @endif
                @endforeach
            @endif
        @endif
    </div>
@endsection
