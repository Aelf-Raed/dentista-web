@extends('layout')

@section('contenido')
{{-- banner --}}
<div id="intro2" class="bg-image shadow-1-strong" style="background-image: url({{ asset('img/services1.jpg') }});">
    <div class="mask">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
            <div class="text-light lead font-monospace mt-5 pt-5">
                <h1 class="mb-3 display-5 pt-3 fw-bold" data-aos="fade-right">Nuestros Servicios</h1>
                <h5 class="mb-4 fw-bold" data-aos="fade-left"><em>¡Contamos con tecnología de punta!</em></h5>
                <br>
            </div>
        </div>
    </div>
</div>
{{--fin banner --}}
{{-- contenido --}}
<div class="container my-5">
    <section id="services">
        <div class="row justify-content-center my-3 gx-5" data-aos="zoom-in-up">
            <div class="col-12 col-lg-3">
                <div class="card text-center shadow-2-strong my-3">
                    <div class="card-header">
                        <h5 class="fw-bold mytitle"><i class="fas fa-notes-medical"></i> Revisión Dental</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <a href="#" type="button" class="btn btn-sm btn-rounded">Button</a>
                    </div>
                    <div class="card-footer text-muted">$500.00</div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card text-center shadow-2-strong my-3">
                    <div class="card-header">
                        <h5 class="fw-bold mytitle"><i class="fas fa-teeth-open"></i> Limpieza Dental</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <a href="#" type="button" class="btn btn-sm btn-rounded">Button</a>
                    </div>
                    <div class="card-footer text-muted">$500.00</div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card text-center shadow-2-strong my-3">
                    <div class="card-header">
                        <h5 class="fw-bold mytitle"><i class="fas fa-teeth"></i> Blanqueado Dental</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <a href="#" type="button" class="btn btn-sm btn-rounded">Button</a>
                    </div>
                    <div class="card-footer text-muted">$500.00</div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-3 gx-5" data-aos="zoom-in-up">
            <div class="col-12 col-lg-3">
                <div class="card text-center shadow-2-strong my-3">
                    <div class="card-header">
                        <h5 class="fw-bold mytitle"><i class="fas fa-syringe"></i> Resinas Dentales</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <a href="#" type="button" class="btn btn-sm btn-rounded">Button</a>
                    </div>
                    <div class="card-footer text-muted">$500.00</div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card text-center shadow-2-strong my-3">
                    <div class="card-header">
                        <h5 class="fw-bold mytitle"><i class="fas fa-tooth"></i> Extracciones</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <a href="#" type="button" class="btn btn-sm btn-rounded">Button</a>
                    </div>
                    <div class="card-footer text-muted">$500.00</div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card text-center shadow-2-strong my-3">
                    <div class="card-header">
                        <h5 class="fw-bold mytitle"><i class="fas fa-user-md"></i> Cirujia Oral</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <a href="#" type="button" class="btn btn-sm btn-rounded">Button</a>
                    </div>
                    <div class="card-footer text-muted">$500.00</div>
                </div>
            </div>
        </div>
    </section>
</div>
{{-- fin contenido --}}
@endsection
