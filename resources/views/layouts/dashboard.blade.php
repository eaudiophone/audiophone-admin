@include( 'layouts/head' )

		<!-- Main Theme -->
		<link rel="stylesheet" type="text/css" href="{{ asset( config( 'assets.MAIN' ) )}}">
		<link rel="stylesheet" href="{{ asset( config('assets.CLOCKPICKER_CSS') ) }}">
	
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
		<script src="{{ asset( config( 'assets.CLOCKPICKER_JS' ) ) }}"></script>

		<script src="{{ asset( config('assets.MOMENT_JS') )}}"></script>
		<script src="{{ asset( config( 'assets.MODALS' ) )}}"></script>	
	</body>
</html>
