@extends('layouts.d_Admin')
@section('title', 'Días de Servicios')
@section('content')

	<link rel="stylesheet" href="{{asset('css/days.css')}}">
		<!-- Titulo -->
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
		align-items-center pb-2 mb-3 border-bottom">
				
			<h1>Días de Servicios</h1>
					
			<!-- grupo de botones -->
			<div>
				<div>
					<a href="profiles" class="btn btn-sm btn-info" data-toggle="modal" 
					data-target="#modalTerminos">
						<i class="fas fa-w fa-info-circle"></i>
						Información
					</a>
				</div>
			</div>
		</div>
		
		<!--Dias de servicio -->
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<!-- Contenido -->
					<div class="card">
						<div class="card-header">
							Grabaciones
						</div>
						<!-- Incluir los terminos aquí -->
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Elemento1</li>
							<li class="list-group-item">Elemento2</li>
							<li class="list-group-item">Elemento3</li>
							<li class="list-group-item">Elemento4</li>
						</ul>
						<div class="card-body">
							<button class="btn btn-primary btn-sm" data-toggle="modal" 
								data-target="#modal_D_Grabacion">
								<i class="fas fa-w fa-edit"></i>
								Editar D. de Grabación
							</button>
						</div>
					</div>
				</div>
				<div class="col-sm-6" id="bajar">
					<div class="card">
						<div class="card-header text-center">
							Diagnosticos
						</div>
						<!-- Incluir los terminos aquí -->
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Elemento1</li>
							<li class="list-group-item">Elemento2</li>
							<li class="list-group-item">Elemento3</li>
							<li class="list-group-item">Elemento4</li>
						</ul>
						<div class="card-body">
							<button class="btn btn-primary btn-sm" data-toggle="modal" 
								data-target="#modal_D_Diagnostico">
								<i class="fas fa-w fa-edit"></i>
								Editar D. de Diagnosticos
							</button>
						</div>
					</div>
				</div>

				
				<div class="col-sm-12" id="bajar2">
					<div class="card">
						<div class="card-header">
							Alquiler de Equipos
						</div>
						<!-- Incluir los terminos aquí -->
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Elemento1</li>
							<li class="list-group-item">Elemento2</li>
							<li class="list-group-item">Elemento3</li>
							<li class="list-group-item">Elemento4</li>
						</ul>
						<div class="card-body">
							<button class="btn btn-primary btn-sm"  data-toggle="modal" 
								data-target="#modal_D_Renta">
								<i class="fas fa-w fa-edit"></i>
								Editar D. de Alquiler
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection