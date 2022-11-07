<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/sys_gen.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" type="text/css" media="all" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" media="all" href="css/avisos.css">
<link rel="stylesheet" type="text/css" media="all" href="css/leadmodal.css">
<link rel="stylesheet" type="text/css" media="all" href="css/submenu.css">
<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<script type="text/javascript" src="js/evnt_nu.js"></script>
<script type="text/javascript" src="js/noselect.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script>
function submenuon(){
$("#adminmsub").show('fast');
}

function submenuoff(){
$("#adminmsub").hide('fast');
}

function refresca_estado(q){
switch(q){
case 1:
$("#estado_actual").html("MOVIMIENTOS");
break;
case 2:
$("#estado_actual").html("Calendario");
break;
case 3:
$("#estado_actual").html("ENTRADAS");
break;
case 4:
$("#estado_actual").html("TRANSITO");
break;
case 5:
$("#estado_actual").html("INVENTARIOS");
break;
case 6:
$("#estado_actual").html("Reportes");
break;
case 7:
$("#estado_actual").html("USUARIOS");
break;


}


}
</script>
</head>
<body>
<? 
if(isset($_GET["mensaje"]))
{
if($_GET["mensaje"]==1){ $mensaje="Datos Insuficientes!"; }
if($_GET["mensaje"]==2){ $mensaje="Datos Registrados!"; }
if($_GET["mensaje"]==3){ $mensaje="El cliente fue actualizado!"; }
?>
<script>
<? echo "alert('".$mensaje."');"; ?>
</script>
<?  } ?>
   


<!--
<div style="position:fixed; bottom:0; left:0; width:100%; height:98%"></div>
 -->
<table width="100%" height="100%" cellspacing="0"  cellpadding="0">
<tr>
 <td class="barra_menu" style="height:20px;">
<!-- <span style="float:left" id="estado_actual"></span>
 <div class="barra_menu" style="height:20px; position:absolute; top:0; left:0; width:100%;">-->
    <div style="float:right; right:10px;" >
      <a href="reservas.php" target="panel" title="Reservaciones"  ><i class="fa fa-check fa-2x"></i>&nbsp;Reservaciones</a>&emsp;
      <a href="actividades.php" target="panel" title="Actividades"  ><i class="fa fa-bus fa-2x"></i>&nbsp;Actividades</a>&emsp;
      <a href="contactos.php" target="panel"title="Contactos" ><i class="fa fa-phone fa-2x"></i>&nbsp;Contactos</a>&emsp;
      <a href="comentarios.php" target="panel"title="Comentarios"><i class="fa fa-comments fa-2x"></i>&nbsp;Comentarios</a>&emsp;
      <a href="cal.php" target="panel" title="Calendario" ><i class="fa fa-calendar fa-2x"></i>&nbsp;Calendario</a>&emsp;
<!--      <a href="cotizador.php" target="panel"title="Calendario" onclick="javascript:refresca_estado(3);"><i class="fa fa-calculator fa-2x"></i>&nbsp;Cotizador</a>&emsp;
      <a href="gest_avisos.php" target="panel"  title="Avisos de Eventos" ><i class="fa fa-ticket fa-2x"></i>&nbsp;Avisos</a>&emsp;   -->
 
      </div>
<!--</div> -->

 </td> 
</tr>
<tr>
  <td align="center" valign="top">

<iframe src="reservas.php" name="panel"  width="100%" height="100%" frameborder=0 scrolling="auto" style="margin-left: 0px; margin-right: 0px; margin-top: 0px; margin-bottom: 0px;"></iframe>  

  
  </td>
</tr>
</table>



<div id="newtk" style="display:none;"><div id="tik"></div></div>
<div id="directorio" style="display:none;">
  <iframe src="calendario.php" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>
<div id="checador" style="display:none;">
    <table width="300" class="cajastart" align="center">
    <tr>
      <td class="titulotabla">Bitacora</td>
    </tr>
    <form name="bitacoraa" method="post" action="op_generales.php?accion=new">
    <tr>
      <td class="contenedorsearch" align="right"><input type="radio" name="selio" value="0" >Entrada&emsp;<input type="radio" name="selio" value="1" checked="true">Salida&emsp;</td>
    </tr>
    <tr>
      <td class="workarea"><div align="center"><br/><input name="obs" class="workareain" placeholder="Observacion" size="40" title="Si no existe dejar Vacio"><br/><br/><input type="submit" value="Registrar"><br/><br/></div></td>
    </tr>
    </form>
    </table>

</div>
<script type="text/javascript">
$(function(){
  $('#lanzador').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
});
$(function(){
  $('#lanzador2').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
  $('#lanzador3').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
  
});
</script>
</body>
</html>



