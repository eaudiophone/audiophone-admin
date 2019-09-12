@section( 'title', 'recovery' )
@include( 'layouts/head' )

	<link rel="stylesheet" href="{{ asset( config( 'assets.RECOVERY' ) ) }}">

	<!-- Logo del estudio -->
	<center>
		<img src="{{ asset( config( 'assets.LOGO' ))}}" class="mb-4" alt="imagen-principal" id="logo">
	</center>

		<h3 class="text-center">Recuperación de contraseña</h3>

	<!-- Contenedor 1 -->

	<div class="container">
		<div class="card card-register mx-auto mt-5">
			
			<!-- Cabecera -->
			<div class="card-header">
				
				<h5 class="text-center">Ingrese los datos:</h5>
				
			</div>

			<div class="card-body">

				<!-- Form User  -->
				<form>
					<div class="form-group">
						<div class="form-row">
						
							<!-- Formulario el correo -->
							<div class="col-sm-12">
								<div class="form-label-group">
									<label for="email">Correo Electrónico:</label>
									<input type="email" id="email" class="form-control"
									placeholder="correo electrónico ..." required autofocus>
								</div>
							</div>
						</div> 
						
						<!-- Botones -->
						<div class="form-row" id="separar">

							<div class="col-sm-6" >
								<button type="submit" class="btn btn-primary btn-block">
									Recuperar contraseña
								</button>
							</div>

							<div class="col-sm-6">
								<button type="reset" class="btn btn-default btn-block">
									Cancelar
								</button>
							</div>
						</div>	
				</form>
			</div>
		</div>
	</div>

	<div class="container mb-4 mt-5">
		<div class="row text-center">
			<div class="col-sm-6">
				<a href="/">Login</a>
			</div>
			<div class="col-sm-6">
				<a href="/user/createUser">Registro</a>
			</div>
		</div>
	</div>

@include( 'layouts/footer' )