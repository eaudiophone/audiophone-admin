@extends('layouts.dashboardAdmin')
@section('title', 'Días de Servicios')
@section('content')

	<link rel="stylesheet" href="{{asset( config('assets.DAYS') )}}">
	
	<!-- Contenedor -->
	<div class="col-md-9 ml-sm-auto col-lg-9 pt-3 px-4">
			
		<!-- Titulo -->
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
		align-items-center pb-2 mb-3 border-bottom">
				
			<h1>Días de Servicios</h1>
					
			<!-- grupo de botones -->
			<div>
				<div>
					<a href="profiles" class="btn btn-sm btn-secondary" data-toggle="modal" 
					data-target="#modalTerminos">
						<i class="fas fa-w fa-info-circle"></i>
						Información
					</a>
				</div>
			</div>
		</div>

		@include( 'admin/days/tabs' )
		@include( 'admin/days/modalDays' )

	</div>	
	
	<!-- control del modal  -->
	<script src="{{ asset( config('assets.MODAL_DAYS') ) }}"></script>

@endsection