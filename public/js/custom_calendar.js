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

		/*  Tienes que incluir una condicional que permita agendar el servicio correcto
			en las paginas seleccionadas.

			Puedes verificar el enlace y luego validarla con una condicional (buscar)
		*/

		//Evento por día (Ventana Modal)
		dayClick: function(date, jsEvent, view) {
			
			//variable que almacena el URL de la pagina
			var url = window.location,
				urlDiagnostic = 'http://127.0.0.1:8000/meeting/diagnostic/index',
				urlRental = 'http://127.0.0.1:8000/meeting/rental/index',
				urlRecords = 'http://127.0.0.1:8000/meeting/records/index';

			//verificacion de la url
			if(url == urlRecords) {

				//cambia el background del cuadro
				$(this).css('background-color', 'lightblue');

				//invoca a la ventana modal
				$('#modal_A_Records').modal();
			}

			else if(url == urlRental) {

				//cambia el background del cuadro
				$(this).css('background-color', '#ad98ea');

				//invoca a la ventana modal
				$('#modal_A_Rental').modal();
			}

			else if(url == urlDiagnostic) {

				//cambia el background del cuadro
				$(this).css('background-color', 'lightgreen');

				//invoca a la ventana modal
				$('#modal_A_Diagnostic').modal();
			}

			else {
				
				//invoca la ventana modal
				$('#modalCalendar').modal();

				//cambia el blackground del cuadro
				$(this).css('background-color', 'lightgray');

			}
		}

	});
});