<!DOCTYPE html>
<html>
<head lang="es_VE">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login</title>

	<!-- Boostrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/vendor/bootstrap.min.css')}}">
	<!-- Fontawesome -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">
			<!-- login theme -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
	<link rel="shorcut icon" type="image/png" href="{{asset('img/Logo 01.png')}}">

	<!-- Incluimos el script de AgularJS -->
	<script type="text/javascript" src="{{asset('js/vendor/angular.min.js')}}"></script>

</head>
<body id="text-center">

	<form class="form-signin">

		<!-- Logo del estudio -->
		<center>
			<img src="{{asset('img/Logo 01.png')}}" class="mb-4" alt="imagen-principal" id="logo">
		</center>
		

		<!-- Titulo -->
		<h1 class="h3 mb-3 font-weight-normal">Sign in</h1>

		<!-- formulario1 -->
		<label for="inputEmail" class="sr-only">Email address</label>
		<input type="email" id="inmputEmail" class="form-control" 
		placeholder="correo electronico" required autofocus>

		<!-- Formulario2 -->
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" class="form-control"
		placeholder="password" required>

		<!-- Button -->
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		<button class="btn btn-lg btn-default btn-block" type="reset">Cancelar</button>

		<!-- Link de registro -->
		<div class="links">
			<p>
				¿Es la primera que ingresa? 
				<a href="">Regístrese</a>
			</p>
			<p>
				¿Olvido su contraseña?
				<a href="">Click aqui</a>
			</p>
			
		</div>

		<p class="mt-5 mb-3 text-muted text-center">&copy; Audiophone 2018</p>

	</form>

	<!-- JS -->
	<script type="text/javascript" src="{{asset('js/vendor/jquery.js')}}"></script>
	<script text="text/javascript" src="{{asset('js/vendor/bootstrap.min.js')}}"></script>

</body>
</html>	