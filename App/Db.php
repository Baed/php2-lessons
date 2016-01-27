<?php


namespace App;

class Db
{

    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
    }

    public function execute($sql, $substitutions = array())
    {
        $sth = $this->dbh->prepare($sql . $this->getWhereDefinition($substitutions), $substitutions);
        $res = $sth->execute($substitutions);
        return $res;
    }

    public function query($sql, $class, $substitutions = array())
    {
        $sth = $this->dbh->prepare($sql . $this->getWhereDefinition($substitutions), $substitutions);
        $res = $sth->execute($substitutions);
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }

    private function getWhereDefinition($substitutions = array())
    {
        $where_definition = '';
        if ($substitutions){
            $where_definition = ' WHERE ';
            foreach ($substitutions as $row=>$value) {
                $where_definition .= $row . '=:' . $row . " AND ";
            }
            $where_definition = substr($where_definition, 0, -5);
        }
        return $where_definition;
    }

}