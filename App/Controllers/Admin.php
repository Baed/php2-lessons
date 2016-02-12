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
        $id = (int)$_REQUEST['id'];
        $this->view->title .= ' Редактирование новости.';
        $this->view->article = \App\Models\News::findById($id);
        $this->view->display(__DIR__ . '/../Views/admin_edit.php');
    }
    protected function actionDelete()
    {
        $id = (int)$_REQUEST['id'];
        \App\Models\News::findById($id)->delete();
        $this->view->message = "Новость удалена";
        $this->view->display(__DIR__ . '/../Views/admin_redirect.php');

    }
    protected function actionSave()
    {
        $id = (int)$_REQUEST['id'];
        $article = \App\Models\News::findById($id);
        $article->title = $_REQUEST['title'];
        $article->intro_text = $_REQUEST['intro_text'];
        $article->full_text = $_REQUEST['full_text'];
        $article->save();
        $this->view->message = "Новость обновлена";
        $this->view->display(__DIR__ . '/../Views/admin_redirect.php');

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
        $this->view->message = "Новость добавлена";
        $this->view->display(__DIR__ . '/../Views/admin_redirect.php');

    }
}