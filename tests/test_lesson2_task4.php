<?php
require_once __DIR__ . '/index.php';

$user = new \App\Models\User();
$user->email = $_REQUEST['email'];
$user->name = $_REQUEST['name'];
$user->id = $_REQUEST['id'];
$user->save();