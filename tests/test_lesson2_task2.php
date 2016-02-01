<?php
require __DIR__ . '/index.php';

$user = new \App\Models\User();
$user->email = 'newemail@example.com';
$user->name = 'Жемчугов Евлампий';
echo "<p>Данные пользователя</p>";
var_dump($user);
$user->insert();
echo "<p>Проверяем id</p>";
var_dump($user);