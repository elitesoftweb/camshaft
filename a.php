<?php

    // Retrieve form data
  

    // Set up email parameters
    $to = 'info@camshaftgroup.com'; // Replace with the recipient's email address
    $message = "ali";
    $subject = 'New message from website';
    $headers = "From: info@camshaftgroup.com \r\n";
    $headers .= "Reply-To: info@camshaftgroup.com\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo 'Email sent!';
    } else {
        // Error occurred while sending email
        echo 'Error sending email.';
    }

?>
