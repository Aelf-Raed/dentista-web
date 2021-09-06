<!-- Modal Agregar Usuario -->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-primary" id="exampleModalLabel4"><i class="fas fa-plus"></i> Crear Nuevo Usuario</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
              <form action="{{ route('crear-usuario') }}" method="post">
                @csrf
                @method('post')
                <div class="form-helper fw-bold mb-2">Ingrese los datos del usuario:</div>
                @error('name')
                  <small class="text-danger">*Este campo es requerido.</small>
                @enderror
                <div class="form-outline mb-4">
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}"/>
                    <label class="form-label" for="">Nombre:</label>
                </div>
                @error('email')
                  <small class="text-danger">*Este campo es requerido.</small>
                @enderror
                <div class="form-outline mb-4">
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}"/>
                    <label class="form-label" for="">Email:</label>
                </div>
                @error('password')
                  <small class="text-danger">*Este campo es requerido, 8 caracteres min. y 16 max.</small>
                @enderror
                <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control"/>
                    <label class="form-label" for="">Contraseña:</label>
                </div>
                @error('password')
                  <small class="text-danger">*Repita la contraseña, por favor.</small>
                @enderror
                <div class="form-outline mb-4">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" />
                    <label class="form-label" for="">Confirmar Contraseña:</label>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-add"><i class="far fa-user"></i> Crear</button>
              </form>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal Agregar Usuario -->
