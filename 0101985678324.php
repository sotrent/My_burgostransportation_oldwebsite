<?php
// Varios destinatarios
//$para  = 'sistemas@ca.com' . ', '; // atenciÃƒÂ³n a la coma

echo "Cargado...";

//$mensa="<html><head></head><body><table width='600' height='400' align='center' background='http://www.panel.plpimport.com/email.png' ><tr><td rowspan='9' width='100' > <td align='center' height='100px' valign='middle'><br/><B>Compra Autorizada</B></td></tr><tr><td height='10px'></td></tr><tr><td><span style='float:left'><B>Folio:</B> ".$_GET[fol]."</span>&emsp;&emsp;<B>Articulo:</B> ".$_GET[art]."<span style='float:right'></span></td></tr><tr><td height='10px'></td></tr><tr><td><span style='float:left'><B>Cant:</B> ".$_GET[cant]."&emsp;&emsp;&emsp; <B> Precio:</B> ".$_GET[price]."</span></td></tr><tr><td height='10px'></td></tr><tr><td> <B>Solicita:</B> ".$_GET[sol]."</td></tr><tr><td height='10px'></td></tr></table></body></html>";

$mensa="<html><head></head><body><table width='600' height='450' align='center'><tr><td colspan='4' valign='top'><img src='www.plpimport.com/recursos/mail_header.png' ></td></tr><tr><td rowspan='5' style='width: 21px'><td><b>Estimado Cliente:</b></td></tr><tr><td>Agradecemos su preferencia, por tal nos complace informarle que, </td></tr><tr><td style='height: 30px'>se ha realizado recepcion de mercancia, la cual, ya se ha registrado en nuestro sistema.</td></tr><tr><td>Se le han asignado los siguientes folios:      <b>-".$_GET['ents']."-<b></td></tr><tr><td>El detallado del mismo, y el seguimiento en tiempo real, puede verificarse en,<b> <br>Area de Clientes</b>, dentro de nuestra pagina web.</td></tr><tr><td colspan='4' valign='bottom'><img src='www.plpimport.com/recursos/mail_footer.png' ></td></tr></table></body></html>";


$mensa="<html><head></head><body><table width='600' height='450' align='center'><tr><td colspan='4' valign='top'><img src='http://burgostransportation.com/recursos//mail_header.png' ></td></tr><tr><td rowspan='5' style='width: 21px'><td><b>Notificacion de Contacto:</b></td></tr><tr><td>La persona de nombre ".$nom." ha solicitado contacto. </td></tr><tr><td style='height: 30px'>Su correo electronico es: ".$imail.".</td></tr><tr><td>El mensaje que envio es:      <b>-".$mensajin."-<b></td></tr><tr><td></td></tr><tr><td colspan='4' valign='bottom'><img src='http://burgostransportation.com/recursos/mail_footer.png' ></td></tr></table></body></html>";

$para      ="rsr.sto@gmail.com";
$titulo    = 'Notificacion  de  Mercancia';
$mensaje   = $mensa;
$cabeceras = 'From: richard@sotrent.com' . "\r\n";
$cabeceras .= "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-Type: text/html; charset=UTF-8\r\n";  
 //   'X-Mailer: PHP/' . phpversion();;
//mail($para, $titulo, $mensaje, $cabeceras);




$mail = "Prueba de mensaje";
//Titulo
$titulo = "PRUEBA DE TITULO";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Burgos Transportation Services < tu_dirección_email >\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail("rsr.sto@gmail.com",$titulo,$mensaje,$headers);
if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}

/*
if (mail("rsr.sto@gmail.com", $titulo, "lo que sea", "From: &remitente")) {
    echo "Enviado...";

}
else {
   echo "No Enviado...";
}

*/
echo $para." / ".$mensaje;

?>