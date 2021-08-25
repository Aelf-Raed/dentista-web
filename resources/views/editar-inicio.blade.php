@extends('layout-admin')

@section('contenido-admin')
{{-- Sección de Inicio --}}
<div class="card p-3">
    <div class="card-body">
        <h2 class="card-title text-secondary"><i class="fas fa-image"></i> Inicio</h2>
        <p class="card-text">Imagen de Fondo Actual</p>
        <img src="{{ asset($fondo->url) }}" class="img-thumbnail fondo"/>
        <form action="{{ route('fondo') }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <br>
            <label for="fondo" class="form-label">Selecciona una imagen:</label>
            @error('fondo')
            <br>
            <small class="text-danger pb-1"> *Selecciona un archivo de tipo imagen.</small>
            @enderror
            <input class="form-control form-control-sm" id="fondo" name="fondo" type="file" accept="image/*" />
            <button type="submit" class="mt-3 p-2 btn btn-sm btn-outline-secondary btn-guardar" data-mdb-ripple-color="dark"><i class="far fa-save"></i> Guardar</button>
        </form>
    </div>
</div>
{{-- Fin Sección de Inicio --}}
@endsection
