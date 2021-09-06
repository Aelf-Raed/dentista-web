@extends('layout-admin')

@section('contenido-admin')
  {{-- Sección de gestion usuarios --}}
    {{-- Tabla de usuarios --}}
    <div class="card p-3">
      <div class="card-body">
        <h2 class="card-title text-secondary"><i class="fas fa-users-cog"></i> Gestión de Usuarios</h2>
        <p class="card-text">Usuarios del Sistema</p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3 btn-add" data-mdb-toggle="modal" data-mdb-target="#exampleModal4"><i class="fas fa-plus"></i> Nuevo Usuario</button>
        <!-- End Button trigger modal -->
        <div class="table-responsive">
          <table class="table align-middle table-hover table-sm">
            <caption>{{ $usuarios->links() }}</caption>
            <thead class="table-light h6">
              <tr>
                <th scope="col" class="fw-bold">#</th>
                <th scope="col" class="fw-bold">Usuario:</th>
                <th scope="col" class="fw-bold">Correo:</th>
                <th scope="col" class="fw-bold">Tipo:</th>
                <th scope="col" class="fw-bold">Acciones:</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($usuarios as $key => $item)
              <tr>

                @php
                  $pagina = request()->page;
                @endphp
                @if ($pagina == 1 || empty($pagina))
                  <th scope="row">{{ $key+1 }}</th>
                @elseif ($pagina == 2)
                  @php
                    $key = $key+6;
                  @endphp
                  <th scope="row">{{ $key }}</th>
                @elseif ($pagina == 3)
                  @php
                    $key = $key+11;
                  @endphp
                  <th scope="row">{{ $key }}</th>
                @endif

                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->tipo }}</td>
                <td>
                  <button type="button" class="btn btn-secondary btn-sm px-3" data-mdb-toggle="modal" data-mdb-target="#actualizar{{ $item->id }}" title="Actualizar">
                      <i class="fas fa-pencil-alt"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-sm px-3" data-mdb-toggle="modal" data-mdb-target="#borrar{{ $item->id }}" title="Eliminar">
                      <i class="fas fa-times"></i>
                  </button>
                </td>
              </tr>
                @include('modalUsuario.actualizar')
                @include('modalUsuario.eliminar')
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @include('modalUsuario.crear')
    {{-- Fin Tabla de usuarios --}}
  {{-- Fin Sección de gestion usuarios --}}
@endsection
