<?php

require __DIR__ . '/autoload.php';

$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$path_array = explode('/',$path);
$controller = '\\App\\Controllers\\' . implode('\\', $path_array);

if (class_exists($controller)){
	echo "Есть класс " . $controller;
} else {
	$action = array_pop($path_array);
	$controller = '\\App\\Controllers\\' . implode('\\', $path_array);
	if (class_exists($controller)){
		echo "Есть класс " . $controller . " c экшеном " . $action;
	} else {
		header('HTTP/1.0 404 not found');
		echo "404";
	}
}

/*
$controller = new $controller1();
//$action = $_GET['action'] ?: 'Index';
$controller->action($action);
*/