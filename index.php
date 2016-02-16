<?php

require __DIR__ . '/autoload.php';

//$route = new \App\Route('http://php2-lessons/News/One/');
//$controller = new App\Controllers\News();
var_dump(\App\Controllers\News::existsAction('One1'));
die();
$action = "Index";
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
if ($path == ''){
	$controller_path = '\\App\\Controllers\\News';
} elseif ($path == 'index.php'){
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
