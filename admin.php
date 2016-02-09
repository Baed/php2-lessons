<?php

require __DIR__ . '/autoload.php';

$op = $_REQUEST['op'];

$view = new \App\View();
$view->title = 'Админка сайта';


switch($op){

    case 'add':
        $article = new \App\Models\News();
        $article->title = $_REQUEST['title'];
        $article->intro_text = $_REQUEST['intro_text'];
        $article->full_text = $_REQUEST['full_text'];
        $article->author_id = 1;
        $article->created_at = date('Y-m-d H:i:s');
        $article->save();
        $view->message = "Новость добавлена";
        $view->display(__DIR__ . '/App/Views/admin_redirect.php');
        break;

    case 'save':
        $article = \App\Models\News::findById($_REQUEST['id']);
        $article->title = $_REQUEST['title'];
        $article->intro_text = $_REQUEST['intro_text'];
        $article->full_text = $_REQUEST['full_text'];
        $article->save();
        $view->message = "Новость обновлена";
        $view->display(__DIR__ . '/App/Views/admin_redirect.php');
        break;

    case 'delete':
        \App\Models\News::findById($_REQUEST['id'])->delete();
        $view->message = "Новость удалена";
        $view->display(__DIR__ . '/App/Views/admin_redirect.php');
        break;

    case 'edit':
        $view->article = \App\Models\News::findById($_REQUEST['id']);
        $view->display(__DIR__ . '/App/Views/admin_edit.php');
        break;

    default:
        $view->articles = \App\Models\News::findAll();
        $view->display(__DIR__ . '/App/Views/admin_main.php');
        break;
}
