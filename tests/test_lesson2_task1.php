<?php
require __DIR__ . '/index.php';

$config = \App\Config::instance();
var_export($config->data['db']);
