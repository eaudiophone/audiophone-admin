	<nav class="navbar navbar-expand navbar-dark bg-dark sticky-top">

		<!-- Logo de la empresa -->
		<a href="" class="navbar-brand mr-1">Audiophone</a>	

	
		<!-- Navbar -->
		<ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">

			<!-- Alertas -->
			<li class="nav-item dropdown no-arrow mx-1">
				<a href="" class="nav-link dropdown-toogle" id="alertsDropdown" role="button"
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-bell fa-fw"></i>
					<!--<span class="badge badge-danger">+9</span> -->
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
					<a href="" class="dropdown-item">No posee Notificaciones</a>
					<div class="dropdown-divider"></div>
					<a href="" class="dropdown-item">No posee Notificaciones</a>
				</div>
			</li>

			<!-- Mensajes -->
			<li class="nav-item dropdown no-arrow mx-1">
				<a href="" class="nav-link dropdown-toogle" id="messagesDropdown" role="button"
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-envelope fa-fw"></i>
					<!--<span class="badge badge-danger">7</span> -->
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
					<a href="" class="dropdown-item">No posee correos</a>
					<div class="dropdown-divider"></div>
					<a href="" class="dropdown-item">No posee correos</a>
				</div>
			</li>

			<!-- Usuarios -->
			<li class="nav-item dropdown no-arrow">
				<a href="" class="nav-link dropdown-toggle" id="userDropdown" role="button" 
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-user-circle fa-fw"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<a href="{{ url('account') }}" class="dropdown-item">Perfil</a>
					<div class="dropdown-divider"></div>
					<a href="{{ url('/') }}" class="dropdown-item">Salir</a>
				</div>
			</li>
		</ul>

	</nav> <!-- Fin del navbar -->