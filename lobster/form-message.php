<?php
$fio = $_POST['fio'];
$tel = $_POST['tel'];
$event = $_POST['event'];
$quant = $_POST['quant'];

$fio = htmlspecialchars($fio);
$tel = htmlspecialchars($tel);
$event = htmlspecialchars($event);
$quant = htmlspecialchars($quant);

$fio = urldecode($fio);
$tel = urldecode($tel);
$event = urldecode($event);
$quant = urldecode($quant);

$fio = trim($fio);
$tel = trim($tel);
$event = trim($event);
$quant = trim($quant);

if (mail("lobsterspb@mail.ru", "Заказ кейтеринга", "\r\n ФИО: ".$fio."\r\n Телефон: ".$tel."\r\n Мероприятие: ".$event. "\r\n Количество человек: ".$quant ,"From: sanchez.bubnoff@yandex.ru \r\n"))
 {
    header ("Location: /");
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>