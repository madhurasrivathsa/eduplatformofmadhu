<?php
$name = $_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$email_from='bsmadhurabs@gmail.com'
$email_subject='New From Submission';
$email_body="UserName:$name.\n".
            "UserEmail:$visitor_email.\n".
            "Subject:$subject.\n".
            "User Message:$message .\n";
$to='madhurasrivathsa@gmail.com';
$headers="From:$email_from\r\n";
$headers .="Reply-To:$visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");


?>