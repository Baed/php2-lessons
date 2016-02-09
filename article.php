<?php

require __DIR__ . '/autoload.php';

$article = \App\Models\News::findById($_REQUEST['id']);

$html = new \App\View('article', $article);

$view = new \App\View();
$view->title = 'Мой крутой сайт!';
$view->article = \App\Models\News::findById($_REQUEST['id']);
$view->display(__DIR__ . '/App/Views/article.php');