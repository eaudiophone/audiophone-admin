<!DOCTYPE HTML>
<html lang="es_VE">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title> @yield('title') </title>

	<!-- Boostrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/vendor/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/vendor/fullcalendar.min.css')}}">

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
					<a href="{{url('/admin/index')}}" class="dropdown-item">
						<i class="fas fa-w fa-calendar"></i>
						<span>Agenda</span>
					</a>
					<a href="{{url('/admin/profiles')}}" class="dropdown-item">
						<i class="fas fa-w fa-user"></i>
						<span>Usuarios</span>
					</a>
					<a href="{{url('/admin/days')}}" class="dropdown-item">
						<i class="fas fa-w fa-sun"></i>
						<span>Días de Servicios</span>
					</a>
					<a href="{{url('/admin/budget')}}" class="dropdown-item">
						<i class="fas fa-w fa-clipboard"></i>
						<span>Presupuesto</span>
					</a>
					<div class="dropdown-divider"></div>
					<a href="{{url('/admin/estadistic')}}" class="dropdown-item">
						<i class="fas fa-w fa-chart-line"></i>
						<span>Estadisticas</span>
					</a>	
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
					<a href="{{url('/admin/adminProfile')}}" class="dropdown-item">Perfil</a>
					<div class="dropdown-divider"></div>
					<a href="{{url('/')}}" class="dropdown-item">Salir</a>
				</div>
			</li>
		</ul>

	</nav> <!-- Fin del navbar -->

	<!-- Panel lateral -->

	<div class="contaner-fluid">
		<div class="row">
			<div class="col-sm-3 d-none d-md-block bg-light sidebar">
				<div class="sidebar-sticky">

					<h6>Gestionar Servicios</h6>

					<ul class="nav flex-column">
						<li class="nav-item">
							<a href="{{url('/admin/index')}}" class="nav-link">
								<i class="far fa-w fa-calendar"></i>
								<span>Agenda de trabajo</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{url('/admin/profiles')}}" class="nav-link">
								<i class="fas fa-w fa-user"></i>
								<span>Usuarios</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{url('/admin/days')}}" class="nav-link">
								<i class="fas fa-w fa-sun"></i>
								<span>Días de Servicios</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{url('/admin/budget')}}" class="nav-link">
								<i class="fas fa-w fa-clipboard"></i>
								<span>Presupuesto</span>
							</a>
						</li>
						<h6>Más información</h6>
						<li class="nav-item">
							<a href="../admin/estadistic" class="nav-link">
								<i class="fas fa-w fa-chart-line"></i>
								<span>Estadisticas</span>
							</a>
						</li>

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
		<main class="col-md-9 ml-sm-auto col-lg-9 pt-3 px-4">
			@yield('content')  
		</main>
	</div>
	<div>
		<!-- Espaciado -->
		<br><br>
	</div>

	<!-- Ventanas Modales --> 
	@include('layouts.modalDash')
	@include('layouts.modalDashAdmin')
	@include('layouts.modalCalendar')
	@include('layouts.modalBudget') 
	
	<!-- JQuery -->
	<script type="text/javascript" src="{{asset('js/vendor/jquery.js')}}"></script>
	
	<!-- Bootstrap min.js -->
	<script text="text/javascript" src="{{asset('js/vendor/bootstrap.min.js')}}"></script>

	<!-- fullcalendar idioma español -->
	<script type="text/javascript" src="{{asset('js/vendor/moment.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/vendor/fullcalendar.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/custom_calendar.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/vendor/es.js')}}"></script>	

</body>
</html>
