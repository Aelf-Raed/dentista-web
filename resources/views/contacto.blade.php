@extends('layout')

@section('contenido')
{{-- banner --}}
<div id="intro2" class="bg-image shadow-1-strong" style="background-image: url({{ asset('img/contact1.jpg') }});">
    <div class="mask">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
            <div class="text-light lead font-monospace mt-5 pt-5">
                <h1 class="mb-3 display-5 pt-3 fw-bold">Contáctanos</h1>
                <h5 class="mb-4 fw-bold"><em>¿Ya te deciste?, Agenda tu cita!</em></h5>
                <br>
            </div>
        </div>
    </div>
</div>
{{-- fin banner --}}
{{-- contenido --}}
<div class="container my-5">
    <section id="contact">
        <div class="row text-center">
            <div class="col"></div>
            <div class="col-md-5 mb-5 border-end">
                <h4 class="fw-bold mb-5"><i class="fas fa-map-marker-alt"></i> Dirección</h4>
                <p class="text-muted">Blvd. Aeropuerto 104, Cerrito de Jerez Nte.</p>
                <p class="text-muted">37530 León, Gto.</p>
                <p class="text-muted">info@ejemplo.com \\ 477 XXX XX XX</p>
            </div>
            <div class="col-md-5 mb-5 border-start">
                <h4 class="fw-bold mb-5"><i class="far fa-clock"></i> Horarios</h4>
                <p class="text-muted">Lunes a Viernes 09:00AM – 17:00PM</p>
                <p class="text-muted">Sábados 09:00AM – 14:00PM</p>
            </div>
            <div class="col"></div>
            <div class="col-12">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7233.115067714594!2d-101.62484101991011!3d21.091396804286184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bbe0df99e5d1d%3A0xc7dc7d90d0bab9a2!2sAcuario%20del%20Baj%C3%ADo!5e0!3m2!1ses-419!2smx!4v1624685768242!5m2!1ses-419!2smx" width="850" height="300" style="border:0;" allowfullscreen="" loading="lazy" class="shadow-2-strong rounded-4"></iframe>
            </div>
        </div>
    </section>
</div>
{{-- fin contenido --}}

@endsection

                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7233.115067714594!2d-101.62484101991011!3d21.091396804286184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bbe0df99e5d1d%3A0xc7dc7d90d0bab9a2!2sAcuario%20del%20Baj%C3%ADo!5e0!3m2!1ses-419!2smx!4v1624685768242!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
