<?php
	
	$email = $_POST['email'];
	
	
	$site_owners_email = 'YOUR_MAIL'; // Replace this with your own email address
	$site_owners_name = 'YOUR_NAME'; // replace with your name
	
	
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
		$error['email'] = "Please enter a valid email address";	
	}
	
	
	
	if (!$error) {
		
		require_once('phpMailer/class.phpmailer.php');
		$mail = new PHPMailer();
		
		$mail->From = $email;
		$mail->Subject = 'Subscribe';
		$mail->AddAddress($site_owners_email, $site_owners_name);
		$mail->Body = "Email:  " . $email;
		
		// GMAIL STUFF
		
		$mail->Mailer = "smtp";
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587;
		$mail->SMTPSecure = "tls"; 
		
		$mail->SMTPAuth = true; // turn on SMTP authentication
		$mail->Username = "YOUR_MAIL"; // SMTP username
		$mail->Password = "YOUR_PASSWORD"; // SMTP password
		
		$mail->Send();
		
		echo "<div class='success'> Congratulations. We've received your email.</div>";
		
	} # end if no error
	else {

		$response .= (isset($error['email'])) ? "<div>" . $error['email'] . "</div> \n" : null;		
		echo $response;
	} # end if there was an error sending

?>