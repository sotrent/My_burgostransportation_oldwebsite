<?php
/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
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


?>
