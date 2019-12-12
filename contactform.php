<?php
$Firstname= $_POST['First name'];
$Lastname= $_POST['Last name'];
$Subject= $_POST['Subject'];
$visitor_email=$POST['email'];
$message= $_POST['message'];


$email_from = 'shinxkmg@gmail.com';
$email_subject="New form submission";
$email_body = "user First name: $Firstname.\n".
              "user Last name: $lastname.\n".
              "user Subject: $Subject.\n".
"user email: $visitor_email.\n".
"user Message: $message.\n";

$to = "thefeimao.ng@gmail.com";
$headers = "from: $email_from \r\n";
$headers .="reply-to $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location: index.html");

?>