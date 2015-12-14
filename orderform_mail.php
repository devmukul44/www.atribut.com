<?php
$headers = "Content-Type: text/html; charset=UTF-8";
$to = "info123@atribut.com";
$subject = "orderform email "."From: ".$_POST["email"];

$message .="Имя: ".$_POST["Firstname"]."\n";
$message .="Фамилия: ".$_POST["Lastname"]."\n";
$message .="Ваш Email: ".$_POST["email"]."\n";
$message .="Код купона: ".$_POST["dev1"]."\n";
$message .="Улица: ".$_POST["street"]."\n";
$message .="Город: ".$_POST["city"]."\n";
$message .="Телефон: ".$_POST["Country"]."\n";
$message .="Почтовый индекс: ".$_POST["postcode"]."\n\n";

$message .="ORDER: "."\n";

$message .="Российский Герб: ".$_POST["dev2"]."\n";
$dev2cost=38000*$_POST["dev2"];
$message .="Российский Герб_cost: ".$dev2cost."\n";

$message .="Фамильный вензель: ".$_POST["dev3"]."\n";
$dev3cost=45700*$_POST["dev3"];
$message .="Фамильный вензель_cost: ".$dev3cost."\n";

$message .="Родовой герб: ".$_POST["dev4"]."\n";
$dev4cost=48000*$_POST["dev4"];
$message .="Родовой герб_cost: ".$dev4cost."\n";

$total = ($dev2cost + $dev3cost + $dev4cost);
$message .="total cost: ".$total."\n";

mail($to,$subject,$message,$headers);
header("location:index.html");
?>