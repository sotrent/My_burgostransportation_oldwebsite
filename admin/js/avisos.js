function ejecuta(){ $("#avisador").show(); }

function ocultaviso(id,id_avis){
var palabra="#aviso_num"+id;
var palabra2="#emisor_num"+id;
var operacion="accion=oculta_aviso&id="+id_avis;
$(palabra).hide();
$(palabra2).hide();
$.get("op_avisos.php",operacion);
}


function ocultaviso2(id_avis2){
var operacion2="accion=oculta_aviso&id="+id_avis2;
$.get("op_avisos.php",operacion2);
alert("Marcado como Leido!");
}


$(function(){ $("#avisador").on('mouseleave', function(){$("#avisador").hide(); }); });