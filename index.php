<?php

require __DIR__ . '/autoload.php';

$view = new \App\View();
$view->title = 'Мой крутой сайт!';
$view->articles = \App\Models\News::getLatest(3);
$view->display(__DIR__ . '/App/Views/index.php');