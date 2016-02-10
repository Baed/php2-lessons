<?php
namespace App;

abstract class Controller 
{
    protected $view;
    public function __construct()
    {
        $this->view = new View();
    }
    public function action($action)
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName();
    }

}