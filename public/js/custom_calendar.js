var options = {

	plugins: ['dayGrid', 'interaction'],
	locale: 'es', //idioma

	header: {
		left: 'today,prev,next',
		center: 'title',
		right: 'dayGridMonth,dayGridWeek,dayGridDay'
	},

	dateClick: function( info ) {

		$('#modalCalendar').modal();
		setData();
	}, 

	eventDrop: function( info ) {

	}
	
};

var calendarEl = document.getElementById( 'calendar' );
var calendar = new FullCalendar.Calendar( calendarEl, options );

document.addEventListener( 'DOMContentLoaded', function() {	

	// muestra el calendario
	calendar.render();
});