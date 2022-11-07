<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" media="all" href="css/sys_gen.css">  
<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome-min.css" type="text/css">
<link rel="stylesheet" type="text/css" media="all" href="css/jquery-ui.css">
<script type="text/javascript" src="js/noselect.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="css/leadmodal.css">
<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<script type="text/javascript" src="js/avisos.js"></script>
<script language="javascript">
function saveent(){
 document.getElementById("frment").action="ops_ent.php?accion=new";
 document.getElementById("frment").submit();
}

function showbultos(cont){
 var parametro= 'ent_csl_listbulto.php?ent='+cont;
 document.getElementById('vis_bultos').setAttribute('src',parametro);
 $("#lanzador2").trigger('click');
}

function showeditent(aeditar){ 
 var parametro= 'mod_ent_csl.php?opc=entrada&ent='+aeditar;

 document.getElementById('vis_edit').setAttribute('src',parametro);
 $("#lanzador4").trigger('click');
}


function showent(cont){

 var parametro= 'detalle_entrada.php?ent='+cont;
 document.getElementById('vis_entrada').setAttribute('src',parametro);
 $("#lanzador3").trigger('click');
}

</script>


<script>
function cierre(){
var op=confirm("Esta Seguro de Cerrar el Inventario?");
 if(op==true){
  var info="accion=cierreinv";    
  $.get('ops_inv.php',info);
  alert("Datos Enviados");
  //window.close()
 }
}
</script>

<script>
function selector(index){
 var modifq="'#obserid"+index+"'";
 alert(modifq);
 $(modifq).hide();
}
</script>
</head>
<body language="javascript" onload="showeditent(aeditar)" >
<div class="topmenu">&emsp;Entradas<span style="float:right"><a href="gest_notificaciones.php" title="Notificaciones" class="enlace_gen"><i class="fa fa-bell fa-2x"></i></a>&emsp;<a href="#newvent" id="lanzador" title="Nueva Entrada" class="enlace_gen"><i class="fa fa-plus-square fa-2x"></i></a>&emsp;</span></div>
<br/>
<?


require("conectar.php"); 

if($_GET['msg']!=""){ 
$msg="<script> alert('".$_GET["msg"]."') </script>";
echo $msg;
}



