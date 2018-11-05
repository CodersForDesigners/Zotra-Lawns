<?php

/*
 *
 * This script handles the form submission.
 * 	Shoots a mail off to Judas.
 *
 */

ini_set( "display_errors", 1 );
ini_set( "error_reporting", E_ALL );

header( 'Content-Type: application/json' );

require_once __DIR__ . '/../inc/mailer.php';

$name = $_POST[ 'name' ];
$email = $_POST[ 'email' ];
$phoneNumber = $_POST[ 'phoneNumber' ];

$subject = 'Zotra.com | Floorplans from ' . $name;
$message = <<<EOT
<br>
Name: $name
<br>
Email: $email
<br>
Phone: $phoneNumber
<br>
EOT;


Mailer\sendMessage( [
	'name' => 'sanjay',
	'email' => 'info@zotra.in',
	'subject' => $subject,
	'message' => $message
] );

echo json_encode( [
	'message' => 'Mail sent.'
] );
exit;
