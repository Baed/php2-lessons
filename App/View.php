<?php

namespace App;


class View
{
    public function __construct($template, $object)
    {
        include __DIR__. '/Views/' . $template . '.html';
    }
}