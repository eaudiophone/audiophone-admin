<div class="container">

    <div class="row">
      
      @for( $i = 1; $i <= 4; $i++ )
        
        <div class="col-sm-6">
            
          <div class="card">
              <div class="card-body" style="background-color: #f7eda0;">

                <div class="row">
                  <div class="col-sm-1">
                    <i class="fas fa-w fa-microphone"></i>
                  </div>

                  <div class="col-sm-9">
                    <h5 class="card-title">Grabación {{ $i }}</h5>
                  </div>

                  <div class="col-sm-1">
                    <i class="fas fa-w fa-times"></i>
                  </div>
                </div>

                <h6 class="card-subtitle mb-2 text-muted text-left pt-2">
                  Fecha del evento:
                </h6>
                
                 <div class="row text-center pt-2">

                  <div class="col-sm-6">
                    <h5><span class="badge badge-secondary">
                      <i class="fas fa-w fa-clock"></i>
                      Inicio: {{ $i }}
                    </span></h5>  
                  </div>

                  <div class="col-sm-6">
                    <h5><span class="badge badge-secondary">
                      <i class="fas fa-w fa-clock"></i>
                      Cierre: {{ $i }}
                    </span></h5>  
                  </div>          
                </div>

                <p class="card-text pt-2">
                  Descripcion del evento
                </p>
                
                <center>
                   <a href="#" class="card-link">Modificar</a>  
                </center>
            </div>

          </div><br>

        </div> 

      @endfor

    </div>
	</div>