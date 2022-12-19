
document.addEventListener('DOMContentLoaded', function () {

    let formulario = document.querySelector("form");
    var calendarEl = document.getElementById('calendario');
    var calendar = new FullCalendar.Calendar(calendarEl, {



        headerToolbar: {
            right: 'dayGridMonth,timeGridDay,next',
            left: 'prev',
            center: 'title',
            selectable: 'true',
            editable:'true',
            initialView: 'timeGridDay',
             locale: 'pt-br',
          },
        buttonText:{
            today: 'Hoje',
            month: 'Mês',
            week: 'Semana',
            day: 'Dia',
            list: 'Lista'
        },

          defaultDate: Date(),

        //themeSystem: 'bootstrap',
        initialView: 'dayGridMonth',
        locale: 'pt-br',
        navLinks: true,
        slotMinTime: '08:00:00',
        slotMaxTime: '21:00:00',

        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        editable: true,
        eventLimit: true,



        selectable: true,
        //selectHelper: true,

        dateClick: function(info){
            if(info.view.type == 'dayGridMonth'){
                calendar.changeView('timeGrid', info.dateStr);
            }

        },

        select: function(start, end){

            //alert('selected ' + info.startStr + ' to ' + info.endStr);


            $('#modalCalendar #start').val(moment(start).format('DD/MM/YYYY HH:mm:ss'));
			$('#modalCalendar #end').val(moment(end).format('DD/MM/YYYY HH:mm:ss'));
            $("#modalCalendar").modal('show');
          },





        events: routeEvents('routeLoadEvents'),

    });
    calendar.render();
});
