<?php
DEFINE ('SITE_ROOT' , __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);

require __DIR__ . '/../autoload.php';
require __DIR__ . '/index.php';

$config = \App\Config::instance();
var_export($config->data['db']);
