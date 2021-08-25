@extends('layout-admin')

@section('contenido-admin')
{{-- Sección de Nosotros --}}
<div class="card p-3">
    <div class="card-body">
        <h2 class="card-title text-secondary"><i class="fas fa-users"></i> Nosotros</h2>
        <p class="card-text">Información Sobre Nosotros</p>
        <img src="{{ asset($inf->perfil_url) }}" class="img-thumbnail perfil" />
        <form action="{{ route('informacion') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <label for="perfil" class="form-label mt-2">Imagen de Perfil:</label>
            @error('perfil')
            <small class="text-danger pb-1"> *Selecciona un archivo de tipo imagen.</small>
            @enderror
            <input class="form-control form-control-sm" id="perfil" name="perfil" type="file" accept="image/*" />
            <br>
            @error('title1')
            <small class="text-danger pb-1"> *Titulo Principal sin cambios.</small>
            @enderror
            <div class="form-outline my-3">
                <input type="text" id="title1" name="title1" class="form-control form-control" value="{{ $inf->titulo_1 }}" />
                <label class="form-label" for="title1">Título Principal:</label>
            </div>
            @error('description1')
            <small class="text-danger pb-1"> *Descripción sin cambios.</small>
            @enderror
            <div class="form-outline">
                <textarea class="form-control" id="description1" name="description1" rows="4">{{ $inf->descripcion_1 }}</textarea>
                <label class="form-label" for="description1">Descripción:</label>
            </div>
            <br>
            @error('title2')
            <small class="text-danger pb-1"> *Titulo Secundario sin cambios.</small>
            @enderror
            <div class="form-outline my-3">
                <input type="text" id="title2" name="title2" class="form-control form-control" value="{{ $inf->titulo_2 }}" />
                <label class="form-label" for="title2">Título Secundario:</label>
            </div>
            @error('description2')
            <small class="text-danger pb-1"> *Descripción sin cambios.</small>
            @enderror
            <div class="form-outline">
                <textarea class="form-control" id="description2" name="description2" rows="4">{{ $inf->descripcion_2 }}</textarea>
                <label class="form-label" for="description2">Descripción:</label>
            </div>

            <button type="submit" class="mt-3 p-2 btn btn-sm btn-outline-secondary btn-guardar" data-mdb-ripple-color="dark"><i class="far fa-save"></i> Guardar</button>
        </form>
    </div>
</div>
{{-- Fin Sección de Nosotros --}}
@endsection
