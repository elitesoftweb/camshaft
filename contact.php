<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Code to execute if the request method is POST

     $Category = $_POST['option[]'];
     $name = $_POST['from-name-1905037708'];
     $mesg = $_POST['message-1367934766'];
     $email = $_POST['from-email-1289283638'];

    //  $to="Dylan.George10@gmail.com";
   
    $to = "info@camshaftgroup.com";
    // $to = "alideveloperno1@gmail.com";
            
	$subject="Contact Form Submit";
		
		$message ="";
		$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
		$message .="<tr><td><strong>Name:<strong></td><td>".$name."</td></tr>";
		$message .="<tr><td><strong>E-Mail:</strong></td><td>".$email."</td></tr>";
		// $message="<tr><td><strong>Subject:</strong></td><td>".$subject."</td></tr>";
		$message .="<tr><td><strong>Message:</strong></td><td>".$mesg."</td></tr>";

	 $headers = "From: info@camshaftgroup.com \r\n";
    $headers .= "Reply-To: info@camshaftgroup.com\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


		if (mail($to, $subject, $message, $headers)) {
		echo "email sent";
	}else{
		echo"<script>alert('mail not sent!')</script";
	}
} else {
    
}

?>