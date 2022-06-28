<?php
print_r($_POST);

$email = $_POST['email'];
$message = $_POST['message'];

$error = '';

if (trim($email) == '')
    $error = 'Введите Email';
else if (trim($message) == '')
    $error = 'Введите сообщение';
else if (strlen($message) < 20)
    $error = 'Минимальное количество символов - 20';


if ($error != '') {
    echo $error;
    exit;
}

$subject = "=?UTF-8?b?" . base64_encode("Тестовое сообщение") . "?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
mail("daniglyk2@icloud.com", $subject, $message, $headers);

header('Location: /contacts.php');
