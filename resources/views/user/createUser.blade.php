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
	
	<!-- Incluimos el script de AgularJS -->
	<script type="text/javascript" src="{{asset('js/vendor/angular.min.js')}}"></script>

</head>

<body>

	<h3 class="text-center">Registro de usuarios</h3>

	<!-- Contenedor 1 -->

	<div class="container">
		<div class="card card-register mx-auto mt-5">
			
			<!-- Cabecera -->
			<div class="card-header">
				Datos Básicos. Paso 1 de 3
			</div>

			<div class="card-body">

				<!-- Form User  -->
				<form>
					<div class="form-group">
						<div class="form-row">
						
							<div class="col-sm-6">
								<div class="form-label-group">
									<label for="firstName">FirstName:</label>
									<input type="text" id="firstName" class="form-control"
									placeholder="firstName ..." required autofocus>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-label-group">
									<label for="lastName">LastName:</label>
									<input type="text" id="lastName" class="form-control"
									placeholder="lastName ..." required autofocus>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-sm-6">
								<label for="age">Age:</label>
								<input type="text" id="age" class="form-control"
								placeholder="age ... " required autofocus>
							</div>

							<div class="col-sm-6">
								<label for="socialNetworks">SocialNetwoks:</label>
								<input type="text" id="socialNetworks" class="form-control" placeholder="enlace ..." autofocus>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<label for="address">Address:</label>
							<textarea class="form-control" id="address"
							placeholder="address ..." required></textarea>
						</div>
					</div>

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

	<!-- Contenedor 2 -->

	<div class="container">
		<div class="card card-register mx-auto mt-5">
			
			<div class="card-header">
				Registro de cuenta. Paso 2 de 3
			</div>

			<div class="card-body">
				
				<form>
					<div class="form-group">
						<div class="form-row">
							<label for="email">Email:</label>
							<input type="email" id="email" class="form-control"
							placeholder="email ..." required autofocus>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-sm-6">
								<label for="password">Password:</label>
								<input type="password" id="password" class="form-control" placeholder="password ..." required autofocus>
							</div>

							<div class="col-sm-6">
								<label for="verifyPassword">Verify Password:</label>
								<input type="password" id="verifyPassword" class="form-control" placeholder="verify password ..." required autofocus>
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

	<!-- Contenedor 3 -->

	<div class="container">
		<div class="card card-register mx-auto mt-5">
			
			<div class="card-header">
				Datos de contacto: Paso 3 de 3
			</div>

			<div class="card-body">
				
				<form>

					<div class="form-group">
						<div class="form-row">
							<label for="localPhone">Local phone:</label>
							<input type="text" id="localPhone" class="form-control" placeholder="local phone ..." required autofocus>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							
							<div class="col-sm-6">
								<label for="codePhone">Code phone</label>
								<select id="codePhone" class="form-control">
									<option value="" selected>Seleccione ...</option>
									<option value="">+58 Venezuela</option>
									<option value="">+57 Colombia</option>
								</select>
							</div>


							<div class="col-sm-6">
								<label for="cellPhone">Cell phone:</label>
								<input type="text" id="cellPhone" class="form-control"
								placeholder="cell phone ..." required autofocus>
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
				<a href="" class="">Login</a>
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