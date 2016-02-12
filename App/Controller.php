<?php
namespace App;

abstract class Controller 
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
        $this->view->title = "PHP-2. ";
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
    public function page404(){
        header('HTTP/1.0 404 not found');
        $this->view->display(__DIR__ . '/Views/404.php');
    }
}