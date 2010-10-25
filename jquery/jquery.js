/* Questo script di base non fa altro che cambiare il valore della
  proprietˆ css background-color dell'elemento #content  */

$(document).ready(function() {
    $('li').draggable({
        'opacity': 0.8
    });
    $('#trash').droppable({
        drop: function(event, ui){
            $('ui.draggable').remove();
        }
    });
});



