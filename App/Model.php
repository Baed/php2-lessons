<?php
/**
 * Created by PhpStorm.
 * User: Phil
 * Date: 26.01.2016
 * Time: 21:41
 */

namespace App;

class Model
{

    const TABLE = '';

    public static function findAll()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }

}