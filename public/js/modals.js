var swal; // sweetAlert

var optionsClockPicker = {

    placement: 'bottom',
    align: 'left',
    autoclose: true,

    afterDone: function() {

    	if ( ( $( '#startTime' ).val() ) && ( $( '#finalTime' ).val() )  ) {

    		var beginHour = $( '#startTime' ).val();
			var finalHour = $( '#finalTime' ).val();

        	var arraySplit = beginHour.split( ':' );
        	var arraySplit2 = finalHour.split( ':' ); 

        	beginHour = parseInt( arraySplit[0] );
        	finalHour = parseInt( arraySplit2[0] );

        	var minutes = parseInt( arraySplit2[1] );

        	calculateHours( beginHour, finalHour, minutes );
    	}

    	else {

    		return;
    	}
    }
};
      
function openModal() {
	
	var baseURL = $( '#modalEvent' ).prop( 'baseURI' ).split( '/' );
	var url = baseURL[ 3 ];

	if ( url === 'rental' ) {

		$( '#titleModal' ).prop( 'innerHTML', 'Nuevo Alquiler' );
	}

	else {
		
		$( '#titleModal' ).prop( 'innerHTML', 'Nueva Grabación' );
	}

	$('#modalEvents').modal();
	getFormEmpty();	
}

function getFormEmpty() {

	$( '#startTime' ).val( null );
	$( '#finalTime' ).val( null );
	$( '#totalHours' ).val( null );
	$( '#appointmentDate' ).val( null );
	$( '#title' ).val( null );
	$( '#description' ).val( null );
	$( '#addressMeeting' ).val( null );

}

function calculateHours( begin, final, minutes ) {

	var result = 0;

	if ( begin < final ) {

		if ( minutes >= 30 ) {

			result = ( final + 1 ) - begin;
		}

		else {

			result = final - begin;
		}

		$( '#totalHours' ).val( result );
	}

	else {

		swal({
			title: 'opcion invalida',
			text: 'La hora final no puede ser inferior a la hora de inicio',
			icon: 'warning',
			button: 'Salir',
		});

		$( '#totalHours' ).val('');
		$( '#finalTime' ).val('');
	}
}

$( '#modalEvent' ).click( openModal );

$( document ).ready( function() {

	$('.clockpicker').clockpicker( optionsClockPicker );
}); 

// save
$( '#save' ).click( function()  {
	
	$( '#modalEvents' ).modal( 'toggle' );
});