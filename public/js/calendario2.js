//CALENDARIO2
document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendario2');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      timeZone: 'UTC',
      themeSystem: 'bootstrap5',

      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      weekNumbers: true,
      locale: 'pt-br',
      dayMaxEvents: true, // allow "more" link when too many events
      events: 'https://fullcalendar.io/api/demo-feeds/events.json'
    });

    calendar.render();
  });
