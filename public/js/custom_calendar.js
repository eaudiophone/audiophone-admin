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

		/*Evento por día (Ventana Modal)*/
		dayClick: function(date, jsEvent, view) {

			//invoca la ventana modal
			$('#modalCalendar').modal();

			//cambia el blackground del cuadro
			$(this).css('background-color', 'silver');
		}

	});
});