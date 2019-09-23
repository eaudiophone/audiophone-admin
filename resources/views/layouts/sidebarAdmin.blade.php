	<div class="contaner-fluid">
		<div class="row">
			<div class="col-sm-3 d-none d-md-block bg-light sidebar">
				<div class="sidebar-sticky">

					<h6>Gestionar Servicios</h6>

					<ul class="nav flex-column">
						<li class="nav-item">
							<a href="{{ url('admin') }}" class="nav-link">
								<i class="far fa-w fa-calendar"></i>
								<span>Agenda de trabajo</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ url('profiles') }}" class="nav-link">
								<i class="fas fa-w fa-user"></i>
								<span>Usuarios</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ url('days') }}" class="nav-link">
								<i class="fas fa-w fa-sun"></i>
								<span>Días de Servicios</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ url('budget') }}" class="nav-link">
								<i class="fas fa-w fa-clipboard"></i>
								<span>Presupuesto</span>
							</a>
						</li>
						<h6>Más información</h6>
	
						<li class="nav-item">
							<a href="#" class="nav-link" data-toggle="modal" data-target="#modalInfo">
								<i class="fas fa-w fa-info"></i>
								<span>Acerca de:</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div> <!-- Fin del panel lateral -->