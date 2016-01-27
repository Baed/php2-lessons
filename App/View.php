<?php

namespace App;


class View
{
    public function __construct($template, $class)
    {
        include __DIR__. '/Views/' . $template . '.html';
    }
}