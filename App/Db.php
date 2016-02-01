<?php


namespace App;

class Db
{

    use Singleton;

    protected $dbh;

    protected function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');

    }

    public function execute($sql, $substitutions = array())
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($substitutions);
        return $res;
    }

    public function query($sql, $class, $substitutions = array())
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($substitutions);
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }

    public function query_one_element($sql, $class, $substitutions = array())
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($substitutions);
        return $sth->fetchObject($class);
    }

    public function getLastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
}