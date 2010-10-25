/* Questo script di base non fa altro che cambiare il valore della
  proprietˆ css background-color dell'elemento #content  */

$(document).ready(function() {
    $('li').draggable({
        'opacity': 0.8
    });
    $('#trash').droppable({
        tolerance: 'pointer',
        over: function(ev, ui) {
                       $(ui.draggable).addClass('trashable');
                },
        out: function(ev, ui) {
                       $(ui.draggable).removeClass('trashable');
                },

        drop: function(ev, ui){
            $(ui.draggable).remove();
        }
    });
});
