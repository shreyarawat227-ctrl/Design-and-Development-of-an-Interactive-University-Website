<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_from='file.000webhost.com';

$email_subject = 'new submission';
$email_body = "Name:$name".
"user email:$visitor_email".
"subject:$subject".
"user message: $message";

$to = 'muskanshahi@gmail.com';

$headers = "from:$email_from";


mail($to,$email_subject,$email_body,$headers)


?>