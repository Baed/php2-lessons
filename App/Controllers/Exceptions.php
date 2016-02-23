<?php
namespace App\Controllers;

use App\View, App\Controller;
class Exceptions extends Controller
{

    protected function beforeAction()
    {
        // mail to admin
        // write to log
    }
    protected function actionError()
    {
        $this->view->title = 'Неизвестная ошибка';
        $this->view->display(__DIR__ . '/../Views/exception.php');
    }

    protected function actionErrorDB()
    {
        $this->view->title = 'Ошибка базы данных';
        $this->view->display(__DIR__ . '/../Views/exception.php');
    }

    protected function actionErrorRouter()
    {
        $this->view->title = 'Ошибка роутинга';
        $this->view->display(__DIR__ . '/../Views/exception.php');
    }

}