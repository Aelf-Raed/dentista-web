@extends('layout-admin')

@section('contenido-admin')
@php
use App\Models\User;
@endphp
{{-- Sección de Servicios --}}

<!-- Captura de error al crear o editar -->
@if ($errors->any())
  <div class="alert alert-danger" role="alert">
    <i class="far fa-times-circle"></i> Error al Crear o Editar el Servicio.
  </div>
@endif
<!-- Fin Captura de error -->

<div class="card p-3">
    <div class="card-body">
        <h2 class="card-title text-secondary"><i class="fas fa-concierge-bell"></i> Servicios</h2>
        <p class="card-text">Servicios Actuales</p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3 btn-add" data-mdb-toggle="modal" data-mdb-target="#exampleModal"><i class="fas fa-plus"></i> Nuevo Servicio</button>
        <!-- End Button trigger modal -->
        <div class="table-responsive">
            <table class="table align-middle table-hover">
                <caption>
                    {{ $tabla->links() }}
                </caption>
                <thead class="table-light h6">
                    <tr>
                        <th scope="col" class="fw-bold">#</th>
                        <th scope="col" class="fw-bold">Servicio:</th>
                        <th scope="col" class="fw-bold">Precio:</th>
                        <th scope="col" class="fw-bold">Oferta:</th>
                        <th scope="col" class="fw-bold">Anterior:</th>
                        <th scope="col" class="fw-bold">Modificado por:</th>
                        <th scope="col" class="fw-bold">Acciones:</th>
                    </tr>
                </thead>
                <tbody>
                  @php
                  $pagina = request()->page;
                  @endphp
                  @foreach ($tabla as $indice => $item)
                    <tr>
                        @if ($pagina == 1 || empty($pagina))
                          <th scope="row">{{ $indice+1 }}</th>
                        @elseif ($pagina == 2)
                          @php
                            $indice = $indice+5;
                          @endphp
                          <th scope="row">{{ $indice+1 }}</th>
                        @elseif ($pagina == 3)
                          @php
                            $indice = $indice+10;
                          @endphp
                          <th scope="row">{{ $indice+1 }}</th>
                        @elseif ($pagina == 4)
                          @php
                            $indice = $indice+15;
                          @endphp
                          <th scope="row">{{ $indice+1 }}</th>
                        @endif

                        <td>{{ $item->nombre_servicio }}</td>
                        <td>${{ number_format($item->precio, 2, '.', '') }}</td>
                        <td>
                          @if (!empty($item->oferta))
                          {{ $item->oferta }}
                          @else
                          Sin Oferta.
                          @endif
                        </td>
                        <td>
                          @if (!empty($item->precio_anterior))
                          {{ $item->precio_anterior }}
                          @else
                          No Descuento.
                          @endif
                        </td>
                        @php
                          // $usuario = DB::table('users')->select('name')->where('id', $item->usuario_id)->first();
                          //En MVC, solo los modelos deben acceder a la informacion, y aqui la clase DB no es un modelo.
                          $usuario = User::find($item->usuario_id);
                        @endphp
                        <td>{{ $usuario->name ?? 'Sin modificar' }}</td>
                        <td>
                            <button type="button" class="btn btn-secondary btn-sm px-3" data-mdb-toggle="modal" data-mdb-target="#editar{{ $item->id }}" title="Editar">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm px-3" data-mdb-toggle="modal" data-mdb-target="#eliminar{{ $item->id }}" title="Eliminar">
                                <i class="fas fa-times"></i>
                            </button>
                        </td>
                    </tr>
                    @include('modalServicio.editar')
                    @include('modalServicio.eliminar')
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- Fin Sección de Servicios --}}
@include('modalServicio.agregar')
@endsection
