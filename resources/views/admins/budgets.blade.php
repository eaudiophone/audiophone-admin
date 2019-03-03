@extends('layouts.d_Admin')
@section('title', 'Presupuesto')
@section('content')
	<link rel="stylesheet" href="{{asset('css/budget.css')}}">
		<!-- Titulo -->
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
		align-items-center pb-2 mb-3 border-bottom">
				
			<h1>Presupuesto</h1>
					
			<!-- grupo de botones -->
			<div class="btn-toolbar mb-2 mb-md-0">
				<div class="btn-group mr-2">
					<button type="button" class="btn btn-sm btn-info" data-toggle="modal" 
					data-target="#modal_Presupuesto">
						<i class="fas fa-w fa-info-circle"></i>
						Información
					</button>
					<button type="button" class="btn btn-sm btn-default">
						<i class="fas fa-w fa-clipboard"></i>
						Generar Presupuesto
					</button>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					
				</div>
			</div>
		</div>

		<!-- Preupuesto grabación -->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							Presupuesto de grabación:
						</div>
						<!-- Tabla -->
						<table class="table">
							<thead class="text-center thead-dark">
								<th>#:</th>
								<th>Item:</th>
								<th>Precio:</th>
							</thead>
							<tbody class="text-center">
								<tr>
									<td>1</td>
									<td>Item1</td>
									<td>Precio1</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Item2</td>
									<td>Precio2</td>
								</tr>
							</tbody>
						</table>

						<ul class="list-group list-group-flush">
							<li class="list-group-item text-center">
								<a href="" class="btn btn-success btn-sm" data-toggle="modal"
								data-target="#budget03">
									<i class="fas fa-w fa-plus"></i>
									Nuevo
								</a>
								<a href="" class="btn btn-primary btn-sm">
									<i class="fas fa-w fa-edit"></i>
									Editar
								</a>
								<a href="" class="btn btn-danger btn-sm">
									<i class="fas fa-w fa-eraser"></i>
									Eliminar
								</a>
								
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Presupuesto alquiler -->
		<div class="container" id="alquiler">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							Presupuesto de alquiler:
						</div>
						<!-- Tabla -->
						<table class="table">
							<thead class="text-center thead-dark">
								<th>#:</th>
								<th>Item:</th>
								<th>Precio:</th>
							</thead>
							<tbody class="text-center">
								<tr>
									<td>1</td>
									<td>Item1</td>
									<td>Precio1</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Item2</td>
									<td>Precio2</td>
								</tr>
							</tbody>
						</table>

						<ul class="list-group list-group-flush">
							<li class="list-group-item text-center">
								<a href="" class="btn btn-success btn-sm" data-toggle="modal"
								data-target="#budget02">
									<i class="fas fa-w fa-plus"></i>
									Nuevo
								</a>
								<a href="" class="btn btn-primary btn-sm">
									<i class="fas fa-w fa-edit"></i>
									Editar
								</a>
								<a href="" class="btn btn-danger btn-sm">
									<i class="fas fa-w fa-eraser"></i>
									Eliminar
								</a>
								
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Presupuesto diagnostico -->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							Presupuesto de diagnostico:
						</div>
						<!-- Tabla -->
						<table class="table">
							<thead class="text-center thead-dark">
								<th>#:</th>
								<th>Item:</th>
								<th>Precio:</th>
							</thead>
							<tbody class="text-center">
								<tr>
									<td>1</td>
									<td>Item1</td>
									<td>Precio1</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Item2</td>
									<td>Precio2</td>
								</tr>
							</tbody>
						</table>

						<ul class="list-group list-group-flush">
							<li class="list-group-item text-center">
								<a href="" class="btn btn-success btn-sm" data-toggle="modal"
								data-target="#budget01">
									<i class="fas fa-w fa-plus"></i>
									Nuevo
								</a>
								<a href="" class="btn btn-primary btn-sm">
									<i class="fas fa-w fa-edit"></i>
									Editar
								</a>
								<a href="" class="btn btn-danger btn-sm">
									<i class="fas fa-w fa-eraser"></i>
									Eliminar
								</a>
								
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

@endsection