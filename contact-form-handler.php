<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_form = 'admin@hameedibrh.com';
$email_subject = 'Someone has contacted you!';
$email_body = "User Name: $name. \n".
               "User Email: $visitor_email. \n".
               "User mesaage: $message. \n";

               $to="hameedibrh@gmail.com";
               $headers = "Form: $email_form \r\n";
               $headers .= "Reply-To: $visitor_email \r\n";
               mail($to,$email_subject,$email_body,$headers);
               header("Location: index.html");

               ?> 
