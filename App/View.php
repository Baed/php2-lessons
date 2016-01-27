<?php

namespace App;


class View
{
    public function __construct($template, $objects)
    {
        include __DIR__. '/Views/' . $template . '.html';
    }
}