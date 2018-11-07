<?php

/*
 *
 * This script handles the form submission.
 * 	Shoots a mail off to Judas.
 *
 */

ini_set( "display_errors", 0 );
ini_set( "error_reporting", E_ALL );

header( 'Content-Type: application/json' );

require_once __DIR__ . '/../inc/mailer.php';



// Extract all the data from the request
$name = $_POST[ 'name' ];
$email = $_POST[ 'email' ];
$phoneNumber = $_POST[ 'phoneNumber' ];

/*
 *
 * Store the data in a log file on the server
 *
 */
$enquiryData = [
	'when' => date( 'Y/m/d H:i:s' ),
	'name' => $name,
	'email' => $email,
	'phoneNumber' => $phoneNumber
];

$enquiryFilename = __DIR__ . '/../data/enquiries/enquiry-' . date( 'Ymd.His' ) . '.json';
@file_put_contents( $enquiryFilename, json_encode( $enquiryData, JSON_PRETTY_PRINT ) );



/*
 *
 * Mail the enquiry to Zotra
 *
 */
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

// Respond back to the browser
echo json_encode( [
	'message' => 'Mail sent.'
] );
exit;
