<?php

/**
 *	we use the following versions of PHPMailer's files
 *
 *		class.smtp.php
 *			1ec37ad4c2f634935a864c6814ec4783d44f305f
 *		class.phpmailer.php
 *			8717a79565b2c0ed67f851d70e1949febdf3b226
 *
 */

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

if ( count( get_included_files() ) < 2 ) {
	die( "direct access denied." );
}

require 'class-phpmailer.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
// $mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
// $mail->Username = "google@lazaro.in";
$mail->Username = "noreply@lazaro.in";

//Password to use for SMTP authentication
// $mail->Password = "t34m,l4z4r0";
$mail->Password = "";

//Set who the message is to be sent from
$mail->setFrom('noreply@lazaro.in', 'lazario');

//Set an alternative reply-to address
// $mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress( $email, '' );

//Set the subject line
$mail->Subject = 'Website Form Enquiry';

$mail->msgHTML( $message );

// send the message, check for errors
if ( ! $mail->send() ) {
	$response[ "status" ] = false;
	$response[ "message" ] = "there was an auror :: \n" . $mail->ErrorInfo;
} else {
	$response[ "status" ] = true;
	$response[ "message" ] = "posted mail.";
}

?>
