document.addEventListener('DOMContentLoaded', function() {

    let formulario = document.querySelector("form");
    var calendarEl = document.getElementById('agenda');
    var calendar = new FullCalendar.Calendar(calendarEl, {

      initialView: 'dayGridMonth',
      locale: 'pt-br',
      navLinks: true,
      slotMinTime: '08:00:00',
      slotMaxTime: '21:00:00',
      allDaySlot: false,

    //   themeSystem: 'bootstrap5',

      headerToolbar: {
        right: 'dayGridMonth,timeGridDay,listWeek',
        left: 'prev, next, today',
        center: 'title',
        selectable: 'true',
        editable:'true',

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


      //FUNÇÃO PARA ABRIR A MODAL DO DIA SELECIONADO
      dateClick:function(info){
        $("#modalCalendar").modal("show");
        
        this.newEvent.date_at= obj.dateStr


        

      },

      eventResize: function(element){
        let start = moment(element.event.start).format("YYYY-MM-DD HH:mm:ss");
        let end = moment(element.event.end).format("YYYY-MM-DD HH:mm:ss");

        let newEvent = {
            _method:'PUT',
            title: element.event.title,
            id: element.event.id,
            start: start,
            end: end
        };

        sendEvent(routeEvents('routeEventUpdate'),newEvent);
    },

      select: function(element){

        clearMessages('.message');
        resetForm("#formEvent");
        $("#modalCalendar input[name='id']").val('');

        $("#modalCalendar").modal('show');
        $("#modalCalendar #titleModal").text('Adicionar Evento');
        $("#modalCalendar button.deleteEvent").css("display","none");

        let start = moment(element.start).format("DD/MM/YYYY HH:mm:ss");
        $("#modalCalendar input[name='start']").val(start);

        let end = moment(element.end).format("DD/MM/YYYY HH:mm:ss");
        $("#modalCalendar input[name='end']").val(end);

        $("#modalCalendar input[name='color']").val("#3788D8");

        calendar.unselect();

    },

     //events: routeEvents('routeLoadEvents'),

    });


    calendar.render();

    document.getElementById("btnSalvar").addEventListener("click"), function(){
        const dados = new FormData(formulario);
        console.log(dados);
    };


  });










//   <script>

//   document.addEventListener('DOMContentLoaded', function () {
//       var calendarEl = document.getElementById('calendar');

//       var calendar = new FullCalendar.Calendar(calendarEl, {
//           locale: 'pt-br',
//           plugins: ['interaction', 'dayGrid'],
//           //defaultDate: '2019-04-12',
//           editable: true,
//           eventLimit: true,
//           // events: 'list_eventos.php',
//           events: 'list_eventos.php',
//           extraParams: function () {
//               return {
//                   cachebuster: new Date().valueOf()
//               };
//           }
//       });

//       calendar.render();
//   });
// </script>
