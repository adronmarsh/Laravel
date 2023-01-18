<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title> @yield('title') - Ágora eSports</title>
</head>

<body>
    <div class="container">
    <header>
        @include('partials.header')
    </header>

        @include('partials.sidebar')

        <main>
            @yield('content')
        </main>

        <footer>
            @include('partials.foot')
        </footer>
    </div>
</body>

</html>
