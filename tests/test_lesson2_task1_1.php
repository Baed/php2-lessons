<?php
require __DIR__ . '/index.php';

$config = \App\Config::instance();
$config->data['db']['host'] = '127.0.0.1';
var_dump($config->save());
