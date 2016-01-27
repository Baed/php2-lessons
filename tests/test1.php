<?php

require __DIR__ . '/../autoload.php';
require __DIR__ . '/index.php';

$db = new \App\Db();
$users = $db->query('SELECT * FROM users', '\App\Models\User', $_REQUEST);
var_dump($users);
