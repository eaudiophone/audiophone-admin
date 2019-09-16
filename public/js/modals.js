var boton = document.getElementById( 'modalEvent' );

function getFormEmpty() {

	$( '#startTime' ).val('');
	$( '#finalTime' ).val('');
	$( '#totalHours' ).val('');
	$( '#appointmentDate' ).val('');
	$( '#title' ).val('');
	$( '#description' ).val('');
	$('#addressMeeting').val('');
}

// addEventListener 
$( boton ).click( function() {

	var baseURL = boton.baseURI.split('/');
	var url = baseURL[ 3 ];

	if ( url === 'rental' ) {

		$( '#titleModal' ).prop( 'innerHTML', 'Nuevo Evento de Alquiler' );
		getFormEmpty();

	}

	else {
		
		$('#titleModal').prop( 'innerHTML', 'Nuevo Evento de Grabación' );
		getFormEmpty();
	}

	$('#modalEvents').modal();
});