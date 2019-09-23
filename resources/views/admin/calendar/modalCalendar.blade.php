<!--Modal calendar -->

<div class="modal fade" tabindex="-1" role="dialog" id="modalCalendar" aria-labelledby="modal06"
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
        	
          @include('admin/calendar/form')

      	</div>
      	<div class="modal-footer">
          <button type="button" class="btn btn-danger" onclick="confirmDelete();">
            <i class="fas fa-w fa-times"></i>
            Cancelar evento
          </button>
        	<button type="button" class="btn btn-primary">
            <i class="fas fa-w fa-edit"></i>
            Posponer
          </button>
          <button type="button" class="btn btn-default">
            <i class="fas fa-w fa-clipboard"></i>
            Generar presupuesto
          </button>
        	<button type="button" class="btn btn-default" data-dismiss="modal">
            Cerrar
          </button>
      	</div>
    </div>
  </div>
</div> 