<?php

$sendTo = "paulstefanidis@mac.com";
$subject = "Viking Lounge Mastering Web Enquiry";

$headers = "From: " . $_POST["firstName"] ." ". $_POST["lastname"] . "<" . $_POST["email"] .">\r\n";
$headers .= "Reply-To: " . $_POST["email"] . "\r\n";
$headers .= "Return-path: " . $_POST["email"];

$message = $_POST["message"];

mail($sendTo, $subject, $message, $headers);

?>