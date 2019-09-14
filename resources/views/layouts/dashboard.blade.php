@include( 'layouts/head' )

		<!-- Main Theme -->
		<link rel="stylesheet" type="text/css" href="{{ asset( config( 'assets.MAIN' ) )}}">
		<link rel="stylesheet" type="text/css" href="{{ asset( config('assets.FULLCALENDAR_CSS') )}}">

		@include( 'layouts/navbar' )
		@include( 'layouts/sidebar' )
			
			<!-- contenido de la página  -->
			@yield('content') 

		<!-- Ventanas Modales -->
		@include('layouts.modalDashboard')
		@include('layouts.modalCalendar')
	
		<!-- JQuery -->
		<script type="text/javascript" src="{{ asset( config( 'assets.JQUERY' ) )}}"></script>
	
		<!-- Bootstrap min.js -->
		<script text="text/javascript" src="{{ asset( config('assets.BOOTSTRAP_JS') )}}"></script>

		<!-- fullcalendar idioma español -->
		<script type="text/javascript" src="{{ asset( config('assets.MOMENT_JS') )}}"></script>
		<script type="text/javascript" src="{{ asset( config('assets.FULLCALENDAR_JS') )}}"></script>
		<script type="text/javascript" src="{{ asset( config('assets.CUSTOM_CALENDAR') )}}"></script>
		<script type="text/javascript" src="{{ asset( config('assets.SPANISH') )}}"></script>	
	</body>
</html>
