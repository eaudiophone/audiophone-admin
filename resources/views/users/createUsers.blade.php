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
	<h3 class="text-center">Registro de usuarios <br> Datos Básicos</h3>

	<!-- Contenedor 1 -->

	<div class="container">
		<div class="card card-register mx-auto mt-5">
			
			<!-- Cabecera -->
			<div class="card-header">
				
				<div class="container">

					<div class="row">
						<div class="col-sm-12" id="title">
							<h5 class="text-center">Barra de Progreso</h5>
						</div>
					</div>
					<div class="row" id="progress-bar">
						
						<div class="col-sm-12">
							<div class="progress" >
								<div class="progress-bar" role="progressbar" style="width: 0%" 
								aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
									0%
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>

			<div class="card-body">

				<!-- Form User  -->
				<form action="" method="POST">
					<div class="form-group">
						<div class="form-row">
						
							<div class="col-sm-6">
								<div class="form-label-group">
									<label for="firstName">Nombres:</label>
									<input type="text" id="firstName" class="form-control"
									placeholder="nombre ..." name="firstName" maxlength="10"
									pattern="[A-Z a-z]+" required autofocus>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-label-group">
									<label for="lastName">Apellidos:</label>
									<input type="text" id="lastName" class="form-control"
									placeholder="apellido ..." name="lastName" maxlength="10"
									pattern="[A-Z a-z]+" required autofocus>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-sm-6">
								<label for="cod_phone">Codigo teléfonico:</label>
								<select name="codePhone" id="cod_phone" class="form-control" required>
									<option value="" selected>Seleccione ...</option>
									<option value="58">+58 Venezuela</option>
								</select>
							</div>

							<div class="col-sm-6">
								<label for="cellPhone">Teléfono celular:</label>
								<input type="text" id="cellPhone" class="form-control" placeholder="telefono ..."
								name="cellPhone" maxlength="10" pattern="[0-9]+" required autofocus>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row">

							<div class="col-sm-6">
								<button type="submit" class="btn btn-primary btn-block">
									Registrar
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
				<a href="{{url('/')}}">Login</a>
			</div>
			<div class="col-sm-6">
				<a href="{{url('/users/recoveryPasswords')}}">Recuperar Contraseña</a>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script type="text/javascript" src="{{asset('js/vendor/jquery.js')}}"></script>
	<script text="text/javascript" src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
</body>

</html>	