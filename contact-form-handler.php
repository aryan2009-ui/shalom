<?php
  $name = $_POST['name'];
  $visitor_email = $POST['email'];
  $message = $_POST['message'];


  $email_from = 'aaryan140905@gmail.com';
  $email_subject = "New Mail From Shalom";
  $email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n";
                "User Message: $message.\n";

  $to = "aaryan140905@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers = "Reply-To: $visitor_email \r\n";
  mail($to,$email-subject,$email-body,$headers);
  header("Location: contact.html");

?>