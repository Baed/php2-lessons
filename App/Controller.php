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
        if (!method_exists($this, $methodName)){
            return $this->page404;
        }
        $this->beforeAction();
        return $this->$methodName();
    }

    public function page404(){
        header('HTTP/1.0 404 not found');
        $this->view->display(__DIR__ . '/Views/404.php');
    }

}