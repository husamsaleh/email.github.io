<?php
 $name = $_POST['name'];
 $visitor_email = $_POST['email'];
 $message = $_POST['message'];

 
 $email_form = 'husamsaleh.eng@gmail.com'
 
 $email_subject = "New Form Submission"
 
 $email_body = "User Name : $name.\n"."User Email: $visitor_email.\n"."User Message: $message .\n";
 
 #here you can add the email address want to be the reciver
 $to = "husamsaleh.eng@gmail.com";
 
 $headers = "Form: $email_form \r\n";
 
 $headers ."Reply-TO: $visitor_email \r\n;
 
 mail($to,$email_subject,$email_body,$headers);

 header("Location: mainemail.html");
?>