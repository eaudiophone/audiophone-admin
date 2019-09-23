<!-- Modal de eventos -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalEvents" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="titleModal"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        <div class="modal-body">
            
            <!-- formulario -->
            @include( 'meeting/form' )

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="save">
            <i class="fas fa-w fa-save"></i>
            Guardar
          </button>
          <button type="button" class="btn btn-info" id="edit">
            <i class="fas fa-w fa-edit"></i>
            Editar
          </button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
  </div>
</div>