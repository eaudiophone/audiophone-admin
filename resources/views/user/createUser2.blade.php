@section( 'title', 'register' )
@include( 'layouts/head' )

	<link rel="stylesheet" href="{{ asset( config( 'assets.REGISTER' ) ) }}">

	<!-- Logo del estudio -->
	<center>
		<img src="{{asset( config( 'assets.LOGO' ) )}}" class="mb-4" alt="imagen-principal" id="logo">
	</center>

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
						
						<div class="col-sm-12">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 0%" 
								aria-valuenow="33.3" aria-valuemin="0" aria-valuemax="100" id="bar">
									<!-- Valor interno de la barra -->
									33.3%
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

	@include( 'layouts/backOptions' )

	<script>

		document.addEventListener( 'DOMContentLoaded', () => {

			var progreso = 0;
			var barra = document.getElementById( 'bar' );

			var idInterval = setInterval( () => {

				progreso += 33.3;
				barra.style.width = `${ progreso }%`;

				if ( progreso == 33.3 ) {

					clearInterval( idInterval );
				}
			}, 500);
		});

	</script>

@include( 'layouts/footer' )	

	

