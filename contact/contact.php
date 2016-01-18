<?php 
	
	$name = $_REQUEST[ 'contact-name' ];
	$email = $_REQUEST[ 'contact-email' ];
	$subject = $_REQUEST[ 'contact-subject' ];
	$message = $_REQUEST[ 'contact-message' ];
	$mail_subject = $subject . "( Customer Contact )";
	$message = "Your Name: ".$name." || Email: ".$email." || Subject: ".$subject." || Message: ".$message;
	
	/* Replace YOUR_MAIL With Your Mail Address inside '' */
	if ( mail( 'efwethueringen@gmail.com', $mail_subject, $message, "From:" . $email ) ) {
		echo "Terima kasih loh <strong>$name</strong> ,kamu luar biasa!!!";
	} else {
		echo "Error in sending message !!! Please try again";
	}
	
 ?>