if(isset($_GET['opc'])){


//OPC CON VALOR

}else{ 
?>

  <br/>
<table width="95%" height="95%" align="center" class="tablafon">
  <?
      $result=mysql_query("SELECT count(*) as total from inventarios");
      $data=mysql_fetch_assoc($result);
      $ent=$data['total'];
      $i=0; $j=1; $q=0;
      
      if(isset($_GET['lin'])){
        $linki=$_GET['lin'];
      }else{
        $linki=0;
      }
      //echo "ent=".$ent." Linki=".$linki;
      
      $cad=$cad."&emsp;<a href='listado.php'>".Inicio."</a>&emsp;";
      
      
      for($i;$i<$ent;$i++){
        $i=$i+29;
        $q=$q+30;      
      
       // echo "<br/> i=".$i." j=".$j;
      
        if($q!=$linki){ 
             if($i<$ent){  $cad=$cad."&emsp;<a href='listado.php?lin=".$q."'>".$j."</a>&emsp;";  }
        }else{            
             $cad=$cad."&emsp;".$j."&emsp;";     
        }
      
        
        $j=$j+1;
      }
      //echo "cad=".$cad;
      
      
      include("conteos.php");
      
  
  ?>
<!--<tr >
  <td class="workareatitulo">ENTRADAS<div style="float:right;"><!--<a href="ops_exportar.php?accion=expo"><i class="fa fa-file-excel-o fa-lg" title="Exportar"></i></a>->&ensp;</div></td>
</tr>-->
<tr><td valign="top">
     <table width="100%" class="workarea">
     <tr>
        <td class="menumain" width="5%" style="height: 22px">Entrada
           <div style="display:none;">
              <a href="#showentradas" id="lanzador3">SHOW ENT</a>
              <a href="#showeditentradas" id="lanzador4">SHOW EDITENT</a>
           </div>
        
        </td>
        <td class="menumain" width="5%" style="height: 22px">Cotizacion</td>
        <td class="menumain" width="10%" style="height: 22px">Categoria</td>
        <td class="menumain" width="20%" style="height: 22px">Cliente</td>
        <td class="menumain" width="5%" style="height: 22px">Bultos<div style="display:none;"><a href="#showbultos" id="lanzador2">SHOW BULTOS</a></div></td>
        <td class="menumain" width="10%" style="height: 22px">Ubicacion</td>
        <td class="menumain" width="25%" style="height: 22px">Destino</td>       
        <td class="menumain" width="20%" style="height: 22px">Estatus</td>          
     </tr>
<? $consulta="SELECT * FROM entradas order by num_ent desc"; 
  $usuario_consulta = mysql_query($consulta) or die("No se pudo realizar la consulta a la Base de datos");
  $i=0; 
  $formato=0; 
while($resultado = mysql_fetch_array($usuario_consulta)) {  


  $lanza="lanzador".$i; 
  $direcciona="detalle_compra.php?index=".$resultado[indice];
  $bultea="javascript:showbultos('".$resultado[num_ent]."');";
  $entrea="javascript:showent('".$resultado[num_ent]."');";
  ?>
  
   <tr  <?  if($formato==0){?> class="renglonA" <? $formato=1; }else{ ?> class="renglonB" <? $formato=0; } ?>>
     <td title="<? echo $resultado[fecha_alta];?>" style="height: 22px"><a href="#" onclick="<? echo $entrea; ?>"><? echo $resultado[num_ent];?></a></td>
     <td style="height: 22px" ><? echo $resultado[cotizacion];?></td>
     <td style="height: 22px"><span style="float:left;"><? echo $resultado[categoria];?></span></td>
     <td style="height: 22px"><span style="float:left;"><? echo $resultado[cliente];?></span></td>
     <td style="height: 22px"><a href="#" onclick="<? echo $bultea; ?>"><? echo $resultado[bultos];?></a></td>     
     <td style="height: 22px"><? echo $resultado[ubicacion];?></td>     
    <!-- <td><? echo $resultado[estatus];?></td>     -->
     <td style="height: 22px"><span style="float:left;"><? echo $resultado[destino];?></span></td>     
     <td style="height: 22px"><span style="float:left;"><? echo $resultado[estatus];?></span></td>     
   </tr>
  
  
<? $i=$i+1;  } ?>
 </table> 
 </td>
 <!--<td valign="top">
   <iframe src="detalle_compra.php" name="detalle"  width="100%" height="100%" frameborder="0" scrolling="auto" style="margin-left: 0px; margin-right: 0px; margin-top: 0px; margin-bottom: 0px;"></iframe>
 </td>-->
</tr> 
<tr>
  <td class="workareacierre" colspan="2"></td>
</tr>
</table>

<? } ?>
  

<div id="newvent" style="display:none;">
  <iframe src="add_ent.php" name="agregador" style="border: 0" width="500" height="449" frameborder="0" scrolling="no"></iframe>
</div>
<div id="showbultos" style="display:none;">
  <iframe src="ent_csl_listbulto.php" id="vis_bultos" name="visor_bultos" style="border: 0" width="820" height="500" frameborder="0" scrolling="yes"></iframe>
</div>
<div id="showentradas" style="display:none;">
  <iframe src="detalle_entrada.php" id="vis_entrada" name="visor_entrada" style="border: 0" width="850" height="330" frameborder="0" scrolling="yes" onLoad="autoResize('vis_entrada');"></iframe>
</div>
<div id="showeditentradas" style="display:none;">
  <iframe src="mod_ent_csl.php?opc=entrada" id="vis_edit" name="visor_edit" style="border: 0" width="500" height="449" frameborder="0" scrolling="no"></iframe>
</div>


<script type="text/javascript">
$(function(){
  $('#lanzador').leanModal({ top: 90, overlay: 0.45, closeButton: ".hidemodal" });
  $('#lanzador2').leanModal({ top: 90, overlay: 0.45, closeButton: ".hidemodal" });
  $('#lanzador3').leanModal({ top: 90, overlay: 0.45, closeButton: ".hidemodal" });
  $('#lanzador4').leanModal({ top: 90, overlay: 0.45, closeButton: ".hidemodal" });
});


</script> 



<script>
$("#cot").keyup(function(){  this.value = (this.value + '').replace(/[^0-9^.]/g, ''); });
//$("#precio").keyup(function(){ this.value = (this.value + '').replace(/[^0-9^.]/g, ''); });                  
</script>

<? if(isset($_GET['editent'])){  echo '<script type="text/javascript">$(document).ready( function() { showeditent("'.$_GET['ent'].'");}); </script>'; } ?>
<? if(isset($_GET['showente'])){  echo '<script type="text/javascript">$(document).ready( function() { showent("'.$_GET['ent'].'");}); </script>'; } ?>


</body>

</html>


