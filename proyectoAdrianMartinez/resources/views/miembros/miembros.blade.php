@extends('layout')

@section('title', 'Miembros')

@section('content')
@foreach ($usuarios as $usuario)
    {{$usuario->name}}
@endforeach
    <div class="miembros">
        <h2>Miembros</h2>
        <div class="profile">
            <span class="miembro">
                <a href="">
                    <img src="/media/miembros/m1.jpeg" alt="Miembro 1">
                    <p>Pablowsk</p>
                </a>
            </span>
            <span class="miembro">
                <a href="">
                    <img src="/media/miembros/m2.jpeg" alt="Miembro 2">
                    <p>MasterDax</p>
                </a>
            </span>
            <span class="miembro">
                <a href="">

                    <img src="/media/miembros/m3.jpeg" alt="Miembro 3">
                    <p>Lluni</p>
                </a>
            </span>
            <span class="miembro">
                <a href="">

                    <img src="/media/miembros/m4.jpeg" alt="Miembro 4">
                    <p>Garmax</p>
                </a>
            </span>
            <span class="miembro">
                <a href="">

                    <img src="/media/miembros/m5.jpeg" alt="Miembro 5">
                    <p>Trixlow</p>
                </a>
            </span>
            <span class="miembro">
                <a href="">

                    <img src="/media/miembros/m6.jpeg" alt="Miembro 6">
                    <p>Suha</p>
                </a>
            </span>
            <span class="miembro">
                <a href="">

                    <img src="/media/miembros/m7.jpeg" alt="Miembro 7">
                    <p>Vayma</p>
                </a>
            </span>
            <span class="miembro">
                <a href="">

                    <img src="/media/miembros/m8.jpeg" alt="Miembro 8">
                    <p>Andoni</p>
                </a>
            </span>
            <span class="miembro">
                <a href="">

                    <img src="/media/miembros/m9.jpeg" alt="Miembro 9">
                    <p>Tyro</p>
                </a>
            </span>
        </div>
    </div>
@endsection
