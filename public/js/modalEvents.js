function openModal( method ) {
	
	var baseURL = $( '#modalEvent' ).prop( 'baseURI' ).split( '/' );
	var url = baseURL[ 3 ];

	if ( url === 'rental' ) {

		$( '#titleModal' ).prop( 'innerHTML', 'Nuevo Alquiler' );
	}

	else {
		
		$( '#titleModal' ).prop( 'innerHTML', 'Nueva Grabación' );
	}

	if ( method === 'nuevo' ) {

		getFormEmpty();
	}

	else {

		getData();
	}

	$('#modalEvents').modal();
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

		alert( 'la hora final no puede ser inferior a la fecha de inicio' );

		$( '#totalHours' ).val( null );
		$( '#finalTime' ).val( null );
	}
}

function getData() {

	$( '#startTime' ).val( '18:00' );
	$( '#finalTime' ).val( '19:00' );
	$( '#totalHours' ).val( 1 );
	$( '#appointmentDate' ).val( '2019-01-01' );
	$( '#title' ).val( 'prueba' );
	$( '#description' ).val( 'prueba' );
	$( '#addressMeeting' ).val( 'prueba' );
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

function confirmDelete() {

	var response = confirm( '¿Esta seguro de eliminar este evento?' );

	if ( response ) {

		alert( 'evento eliminado' ); 
	}
}

$( document ).ready( function() {

	var optionsClockPicker = {

    	placement: 'bottom',
    	align: 'left',
    	autoclose: true,

    	afterDone: function() {

    		if ( ( $( '#startTime' ).val() ) && ( $( '#finalTime' ).val() )  ) {

    			var beginHour = $( '#startTime' ).val().split( ':' );
				var finalHour = $( '#finalTime' ).val().split( ':' );

				var minutes = parseInt( finalHour[1] );

        		beginHour = parseInt( beginHour[0] );
        		finalHour = parseInt( finalHour[0] );
        	
        		calculateHours( beginHour, finalHour, minutes );
    		}

    		else {

    			return;
    		}
    	}
	};

	$('.clockpicker').clockpicker( optionsClockPicker );
}); 

// save
$( '#save' ).click( function()  {
	
	$( '#modalEvents' ).modal( 'toggle' );	
});

// delete
$( '.pointer' ).click( confirmDelete );