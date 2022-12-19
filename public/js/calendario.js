
function routeEvents(route) {
    return document.getElementById('calendario0').dataset[route];
}

$(document).ready(function() {
    $('#calendario0').fullCalendar({
        slotDuration: '01:00',
        locale: 'pt-br',
        header: {
            left: 'prev,next today',
			center: 'title',
		    right: 'month,agendaDay'
        },


        defaultDate: Date(),
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        slotMinTime: '08:00:00',
        slotMaxTime: '21:00:00',


        selectable: true,
					selectHelper: true,

        eventClick: function(event) {

            $('#visualizar #id').text(event.id);
            $('#visualizar #title').text(event.title);
            $('#visualizar #start').text(event.start.format('DD/MM/YYYY HH:mm:ss'));
            $('#visualizar #end').text(event.end.format('DD/MM/YYYY HH:mm:ss'));
            $('#visualizar').modal('show');
            return false;

        },

        dateClick: function(info){
            if(info.view.type == 'dayGridMonth'){
                calendar.changeView('timeGrid', info.dateStr);
            }

        },


        select: function(start,end){
            $('#cadastrar #start').val(moment(start).format('DD/MM/YYYY HH:mm:ss'));
            $('#cadastrar #end').val(moment(end).format('DD/MM/YYYY HH:mm:ss'));
            $('#cadastrar').modal('show');
        },
        events: routeEvents('routeLoadEvents'),

    });
});
