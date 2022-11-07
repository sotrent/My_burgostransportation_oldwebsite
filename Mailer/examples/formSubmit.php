<?
session_start();
include ("conectar.php");
if($_GET["accion"]=="2548"){
echo "AKI";

$nom=$_POST['nom'];
$nom2=$_POST['nom2'];
$mail=$_POST['mail'];
$tel=$_POST['tel'];
$adul=$_POST['adults'];
$nin=$_POST['childs'];

$diallega=$_POST['fechallega'];
$horallega=$_POST['horallega'];


$aero=$_POST['airline'];
$vuelo=$_POST['vuelo'];
$diaida=$_POST['fechaida'];
$horaida=$_POST['horaida'];
$aero2=$_POST['aidairline'];
$vuelo2=$_POST['vueloida'];

$destino=$_POST['destin'];



$total=$_POST['total'];
$tipo=$_POST['tipon'];
$zona=$_POST['zona'];



echo $nom." / ".$nom2." / ".$mail." / ".$tel." / ".$adul." / ".$nin." / ".$diallega." / ".$horallega." / ".$aero." / ".$vuelo." / ".$diaida." / ".$horaida." / ".$aero2." / ".$vuelo2." / ".$destino." / ".$total." / ".$tipo." / ".$zona;




}


if($_GET["accion"]=="6548"){
$mail=$_POST['mail'];
$com=$_POST['comment'];
$fecha=date("Y-m-d");
mysql_query("INSERT INTO  `comentarios`(`indice`, `comentario`, `mail`, `aprobado`, `fecha`) values('','$com','$mail',0,'$fecha')") or die(mysql_error());
mysql_close();

$loc="Location: comments.php?msg=1";
header ($loc);
exit;


}


if($_POST["accion"]=="64688432818651268548"){


$nom=$_POST['nom']." ".$_POST['nom2'];
$imail=$_POST['mail'];
$mensajin=$_POST['mensaje'];
/*
$mensa="<html><head></head><body><table width='600' height='450' align='center'><tr><td colspan='4' valign='top'><img src='http://www.burgostrasportation.com/recursos/mail_header.png' ></td></tr><tr><td rowspan='5' style='width: 21px'><td><b>Notificacion de Contacto:</b></td></tr><tr><td>La persona de nombre ".$nom." ha solicitado contacto. </td></tr><tr><td style='height: 30px'>Su correo electronico es: ".$imail.".</td></tr><tr><td>El mensaje que envio es:      <b>-".$mensajin."-<b></td></tr><tr><td></td></tr><tr><td colspan='4' valign='bottom'><img src='www.burgostrasportation.com/recursos/mail_footer.png' ></td></tr></table></body></html>";
//echo $mensa;
$para="rsotor@gmail.com";
$titulo='Contact';
$mensajemm=$mensa;
$cabeceras='From: admin@burgostransportation.com'."\r\n";
$cabeceras.="MIME-Version: 1.0\r\n";
$cabeceras.="Content-Type: text/html; charset=UTF-8\r\n";  
 //   'X-Mailer: PHP/' . phpversion();;
mail($para, $titulo, $mensajemm, $cabeceras);
//echo $para." / ".$mensajemm;
*/
$fecha=date("Y-m-d");
mysql_query("INSERT INTO  `contacto`(`indice`, `nombre`, `mail`, `mensaje`, `fecha`) values('','$nom','$imail','$mensajin','$fecha')") or die(mysql_error());
mysql_close();
echo "<script> location.href='index.php';</script>";
}

echo $_POST["accion"];
/*
if($_POST["accion"]=="act"){
$nom=$_POST['nom']." ".$_POST['nom2'];
$mail=$_POST['mail'];

$tel=$_POST['tel'];

$cues=$_POST['cuestions'];

$act=$_POST['acti'];

$fecha=date("Y-m-d");
mysql_query("INSERT INTO  `actividades`(`indice`, `nombre`, `mail`, `tel`, `cues`, `actividad`, `fecha`) VALUES ('','$nom','$mail','$tel','$cues','$act','$fecha')") or die(mysql_error());
mysql_close();
echo "<script> location.href='index.php';</script>";
}



*/














?>