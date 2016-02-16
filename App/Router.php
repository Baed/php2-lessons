<?php
namespace App;

class Router 
{
	const DEFAULT_ACTION = 'Index';
	protected $path;
	protected $args = [];

	public static function startPageController()
	{
		return '\\App\\Controllers\\News';
	}
	public static function startPageAction()
	{
		return 'Index';
	}

	}
	public static function parseUrl($url)
	{
		self::path = trim(parse_url($url, PHP_URL_PATH), '/');
		parse_str(parse_url($url, PHP_URL_QUERY), self::args);
		switch (self::path) {
			case '':
				$controller = self::startPageController();
				$action = self::startPageAction();
				break;
			
			case 'index.php':
				$controller = '\\App\\Controllers\\' . self::args['ctrl'];
				$action = self::args['action'];
				break;

			default:
				$path_array = explode('/',self::path);
				$controller = '\\App\\Controllers\\' . implode('\\', $path_array);
				$action = self::DEFAULT_ACTION;
				if (!class_exists($controller)){
					$action = array_pop($path_array);
					$controller = '\\App\\Controllers\\' . implode('\\', $path_array);
				}
		}

		if (!class_exists($controller)){
			throw new RouterException('Контроллер ' . $controller . ' не найден');
		} elseif (!$controller::existAction($action))){
			throw new RouterException('В контроллере ' . $controller . ' не найден метод ' . $action);
		} else return new Route([
				$controller,
				$action
		]);

	}
