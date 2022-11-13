<?php
    $name = $_GET['name'];
    $surname = $_GET['surname'];
	$phone = $_GET['phone'];
    $email = $_GET['email'];
    $text = $_GET['text'];

	$to = "b.u.b.form.processing@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
    Фамилия: $surname /n
    Телефон: $phone /n
    Почта: $email /n
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $to ");

?>

<p>Привет, форма отправлена</p>
