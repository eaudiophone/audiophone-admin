@extends('layouts.dashboardAdmin')

@section('title', 'profiles')
@section('content')
	
	<link rel="stylesheet" href="{{ asset( config( 'assets.TABLE' ) ) }}">
	
	<!--Contenido-->
	<div class="col-md-9 ml-sm-auto col-lg-9 pt-3 px-4">

		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
		align-items-center pb-2 mb-3 border-bottom">

			<h1>Perfiles de Usuario</h1>

			<!-- Grupo de botones -->
			<div class="btn-toolbar mb-2 mb-md-0">
				<div>
					<button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" 
					data-target="#modalPerfil">
						<i class="fas fa-w fa-info-circle"></i>
						Información
					</button>
				</div>
			</div>
		</div> 

		<!-- buscador de usuarios: -->
		@include('admin/profiles/search')
		@include( 'admin/profiles/tableUsers' )

		<!-- incluir la paginación -->
		
	</div>

	<script>

		document.addEventListener( 'DOMContentLoaded', function() {

			var boton = document.getElementsByClassName( 'admin' );
			var boton2 = document.getElementsByClassName( 'delete' );

			for ( var i = 0; i < boton.length; i++ ) {

				boton[i].onclick = confirmAdmin;
			}

			for ( var i = 0; i <  boton2.length; i++ ) {

				boton2[i].onclick = confirmDelete;
			}

		});
		
		function confirmAdmin() {
			
			var response = confirm( '¿Esta seguro de dar privilegios a este usuario?' );

			if ( response ) {

				// codigo de actualización 
			}
		}

		function confirmDelete() {

			var response = confirm( '¿Esta seguro de eliminar este usuario?' );

			if ( response ) {

				// codigo de eliminación
			}
		}

	</script>
		
@endsection