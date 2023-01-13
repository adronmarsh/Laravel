<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title> @yield('title') - Adrián Martínez</title>
</head>

<body>
    @include('partials.nav')

    <div>
        @yield('content')
    </div>

    @include('partials.pie')
</body>

</html>
