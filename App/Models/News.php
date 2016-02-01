<?php

namespace App\Models;

use App\Model;

class News extends Model
{
    const TABLE = 'articles';

    public $author;
    public $title;
    public $intro_text;
    public $full_text;
    public $created_at;
    public $modifyed_at;

}