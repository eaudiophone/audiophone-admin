@section( 'title', 'login' )
@include( 'layouts/head' )

	<link rel="stylesheet" href="{{ asset( config( 'assets.LOGIN' ) ) }}">

	<form class="form-signin">

		<!-- Logo del estudio -->
		<center>
			<img src="{{ asset( config( 'assets.LOGO' ) ) }}" class="mt-5" alt="imagen-principal" id="logo">
		</center>
		
		<!-- Titulo -->
		<h1 class="h3 mb-3 font-weight-normal">Sign in</h1>

		<label for="inputEmail" class="sr-only">Email address</label>
		<input type="email" id="inmputEmail" class="form-control" 
		placeholder="correo electronico" required autofocus>

		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" class="form-control"
		placeholder="contraseña" required>

		<!-- Button -->
		<button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
		<button class="btn btn-lg btn-default btn-block" type="reset">Cancelar</button>

		<!-- Link de registro -->
		<div class="links text-center">
			<p>
				¿Es la primera vez? 
				<a href="/user/createUser">Regístrese</a>
			</p>
			<p>
				¿Olvido su contraseña?
				<a href="user/recoveryPassword">Recuperar</a>
			</p>
			
		</div>

		<p class="mt-5 mb-3 text-muted text-center">&copy; Audiophone 2018</p>

	</form>

@include( 'layouts/footer' )