@include( 'layouts/head' )

		<!-- Main Theme -->
		<link rel="stylesheet" type="text/css" href="{{ asset( config( 'assets.MAIN' ) )}}">
	
		@include( 'layouts/navbar' )
		@include( 'layouts/sidebar' )
			
			<!-- contenido de la página  -->
			@yield('content') 

		<!-- Ventanas Modales -->
		@include('layouts.modalDashboard')
		@include('layouts.modalCalendar')
	
		<!-- JQuery -->
		<script src="{{ asset( config( 'assets.JQUERY' ) )}}"></script>
	
		<!-- Bootstrap min.js -->
		<script src="{{ asset( config('assets.BOOTSTRAP_JS') )}}"></script>

		<!-- fullcalendar idioma español -->
		<script src="{{ asset( config('assets.MOMENT_JS') )}}"></script>
		<script src="{{ asset( config( 'assets.MODALS' ) )}}"></script>	
	</body>
</html>
