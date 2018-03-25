<?php
	$name = $_POST['name'];
	$visitor_email=$_POST['email'];
	$message = $_POST['message'];


	$email_from = 'smayank.singh.1998@gmail.com';

	$email_subject ="New Form Submission";

	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
						"User Message:$message";

	$to = "smayank.singh.1998@gmail.com";
	
	$headers = "From: $email_form \r\n";

	$headers = "Replt-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: index.html");					

?>
