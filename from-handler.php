<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['massage'];

$email_form = 'mdy00134@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name. \n".
                "User Email: $visitor_email. \n".
                    "Subject: $subject. \n".
                    "User Massage: . $massage\n".

$to = 'mdy982549@gmail.com';

$headers = " From: $email_form \r\n";

$headers .="Reply_To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header ("Location: contact.html")

?>