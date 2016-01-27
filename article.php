<?php

require __DIR__ . '/autoload.php';

$article = \App\Models\News::findById($_REQUEST['id']);

$html = new \App\View('article', $article);