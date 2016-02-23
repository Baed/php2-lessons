<?php

require __DIR__ . '/autoload.php';

try {
	$route = \App\Router::parseUrl($_SERVER['REQUEST_URI']);
} catch (\App\Exceptions\RouteException $e){
	$route = \App\Router::error('Router');
}


$controller = new $route->controller;
try {
	$controller->action($route->action);
} catch (\App\Exceptions\DBException $e){
	$route = \App\Router::error('DB');
	$controller = new $route->controller;
	$controller->action($route->action);
}