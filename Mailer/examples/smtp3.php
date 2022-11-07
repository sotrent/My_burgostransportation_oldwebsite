<?php


/* ini_set("SMTP", "smtp.zoho.com");
    ini_set("sendmail_from", "admin@burgostransportation.com");

    $message = "The mail message was sent with the following mail setting:\r\nSMTP = aspmx.l.google.com\r\nsmtp_port = 25\r\nsendmail_from = YourMail@address.com";

    $headers = "From: admin@burgostransportation.com";


    mail("rsr.sto@gmail.com", "Testing", $message, $headers);
    echo "Check your email now....<BR/>";
    */
    
    $mensa="<html><head></head><body><table width='600' height='450' align='center'><tr><td colspan='4' valign='top'><img src='http://www.burgostrasportation.com/recursos/mail_header.png' ></td></tr><tr><td rowspan='5' style='width: 21px'><td><b>Notificacion de Contacto:</b></td></tr><tr><td>La persona de nombre ".$nom." ha solicitado contacto. </td></tr><tr><td style='height: 30px'>Su correo electronico es: ".$imail.".</td></tr><tr><td>El mensaje que envio es:      <b>-".$mensajin."-<b></td></tr><tr><td></td></tr><tr><td colspan='4' valign='bottom'><img src='www.burgostrasportation.com/recursos/mail_footer.png' ></td></tr></table></body></html>";
//echo $mensa;
$para="rsotor@gmail.com";
$titulo='Contact';
$mensajemm=$mensa;
$cabeceras='From: admin@burgostransportation.com'."\r\n";
$cabeceras.="MIME-Version: 1.0\r\n";
$cabeceras.="Content-Type: text/html; charset=UTF-8\r\n";  
 //   'X-Mailer: PHP/' . phpversion();;
mail($para, $titulo, $mensajemm, $cabeceras) or die(error_message);

   echo "Check your email now....<BR/>"; 
    
    
    
/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
/*
date_default_timezone_set('Etc/UTC');

require '../PHPMailerAutoload.php';

  $Mail = new PHPMailer();
  $Mail->IsSMTP(); // Use SMTP
  $Mail->Host        = "smtp.zoho.com"; // Sets SMTP server
  $Mail->SMTPDebug   = 2; // 2 to enable SMTP debug information
  $Mail->SMTPAuth    = TRUE; // enable SMTP authentication
  $Mail->SMTPSecure  = "tls"; //Secure conection
  $Mail->Port        = 587; // set the SMTP port
  $Mail->Username    = 'admin@burgostransportation.com'; // SMTP account username
  $Mail->Password    = 'sotrent.com*2016'; // SMTP account password
  $Mail->Priority    = 1; // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
  $Mail->CharSet     = 'iso-8859-1';
  $Mail->Encoding    = '8bit';
  $Mail->Subject     = 'Test Email Using Gmail';
  $Mail->ContentType = 'text/html; charset=utf-8\r\n';
  $Mail->From        = 'admin@burgostransportation.com';
  $Mail->FromName    = 'GMail Test';
  $Mail->WordWrap    = 900; // RFC 2822 Compliant for Max 998 characters per line

   
  $toEmail="rsr.sto@gmail.com";
  $Mail->AddAddress( 'to','rsr.sto@gmail.com','Richard Soto' ); // To:
  $Mail->isHTML( TRUE );
  $Mail->Body    = $MessageHTML;
  $Mail->AltBody = $MessageTEXT;
  $Mail->Send();
  $Mail->SmtpClose();

  if ( $Mail->IsError() ) { 
    echo "ERROR<br /><br />";
  }
  else {
    echo "OK<br /><br />";
  }
*/

?>
