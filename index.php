<?php

require __DIR__ . '/autoload.php';

$view = new \App\View();
$view->title = 'Мой крутой сайт!';
$view->articles = \App\Models\News::getLatest(3);

// добавлено только для теста. по уму нужно было вынести в класс View 
if (!isset($view->charset)) {
	$view->charset = "UTF-8";
}

$view->display(__DIR__ . '/App/Views/index.php');