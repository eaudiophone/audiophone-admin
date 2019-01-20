@extends('layouts.dashboardAdmin')
@section('title', 'Presupuesto')
@section('content')

	<!-- Contenido -->
	<main class="col-md-9 ml-sm-auto col-lg-9 pt-3 px-4">
			
		<!-- Titulo -->
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
		align-items-center pb-2 mb-3 border-bottom">
				
			<h1>Presupuesto</h1>
					
			<!-- grupo de botones -->
			<div>
				<div>
					<a href="profiles" class="btn btn-sm btn-info" data-toggle="modal" 
					data-target="#modal_Presupuesto">
						<i class="fas fa-w fa-info-circle"></i>
						Información
					</a>
				</div>
			</div>
		</div>

@endsection