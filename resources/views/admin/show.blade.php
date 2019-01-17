@extends('layouts.dashboardAdmin')
@section('title', 'Perfil de Usuario')
@section('content')

	<!-- Contenido -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/user.css')}}">

	<!-- Contenido -->
	<main class="col-md-9 ml-sm-auto col-lg-9 pt-3 px-4">
			
		<!-- Titulo -->
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
		align-items-center pb-2 mb-3 border-bottom">
				
			<h1>Perfil del Usuario</h1>
					
			<!-- grupo de botones -->
			<div class="btn-toolbar mb-2 mb-md-0">
				<div class="btn-group mr-3">
					<a href="profiles" class="btn btn-sm btn-secondary">
						Volver
					</a>
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
									<th>Dirección:</th>
									<td>dirección</td>
								</tr>
								<tr>
									<th>Redes Sociales:</th>
									<td>red</td>
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
								<tr>
									<th>Teléfono Local:</th>
									<td>teléfono local</td>
								</tr>
								<tr>
									<th>País:</th>
									<td>país</td>
								</tr>
								<tr>
									<th>Tipo de perfil:</th>
									<td>tipo</td>
								</tr>
								<tr>
									<th>Activo:</th>
									<td>actividad</td>
								</tr>
							</tbody>
						</table>
					</center>
				</div>		
			</div>
		</div>

@endsection