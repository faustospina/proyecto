//actually cursor position
$(document).ready(function() {

  inicializarCalendario();
});

var fechaSeleccionada = "";


function inicializarCalendario(){

  
    /* initialize the calendar
    -----------------------------------------------------------------*/
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      /*defaultDate: '2016-01-12',*/
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: eventosCalendario,
      eventClick: function(calEvent, jsEvent, view) {
        date = calEvent.start;
        fechaSeleccionada = date.format();
        $("#contenedor_fecha").html(date.format());
        $('#modalCalendario').trigger("click");
        
      },
      dayClick: function(date, jsEvent, view, resourceObj) {
        $("#contenedor_fecha").html(date.format());
        fechaSeleccionada = date.format();
        $('#modalCalendario').trigger("click");
        
      }
      
    });
    
}



function crearEvento(){


  var tipoEvento = $("#tipoEvento").val();
  var title = $("#title").val();
  var detail = $("#detail").val();
  var start = $("#start").val();
  var end = $("#end").val();

  var newEvent = {
        title: title,
        start: fechaSeleccionada
  };
  $('#calendar').fullCalendar( 'renderEvent', newEvent);


  ruta = path+"events/add/"+tipoEvento+"/"+title+"/"+detail+"/"+fechaSeleccionada+"/"+fechaSeleccionada;
    console.log(ruta);
    $.get(ruta, function(data){
        data = JSON.parse(data);
        //alert(data["mensaje"]);
        if(data["status"] == '1'){
            $("#cerrar_asistir").trigger("click");
            DOMEvento.remove();
        }
    });


  $("#cerrar_asistir_edit").trigger("click");


}