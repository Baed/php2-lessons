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

    public static function getLatestNews($substitution = array('order_by'=>'created_at DESC', 'limit'=>3))
    {
        $db = new \App\Db();
        $res = $db->query(
            'SELECT * FROM ' . self::TABLE
            . ' ORDER BY :order_by'
            . ' LIMIT 0,:limit',
            self::class,
            $substitution
        );

        if (count($res) == 0) {
            return false;
        }
        return $res;
    }
}