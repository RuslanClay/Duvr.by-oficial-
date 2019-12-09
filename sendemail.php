<?php

header('Content-type: text/html; charset=windows-1251');

$email_admin = 'glinistyr@mail.ru';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$message .= "\r\n";
$message .= "\r\n";
$message .= "---\r\n";
$message .= isset($name) ? $name . "\r\n" : "";
$message .= isset($email) ? "Эл. почта: " . $email . "\r\n" : "";
$message .= isset($phone) ? "Тел.: " . $phone . "\r\n" : "";
			
@mail($email_admin, 'Сообщение, отправленное c сайта duvr.by', $message, "From: ".$email);

?>
