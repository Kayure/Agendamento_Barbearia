//CALENDARIO1

function routeEvents(route) {
    return document.getElementById('calendario1').dataset[route];
}


document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendario1');

    var calendario1 = new FullCalendar.Calendar(calendarEl, {
      timeZone: 'UTC',
      themeSystem: '',
      slotDuration: '01:00',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridDay,listMonth'
      },
      initialView: 'timeGridDay',

      buttonText:{
        today: 'Hoje',
        month: 'Mês',
        week: 'Semana',
        day: 'Dia',
        list: 'Lista'
    },
    defaultDate: Date(),
    navLinks: true, // can click day/week names to navigate views
        editable: true,

    dateClick: function(info){
        if(info.view.type == 'dayGridMonth'){
            calendar.changeView('timeGrid', info.dateStr);
        }
    },

    eventClick: function(event) {

        $('#visualizar #id').text(event.id);
        $('#visualizar #title').text(event.title);
        $('#visualizar #start').text(event.start.format('DD/MM/YYYY HH:mm:ss'));
        $('#visualizar #end').text(event.end.format('DD/MM/YYYY HH:mm:ss'));
        $('#visualizar').modal('show');
        return false;

    },

    select: function(start, end){
        $('#cadastrar #start').val(moment(start).format('DD/MM/YYYY HH:mm:ss'));
        $('#cadastrar #end').val(moment(end).format('DD/MM/YYYY HH:mm:ss'));
        $('#cadastrar').modal('show');
    },
    events: routeEvents('routeLoadEvents'),





    startTime: '08:00:00',
    endTime: '21:00:00',

    slotMinTime: '08:00:00',
    slotMaxTime: '21:00:00',

    editable: true,
    selectable: true,


    locale: 'pt-br',
      weekNumbers: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: 'https://fullcalendar.io/api/demo-feeds/events.json'
    });



    calendario1.render();






  }

  );
