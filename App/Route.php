<?php
namespace App;

class Route 
{
	public $controller;
	public $action;

	function __construct($data)
	{
		var_dump($data);
		$this->controller = $data['controller'];
		$this->action = $data['action'];
	}

}