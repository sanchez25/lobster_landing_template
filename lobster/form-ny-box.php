<?php
$fio = $_POST['fio'];
$tel = $_POST['tel'];
$sum = $_POST['sum'];

$fio = htmlspecialchars($fio);
$tel = htmlspecialchars($tel);
$sum = htmlspecialchars($sum);

$fio = urldecode($fio);
$tel = urldecode($tel);
$sum = urldecode($sum);

$fio = trim($fio);
$tel = trim($tel);
$sum = trim($sum);

if (mail("lobsterspb@mail.ru", "Заказ NEW YEAR BOX", "\r\n ФИО: ".$fio."\r\n Телефон: ".$tel."\r\n Количество: ".$sum ,"From: sanchez.bubnoff@yandex.ru \r\n"))
 {
    header ("Location: /");
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>