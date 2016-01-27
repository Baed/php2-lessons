<?php

require __DIR__ . '/autoload.php';

$latest_news = \App\Models\News::getLatestNews();

$html = new \App\View('index', $latest_news);
