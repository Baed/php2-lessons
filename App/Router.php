<?php
namespace App;
use \App\Exceptions;

class Router 
{
	use \App\Singleton;

	const DEFAULT_ACTION = 'Index';
	private $path;
	private $args = [];

	public static function startPageController()
	{
		return '\\App\\Controllers\\News';
	}
	public static function startPageAction()
	{
		return 'Index';
	}

	public static function parseUrl($url)
	{
		$path = trim(parse_url($url, PHP_URL_PATH), '/');
		parse_str(parse_url($url, PHP_URL_QUERY), $args);
		switch ($path) {
			case '':
				$controller = self::startPageController();
				$action = self::startPageAction();
				break;
			
			case 'index.php':
				$controller = '\\App\\Controllers\\' . args['ctrl'];
				$action = $args['action'];
				break;

			default:
				$path_array = explode('/',$path);
				$controller = '\\App\\Controllers\\' . implode('\\', $path_array);
				$action = self::DEFAULT_ACTION;
				if (!class_exists($controller)){
					$action = array_pop($path_array);
					$controller = '\\App\\Controllers\\' . implode('\\', $path_array);
				}
		}

		if (!class_exists($controller)){
			throw new Exceptions\RouteException('Контроллер ' . $controller . ' не найден');
		} elseif (!$controller::existsAction($action)){
			throw new Exceptions\RouteException('В контроллере ' . $controller . ' не найден метод ' . $action);
		} else {
			return new Route([
				'controller' => $controller,
				'action' => $action
			]);
		}

	}
}