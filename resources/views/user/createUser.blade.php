@section( 'title', 'register' )
@include( 'layouts/head' )
	
	<link rel="stylesheet" href="{{ asset( config( 'assets.REGISTER' ) ) }}">

	<!-- Logo del estudio -->
	<center>
		<img src="{{ asset( config( 'assets.LOGO' ) )}}" class="mb-2" alt="imagen-principal" id="logo">
	</center>	

	<h3 class="text-center">Registro de usuarios <br> Datos Básicos</h3>

	<div class="container">
		<div class="card card-register mx-auto mt-5">
			
			<!-- Cabecera -->
			<div class="card-header">
				
				<div class="container">

					<div class="row">
						<div class="col-sm-12" id="title">
							<h5 class="text-center">Completa el registro</h5>
						</div>
					</div>
				</div>
				
			</div>

			<div class="card-body">

				<!-- Form User  -->
				<form action="" method="POST">

					<div class="form-group">
						<div class="form-row">
						
							<div class="col-sm-12">
								<div class="form-label-group">
									<label for="firstName">Nombre:</label>
									<input type="text" id="name" name="name" class="form-control"
									placeholder="nombre ..." required autofocus
									pattern="[A-Z a-z]*" title="solo letras"
									maxlength="25">
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-sm-6">
								<label for="age">Correo:</label>
								<input type="email" id="email" name="email" class="form-control"
								placeholder="correo ... " required autofocus>
							</div>

							<div class="col-sm-6">
								<label for="socialNetworks">Contraseña:</label>
								<input type="password" id="password" name="password" class="form-control" placeholder="contraseña ..." required autofocus minlength="8">
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

	@include( 'layouts/backOptions' )

@include( 'layouts/footer' )