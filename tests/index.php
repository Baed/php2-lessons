<?php

require __DIR__ . '/../autoload.php';


$db = new \App\Db();
echo '<a href="index.php">Выбрать всех</a><br />';
echo '<a href="index.php?id=1">Выбрать с id=1</a><br />';
echo '<a href="index.php?id=1&name=Иван Петров">Выбрать с id=1 и именем Иван Петров</a><br />';
echo '<a href="index.php?id=2&name=Иван Петров">Выбрать с id=2 и именем Иван Петров</a><br />';
echo '<a href="index.php?id=2&email=main@example.com">Выбрать с id=2 и email=main@example.com</a><br />';
echo '<p>Результат</p>';

$users = $db->query('SELECT * FROM users', '\App\Models\User', $_REQUEST);
var_dump($users);
