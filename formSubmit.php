<?
session_start();
include ("conectar.php");
if($_GET["area"]=="csh"){
$cod=$_GET['code'];
$cad="UPDATE `reservacion` SET `metodo_pago`='Cash' Where `cod`='".$cod."'";

mysql_query($cad) or die(mysql_error());

mysql_close();
echo "<script> location.href='index.php?msg=1';</script>";


}

if($_GET["accion"]=="2548"){
echo "AKI";

$nom=$_POST['nom'];
$nom2=$_POST['nom2'];

$l1=substr($nom,0,1);
$l2=substr($nom2,0,1);

$nom=$nom." ".$nom2;
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

$l3=substr($destino,0,3);

$total=$_POST['total'];
$tipo=$_POST['tipon'];
$zona=$_POST['zona'];

if($tipo=="Round Trip"){ $clasfi=2;  }else{ $clasfi=1;  }

$fp = fopen("folios.msh","r");
$folios = fgets($fp);
fclose($fp); 
$folios=$folios+1;
$fp = fopen("folios.msh","w+");
fwrite($fp, $folios);
fclose($fp);


$folios=$folios."-".$clasfi.$l1.$l2."-".$l3;

?>
<html><head></head><body><table width='600' height='450' align='center'><tr><td colspan='4' valign='top'><img src='http://burgostransportation.com/recursos/mail_header.png' ></td></tr><tr><td rowspan='5' style='width: 21px'><td><b>Notificacion de Reservacion:</b></td></tr><tr><td>La persona de nombre ".$nom." ha reservado. </td></tr><tr><td style='height: 30px'>Su correo electronico es: ".$imail.".</td></tr><tr><td>El mensaje que envio es:      <b>-".$mensajin."-<b></td></tr><tr><td></td></tr><tr><td colspan='4' valign='bottom'><img src='http://burgostransportation.com/recursos/mail_footer.png' ></td></tr></table></body></html>
<?





/*
$mensa="<html><head></head><body><table width='600' height='450' align='center'><tr><td colspan='4' valign='top'><img src='http://burgostransportation.com/recursos/mail_header.png' ></td></tr><tr><td rowspan='5' style='width: 21px'><td><b>Notificacion de Reservacion:</b></td></tr><tr><td>La persona de nombre ".$nom." ha reservado. </td></tr><tr><td style='height: 30px'>Su correo electronico es: ".$imail.".</td></tr><tr><td>El mensaje que envio es:      <b>-".$mensajin."-<b></td></tr><tr><td></td></tr><tr><td colspan='4' valign='bottom'><img src='http://burgostransportation.com/recursos/mail_footer.png' ></td></tr></table></body></html>";
*/
//Titulo

$mensa="<html><head></head><body><table width='600' height='450' align='center'><tr><td colspan='6' valign='top'><img src='http://burgostransportation.com/recursos/mail_header.png' ></td></tr><tr><td colspan='6' align='center'><b>RESERVACION</b></td></tr><tr><td width='50px' rowspan='18'></td><td width='50px' height='20px'></td><td width='180px'></td><td  width='60px'></td><td  width='210px'></td><td rowspan='18' width='50px'></td></tr><tr><td height='10px'></td></tr><tr><td>Folio:</td><td><b>".$folios."</b></td><td >Total:</td><td ><b>".$total."</b></td></tr><tr><td height='10px'></td></tr><tr><td>Reserva:</td><td colspan='3'><b>".$nom."</b></td></tr><tr><td height='10px'></td></tr><tr><td>Tel:</td><td><b>".$tel."</b></td><td>Email:</td><td> <b>".$mail."</b></td></tr><tr><td height='30px'></td></tr><tr><td>Zona:</td><td><b>".$zona."</b></td><td>Destino:</td><td><b>".$destino."</b></td></tr><tr><td height='10px'></td></tr><tr><td>Tipo:</td><td><b>".$tipo."</b></td><td>Pasaje:</td><td><b>A:".$adul."&emsp;&emsp;N:".$nin."</b></td></tr><tr><td height='30px'></td></tr><tr><td>Llegada</td><td><b>".$diallega." - ".$horallega."</b></td><td>Partida:</td><td><b>".$diaida." - ".$horaida."</b></td></tr><tr><td height='10px'></td></tr><tr><td>Aerolinea:</td><td><b>".$aero."</b></td><td>Aerolinea:</td><td><b>".$aero2."<b></td></tr><tr><td height='10px'></td></tr><tr><td>Vuelo:</td><td><b>".$vuelo."</b></td><td>Vuelo:</td><td><b>".$vuelo2."</b></td></tr><tr><td height='10px'></td></tr><tr><td colspan='6' valign='bottom'><img src='http://burgostransportation.com/recursos/mail_footer.png' ></td></tr></table></body></html>";
$titulo = "RESERVACION";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Burgos Transportation Services < tu_dirección_email >\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail("info@burgostransportation.com",$titulo,$mensa,$headers);

if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}








