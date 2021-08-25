<!-- Modal Editar -->
<div class="modal fade" id="editar{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-secondary" id="exampleModalLabel2"><i class="fas fa-pencil-alt"></i> Editar Servicio</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form action="{{ route('editar-servicio', $item->id) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-helper fw-bold mb-1">Campos Requeridos:</div>
                    @error('nombre_servicio')
                      <small class="text-danger">*Este campo es requerido.</small>
                    @enderror
                    <div class="form-outline mb-4">
                        <input type="text" id="nombre_servicio" name="nombre_servicio" class="form-control" value="{{ $item->nombre_servicio }}"/>
                        <label class="form-label" for="nombre_servicio">Nombre Servicio:</label>
                    </div>
                    @error('descripcion_servicio')
                      <small class="text-danger">*Este campo es requerido.</small>
                    @enderror
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="descripcion_servicio" name="descripcion_servicio" rows="3">{{ $item->descripcion_servicio }}</textarea>
                        <label class="form-label" for="descripcion_servicio">Descripción Servicio:</label>
                    </div>
                    @error('precio')
                      <small class="text-danger">*Este campo es requerido.</small>
                    @enderror
                    <div class="form-outline mb-4">
                        <input type="number" id="precio" name="precio" class="form-control myNum2" value="{{ number_format($item->precio, 2, '.', '') }}"/>
                        <label class="form-label" for="precio">Precio Servicio:</label>
                        <div class="form-helper">*Valor min: $100.00, Valor max: $999,999.00.</div>
                    </div>
                    <br>
                    <div class="form-helper fw-bold mb-1">Campos No Requeridos:</div>
                    <div class="form-outline mb-5">
                        <input type="text" id="oferta" name="oferta" class="form-control" value="{{ $item->oferta }}"/>
                        <label class="form-label" for="oferta">Oferta Servicio:</label>
                        <div class="form-helper">Ej: Oferta: 2X1, 2 personas al precio de 1. Oferta: -30% Descuento.</div>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="precio_anterior" name="precio_anterior" class="form-control" value="{{ $item->precio_anterior }}"/>
                        <label class="form-label" for="precio_anterior">Precio Anterior:</label>
                        <div class="form-helper">Ej: Antes: $500.00. (*Solo si aplicas descuento).</div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-secondary btn-add mt-2"><i class="far fa-save"></i> Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal Editar -->
