<!DOCTYPE HTML>
<html lang="es_VE">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Register</title>

		<!-- Boostrap CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('css/vendor/bootstrap.min.css')}}">
		<!-- Fontawesome -->
		<link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">

		<!-- Main theme-->
		<link rel="shorcut icon" type="image/png" href="{{asset('img/Logo 01.png')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/register.css')}}">
	</head>

	<body>
		<h3 class="text-center">Registro de usuarios <br> Datos de Cuenta</h3>

		<!-- Contenedor 2 -->

	<div class="container">
		<div class="card card-register mx-auto mt-5">
			
			<div class="card-header">
				
				<div class="container">

					<div class="row">
						<div class="col-sm-12" id="title">
							<h5 class="text-center">Barra de Progreso</h5>
						</div>
					</div>
					<div class="row" id="progress-bar">
						
						<div class="col-sm-10">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 33.3%" 
								aria-valuenow="33.3" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						
						<div class="col-sm-2">
							<strong>33.3%</strong>
						</div>
					</div>
				</div>
			</div>

			<div class="card-body">
				
				<form>
					<div class="form-group">
						<div class="form-row">
							<label for="email">Correo Electrónico:</label>
							<input type="email" id="email" class="form-control"
							placeholder="correo electrónico ..." required autofocus>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-sm-6">
								<label for="password">Contraseña:</label>
								<input type="password" id="password" class="form-control" placeholder="contraseña ..." required autofocus>
							</div>

							<div class="col-sm-6">
								<label for="verifyPassword">Verificar Contraseña:</label>
								<input type="password" id="verifyPassword" class="form-control" placeholder="verificar contraseña ..." required autofocus>
							</div>
						</div>
					</div>

					<!-- Clave foránea -->
					<div class="form-group">
						<div class="form-row">
							<input type="hidden" class="form-control" id="User_idUser"
							value="" placeholder="User_idUser" required>
						</div>
					</div>

					<!-- Botones -->
					<div class="form-group">
						<div class="form-row">

							<div class="col-sm-6">
								<button type="submit" class="btn btn-primary btn-block">
									Register
								</button>
							</div>

							<div class="col-sm-6">
								<button type="reset" class="btn btn-default btn-block">
									Cancelar
								</button>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row" id="center">
			<div class="col-sm-6">
				<a href="/" class="">Login</a>
			</div>
			<div class="col-sm-6">
				<a href="" class="">Forgot password</a>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script type="text/javascript" src="{{asset('js/vendor/jquery.js')}}"></script>
	<script text="text/javascript" src="{{asset('js/vendor/bootstrap.min.js')}}"></script>

	</body>
</html>	