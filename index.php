<?php

require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();

$html = new \App\View('index', $users);
