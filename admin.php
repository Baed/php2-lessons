<?php

require __DIR__ . '/autoload.php';

$op = $_REQUEST['op'];
switch($op){
    default:
        $news = \App\Models\News::findAll();
        $html = new \App\View('admin_main', $news);
        break;
}
