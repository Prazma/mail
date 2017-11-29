<?php

$to = $_POST['to'];
$from = $_POST['from'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$body = "$message ¥n¥n This is a message sent by a robot. Therefore, you can not reply.";

$header = "From: $from";

mail($to, $from, $subject, $body, $header);

echo "Message Sent!";



?>
