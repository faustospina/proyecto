$(document).ready(function(){
    $("#s").autocomplete({
        minLength: 2,
        select: function(event, ui) {
            $("#s").val(ui.item.label);
        },
        source: function(request, response) {
            $.ajax({
                url: basePath + "acusados/searchjson",
                data: {
                    term: request.term
                },
                dataType: "json",
                success: function(data){
                    response($.map(data, function(el, index){
                        return {
                            value: el.Acusado.nombre,
                            nombre: el.Acusado.nombre,
                            foto: el.Acusado.foto,
                            foto_dir: el.Acusado.foto_dir
                        };
                    }));
                }
            });
        }
    }).data("ui-autocomplete")._renderItem = function(ul, item){
        return $("<li></li>")
        .data("item.autocomplete", item)
        .append("<a><img width='40' src='" + basePath + "files/acusado/foto/" + item.foto_dir + "/" + item.foto + "' />" + item.nombre +  "</a>")
        .appendTo(ul)
    };
});