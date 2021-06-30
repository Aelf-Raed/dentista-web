@extends('layout')

@section('contenido')

{{-- banner --}}
<div id="intro2" class="bg-image shadow-1-strong" style="background-image: url({{ asset('img/nosotros1.jpg') }});">
    <div class="mask">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
            <div class="text-light lead font-monospace mt-5 pt-5">
                <h1 class="mb-3 display-5 pt-3 fw-bold" data-aos="fade-right">Acerca de Dentista WEB</h1>
                <h5 class="mb-4 fw-bold" data-aos="fade-left"><em>¡5 años de experiencia nos respaldan!</em></h5>
                <br>
            </div>
        </div>
    </div>
</div>
{{-- fin banner --}}
{{-- contenido --}}
<div class="container my-5">
    <section>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="text-center" data-aos="zoom-out-up">
                    <img class="bg-image img-thumbnail shadow-2-strong rounded-5 config-img" src="{{ asset('img/doc.jpg') }}">
                </div>
            </div>
            <div class="col-md-5 justify mb-4" data-aos="zoom-out">
                <h3 class="fw-bold mytitle">Nosotros Dentista Web</h3>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p class="text-muted">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h5 class="fw-bold mytitle">Doloremque vero ex debitis veritatis?</h5>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </section>
</div>
{{-- fin contenido --}}

@endsection
