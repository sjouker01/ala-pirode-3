<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autload.php";



$mail = PHPMailer(true);

$mail->isSMPT();
$mail->SMPTAuth = true;

?>
