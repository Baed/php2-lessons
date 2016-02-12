<?php

require __DIR__ . '/autoload.php';
$action = isset($_REQUEST['action'])?$_REQUEST['action']:'Index';

$controller = new \App\Controllers\Admin();
if ($controller->existsAction($action)){
    $controller->action($action);
} else {
    header('HTTP/1.0 404 not found');
    echo "404";
    die();
}
