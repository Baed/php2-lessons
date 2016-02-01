<?php
require __DIR__ . '/index.php';

$user = \App\Models\User::findById($_REQUEST['id']);
echo "<p>Данные пользователя</p>";
var_dump($user);
$user->email = $_REQUEST['email'];
$user->update();
echo "<p>Меняем email</p>";
var_dump($user);