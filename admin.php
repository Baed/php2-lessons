<?php

require __DIR__ . '/autoload.php';

$op = $_REQUEST['op'];
switch($op){

    case 'add':
        $article = new \App\Models\News();
        $article->title = $_REQUEST['title'];
        $article->intro_text = $_REQUEST['intro_text'];
        $article->full_text = $_REQUEST['full_text'];
        $article->author = 1;
        $article->created_at = date('Y-m-d H:i:s');
        $article->save();
        $html = new \App\View('admin_redirect', array('message'=>'Новость добавлена'));
        break;

    case 'save':
        $article = \App\Models\News::findById($_REQUEST['id']);
        $article->title = $_REQUEST['title'];
        $article->intro_text = $_REQUEST['intro_text'];
        $article->full_text = $_REQUEST['full_text'];
        $article->save();
        $html = new \App\View('admin_redirect', array('message'=>'Новость изменена'));
        break;

    case 'delete':
        \App\Models\News::findById($_REQUEST['id'])->delete();
        $html = new \App\View('admin_redirect', array('message'=>'Новость удалена'));
        break;

    case 'edit':
        $article = \App\Models\News::findById($_REQUEST['id']);
        $html = new \App\View('admin_edit', $article);
        break;

    default:
        $news = \App\Models\News::findAll();
        $html = new \App\View('admin_main', $news);
        break;
}
