<?php
require __DIR__ . '/index.php';

$users = \App\Models\User::findById($_REQUEST['id']);
var_dump($users);