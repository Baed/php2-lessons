<?php

require __DIR__ . '/autoload.php';

$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$path_array = explode('/',$path);
$controller_path = '\\App\\Controllers\\' . implode('\\', $path_array);
$action = "Index";
if (!class_exists($controller_path)){
	$action = array_pop($path_array);
	$controller_path = '\\App\\Controllers\\' . implode('\\', $path_array);
	if (!class_exists($controller_path)){
	}
}
$controller = new $controller_path();
if (!$controller->existsAction($action)){
		header('HTTP/1.0 404 not found');
		echo "404";
		die();
}

$controller->action($action);
