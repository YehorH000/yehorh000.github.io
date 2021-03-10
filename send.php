<?php

$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$fromMail = 'index.html';
$fromName = 'We have call.';
$emailTo = 'helloitsnotme@gmail.com';
$subject = 'Form of back call';
$subject = '=?utf-8?b?'.base64_encode($subject).'?=';
$headers = "Content-type : text/plain; charset=\"utf-8\"\r\n";
$headers .= "From: ".$fromName." <".$fromMail.">\r\n";

$body = "Name: $name \n Phone: $phone";

if(strlen($phone) > 0){
    $mail = mail($emailTo, $subject, $body, $headers, '-f', $fromMail);
    return;
}
?>