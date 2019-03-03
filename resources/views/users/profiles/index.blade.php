@extends('layouts.dashboard')
@section('title', 'Perfil') <!-- Agrega el nombre de la página -->
@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/user.css')}}">
			
	<!-- Titulo -->

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
	align-items-center pb-2 mb-3 border-bottom">
				
		<h1>Perfil del Usuario</h1>
					
		<!-- grupo de botones -->

		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<button class="btn btn-sm btn-outline-secondary" onclick="activateProfile();">Editar Perfil</button>
				<button class="btn btn-sm btn-outline-secondary" onclick="activatePassword();">Cambiar Contraseña</button>
			</div>
		</div>
	</div>
		
	<!-- Contenido -->
	<div class="container">
		<div class="row">
			<div class="offset-sm-1 col-sm-10">
				<center>
					<img src="{{asset('img/avatar_300x300.png')}}" alt="avatar">
				</center>	
				<h4>Datos personales:</h4>
				<!-- formulario usuario -->
				<form action="" name="formUser" autocomplete="off">
					<div class="form-group row">
						<label for="firstName" class="col-sm-2 col-form-label">Nombre:</label>
						<div class="col-md-10">
							<input type="text" id="firstName" class="form-control"
							placeholder="nombre ..." name="firstName" maxlength="10"
							pattern="[A-Z a-z]+" required disabled>
						</div>
					</div>
					<div class="form-group row">
						<label for="lastName" class="col-sm-2 col-form-label">Apellido:</label>
						<div class="col-md-10">
							<input type="text" id="lastName" class="form-control"
							placeholder="apellido ..." name="lastName" maxlength="10"
							pattern="[A-Z a-z]+" required disabled>
						</div>
					</div>
					<div class="form-group row">
						<label for="cod_phone" class="col-sm-2 col-form-label">Código Teléfonico:</label>
						<div class="col-md-10">
							<select name="codePhone" id="cod_phone" name="codePhone" class="form-control"  disabled required>
								<option value="" selected>Seleccione ...</option>
								<option value="58">+58 Venezuela</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="cellPhone" class="col-sm-2 col-form-label">Teléfono Célular:</label>
						<div class="col-md-10">
							<input type="text" id="cellPhone" class="form-control" placeholder="telefono ..."
							name="cellPhone" maxlength="10" pattern="[0-9]+" required autofocus disabled>
						</div>
					</div>
					<button type="submit" class="btn btn-primary" name="boton1" disabled>
						<i class="fas fa-w fa-edit"></i> Cambiar
					</button>
					<button type="reset" class="btn btn-danger" name="boton2" disabled>
						<i class="fas fa-w fa-times"></i> Cancelar
					</button>
				</form>
				<!-- formulario contraseña -->
				<br><h4>Cuenta del usuario:</h4>
				<form action="" name="formAccounts">
					<div class="form-group row">
						<label for="email" class="col-sm-2 col-form-label">Correo:</label>
						<div class="col-sm-9">
							<input type="email" name="email" id="email" class="form-control"
							placeholder="correo ..." required autofocus disabled>
						</div>
					</div>
					<div class="form-group row">
						<label for="password" class="col-sm-2 col-form-label">Contraseña:</label>
						<div class="col-sm-9">
							<input type="password" id="password" name="password" class="form-control"
							minlength="8" maxlength="15" required autofocus disabled>
						</div>
					</div>
					<!-- Clave foránea -->
					<div class="form-group row">
						<div class="col-sm-12">
							<input type="hidden" class="form-control" id="User_idUser"
							value="" required>
						</div>
					</div>
					<button type="submit" class="btn btn-primary" name="boton3" disabled>
						<i class="fas fa-w fa-edit"></i> Cambiar
					</button>
					<button type="reset" class="btn btn-danger" name="boton4" disabled>
						<i class="fas fa-w fa-times"></i> Cancelar
					</button>
				</form>
			</div>		
		</div>
	</div>
@endsection 