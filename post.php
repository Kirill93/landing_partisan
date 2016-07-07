<?php
$name = trim($_POST['name']);
$tel = trim($_POST['tel']);
$message = trim($_POST['message']);
  $send = mail("partisan_sait@mail.ru", "Сообщение с сайта http://partisan54.ru/", "Имя: $name\nТелефон: $tel\nСообщение: $message\n");
  if ($send) {
    echo "Спасибо за Ваше обращение!";
  } else {
    echo "Ошибка!";
  }
?>
