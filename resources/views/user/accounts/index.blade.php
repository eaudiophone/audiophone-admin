@extends('layouts.dashboard')
@section('title', 'Perfil') <!-- Agrega el nombre de la página -->
@section('content')

<link rel="stylesheet" type="text/css" href="{{asset( config( 'assets.USER' ) )}}">

	<!-- Contenido -->
	<div class="col-md-9 ml-sm-auto col-lg-9 pt-3 px-4">
			
		<!-- Titulo -->

		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
		align-items-center pb-2 mb-3 border-bottom">
				
			<h1>Perfil del Usuario</h1>
		</div>
		
		<!-- Contenido -->

		<div class="container">
			<div class="row">
				<div class="offset-sm-1 col-sm-10">

					<!-- Card User  -->
					@include('user/accounts/cardProfile')

				</div>		
			</div>
		</div>
	</div>

@endsection 