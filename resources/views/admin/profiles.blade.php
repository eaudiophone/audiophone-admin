@extends('layouts.dashboardAdmin')
@section('title', 'Perfiles de Usuario')
@section('content')
	
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
	
	<!--Contenido-->
	<main class="col-md-9 ml-sm-auto col-lg-9 pt-3 px-4">

		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
		align-items-center pb-2 mb-3 border-bottom">

			<h1>Perfiles de Usuario</h1>

			<!-- Grupo de botones -->
			<div class="btn-toolbar mb-2 mb-md-0">
				<div class="btn-group mr-2">
					<button type="button" class="btn btn-sm btn-info" data-toggle="modal" 
					data-target="#modalPerfil">
						<i class="fas fa-w fa-info-circle"></i>
						Información
					</button>
					<button type="button" class="btn btn-sm btn-warning">
						<i class="fas fa-w fa-user"></i>
						Nuevo Administrador
					</button>
				</div>
			</div>
		</div> 

		<!-- Colocar aqui el buscador de usuarios: -->
		@include('admin.search')

		<!-- tabla de datos -->
		<table class="table table-striped">
			<thead class="thead-dark">
				<tr id="center">
					<th>#:</th>
					<th>Nombre:</th>
					<th>Correo:</th>
					<th>Acción:</th>
				</tr>
			</thead>
			<tbody id="center">
				<tr>
					<td>1</td>
					<td>dato</td>
					<td>dato</td>
					<td>dato</td>
				</tr>
			</tbody>
		</table>

		<!-- incluir la paginación -->

@endsection