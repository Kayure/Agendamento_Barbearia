function routeEvents(route){
    return document.getElementById('calendar').dataset[route];
}

$(function () {

    $('.date-time').mask('00/00/0000 00:00:00');


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

});

$(".saveEvent").click(function () {

    let id = $("#modalCalendar input[name='id']").val();

    let title = $("#modalCalendar input[name='title']").val();

    let start = $("#modalCalendar input[name='start']").val();

    let end = $("#modalCalendar input[name='end']").val();

    let color = $("#modalCalendar input[name='color']").val();

    let description = $("#modalCalendar textarea[name='description']").val();

    let Event = {
        title: title,
        start: start,
        end: end,
        color: color,
        description: description,
    };

    let route;

    if(id == ''){
        route = routeEvents('routeEventStore');
    }

    sendEvent(route,Event);

});

function sendEvent(route, data_) {

    $.ajax({
        url: route,
        data: data_,
        method: 'POST',
        dataType: 'json',
        success: function (json) {

            if (json) {
                objCalendar.refetchEvents();
                $("#modalCalendar").modal('hide');
            }

            if(showModalUpdateFastEvent === true){
                showModalUpdateFastEvent = false;
                $("#modalFastEvent").modal('hide');

                let stringJson = `{"id":"${data_.id}","title":"${data_.title}","color":"${data_.color}","start":"${data_.start}","end":"${data_.end}"}`;

                $(`#boxFastEvent${data_.id}`).attr('data-event', stringJson);
                $(`#boxFastEvent${data_.id}`).text(data_.title);
                $(`#boxFastEvent${data_.id}`).css({
                    "backgroundColor": `${data_.color}`,
                    "border": `1px solid ${data_.color}`});

            }

            if(showModalCreateFastEvent === true){
                showModalCreateFastEvent = false;
                $("#modalFastEvent").modal('hide');

                let stringJson = `{"id":"${json.created}","title":"${data_.title}","color":"${data_.color}","start":"${data_.start}","end":"${data_.end}"}`;

                let newEvent = `<div id="boxFastEvent${json.created}"
                        style="padding: 4px; border: 1px solid ${data_.color}; background-color: ${data_.color}"
                        class='fc-event event text-center'
                        data-event='${stringJson}'>
                        ${data_.title}
                    </div>`;
                $('#external-events-list').append(newEvent);

            }
        },
        error:function (json) {

            let responseJSON = json.responseJSON.errors;


        }
    });
}
