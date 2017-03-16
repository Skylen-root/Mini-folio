<?php

$recepient = "vovalensky@hotmail.com";
$sitename = "Landing";

$name = trim($_POST["name"]);
$mail = trim($_POST["mail"]);
$text = trim($_POST["message"]);
$message = "Ім'я: $name \nЕлектронна адреса: $mail \nПовідомлення: $text";

$pagetitle = "Нове повідомлення з \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>