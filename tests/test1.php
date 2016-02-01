<?php
require __DIR__ . '/index.php';

$db = new \App\Db();
$where_definition = '';
    if ($_REQUEST){
        $where_definition = ' WHERE ';
        foreach ($_REQUEST as $row=>$value) {
            $where_definition .= $row . '=:' . $row . " AND ";
        }
        $where_definition = substr($where_definition, 0, -5);
    }
$users = $db->query('SELECT * FROM users' . $where_definition , '\App\Models\User', $_REQUEST);
var_dump($users);
