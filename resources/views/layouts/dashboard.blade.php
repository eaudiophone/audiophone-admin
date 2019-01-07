<!DOCTYPE HTML>
<html lang="es_VE">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title> @yield('title') </title>

	<!-- Boostrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/vendor/bootstrap.min.css')}}">

	<!-- Fontawesome -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">

	<!-- Main Theme -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
	<link rel="shorcut icon" type="image/png" href="{{asset('img/Logo 01.png')}}">
</head>

<body>
	<nav class="navbar navbar-expand navbar-dark bg-dark sticky-top">

		<!-- Logo de la empresa -->
		<a href="" class="navbar-brand mr-1">Audiophone</a>	

	
		<!-- Navbar -->
		<ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">

			<!-- Servicios -->
			<li class="nav-item dropdown no-arrow mx-1">
				<a href="" class="nav-link dropdown-toggle" id="servicesDropdown"
				role="button" data-toggle="dropdown" aria-haspopup="true"
				aria-expanded="false">
					<i class="fas fa-w fa-star"></i>
				</a>

				<div class="dropdown-menu dropdown-menu-right" 
				aria-labelledby="servicesDropdown">
					<a href="" class="dropdown-item">
						<i class="fas fa-w fa-truck"></i>
						<span>Alquiler</span>
					</a>
					<a href="" class="dropdown-item">
						<i class="fas fa-w fa-clipboard-check"></i>
						<span>Diagnosticos</span>
					</a>
					<a href="" class="dropdown-item">
						<i class="fas fa-w fa-microphone"></i>
						<span>Grabaciones</span>
					</a>

					<div class="dropdown-divider"></div>

					<a href="" class="dropdown-item" data-toggle="modal" data-target="#modalInfo">
						<i class="fas fa-w fa-info"></i>
						<span>Acerca de</span>
					</a>

				</div>
			</li>

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
					<a href="" class="dropdown-item">Perfil</a>
					<a href="" class="dropdown-item">Actividad del usuario</a>
					<div class="dropdown-divider"></div>
					<a href="" class="dropdown-item">Salir</a>
				</div>
			</li>
		</ul>

	</nav> <!-- Fin del navbar -->

	<!-- Panel lateral -->

	<div class="contaner-fluid">
		<div class="row">
			<div class="col-sm-3 d-none d-md-block bg-light sidebar">
				<div class="sidebar-sticky">

					<h6>Agendar Servicios</h6>

					<ul class="nav flex-column">
						<li class="nav-item">
							<a href="" class="nav-link">
								<i class="fas fa-w fa-truck"></i>
								<span>Alquiler</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link">
								<i class="fas fa-w fa-clipboard-check"></i>
								<span>Diagnosticos</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link">
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
	
		@yield('content') 

	</div>
	<div>
		<!-- Espaciado -->
		<br><br>
	</div>

	<!-- Ventanas Modales -->
	@include('layouts.modalDashboard')
	
	<!-- JQuery -->
	<script type="text/javascript" src="{{asset('js/vendor/jquery.js')}}"></script>
	
	<!-- Bootstrap min.js -->
	<script text="text/javascript" src="{{asset('js/vendor/bootstrap.min.js')}}"></script>

	<!-- fullcalendar idioma español -->
	<script type="text/javascript" src="{{asset('js/vendor/moment.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/vendor/fullcalendar.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/vendor/fullcalendar.min.css')}}">
	<script type="text/javascript" src="{{asset('js/custom_calendar.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/vendor/es.js')}}"></script>	

</body>
</html>
