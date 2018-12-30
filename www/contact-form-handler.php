<?php
	$email = $_Post['email']
	$message = $_Post['message'];

	$email_from = 'aminlimbada94@gmail.com';
	$email_subject = 'New Submission';	

	$emailBody = "";

	$to = "aminlimbada94@gmail.com";

	$headers = "From: email_from \r\n";

	$headers .=  "Reply-To: $email \r\n";

	mail($to, $email, $message, $headers);

	header("Location: index.html");
?>