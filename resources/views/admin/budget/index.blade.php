@extends('layouts.dashboardAdmin')
@section('title', 'budget')
@section('content')

	<link rel="stylesheet" href="{{ asset( config( 'assets.BUDGET' ) )}}">

	<!-- Contenido -->
	<div class="col-md-9 ml-sm-auto col-lg-9 pt-3 px-4">
			
		<!-- Titulo -->
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
		align-items-center pb-2 mb-3 border-bottom">
				
			<h1>Presupuesto</h1>
					
			<!-- grupo de botones -->
			<div class="btn-toolbar mb-2 mb-md-0">
				<div class="btn-group mr-2">
					<button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" 
					data-target="#modal_Presupuesto">
						<i class="fas fa-w fa-info-circle"></i>
						Información
					</button>
				</div>
			</div>
		</div>

		<h3 class="pb-2">Precios y tarifas:</h3>

		@include( 'admin/budget/tabs' )
		@include( 'admin/budget/modalBudget' ) <!-- modals -->

	</div>

	<script src="{{ asset( config( 'assets.MODAL_BUDGET' ) ) }}"></script>

@endsection