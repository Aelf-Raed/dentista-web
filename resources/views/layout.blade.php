<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="author" content="Alfred">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Dentista WEB</title>
    <!-- Styles -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/tooth-solid.svg') }}">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>

<body>

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top shadow">
            <div class="container">
                <!-- Navbar brand -->
                <a class="navbar-brand nav-link fw-bold" href="{{ route('inicio') }}">
                    <i class="fas fa-tooth"></i>&nbsp;Dentista WEB
                </a>
                <!--Fin Navbar brand -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav ms-auto font-monospace fw-bold">
                        <li class="nav-item active">
                            <a class="nav-link mx-2 active" href="{{ route('inicio') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="{{ route('nosotros') }}">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="{{ route('servicios') }}">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="{{ route('contacto') }}">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Fin Navbar -->
    </header>

    <main>
        {{-- traemos el contenido --}}
        @yield('contenido')
        {{-- fin de contenido --}}
    </main>

    <footer>
        <!-- Contenido footer-->
        <div class="text-center p-3 bg-light">
            <small>© 2020 Copyright: Todos los derechos reservados.</small>
        </div>
        <!-- Fin Contenido footer-->
    </footer>

    <!-- Custom scripts -->
    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>
