<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Set who the message is to be sent from
$mail->setFrom('admin@burgostransportation.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('richard@sotrent.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('rsr.sto@gmail.com', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer mail() test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mensa="<html><head></head><body><table width='600' height='450' align='center'><tr><td colspan='4' valign='top'><img src='www.plpimport.com/recursos/mail_header.png' ></td></tr><tr><td rowspan='5' style='width: 21px'><td><b>Estimado Cliente:</b></td></tr><tr><td>Agradecemos su preferencia, por tal nos complace informarle que, </td></tr><tr><td style='height: 30px'>se ha realizado recepcion de mercancia, la cual, ya se ha registrado en nuestro sistema.</td></tr><tr><td>Se le han asignado los siguientes folios:      <b>-".$_GET['ents']."-<b></td></tr><tr><td>El detallado del mismo, y el seguimiento en tiempo real, puede verificarse en,<b> <br>Area de Clientes</b>, dentro de nuestra pagina web.</td></tr><tr><td colspan='4' valign='bottom'><img src='www.plpimport.com/recursos/mail_footer.png' ></td></tr></table></body></html>";


//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

$mail->msgHTML($mensa);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