$fecha=date("Y-m-d");
mysql_query("INSERT INTO   `reservacion`(`indice`,`cod`, `nombre`, `mail`, `tel`, `adultos`, `infantes`, `llegada`, `hora_llegada`, `salida`, `hora_salida`, `aerolinea`, `vuelo`, `aerolinea2`, `vuelo2`, `destino`, `zona`, `tipo`, `total`, `fecha_registro`,`est_pago`) VALUES ('','$folios','$nom','$mail','$tel','$adul','$nin','$diallega','$horallega','$diaida','$horaida','$aero','$vuelo','$aero2','$vuelo2','$destino','$zona','$tipo','$total','$fecha','Abierto')") or die(mysql_error());
mysql_close();
echo "<script> location.href='pagos.php?tipo=".$clasfi."&zona=".$zona."&folios=".$folios."';</script>";


echo $nom." / ".$nom2." / ".$mail." / ".$tel." / ".$adul." / ".$nin." / ".$diallega." / ".$horallega." / ".$aero." / ".$vuelo." / ".$diaida." / ".$horaida." / ".$aero2." / ".$vuelo2." / ".$destino." / ".$total." / ".$tipo." / ".$zona;




}


if($_GET["accion"]=="6548"){
$nom=$_POST['name'];
$mail=$_POST['mail'];
$com=$_POST['comment'];
$fecha=date("Y-m-d");
if($mail!=""){
mysql_query("INSERT INTO  `comentarios`(`indice`,`nombre`, `comentario`, `mail`, `aprobado`, `fecha`) values('','$nom','$com','$mail',0,'$fecha')") or die(mysql_error());
mysql_close();
}
$loc="Location: comments.php?msg=1";
header ($loc);
exit;


}


if($_POST["accion"]=="64688432818651268548"){

$nom=$_POST['nom']." ".$_POST['nom2'];
$imail=$_POST['mail'];
$mensajin=$_POST['mensaje'];

$mensa="<html><head></head><body><table width='600' height='450' align='center'><tr><td colspan='4' valign='top'><img src='http://burgostransportation.com/recursos/mail_header.png' ></td></tr><tr><td rowspan='5' style='width: 21px'><td><b>Notificacion de Contacto:</b></td></tr><tr><td>La persona de nombre ".$nom." ha solicitado contacto. </td></tr><tr><td style='height: 30px'>Su correo electronico es: ".$imail.".</td></tr><tr><td>El mensaje que envio es:      <b>-".$mensajin."-<b></td></tr><tr><td></td></tr><tr><td colspan='4' valign='bottom'><img src='http://burgostransportation.com/recursos/mail_footer.png' ></td></tr></table></body></html>";

//Titulo
$titulo = "Solicitud de Contacto";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Burgos Transportation Services < tu_dirección_email >\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail("info@burgostransportation.com",$titulo,$mensa,$headers);
if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}





$fecha=date("Y-m-d");
mysql_query("INSERT INTO  `contacto`(`indice`, `nombre`, `mail`, `mensaje`, `fecha`) values('','$nom','$imail','$mensajin','$fecha')") or die(mysql_error());
mysql_close();
echo "<script> location.href='index.php';</script>";
}



if($_POST["accion"]=="act"){
$nom=$_POST['nom']." ".$_POST['nom2'];
$mail=$_POST['mail'];

$tel=$_POST['tel'];

$cues=$_POST['cuestions'];

$act=$_POST['acti'];

$mensa="<html><head></head><body><table width='600' height='450' align='center'><tr><td colspan='4' valign='top'><img src='http://burgostransportation.com/recursos/mail_header.png' ></td></tr><tr><td rowspan='5' style='width: 21px'><td><b>Notificacion de Actividades:</b></td></tr><tr><td>La persona de nombre <b>".$nom."<b> ha solicitado informacion sobre la actividad <b> ".$act." <b> </td></tr><tr><td style='height: 30px'>Su correo electronico es: ".$mail.".</td></tr><tr><td style='height: 30px'>Su telefono es: <b>".$tel."<b>.</td></tr><tr><td>El mensaje que envio es:      <b>-".$cues."-<b></td></tr><tr><td></td></tr><tr><td colspan='4' valign='bottom'><img src='http://burgostransportation.com/recursos/mail_footer.png' ></td></tr></table></body></html>";

//Titulo
$titulo = "Solicitud de Actividades";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Burgos Transportation Services < tu_dirección_email >\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail("info@burgostransportation.com",$titulo,$mensa,$headers);
if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}






$fecha=date("Y-m-d");
mysql_query("INSERT INTO  `actividades`(`indice`, `nombre`, `mail`, `tel`, `cues`, `actividad`, `fecha`) VALUES ('','$nom','$mail','$tel','$cues','$act','$fecha')") or die(mysql_error());
mysql_close();
echo "<script> location.href='index.php?msg=1';</script>";
}

?>