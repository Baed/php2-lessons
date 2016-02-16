<?php

require __DIR__ . '/autoload.php';
try {
var_dump(\App\Router::parseUrl('http://php2-lessons/News/One/1'));
} catch (\App\Exceptions\RouteException $e){
	echo "Ошибка роутинга - " . $e->getMessage();
}
die();

// TODO: дописать
$controller = new $controller_path();
if (!$controller->existsAction($action)){
		header('HTTP/1.0 404 not found');
		echo "404";
		die();
}

$controller->action($action);
