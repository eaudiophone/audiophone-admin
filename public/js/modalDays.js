var btnRecords = document.getElementById( 'btnGrabacion' );
var btnRental = document.getElementById( 'btnAlquiler' );

btnRecords.addEventListener( 'click', openModal );
btnRental.addEventListener( 'click', openModal );

document.addEventListener( 'DOMContentLoaded', function() {

	var optionsClockPicker = {

		placement: 'bottom',
    	align: 'left',
    	autoclose: true,

    	afterDone: function() {

    		if( $( '#beginHour' ).val() && $( '#finalHour' ).val() ) {

    			var beginHour = $( '#beginHour' ).val().split( ':' );
				var finalHour = $( '#finalHour' ).val().split( ':' );

				beginHour = parseInt( beginHour[0] );
				finalHour = parseInt( finalHour[0] );

				if ( beginHour > finalHour ) {

					alert( 'la hora final no puede ser inferior a la fecha de inicio' );
					$( '#finalHour' ).val( null );
				}
    		}

    		else {

    			return;
    		}
    	}
	};

	$( '.clockpicker' ).clockpicker( optionsClockPicker );	
});

function openModal( event ) {

	if ( event.target.id === 'btnGrabacion' ) {

		document.getElementById( 'title' ).innerHTML = 'Términos de grabación';
	}

	else {

		document.getElementById( 'title' ).innerHTML = 'Términos de alquiler';
	}

	$( '#modalDays' ).modal( 'toggle' );
	getDataForm();
}

function getDataForm() {

	$('#quantityWeek').val( 2 );
	$('#quantityMonth').val( 5 );
	$('#beginHour').val( '09:00' );
	$('#finalHour').val( '17:30' );

	document.getElementById( 'meetingDays' )[1].selected = true;
}