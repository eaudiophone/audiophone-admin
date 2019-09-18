	<!--Dias de servicio -->
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-records" role="tab" aria-controls="nav-home" aria-selected="true">
    	Grabaciones
	</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-rental" role="tab" aria-controls="nav-profile" aria-selected="false">
    	Alquiler
    </a>
  </div>
</nav>

<!-- contenido  -->
<div class="tab-content pt-3" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-records" role="tabpanel" aria-labelledby="nav-home-tab">

	<div class="card">
		<div class="card-header" style="background-color: #f7eda0">
			<i class="fas fa-w fa-microphone" style="padding-right: 10px;"></i>
			grabaciones
		</div>

		<div class="card-body p-0">

			<table class="table table-striped">
			
				<thead class="thead-dark text-center">
					<th>Términos</th>
					<th>Detalles</th>
				</thead>

				<tbody class="text-center">
				
					<tr>
						<td>citas semanales</td>
						<td>2</td>
					</tr>
					<tr>
						<td>citas mensuales</td>
						<td>3</td>
					</tr>
					<tr>
						<td>Días de citas</td>
						<td>lunes</td>
					</tr>
					<tr>
						<td>Hora de inicio</td>
						<td>09:00:00</td>
					</tr>
					<tr>
						<td>Hora de cierre</td>
						<td>18:00:00</td>
					</tr>
				</tbody>
			
			</table>

			<button class="btn btn-primary btn-sm mb-3" id="btnGrabacion">
				<i class="fas fa-w fa-edit"></i>
				Editar D. de Grabación
			</button>
		</div>
	</div>
  </div>

  <div class="tab-pane fade" id="nav-rental" role="tabpanel" aria-labelledby="nav-profile-tab">
  	
  	<div class="card">
		<div class="card-header text-center" style="background-color: #c7edf7;">
			<i class="fas fa-w fa-truck" style="padding-right: 10px;"></i>
			alquiler
		</div>
				
		
		<div class="card-body m-0 p-0">
			
			<table class="table table-striped">
			
				<thead class="thead-dark text-center">
					<th>Términos</th>
					<th>Detalles</th>
				</thead>

				<tbody class="text-center">
				
					<tr>
						<td>citas semanales</td>
						<td>2</td>
					</tr>
					<tr>
						<td>citas mensuales</td>
						<td>3</td>
					</tr>
					<tr>
						<td>Días de citas</td>
						<td>lunes</td>
					</tr>
					<tr>
						<td>Hora de inicio</td>
						<td>09:00:00</td>
					</tr>
					<tr>
						<td>Hora de cierre</td>
						<td>18:00:00</td>
					</tr>
				</tbody>
			
			</table>

			<button class="btn btn-primary btn-sm mb-3" id="btnAlquiler">
				<i class="fas fa-w fa-edit"></i>
				Editar D. de Diagnosticos
			</button>
		</div>
	</div>

  </div><br>

</div>

