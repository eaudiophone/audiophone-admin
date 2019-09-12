<!-- Panel lateral -->

	<div class="contaner-fluid">
		<div class="row">
			<div class="col-sm-3 d-none d-md-block bg-light sidebar">
				<div class="sidebar-sticky">

					<h6>Agendar Servicios</h6>

					<ul class="nav flex-column">
						<li class="nav-item">
							<a href="{{ url('rental') }}" class="nav-link">
								<i class="fas fa-w fa-truck"></i>
								<span>Alquiler</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ url('diagnostic') }}" class="nav-link">
								<i class="fas fa-w fa-clipboard-check"></i>
								<span>Diagnosticos</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ url('records') }}" class="nav-link">
								<i class="fas fa-w fa-microphone"></i>
								<span>Grabaciones</span>
							</a>
						</li>

						<h6>Más información</h6>

						<li class="nav-item">
							<a href="" class="nav-link" data-toggle="modal" data-target="#modalInfo">
								<i class="fas fa-w fa-info"></i>
								<span>Acerca de</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div> <!-- Fin del panel lateral -->