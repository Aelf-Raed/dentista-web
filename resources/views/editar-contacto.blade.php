@extends('layout-admin')

@section('contenido-admin')
@php
use App\Models\User;
$usuario = User::find($info->usuario_id);
@endphp
{{-- Sección de Contácto --}}
<div class="card p-3">
    <div class="card-body">
        <h2 class="card-title text-secondary"><i class="fas fa-address-book"></i> Contácto</h2>
        <p class="card-text mb-0">Información de Contácto</p>
        <p><small class="text-muted mb-2">Modificado última vez por:  {{ $usuario->name }}, {{ $info->updated_at }}.</small></p>
        <form action="{{ route('editar-contacto') }}" method="post">
            @method('put')
            @csrf
            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <div class="form-outline">
                        <input type="text" id="direccion" name="direccion" class="form-control" value="{{ $info->direccion }}" />
                        <label class="form-label" for="direccion">Calle y Número:</label>
                    </div>
                    @error('direccion')
                    <small class="text-danger pb-1"> *Campo sin cambios.</small>
                    @enderror
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <div class="form-outline">
                        <input type="text" id="colonia" name="colonia" class="form-control" value="{{ $info->colonia }}" />
                        <label class="form-label" for="colonia">Colonia:</label>
                    </div>
                    @error('colonia')
                    <small class="text-danger pb-1"> *Campo sin cambios.</small>
                    @enderror
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-outline">
                        <input type="number" id="cp" name="cp" class="form-control" value="{{ $info->cp }}" />
                        <label class="form-label" for="cp">Código Postal:</label>
                    </div>
                    @error('cp')
                    <small class="text-danger pb-1"> *Campo sin cambios.</small>
                    @enderror
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 col-md-4 mb-3">
                    <div class="form-outline">
                        <input type="text" id="ciudad" name="ciudad" class="form-control" value="{{ $info->ciudad }}" />
                        <label class="form-label" for="ciudad">Ciudad:</label>
                    </div>
                    @error('ciudad')
                    <small class="text-danger pb-1"> *Campo sin cambios.</small>
                    @enderror
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <div class="form-outline">
                        <input type="email" id="email" name="email" class="form-control" value="{{ $info->email }}" />
                        <label class="form-label" for="email">Email:</label>
                    </div>
                    @error('email')
                    <small class="text-danger pb-1"> *Campo sin cambios.</small>
                    @enderror
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-outline">
                        <input type="tel" id="telefono" name="telefono" class="form-control" value="{{ $info->telefono }}" />
                        <label class="form-label" for="telefono">Teléfono</label>
                    </div>
                    @error('telefono')
                    <small class="text-danger pb-1"> *Campo sin cambios.</small>
                    @enderror
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 col-md-6 mb-3">
                    <div class="form-outline">
                        <input type="text" id="hora_semanal" name="hora_semanal" class="form-control" value="{{ $info->hora_semanal }}" />
                        <label class="form-label" for="hora_semanal">Horario Semanal:</label>
                    </div>
                    @error('hora_semanal')
                    <small class="text-danger pb-1"> *Campo sin cambios.</small>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-outline">
                        <input type="text" id="fin_semana" name="fin_semana" class="form-control" value="{{ $info->fin_semana }}" />
                        <label class="form-label" for="fin_semana">Fin de Semana:</label>
                    </div>
                    @error('fin_semana')
                    <small class="text-danger pb-1"> *Campo sin cambios.</small>
                    @enderror
                </div>
            </div>

            <button type="submit" class="mt-3 p-2 btn btn-sm btn-outline-secondary btn-guardar" data-mdb-ripple-color="dark"><i class="far fa-save"></i> Guardar</button>
        </form>
    </div>
</div>
{{-- Fin Sección de Contácto --}}
@endsection
