<?php
namespace App\Controllers;
use App\View, App\AdminController;
class Admin extends AdminController
{

    protected function beforeAction()
    {
    }
    protected function actionIndex()
    {
        $this->view->title .= ' Список новостей.';
        $this->view->articles = \App\Models\News::findAll();
        $this->view->display(__DIR__ . '/../Views/admin_main.php');
    }
    protected function actionEdit()
    {
        $id = (int)$_GET['id'];
        $this->view->title .= ' Редактирование новости.';
        $this->view->article = \App\Models\News::findById($id);
        $this->view->display(__DIR__ . '/../Views/admin_edit.php');
    }
    protected function actionDelete()
    {
        $id = (int)$_GET['id'];
        \App\Models\News::findById($id)->delete();
        $view->message = "Новость удалена";
        $view->display(__DIR__ . '/../Views/admin_redirect.php');

    }
    protected function actionSave()
    {
        $id = (int)$_GET['id'];
        $article = \App\Models\News::findById($id);
        $article->title = $_REQUEST['title'];
        $article->intro_text = $_REQUEST['intro_text'];
        $article->full_text = $_REQUEST['full_text'];
        $article->save();
        $view->message = "Новость обновлена";
        $view->display(__DIR__ . '/../Views/admin_redirect.php');

    }
    protected function actionAdd()
    {
        $article = new \App\Models\News();
        $article->title = $_REQUEST['title'];
        $article->intro_text = $_REQUEST['intro_text'];
        $article->full_text = $_REQUEST['full_text'];
        $article->author_id = 1;
        $article->created_at = date('Y-m-d H:i:s');
        $article->save();
        $view->message = "Новость добавлена";
        $view->display(__DIR__ . '/../Views/admin_redirect.php');

    }
}