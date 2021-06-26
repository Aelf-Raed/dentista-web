{{-- extendemos de plantilla --}}
@extends('layout')

{{-- codigo que va a ser llamado --}}
@section('contenido')
<!-- Background image -->
<div id="intro" class="bg-image shadow-2-strong" style="background-image: url({{ asset('img/intro1.jpg') }});">
    <div class="mask">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
            <!-- Contenido principal -->
            <div class="text-light lead">
                <span>
                    <i class="fas fa-teeth-open fa-6x"></i>
                </span>
                <h1 class="mt-3 mb-3 display-4 fw-bold">¡Bienvenido a Dentista WEB!</h1>
                <div class="font-monospace">
                    <h5 class="mb-4 fw-bold"><em>Tu mejor opción para la salud dental</em></h5>
                    <a class="btn btn-outline-light btn-lg m-2 fw-bold" role="button" href="{{ route('nosotros') }}">Sobre Nosotros</a>
                    <a class="btn btn-outline-light btn-lg m-2 fw-bold" role="button" href="{{ route('servicios') }}">Nuestros Servicios</a>
                    <a class="btn btn-outline-light btn-lg m-2 fw-bold" role="button" href="{{ route('contacto') }}">Contáctanos</a>
                </div>
            </div>
            <!--Fin Contenido principal -->
        </div>
    </div>
</div>
<!-- Background image -->
@endsection
