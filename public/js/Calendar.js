//inicializacion del calendario
$(document).ready(function() {
	
	//renderizacion del calrendario			
	$('#calendar').fullCalendar({

		//encabezado del calendario
		header: {

			/*opciones a visualizar:
				month: mostrar mes
				basicWeek: te muestra en formato basico la semana
				basicDay: te muestra en formato basico el dia
				agendaWeek: te muestra en formato de agenda la semana
				agendaDay: te muestra en fomato de agenda el día
			*/

			left: 'today, prevYear,prev',
			center: 'title',
			right: 'next,nextYear'
		},

		footer: {
			
			center: 'month,agendaWeek,agendaDay'
		},

		//Evento por día (Ventana Modal)
		dayClick: function(date, jsEvent, view) {
			
			//URLs
			var url = window.location,
				urlDiagnostic = "http://127.0.0.1:8000/meetings/diagnostics/index",
				urlRental = "http://127.0.0.1:8000/meetings/rentals/index",
				urlRecords = "http://127.0.0.1:8000/meetings/records/index",
				urlDiagnostic2 = "http://localhost:8000/meetings/diagnostics/index",
				urlRental2 = "http://localhost:8000/meetings/rentals/index",
				urlRecords2 = "http://localhost:8000/meetings/records/index";

			//verificacion de la url
			if(url == urlRecords || url == urlRecords2) {

				//modal
				$('#modal_A_Records').modal();

				var fecha_record = date.format();
				document.meetingRecords.appointmentDate.value = fecha_record;
			}

			else if(url == urlRental || url == urlRental2) {

				//modal
				$('#modal_A_Rental').modal();

				var fecha_rental = date.format();
				document.meetingRental.appointmentDate.value = fecha_rental;
			}

			else if(url == urlDiagnostic || url == urlDiagnostic2) {

				//modal
				$('#modal_A_Diagnostic').modal();

				var fecha_diagnostic = date.format();
				document.meetingDiagnostic.appointmentDate.value = fecha_diagnostic;
			}

			else {
				
				$('#modalCalendar').modal();
			}
		}

	});
});