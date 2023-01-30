{{-- <nav class="header">
    <img src="/media/logo.jpeg" alt="Logo de Ágora eSports">
    <div><a href="/">Ágora eSports</a></div>
    <ul>
        <li>Registro</li>
        <li>Login</li>
        <li>Logout</li>
    </ul>
</nav> --}}

<nav class="navbar navbar-expand-md bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img id="logoAgora" src="/media/logo.jpeg" alt="Logo de Ágora eSports"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#desplegable"
            aria-controls="desplegable" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="desplegable">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/miembros">Miembros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/eventos">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacto">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/donde-estamos">Dónde estamos</a>
                </li>
                <!--ADMIN-->
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/añadir-evento">Evento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mensaje">Mensajes</a>
                </li> --}}

                <!--REGISTRO-->
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/registro">Registro</a>
                </li> --}}
                <!--LOGIN-->
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li> --}}
                <!--CUENTA-->
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/cuenta">Cuenta</a>
                </li> --}}
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
