var btnRecords = document.getElementById( 'btnGrabacion' );
var btnRental = document.getElementById( 'btnAlquiler' );

btnRecords.addEventListener( 'click', openModalDays );
btnRental.addEventListener( 'click', openModalDays );

function openModalDays( event ) {

	var id = event.target.id;

	if ( id === 'btnGrabacion' ) {

		$( '#title' ).prop( 'innerHTML', 'Términos de Grabación' );
	}

	else {

		$( '#title' ).prop( 'innerHTML', 'Términos de alquiler' );
	}

	$( '#modalDays' ).modal( 'toggle' );
}