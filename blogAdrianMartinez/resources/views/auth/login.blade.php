<form action="{{route('login')}}" method="POST">
    @csrf
    <label for="username">Nombre de usuario:</label> <br>
    <input type="text" name="username" id="username"> <br>

    <label for="password">Contraseña:</label> <br>
    <input type="password" name="password" id="password"> <br>

    <input type="submit" name="enviar" value="Enviar">
</form>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
