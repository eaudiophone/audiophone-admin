function setData() {

	$( '#title' ).prop('innerHTML', 'Evento');
	$( '#startTime' ).val( '18:00' );
	$( '#finalTime' ).val( '19:00' );
	$( '#totalHours' ).val( 1 );
	$( '#appointmentDate' ).val( '2019-01-01' );
	$( '#title' ).val( 'prueba' );
	$( '#description' ).val( 'prueba' );
	$( '#addressMeeting' ).val( 'prueba' );
}

function confirmDelete() {

	var response = confirm( '¿Esta seguro de cancelar este evento?' );

	if ( response ) {

		alert( 'evento cancelado' ); 
	}

	$( '#modalCalendar' ).modal( 'toggle' );
}