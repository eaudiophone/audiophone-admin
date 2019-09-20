<!-- Modal de dias de grabacion -->
<div class="modal fade" tab-index="-1" role="dialog" id="modalDays" aria-labelledby="modal12"
aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        @include( 'admin/days/form' )

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">
          <i class="fas fa-w fa-edit"></i>
          Actualizar
        </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>