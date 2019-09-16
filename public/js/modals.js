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

var button = document.getElementById( 'modalEvent' );
      
function openModal() {
	
	var baseURL = button.baseURI.split('/');
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
}

function getFormEmpty() {

	$( '#startTime' ).val('');
	$( '#finalTime' ).val('');
	$( '#totalHours' ).val('');
	$( '#appointmentDate' ).val('');
	$( '#title' ).val('');
	$( '#description' ).val('');
	$('#addressMeeting').val('');
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

		console.log( 'opcion incorrecta' );
	}
}

// addEventListener DOMContentLoaded
$( document ).ready( function() {

	$('.clockpicker').clockpicker( optionsClockPicker );
}); 

// addEventListener  click
$( button ).click( openModal );