<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="author" content="Alfred">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Administrador Dentista Web</title>
    <!-- Styles -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/tooth-solid.svg') }}">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Loader -->
    <div id="loader" class="loader d-flex justify-content-center align-items-center">
        <strong>Cargando...&nbsp;</strong>
        <div class="spinner-grow" role="status"></div>
    </div>
    <!-- Fin Loader -->

    <div id="contenido" class="visually-hidden bg-color-adm">
        <div class="d-flex">
          <!-- SideNav -->
            <div id="sidebar-container" class="bg-light shadow-2-strong">
                <div class="mascara3 p-3 shadow-2-strong">
                  <h3>
                      <a class="fw-bold text-light font-monospace" href="{{ route('inicio') }}"><i class="fas fa-tooth"></i> Dentista Web</a>
                  </h3>
                </div>
                <div class="menu">
                    <a href="#" class="d-block p-3 ml-2 border-bottom fw-bold select"><i class="fas fa-house-user"></i> Dashboard</a>
                    <a href="#" class="d-block p-3 ml-2 text-muted border-bottom fw-bold"><i class="fas fa-window-restore"></i> Editar Información</a>
                    <a href="#" class="d-block p-3 ml-2 text-muted border-bottom fw-bold"><i class="fas fa-concierge-bell"></i> Editar Servicios</a>
                    <a href="#" class="d-block p-3 ml-2 text-muted border-bottom fw-bold"><i class="fas fa-users-cog"></i> Gestión de Usuarios</a>
                    <a href="#" class="d-block p-3 ml-2 text-muted border-bottom fw-bold"><i class="fas fa-calendar-week"></i> Agenda</a>
                </div>
            </div>
          <!-- Fin de SideNav -->
            <div class="w-100">
                <!-- Barra Superior -->
                <nav class="navbar navbar-expand-md navbar-light bg-light shadow-1-strong">
                    <div class="container-fluid">
                        <div class="logo mascara3 p-2 shadow-2-strong">
                          <h3>
                              <a class="fw-bold text-light font-monospace" href="{{ route('inicio') }}"><i class="fas fa-tooth"></i> Dentista Web</a>
                          </h3>
                        </div>
                        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <ul class="navbar-nav ms-auto my-2">
                                <!-- Dropdown -->
                                <li class="nav-item dropdown ms-auto">
                                    <a class="nav-link dropdown-toggle title-color" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user-shield"></i> Usuario Administrador
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li>
                                            <a class="dropdown-item text-muted" href="#"><i class="fas fa-house-user"></i> Dashboard</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item text-muted" href="#"><i class="fas fa-window-restore"></i> Editar Información</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item text-muted" href="#"><i class="fas fa-concierge-bell"></i> Editar Servicios</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item text-muted" href="#"><i class="fas fa-users-cog"></i> Gestión de Usuarios</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item text-muted" href="#"><i class="fas fa-calendar-week"></i> Agenda</a>
                                        </li>
                                        <li><hr class="dropdown-divider" /></li>
                                        <li>
                                          <form action="/logout" method="post">
                                            @csrf
                                            <a class="dropdown-item text-muted" href="#" onclick="this.closest('form').submit()"><i class="fas fa-sign-out-alt"></i> Cerrar Sesion</a>
                                          </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Fin de Barra Superior -->

                <main id="contenedor">
                  <!-- Traemos el Contenido -->
                  @yield('contenido-admin')
                  <!-- Fin contenido -->
                </main>

                  <footer class="text-center mascara3 bg-light p-2 shadow-1-strong">
                      <!-- Contenido footer-->
                          <small class="text-light">© 2021 Copyright: Todos los derechos reservados.</small>
                      <!-- Fin Contenido footer-->
                  </footer>

            </div>
        </div>
    </div>

    <!-- Custom scripts -->
    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>
