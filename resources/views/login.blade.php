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

    <main id="contenido" class="visually-hidden">
        <!-- Background image -->
        <div id="intro" class="bg-image shadow-2-strong" style="background-image: url({{ asset('img/login.jpg') }})">
            <div class="mask mascara2 d-flex align-items-center h-100">
                <div class="container">
                    <!-- Session -->
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-md-8">
                            <div class="card bg-light p-4 shadow-5-strong">
                                <div class="card-header text-center pb-4">
                                    <a class="fw-bold text-decoration-none fs-2 adm-login font-monospace" href="{{ route('inicio') }}">
                                        <i class="fas fa-tooth"></i>&nbsp;Dentista WEB
                                    </a>
                                </div>
                                <div class="card-body">
                                    <form id="login" method="post">
                                      @csrf
                                        <!-- Email input -->
                                        @error('email')
                                          <small class="text-danger pb-1">{{ $message }}</small>
                                        @enderror
                                        <div class="form-outline mb-4">
                                            <input type="email" name="email"  value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"/>
                                            <label class="form-label" for="email">Email</label>
                                        </div>
                                        <!-- Password input -->
                                        @error('password')
                                          <small class="text-danger pb-1">{{ $message }}</small>
                                        @enderror
                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"/>
                                            <label class="form-label" for="password">Contraseña</label>
                                        </div>
                                        <!-- 2 column grid layout for inline styling -->
                                        <div class="row mb-4">
                                            <div class="col d-flex justify-content-center">
                                                <!-- Checkbox -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"/>
                                                    <label class="form-check-label" for="remember"> Recordarme </label>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <!-- Simple link -->
                                                <a href="#!">¿Olvidaste tu contraseña?</a>
                                            </div>
                                        </div>

                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-outline-primary btn-block btn-login">Entrar <i class="fas fa-sign-in-alt"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin Session -->
                </div>
            </div>
        </div>
        <!-- Fin Background image -->
    </main>

    <!-- Custom scripts -->
    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>
