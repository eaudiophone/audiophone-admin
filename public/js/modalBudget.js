var deleteRental = document.getElementById( 'btnDeleteRental' );
var deleteRecord = document.getElementById( 'btnDeleteRecord' );

deleteRental.addEventListener( 'click', confirmDelete );
deleteRecord.addEventListener( 'click', confirmDelete );

function openModal( method ) {

	switch( method ) {

		case 'addRecord': 

			$('#title').prop( 'innerHTML', 'Nueva tarifa de grabación' );
			$('#tarifa').prop( 'innerHTML', 'Valor de las horas' );
			$('#save').prop( 'hidden', false );
			$('#edit').prop( 'hidden', true );

		break;

		case 'addRental':

			$('#title').prop( 'innerHTML', 'Nueva tarifa de alquiler' );
			$('#tarifa').prop( 'innerHTML', 'Costo de la unidad' );
			$('#save').prop( 'hidden', false );
			$('#edit').prop( 'hidden', true );
			

		break;

		case 'editRecord': 

			$('#title').prop( 'innerHTML', 'Editar tarifa de grabación' );
			$('#tarifa').prop( 'innerHTML', 'Valor de horas' );
			$('#save').prop( 'hidden', true );
			$('#edit').prop( 'hidden', false );
			

		break;

		case 'editRental':

			$('#title').prop( 'innerHTML', 'Editar tarifa de alquiler' );
			$('#tarifa').prop( 'innerHTML', 'Costo de la unidad' );
			$('#save').prop( 'hidden', true );
			$('#edit').prop( 'hidden', false );
			

		break;
	}

	$( '#modalBudget' ).modal();
}

function confirmDelete() {

	var response = confirm( '¿Esta seguro de eliminar esta tarifa?' );

	if ( response ) {

		alert( 'tarifa eliminada' ); 
	}
}