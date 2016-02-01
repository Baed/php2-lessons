<?php

require __DIR__ . '/autoload.php';

$op = $_REQUEST['op'];
switch($op){

    case 'add':
        $article = new \App\Models\News();
        $article->title = $_REQUEST['title'];
        $article->intro_text = $_REQUEST['intro_text'];
        $article->full_text = $_REQUEST['intro_text'];
        $article->author = 1;
        $article->created_at = date('Y-m-d H:i:s');
        $article->save();
        $html = new \App\View('admin_redirect', array('message'=>'Новость добавлена'));
        break;

    default:
        $news = \App\Models\News::findAll();
        $html = new \App\View('admin_main', $news);
        break;
}
