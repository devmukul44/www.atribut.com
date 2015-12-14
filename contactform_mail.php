<?php
$headers = "Content-Type: text/html; charset=UTF-8";
$to = "info123@atribut.com";
$subject = "contact form email "."From: ".$_POST["email"];

$message .="Ваше имя: ".$_POST["contactName"]."\n";
$message .="Ваш email: ".$_POST["email"]."\n";
$message .="Текст вопроса: ".$_POST["comments"]."\n";

mail($to,$subject,$message,$headers);
header("location:index.html");
?>