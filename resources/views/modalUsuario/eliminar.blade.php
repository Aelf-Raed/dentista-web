<!-- Modal Eliminar Usuario-->
<div class="modal fade" id="borrar{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel6" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-danger" id="exampleModalLabel6"><i class="fas fa-user-slash"></i> Eliminar: {{ $item->email }}</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close" title="Salir"></button>
            </div>
            <div class="modal-body p-4">
                <div class="form-helper fw-bold text-center">¿Desea eliminar este usuario?</div>
            </div>
            <div class="modal-footer">
                <form action="{{ route('eliminar-usuario', $item->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-add"><i class="far fa-trash-alt"></i> Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal Eliminar Usuario-->
