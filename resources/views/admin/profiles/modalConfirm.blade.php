<!-- Modal delete de perfil -->

<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal02"
ariahidden="true">

  <form action="" method="POST" id="formDelete">
      
      <!-- campos de seguridad -->
      {{ csrf_field() }}
      {{ method_field( 'DELETE' ) }}

      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="titleDelete"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">
          <!-- Contenido -->
          <p>¿Desea eliminar al usuario?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">
            Close
          </button>
          <button type="submit" class="btn btn-danger">
            <i class="fas fa-w fa-trash"></i>
            Confirmar
          </button>
        </div>
      </div>
    </div>

  </form>

</div>

<div class="modal fade" id="modal-update" tabindex="-1" role="dialog" aria-labelledby="modal02"
ariahidden="true">

  <form action="" method="POST" id="formUpdate">
      
      <!-- campos de seguridad -->
      {{ csrf_field() }}
      {{ method_field( 'PUT' ) }}

      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="titleUpdate"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">
          <!-- Contenido -->
          <p>¿Desea dar privilegios a este usuario?</p>
          <select name="role" id="userRole" class="form-control">
            <option value=""></option>
            <option value=""></option>  
          </select>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">
            Close
          </button>
          <button type="submit" class="btn btn-warning">
            <i class="fas fa-w fa-user"></i>
            Confirmar
          </button>
        </div>
      </div>
    </div>

  </form>

</div>