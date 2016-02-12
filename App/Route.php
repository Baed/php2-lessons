<?php
namespace App;

class Route 
{
	const DEFAULT_ACTION = 'Index';
	protected $url;
	protected $path;
	protected $args = [];

	public function __construct($url)
	{
		$this->url = $url;
		$this->path = trim(parse_url($this->url, PHP_URL_PATH), '/');
		parse_str(parse_url($this->url, PHP_URL_QUERY), $this->args);

	}
	public function controllerName()
	{
		if ($this->path == '' && class_exists($this::startPageController)){
			return $this::startPageController();
		}
		if ($this->path == 'index.php' && class_exists('\\App\\Controllers\\' . $this->args['ctrl'])){
			return '\\App\\Controllers\\' . $this->args['ctrl'];
		}
		

		
	}
	public function actionName()
	{
		if ($this->path == ''){
			return $this::startPageAction();
		}
		if ($this->path == 'index.php'){

		}
	}


	public static function startPageController()
	{
		return '\\App\\Controllers\\News';
	}
	public static function startPageAction()
	{
		return 'Index';
	}
	public static function page404(){
		header('HTTP/1.0 404 not found');
		$view = new \App\View();
        $view->display(__DIR__ . '/Views/404.php');
        die();
    }
}