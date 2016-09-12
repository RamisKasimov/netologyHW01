<?php
ini_set('default_charset', 'UTF-8');

$user = 'Рамис';
$age = '28';
$mail = 'ramis-kasimov@rambler.ru';
$location = 'Дербент';
$about = 'Маркетолог, изучаю программирование';
?>
<html>
    <head>
		<title>Домашнее задание №1 пользователя <?= $user ?></title>
        <style>
            dl dt {
                float: left;
                width: 200px;
            }
        </style>
    </head>
    <body>
        <h1>Домашнее задание №1 пользователя <?= $user ?></h1>
        <dl>
            <dt>Имя</dt>
            <dd><?= $user ?></dd>
            
            <dt>Возраст</dt>
            <dd><?= $age ?></dd>
            
            <dt>Электронная почта</dt>
            <dd><?= $mail ?></dd>
            
            <dt>Город</dt>
            <dd><?= $location ?></dd>
            
            <dt>О себе</dt>
            <dd><?= $about ?></dd>
        </dl>
    </body>
</html>