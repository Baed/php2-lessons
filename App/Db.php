<?php


namespace App;

class Db
{

    use Singleton;

    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
        $this->dbh->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false );
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


}