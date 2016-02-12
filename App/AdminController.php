<?php
namespace App;

abstract class AdminController 
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
        $this->view->title = "Админка. ";
    }
    public function action($action)
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName();
    }
    public function existsAction($action)
    {
        $methodName = 'action' . $action;
        return method_exists($this, $methodName);
    }
}