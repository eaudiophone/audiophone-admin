<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="grabacion-tab" data-toggle="tab" href="#records" role="tab" aria-controls="home" aria-selected="true">Grabación</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="grabacion-tab" data-toggle="tab" href="#rental" role="tab" aria-controls="profile" aria-selected="false">Alquiler</a>
  </li>
 
</ul>

<div class="tab-content pt-3" id="myTabContent">

  <!-- budget records  -->
  <div class="tab-pane fade show active" id="records" role="tabpanel" aria-labelledby="-tab">
    
    <div class="card">
          <div class="card-header" style="background-color: #f7eda0">
            <i class="fas fa-w fa-microphone mr-2"></i>
            grabación
          </div>
          <!-- Tabla -->
          <table class="table table-striped pb-0">
            <thead class="text-center thead-dark">
              <th>#</th>
              <th>Articulo:</th>
              <th>Cantidad:</th>
              <th>Precio Unitario: $</th>
            </thead>
            <tbody class="text-center">
              
              @for( $i = 1; $i <= 3; $i++ )
                  <tr>
                    <td>
                      <input type="radio" name="id" id="idRecords" class="form-control" value="{{ $i }}">
                    </td>
                    <td>nombre</td>
                    <td>2</td>
                    <td>2500</td>
                  </tr>
              @endfor

            </tbody>
          </table>

          <ul class="list-group list-group-flush">
            <li class="list-group-item text-center">
              <button href="" class="btn btn-success btn-sm" onclick="openModal( 'addRecord' );">
                <i class="fas fa-w fa-plus"></i>
                Nuevo
              </button>
              <button href="" class="btn btn-primary btn-sm" onclick="openModal('editRecord');">
                <i class="fas fa-w fa-edit"></i>
                Editar
              </button>
              <button href="" class="btn btn-danger btn-sm" id="btnDeleteRecord">
                <i class="fas fa-w fa-eraser"></i>
                Eliminar
              </button>
                
            </li>
          </ul>
        </div>
    

  </div>
  
  <!-- budget rental -->
  <div class="tab-pane fade" id="rental" role="tabpanel" aria-labelledby="profile-tab">
    
    <div class="card">
      <div class="card-header" style="background-color: #c7edf7;">
        <i class="fas fa-w fa-truck mr-2"></i>
        alquiler:
      </div>
        <!-- Tabla -->
        <table class="table">
          <thead class="text-center thead-dark">
            <th>#:</th>
            <th>Nombre:</th>
            <th>Cantidad:</th>
            <th>Precio unitario: $</th>
          </thead>
          <tbody class="text-center">
            
            @for( $i = 1; $i <= 3; $i++ )
                  <tr>
                    <td>
                      <input type="radio" name="idRental" id="idItem" class="form-control" value="{{ $i }}">
                    </td>
                    <td>nombre</td>
                    <td>2</td>
                    <td>2500</td>
                  </tr>
              @endfor

          </tbody>
        </table>

        <ul class="list-group list-group-flush">
          <li class="list-group-item text-center">
            <button href="" class="btn btn-success btn-sm" onclick="openModal( 'addRental' )">
              <i class="fas fa-w fa-plus"></i> 
              Nuevo
            </button>
            <button href="" class="btn btn-primary btn-sm" onclick="openModal( 'editRental' )">
              <i class="fas fa-w fa-edit"></i>
              Editar
            </button>
            <button href="" class="btn btn-danger btn-sm" id="btnDeleteRental">
              <i class="fas fa-w fa-eraser"></i>
              Eliminar
            </button>
                
          </li>
        </ul>
      </div>

  </div>
</div>