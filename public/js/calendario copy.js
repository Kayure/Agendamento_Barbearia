function routeEvents(route){
    return document.getElementById('calendario').dataset[route];
  }

  document.addEventListener('DOMContentLoaded', function() {

      let formulario = document.querySelector("form");
      var calendarEl = document.getElementById('calendario');
      var calendar = new FullCalendar.Calendar(calendarEl, {

        initialView: 'timeGridDay',
        locale: 'pt-br',
        navLinks: true,
        slotMinTime: '08:00:00',
        slotMaxTime: '21:00:00',
        defaultDate: Date(),
					navLinks: true, // can click day/week names to navigate views
					editable: true,
					eventLimit: true, // allow "more" link when too many events

        editable: true,
        eventLimit: true,

      //   themeSystem: 'bootstrap5',

        headerToolbar: {
          right: 'dayGridMonth,timeGridDay',
          left: 'prev, next, today',
          center: 'title',

        },
        eventClick: function (info) {
          info.jsEvent.preventDefault(); // don't let the browser navigate

          $('#visualizar #id').text(evento.id);
          $('#visualizar #title').text(evento.title);
          $('#visualizar #start').text(evento.start.format('DD/MM/YYYY HH:mm:ss'));
          $('#visualizar #end').text(evento.end.format('DD/MM/YYYY HH:mm:ss'));
          $('#visualizar').modal('show');
          return false;
      },

        drop: function(element) {

          let Event = JSON.parse(element.draggedEl.dataset.event);

          // is the "remove after drop" checkbox checked?
          if (document.getElementById('drop-remove').checked) {
              // if so, remove the element from the "Draggable Events" list
              element.draggedEl.parentNode.removeChild(element.draggedEl);

              Event._method = "DELETE";
              sendEvent(routeEvents('routeFastEventDelete'), Event);
          }

          let start = moment(`${element.dateStr} ${Event.start}`).format("YYYY-MM-DD HH:mm:ss");
          let end = moment(`${element.dateStr} ${Event.end}`).format("YYYY-MM-DD HH:mm:ss");

          Event.start = start;
          Event.end = end;

          delete Event.id;
          delete Event._method;

          sendEvent(routeEvents('routeEventStore'), Event);

      },

      eventClick: function(element){

          clearMessages('.message');
          resetForm("#formEvent");

          $("#modalCalendar").modal('show');
          $("#modalCalendar #titleModal").text('Alterar Evento');
          $("#modalCalendar button.deleteEvent").css("display","flex");

          let id = element.event.id;
          $("#modalCalendar input[name='id']").val(id);

          let title = element.event.title;
          $("#modalCalendar input[name='title']").val(title);

          let start = moment(element.event.start).format("DD/MM/YYYY HH:mm:ss");
          $("#modalCalendar input[name='start']").val(start);

          let end = moment(element.event.end).format("DD/MM/YYYY HH:mm:ss");
          $("#modalCalendar input[name='end']").val(end);

          let color = element.event.backgroundColor;
          $("#modalCalendar input[name='color']").val(color);

          let description = element.event.extendedProps.description;
          $("#modalCalendar textarea[name='description']").val(description);


      },

      //FUNÇÃO PRA SELECIONAR A DATA E ABRIR A MODAL
      select: function(start, end){

        $('#cadastrar #start').val(moment(start).format('DD/MM/YYYY HH:mm:ss'));
        $('#cadastrar #end').val(moment(end).format('DD/MM/YYYY HH:mm:ss'));
        $('#cadastrar').modal('show');
    },


        //FUNÇÃO PARA ABRIR A MODAL DO DIA SELECIONADO
        dateClick:function(info){
          $("#modalCalendar").modal("show");


          let start = moment(element.event.start).format("DD/MM/YYYY HH:mm:ss");
              $("#modalCalendar input[name='start']").val(start);

              let end = moment(element.event.end).format("DD/MM/YYYY HH:mm:ss");
              $("#modalCalendar input[name='end']").val(end);

        },

        select: function(element){

          clearMessages('.message');
          resetForm("#formEvent");
          $("#modalCalendar input[name='id']").val('');

          $("#modalCalendar").modal('show');
          $("#modalCalendar #titleModal").text('Adicionar Evento');
          $("#modalCalendar button.deleteEvent").css("display","none");

          let start= (element.start).format("DD/MM/YYYY HH:mm:ss");
          $("#modalCalendar input[name='start']").val(start);

          let end = (element.end).format("DD/MM/YYYY HH:mm:ss");
          $("#modalCalendar input[name='end']").val(end);

          $("#modalCalendar input[name='color']").val("#3788D8");

          calendar.unselect();

      },

      events: routeEvents('routeLoadEvents'),



      });


      calendar.render();


    });


    // FUNÇÕES CELKE         FUNÇÕES CELKE    FUNÇÕES CELKE   //FUNÇÕES CELKE FUNÇÕES CELKEFUNÇÕES CELKEFUNÇÕES CELKEFUNÇÕES CELKEFUNÇÕES CELKE








