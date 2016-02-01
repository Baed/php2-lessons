<?php

require __DIR__ . '/autoload.php';

$latest_news = \App\Models\News::getLatest(3);

$html = new \App\View('index', $latest_news);
