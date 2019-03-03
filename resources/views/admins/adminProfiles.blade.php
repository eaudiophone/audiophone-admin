@extends('layouts.d_Admin')
@section('title', 'Perfil Administrador')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/user.css')}}">			
		<!-- Titulo -->
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
		align-items-center pb-2 mb-3 border-bottom">
				
			<h1>Perfil del Administrador</h1>
					
			<!-- grupo de botones -->

			<div class="btn-toolbar mb-2 mb-md-0">
				<div class="btn-group mr-2">
					<button class="btn btn-sm btn-outline-secondary">Editar Perfil</button>
					<button class="btn btn-sm btn-outline-secondary">Cambiar Contraseña</button>
				</div>
			</div>
		</div>
		
		<!-- Contenido -->

		<div class="container">
			<div class="row">
				<div class="offset-sm-1 col-sm-10">

					<center>
						<img src="{{asset('img/avatar_300x300.png')}}" alt="avatar">
					
						<!-- Tabla usuario -->
						<table>
							<tbody>
								<tr>
									<th>Nombre:</th>
									<td>nombre</td>
								</tr>
								<tr>
									<th>Apellido:</th>
									<td>apellido</td>
								</tr>
								<tr>
									<th>Email:</th>
									<td>email</td>
								</tr>
								<tr>
									<th>Código telefonico:</th>
									<td>código telefonico</td>
								</tr>
								<tr>
									<th>Teléfono Celular:</th>
									<td>teléfono celular</td>
								</tr>
							</tbody>
						</table>
					</center>
				</div>		
			</div>
		</div>

@endsection