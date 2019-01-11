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
		<h3 class="text-center">Registro de usuarios <br> Datos de Contacto</h3>

	<!-- Contenedor 3 -->

	<!-- Contenedor 3 -->

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
						<div class="col-sm-12">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 0%" 
								aria-valuenow="66.6" aria-valuemin="0" aria-valuemax="100" id="bar">
									<!-- Valor interno de la barra -->
									66.6%
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="card-body">
				
				<form>

					<div class="form-group">
						<div class="form-row">
							<label for="localPhone">Teléfono Local:</label>
							<input type="text" id="localPhone" class="form-control" placeholder="telefono local ..." required autofocus>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							
							<div class="col-sm-6">
								<label for="codePhone">Código Teléfonico</label>
								<select id="codePhone" class="form-control">
									<option value="" selected>Seleccione ...</option>
									<option value="">+58 Venezuela</option>
									<option value="">+57 Colombia</option>
								</select>
							</div>


							<div class="col-sm-6">
								<label for="cellPhone">Teléfono Celular:</label>
								<input type="text" id="cellPhone" class="form-control"
								placeholder="telefono celular ..." required autofocus>
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
				<a href="" class="">Olvido Contraseña</a>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script type="text/javascript" src="{{asset('js/vendor/jquery.js')}}"></script>
	<script text="text/javascript" src="{{asset('js/vendor/bootstrap.min.js')}}"></script>

	<script>

		//animacion de progress bar (JavaScript)
			var progreso = 0;

			var idInterval = setInterval(function() {

				//aumento del 10 en el progreso
				progreso += 66.6;
				$('#bar').css('width', progreso + '%');

				if (progreso == 66.6) {

					clearInterval(idInterval);
				}
			},

			//cantidad de segundos
			500);

	</script>

	</body>
</html>	