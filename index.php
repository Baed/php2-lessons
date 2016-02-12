<?php

require __DIR__ . '/autoload.php';

$action = "Index";
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
if ($path == 'index.php'){
	$controller_path = '\\App\\Controllers\\' . $_GET['ctrl'];
	$action = isset($_GET['action'])?$_GET['action']:"Index";
	if (!class_exists($controller_path)){
			header('HTTP/1.0 404 not found');
			echo "404";
			die();
	}
} else {
	$path_array = explode('/',$path);
	$controller_path = '\\App\\Controllers\\' . implode('\\', $path_array);
	if (!class_exists($controller_path)){
		$action = array_pop($path_array);
		$controller_path = '\\App\\Controllers\\' . implode('\\', $path_array);
		if (!class_exists($controller_path)){
			header('HTTP/1.0 404 not found');
			echo "404";
			die();
		}
	}
}
$controller = new $controller_path();
if (!$controller->existsAction($action)){
		header('HTTP/1.0 404 not found');
		echo "404";
		die();
}

$controller->action($action);
