<?php
namespace App\Controllers;
use App\View, App\Controller;
class News extends Controller
{

    protected function beforeAction()
    {
    }
    protected function actionIndex()
    {
        $this->view->title .= ' Новости.';
        $this->view->articles = \App\Models\News::findAll();
        $this->view->display(__DIR__ . '/../Views/index.php');
    }
    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\News::findById($id);
        $this->view->title .= $this->view->article->title;
        $this->view->display(__DIR__ . '/../Views/article.php');
    }
}