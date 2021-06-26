@extends('layout')

@section('contenido')
  {{-- contenido --}}
  <div id="intro2" class="bg-image shadow-1-strong" style="background-image: url({{ asset('img/services1.jpg') }});">
        <div class="mask">
          <div class="container d-flex align-items-center justify-content-center text-center h-100">
            <div class="text-light lead font-monospace mt-5 pt-5">
              <h1 class="mb-3 display-5 pt-3 fw-bold">Nuestros Servicios</h1>
              <h5 class="mb-4 fw-bold"><em>¡Contamos con tecnología de punta!</em></h5>
              <br>
            </div>
          </div>
        </div>
      </div>
  {{-- fin contenido --}}
@endsection
