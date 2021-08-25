<!-- Modal Agregar -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-primary" id="exampleModalLabel"><i class="fas fa-plus"></i> Agregar Nuevo Servicio</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form action="{{ route('agregar-servicio') }}" method="post">
                  @csrf
                  @method('post')
                    <div class="form-helper fw-bold mb-1">Campos Requeridos:</div>
                    @error('nombre_servicio')
                      <small class="text-danger">*Este campo es requerido.</small>
                    @enderror
                    <div class="form-outline mb-4">
                        <input type="text" id="nombre_servicio" name="nombre_servicio" class="form-control" />
                        <label class="form-label" for="nombre_servicio">Nombre Servicio:</label>
                    </div>
                    @error('descripcion_servicio')
                      <small class="text-danger">*Este campo es requerido.</small>
                    @enderror
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="descripcion_servicio" name="descripcion_servicio" rows="3"></textarea>
                        <label class="form-label" for="descripcion_servicio">Descripción Servicio:</label>
                    </div>
                    @error('precio')
                      <small class="text-danger">*Este campo es requerido.</small>
                    @enderror
                    <div class="form-outline mb-4">
                        <input type="number" id="precio" name="precio" class="form-control myNum" step="0.01"/>
                        <label class="form-label" for="precio">Precio Servicio:</label>
                        <div class="form-helper">*Valor min: $100.00, Valor max: $999,999.00.</div>
                    </div>
                    <br>
                    <div class="form-helper fw-bold mb-1">Campos No Requeridos:</div>
                    <div class="form-outline mb-5">
                        <input type="text" id="oferta" name="oferta" class="form-control" />
                        <label class="form-label" for="oferta">Oferta Servicio:</label>
                        <div class="form-helper">Ej: Oferta: 2X1, 2 personas al precio de 1. Oferta: -30% Descuento.</div>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="precio_anterior" name="precio_anterior" class="form-control" />
                        <label class="form-label" for="precio_anterior">Precio Anterior:</label>
                        <div class="form-helper">Ej: Antes: $500.00. (*Solo si aplicas descuento).</div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-add mt-2"><i class="far fa-save"></i> Agregar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal Agregar -->
