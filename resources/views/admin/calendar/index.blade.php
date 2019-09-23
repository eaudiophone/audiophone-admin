@extends('layouts.dashboardAdmin')
@section('title', 'Agenda')
@section('content')
	
	<!-- contenido -->
	<main class="col-md-9 ml-sm-auto col-lg-9 pt-3 px-4">

		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
		align-items-center pb-2 mb-3 border-bottom">

			<h1>Agenda de trabajo</h1>

			<!-- Grupo de botones -->
			<div class="btn-toolbar mb-2 mb-md-0">
				<div>
					<button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" 
					data-target="#modalAgenda">
						<i class="fas fa-w fa-info-circle"></i>
						Información
					</button>
				</div>
			</div>
		</div>
		
		<!-- importa el calendario -->
		@include('admin/calendar/calendar')	
		@include('admin/calendar/modalCalendar')

		<script src="{{ asset( config( 'assets.MODAL_CALENDAR' ) ) }}"></script>

@endsection 