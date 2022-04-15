<?php
  $name = $_Post['name'];
  $visitor_email = $_Post['email'];
  $message = $_POST['message']
  
  $email_from = 'rkentg20@gmail.com'

  $email_subject = "New form Submission"

  $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                      "User Message: $message.\n";


        $to = "kentgregorio@outlook.com";


        $headers = "From: $email_from \r\n";

        $headers .= "Reply-To: $visitor_email \r\n";

        mail($to,$email_subject,$email_body,$headers);

        header("Location: Portfolio.html");

?>
