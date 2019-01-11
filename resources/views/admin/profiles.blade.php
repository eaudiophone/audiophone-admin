@extends('layouts.dashboardAdmin')
@section('title', 'Perfiles de Usuario')
@section('content')

	<!--Contenido-->
	<main class="col-md-9 ml-sm-auto col-lg-9 pt-3 px-4">

		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
		align-items-center pb-2 mb-3 border-bottom">

			<h1>Perfiles de usuario</h1>

			<!-- Grupo de botones -->
			<div class="btn-toolbar mb-2 mb-md-0">
				<div>
					<button type="button" class="btn btn-sm btn-info" data-toggle="modal" 
					data-target="#modalPerfil">
						<i class="fas fa-w fa-info-circle"></i>
						Información
					</button>
				</div>
			</div>
		</div>

@endsection