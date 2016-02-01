<?php
require_once __DIR__ . '/index.php';

$user = \App\Models\User::findById($_REQUEST['id']);
$user->delete();