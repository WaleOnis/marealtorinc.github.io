<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$contactmessage = $_POST['Message'];

$to = 'jlemeisz@outlook.com';
$subject = 'New Message';
$from = 'noreply@mcrealtorinc.com';
$ip = $_SERVER['REMOTE_ADDR'];
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = "Name = " . $name . "\r\Email = " . $email . "\r\nSubject = " . $subject . "\r\nMessageSent = " . $contactmessage;
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo '<script>alert("Your message has been sent."); window.location.href = "index.html";</script>';
    exit(); // Stop further execution after displaying the alert
} else{
    echo 'Unable to send message. Please try again later.';
}

?>