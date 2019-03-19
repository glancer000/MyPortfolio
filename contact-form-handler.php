<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_form = 'glancer000@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n"<div class="">
                    "User Email: $visitor_email.\n"<div class="">
                        "User Message: $message.\n";

    $to = "contactgregtucker@gmail.com";

    $headers = "From: $email_form \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>