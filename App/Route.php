<?php
namespace App;

class Route 
{
	const defaultAction = 'Index';
	protected $url;

	public function __construct()
	{
		$this->url = $_SERVER['REQUEST_URI'];
	}
	public function controllerName()
	{

	}
	public function actionName()
	{

	}
	public static function page404(){
		header('HTTP/1.0 404 not found');
		$view = new \App\View();
        $view->display(__DIR__ . '/Views/404.php');
        die();
    }
}